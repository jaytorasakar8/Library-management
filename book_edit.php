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
				
				<?php
 include 'conn.php';
 
 $data = $mysqli->query("SELECT * FROM book WHERE Bid='$_GET[bid]'");
 $r=$data->fetch_array();
 
 echo "<h2>Edit Book</h2><hr> 
 <form method='POST' action='update_book.php'> 
 <table border='0'> 
 <tr> <td>Book ID : </td>
 <td><input type='text' name='bid' value='$r[Bid]'></td> </tr> 
 
 <tr> <td>Book Name : </td>
 <td><input type='text' name='bname' value='$r[Bname]'></td> </tr>
 
 <tr> <td>Subject : </td> <td><input type='text' name='subject' value='$r[Subject]'></td> 
 </tr> 
 
 <tr> <td>Author :</td> <td><input type='text' name='author' value='$r[Author]'></td> </tr>
 
 <tr> <td>Availability :</td> <td><input type='text' name='availability' value='$r[Availability]'></td> </tr>
 
 
 
 <tr> <td><input type='submit' value='Update'></td> 
 </tr> 
 
 </table>
 
 </form>"; 
 ?>
				
				
				
				
				
				
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
