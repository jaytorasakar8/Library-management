<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:member_login.php");
} else {
?>
<?php
	include 'conn.php';
	$issue_id=$_GET['Issue_id'];
	$mid=$_SESSION['mid'];
	$result=$mysqli->query("SELECT * FROM issuebook where Issue_id='$issue_id'");
	while($row=$result->fetch_assoc($result))
	{
	//insert into returnclaim table
     $issue_id=$row['Issue_id'];
	 $mid=$row['Mid'];
	 $name=$row['Name'];
	 $bid=$row['Bid'];
	 $bname=$row['Bname'];
	 $validreturndate=$row['validreturndate'];
	 }
	 $result=$mysqli->query("Insert into claimreturn(Issue_id,Mid,Name,Bid,Bname,validreturndate,returnclaim_date)
	 values('$issue_id','$mid','$name','$bid','$bname','$validreturndate',now())");

	header ('location:member.php'); 
?>
<?php

 }
 ?>  
			




