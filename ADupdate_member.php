<?php 
$server = "localhost"; 
$user = "root";
 $password = "";
 $database = "library"; 
 mysql_connect($server,$user,$password)
 or die ("Connection Fails"); 

 mysql_select_db($database) or die ("Database Not Found");  
$query=mysql_query("UPDATE member SET Name = '$_POST[Name]', Email = '$_POST[Email]', Password = '$_POST[Password]', Branch = '$_POST[Branch]', Year = '$_POST[Year]', ContactNo = '$_POST[ContactNo]', Address = '$_POST[Address]' WHERE Mid = '$_POST[mid]'"); 


header ('location:ADview_member.php'); 
?>