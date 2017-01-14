<?php 
include 'conn.php';
$mysqli->query("DELETE FROM book WHERE Bid='$_GET[bid]'"); 
header ('location:ADview_book.php'); 
?>