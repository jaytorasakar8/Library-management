<?php 
include 'conn.php';
$mysqli->query("DELETE FROM member WHERE Mid='$_GET[mid]'"); 
header ('location:ADview_member.php'); 
?>