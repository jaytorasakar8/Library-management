<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>add_books</title>
	
	
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
				
				<h1 align="center" > <font color="#6CB5FF"><u>Add Books</u></font></H1>
	<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr><form name="form1" method="post" action="">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF" >
<tr>
<td width="78">Book Id</td>
<td width="6">:</td>
<td width="294"><input name="bid" type="text" ></td>
</tr>
<tr>
<td width="78">Book name</td>
<td width="6">:</td>
<td width="294"><input name="bname" type="text" ></td>
</tr>
<tr>
<td width="78">Subject</td>
<td width="6">:</td>
<td width="294"><input name="subject" type="text" ></td>
</tr>
<tr>
<td width="78">Author</td>
<td width="6">:</td>
<td width="294"><input name="author" type="text" ></td>
</tr>
<tr>
<td width="78">Availability (true or false)</td>
<td width="6">:</td>
<td width="294"><input name="availability" type="text" ></td>

</tr>
<tr>


</tr>
<tr>
<td>&nbsp;</td>


<td><input type="submit" name="Add" value="Add"><a href=""></td>
<td><font color="#6CB5FF"></font>
<input type="submit" name="Reset" value="Reset"><a href=""></td>
</tr>
</table>
</form>

<?php
if(isset($_POST["Add"])){

if(!empty($_POST['bname']) && !empty($_POST['bid']) ) 
	{
	$bname=$_POST['bname'];
	
	$subject=$_POST['subject'];
	$author=$_POST['author'];
	$availability=$_POST['availability'];
	$bid=$_POST['bid'];
	

	include 'conn.php';

	$query=$mysqli->query("SELECT * FROM book WHERE Bid='".$bid."'");
	$numrows=$query->num_rows;
		if($numrows==0)
		{
			$sql="INSERT INTO book(Bid,Bname,Subject,Author,Availability) VALUES('$bid','$bname','$subject','$author','$availability')";

			$result=$mysqli->query($sql);


			if($result){
			echo "Book Successfully Added";
			} else {
			echo "Failure!";
			}

		} 
			
		else {
			echo "That book already exists! Please try again with another.";
		}

	} else {
	echo "All fields are required!";
}
}
?>


</table>
				
				
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
