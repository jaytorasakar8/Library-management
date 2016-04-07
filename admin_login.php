<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>Admin login</title>
	
	
	<link rel="stylesheet" type="text/css" href="screen.css" media="screen" />
</head>
<body>

<div id="header">
	<img src="logo.png" name="logo" />
	
	<p id="layoutdims"><marquee>Welcome to Online Library Management System</marquee></p>
</div>
<div class="colmask threecol">
	<div class="colmid">
		<div class="colleft">
			<div class="col1">
				<!-- Column 1 start -->
				
				<h1 align="center" > <font color="#369">ADMIN LOGIN</font></h1><br><br>
	<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="">
<td>
<table width="100%" border="0" cellpadding="8" cellspacing="3" bgcolor="#FFFFFF" >

<tr>
<td width="78"><B>Username</B></td>
<td width="6">:</td>
<td width="294"><input name="adusername" type="text" id="adusername"></td>
</tr>
<tr>
<td><b>Password</b></td>
<td>:</td>
<td><input name="adpassword" type="password" id="adpassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="submit" value="Login"></td>

</tr>
</table>
</td>
</form>
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['adusername']) && !empty($_POST['adpassword'])) {
	$user=$_POST['adusername'];
	$pass=$_POST['adpassword'];

	$con=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('library') or die("cannot select DB");

	$query=mysql_query("SELECT * FROM admin WHERE Email='".$user."' AND Password='".$pass."'");
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($query))
	{
	$dbusername=$row['Email'];
	$dbpassword=$row['Password'];
	$Name=$row['Name'];
	}

	if($user == $dbusername && $pass == $dbpassword)
	{
	session_start();
	$_SESSION['sess_user']=$Name;

	/* Redirect browser */
	header("Location: admin.php");
	}
	} else {
	echo "Invalid username or password!";
	}

} else {
	echo "All fields are required!";
}
}
?>





</tr>
</table><br><br><br><br><br><br><br>
				
				
				<!-- Column 1 end -->
			</div>
			<div class="col2">
				<!-- Column 2 start -->
				


				
				<!-- Column 2 end -->
			</div>
			<div class="col3">
				<!-- Column 3 start -->
					<div id="ads">
					
						
					
					</div>
				<!-- Column 3 end -->
			</div>
		</div>
	</div>
</div>
<div id="footer">
	
	
	
</div>

</body>
</html>
