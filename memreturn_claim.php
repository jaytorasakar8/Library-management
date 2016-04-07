<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:member_login.php");
} else {
?>
<?php
	$con=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('library') or die("cannot select DB");
	$issue_id=$_GET['Issue_id'];
	$mid=$_SESSION['mid'];
	$result=mysql_query("SELECT * FROM issuebook where Issue_id='$issue_id'");
	while($row=mysql_fetch_assoc($result))
	{
	//insert into returnclaim table
     $issue_id=$row['Issue_id'];
	 $mid=$row['Mid'];
	 $name=$row['Name'];
	 $bid=$row['Bid'];
	 $bname=$row['Bname'];
	 $validreturndate=$row['validreturndate'];
	 }
	 $result=mysql_query("Insert into claimreturn(Issue_id,Mid,Name,Bid,Bname,validreturndate,returnclaim_date)
	 values('$issue_id','$mid','$name','$bid','$bname','$validreturndate',now())");

	header ('location:member.php'); 
?>
<?php

 }
 ?>  
			




