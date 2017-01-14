<html>
<head>
	<title>Issue Book</title>
	
	
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
  
	//check for request expiry  
	
	$data = $mysqli->query("SELECT * FROM requestbook");
	
	while ($r=$data->fetch_array())
	{
		$requestdate=new DateTime($r['requestdate']);
		$viewrequestdate=new DateTime(date('Y-m-d'));
		$diff=date_diff($requestdate,$viewrequestdate);
		$days=$diff->d;
		$sql=$mysqli->query("Update requestbook set requestexpirydays='$days'");
		$sql1=$mysqli->query("delete from requestbook where requestexpirydays>0");
	}
	
 
 
 
 
 //display requestbook table
 $data = mysql_query("SELECT * FROM requestbook"); 
   echo "<table border='1' align='center'> 
  <th>Request ID</th>
  <th>Member Id</th> 
 <th>Member Name</th>
 <th>Book ID</th> 
 <th>Book Name</th> 
  <th>Request date</th> 

 
 
 <th>Action</th>";
 

 while ($r=mysql_fetch_array($data))
 { 
 echo "<tr>
 <td>$r[Request_id]</td> 
 <td>$r[Mid]</td>
 <td>$r[Name]</td> 
 <td>$r[Bid]</td>
 <td>$r[Bname]</td>
 <td>$r[requestdate]</td>
 
 
 <td><a href='ADissue.php?request_id=$r[Request_id]'>Issue</a></td> 
 </tr>";
 
 }
 echo "</table>"; 
 ?>
				
				
				
				
				<br><br><br><br><br><br>
				
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
