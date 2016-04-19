//this file is meant to incorporate any changes made to book details so as to keep the database up to date
<?php 
$server = "localhost"; 
$user = "root";
 $password = "";
 $database = "library"; 
 mysql_connect($server,$user,$password)
 or die ("Connection Fails"); 

 mysql_select_db($database) or die ("Database Not Found");  
$query=mysql_query("UPDATE book SET Bid = '$_POST[bid]', Bname = '$_POST[bname]', Subject = '$_POST[Subject]', Author = '$_POST[author]', Availability = '$_POST[availability]'  WHERE Bid = '$_POST[bid]'"); 


header ('location:ADview_book.php'); 
?>
