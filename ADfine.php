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
				<br><br><br>

<?php
 include 'conn.php';
echo "<table border='1' align='center' cellpadding='5'> 
 <th>Issue_id </th>
 <th>Return_id </th>
 <th>Bid</th> 
 <th>Mid</th>
 <th>Name</th>
 <th>Issue_date</th>
 <th>Return_date</th>
 <th>diff</th>
 <th>Amount</th>
 <th>Action</th>";

$result=$mysqli->query("SELECT * FROM returnstore where diff>0");

$no=1;
	
	while ($row=$result->fetch_array())
	{
    $return_id=$row['Return_id'];
	$issue_id=$row['Issue_id'];
	$mid=$row['Mid'];
	$name=$row['Name'];
	$bid=$row['Bid'];
	$bname=$row['Bname'];
	$validreturndate=$row['validreturndate'];
    $returndate=$row['Return_date'];
	$diff=$row['diff'];


 

echo" <tr>
<td>$issue_id</td>
<td>$return_id</td>
<td>$bid</td>
<td>$mid</td>
<td>$name</td>
<td>$validreturndate</td>
<td>$returndate</td>
<td>$diff</td>
<td>'100'</td>
</tr>"
;
}
	








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
