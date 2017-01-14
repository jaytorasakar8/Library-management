<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:member_login.php");
} else {
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>Member login</title>
	
	
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
					<h1 align="center" > <font color="#369"><u>Member Details</u></font></H1>
					<br><br>
				
<?php
include 'conn.php';
	
	$mid=$_SESSION['mid'];
	

$result = $mysqli->query("select * from member where Mid='".$mid."'");
while($row = $result->fetch_array())
{
 
?>
	<table cellpadding="5" cellspacing="1" border="1" align="center" width="300">
  <tr>
	<tr><th>Name:</th>
	
    <td><?php echo $row['Name']; ?>
	
	</tr>
	<tr>
	<th>RollNo:</th>
	</td><td><?php echo $row['Mid']; ?></td>
	</tr>
	<tr>
	<th>Email:</th>
	<td><?php echo $row['Email']; ?></td>
	</tr>
	<tr>
	<th>Branch:</th>
	<td><?php echo $row['Branch']; ?></td>
	</tr>
	
	<tr>
	<th>Year:</th>
	<td><?php echo $row['Year']; ?></td>
	</tr>
	
	<tr>
	<th>Contact No:</th>
	<td><?php echo $row['ContactNo']; ?></td>
	</tr>
	<tr>
	<th>Address:</th>
	<td><?php echo $row['Address']; ?></td>
	</tr>
	<tr>
	<td colspan="2" align="center"><b> <a href='memberEdit.php?mid=$r[Mid]'>EDIT DETAILS</a></b></td>
	
	
	</table>
<?php

 }
 ?>  
			





			
			
			
				
				
				<!-- Column 1 end -->
			</div>
			<div class="col2">
				<!-- Column 2 start -->

				<br><br>

				<a href="member.php" style="font-size:20px; background-color:transparent;text-decoration:none; color:#369; "><b>Home</b></a><br><br>
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
<?php
}
?>