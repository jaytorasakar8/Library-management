<html>
<head>
	<title>View Book</title>
	
	
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
				<br><br><br>
				<?php 
include 'conn.php';
 
 $data = $mysqli->query("SELECT * FROM book"); 
   echo "<table border='1' align='center'> 
 <th>Book ID</th> 
 <th>Book Name</th> 
 
 <th>Subject</th> 
  <th>Author</th> 
 <th>Availability</th>
 
 
 <th>Action</th>";
 
 $no=1;
 while ($r=$data->fetch_array())
 { 
 echo "<tr>
 <td>$r[Bid]</td> 
 <td>$r[Bname]</td>
 <td>$r[Subject]</td> 
 <td>$r[Author]</td>
 <td>$r[Availability]</td>
  
 
 <td><a href='memrequest_books.php?bid=$r[Bid]'>Request</a></td> 
 </tr>";
   $no++; 
 }
 echo "</table>"; 
 ?>
				
				
				
				
				<br><br><br><br><br><br>
				
				<!-- Column 1 end -->
			</div>
			<div class="col2">
				<!-- Column 2 start -->
					<br><br>

					<a href="member.php" style="font-size:25px; background-color:transparent;text-decoration:none; color:#369; "><b>Home</b></a><br><br>
				
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
