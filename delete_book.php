<?php 
$server = "localhost"; 
$user = "root";
 $password = "";
 $database = "library"; 
 mysql_connect($server,$user,$password)
 or die ("Connection Fails"); 
 mysql_select_db($database) or die ("Database Not Found"); 
mysql_query("DELETE FROM book WHERE Bid='$_GET[bid]'"); 
header ('location:ADview_book.php'); 
?>