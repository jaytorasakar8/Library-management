/* this file will help students to update changes in  their personal information that might change like year the students are studying 
in changes so changes will be made to existing account without creating a new account each year*/
<?php 

include 'conn.php';
$query=$mysqli->query("UPDATE member SET Name = '$_POST[Name]', Mid = '$_POST[mid]', Email = '$_POST[Email]',  Branch = '$_POST[Branch]', Year = '$_POST[Year]', ContactNo = '$_POST[ContactNo]', Address = '$_POST[Address]' WHERE Mid = '$_POST[mid]'"); 


header ('location:member_details.php'); 

?>
