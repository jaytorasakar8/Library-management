<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>member registration</title>
	
	
	<link rel="stylesheet" type="text/css" href="screen.css" media="screen" />
</head>
<body>

<div id="header">
	<img src="logo.png" name="logo" align="middle" />
	
	<p id="layoutdims"><marquee>Welcome to Online Library Management System</marquee></p>
</div>
<div class="colmask threecol">
	<div class="colmid">
		<div class="colleft">
			<div class="col1">
				<!-- Column 1 start -->
				
				<h1 align="center" > <font color="#369">MEMBER REGISTRATI0N</font></h1><br><br>
	<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF" >


<tr>
<td width="78"><B>Name</B></td>
<td width="6">:</td>
<td width="294"><input name="name" type="text"></td>
</tr>
<tr>
<td width="78"><B>Roll no</B></td>
<td width="6">:</td>
<td width="294"><input name="mid" type="text"></td>
</tr>
<tr>
<td width="78"><B>Email</B></td>
<td width="6">:</td>
<td width="294"><input name="email" type="email"></td>
</tr>
<tr>
<td><B>Password</B></td>
<td>:</td>
<td><input name="pass" type="password"></td>
</tr>
<tr>
<td><B>Branch</B></td>
<td>:</td>
<td><input name="branch" type="text"></td>
</tr>
<tr>
<td><B>Year</B></td>
<td>:</td>
<td><input name="year" type="text"></td>
</tr>
<tr>
<td width="78"><B>Contact no</B></td>
<td width="6">:</td>
<td width="294"><input name="contactno" type="tel"></td>
</tr>
<tr>
<td width="78"><B>Address</B></td>
<td width="6">:</td>
<td width="294"><textarea rows="4" cols="22" name="address" ></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>

<td><input type="submit" name="submit" value="Create"><a href=""></td>
<td><font color="#6CB5FF"></font>
<input type="submit" name="reset" value="Reset"><a href=""></td>
<td><font color="#6CB5FF"></font></td>


</table>
</td>
</form>
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['name']) && !empty($_POST['pass']) && !empty($_POST['mid']) && !empty($_POST['email']) && !empty($_POST['branch']) && !empty($_POST['year'])&& !empty($_POST['contactno']) && !empty($_POST['address'])) {
	$name=$_POST['name'];
	$mid=$_POST['mid'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$branch=$_POST['branch'];
	$year=$_POST['year'];
	$contact=$_POST['contactno'];
	$address=$_POST['address'];
	

	include 'conn.php';

	$query=$mysqli->query("SELECT * FROM member WHERE Mid='".$mid."'");
	$numrows=$query->num_rows;
	if($numrows==0)
	{
	$sql="INSERT INTO member(Name,Mid,Email,Password,Branch,Year,ContactNo,Address) VALUES('$name','$mid','$email','$pass','$branch','$year','$contact','$address')";

	$result=$mysqli->query($sql);


	} 
	else
	{
	echo "That username already exists! Please try again with another.";
	}

} 

	else
	{
		echo "All fields are required!";
	}
	header ('location:admin.php'); 
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
