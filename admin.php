<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:admin_login.php");
} else {
?>



<!DOCTYPE html>
<html>
<head>
	<title>Admin main page</title>
	
	
	<link rel="stylesheet" type="text/css" href="screen.css" media="screen" />
</head>
<body>

<div id="header">
	<img src="logo.png" name="logo" align="middle" />
	
	<p id="layoutdims"><marquee><h2>Welcome, <?=$_SESSION['sess_user'];?>! </h2></marquee></p>
</div>
<div class="colmask threecol">
	<div class="colmid">
		<div class="colleft">
			<div class="col1">
			
			
			
				<!-- Column 1 start -->
				
				<img src="library.jpg" width="100%" />
				
				
				
				<!-- Column 1 end -->
			</div>
			<div class="col2">
				<!-- Column 2 start -->
					<br>
					<h2><a href="logout.php" style="font-size:20px; background-color:transparent;text-decoration:none; color:#369; ">Logout</a></h2><br>
					<a href="add_member.php" style="font-size:20px; background-color:transparent;text-decoration:none; color:#369; "><b>Add Member</b></a><br><br>
					<a href="ADview_member.php" style="font-size:20px; background-color:transparent;text-decoration:none; color:#369; "><b>View Member</b></a><br><br>
					<a href="add_books.php" style="font-size:20px; background-color:transparent;text-decoration:none; color:#369; "><b>Add Book</b></a><br><br>
					<a href="ADview_book.php" style="font-size:20px; background-color:transparent;text-decoration:none; color:#369; "><b>View Book</b></a><br><br>
					<a href="ADissueview_book.php" style="font-size:20px; background-color:transparent;text-decoration:none; color:#369; "><b>Issue book</b></a><br><br>
					<a href="ADreturn_view.php" style="font-size:20px; background-color:transparent;text-decoration:none; color:#369; "><b>return book</b></a><br><br>
					<a href="ADfine.php" style="font-size:20px; background-color:transparent;text-decoration:none; color:#369; "><b>Fine</b></a>
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
