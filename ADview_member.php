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
				<br>
				<h2>Member Details</h2>
				<?php 
$server = "localhost"; 
$user = "root";
 $password = "";
 $database = "library"; 
 mysql_connect($server,$user,$password)
 or die ("Connection Fails"); 
 mysql_select_db($database) or die ("Database Not Found");
 $data = mysql_query("SELECT * FROM member"); 
 echo "<table border='1'> 
 <th>Name</th> 
 <th>Roll No:</th> 
 
 <th>Email:</th> 
 <th>Password:</th>
 <th>Branch:</th>  
 <th>Year:</th> 
 
 <th>Contact No:</th>
 <th>Address:</th>
 <th>Acction</th>";
 
 
 while ($r=mysql_fetch_array($data))
 { 
 echo "<tr>
 <td>$r[Name]</td> 
 <td>$r[Mid]</td>
 <td>$r[Email]</td> 
 <td>$r[Password]</td>
 <td>$r[Branch]</td>
  <td>$r[Year]</td>
   <td>$r[ContactNo]</td>
    <td>$r[Address]</td>
	
 
 
 <td><a href='ADmember_edit.php?mid=$r[Mid]'>Edit</a> | <a href='delete_data.php?mid=$r[Mid]'>Delete</a></td> 
 </tr>";
 }
 echo "</table>"; 
 ?>
				
				
				
				<!-- Column 1 end -->
			</div>
			<div class="col2">
				<!-- Column 2 start -->
					<br><br>

					<a href="admin.php" style="font-size:25px; background-color:transparent;text-decoration:none; color:#369; "><b>Home</b></a><br><br>
				
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
