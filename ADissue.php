
<?php
	include 'conn.php';
	
	$request_id=$_GET['request_id'];
	$result=$mysqli->query("SELECT * FROM requestbook where Request_id=$request_id");
	$row = $result->fetch_array();
	$request_id=$row['Request_id'];
    $mid=$row['Mid'];
	$name=$row['Name'];
	$bid=$row['Bid'];
	$bname=$row['Bname'];
	
	//insert request record into issue table
	$sql=$mysqli->query("INSERT INTO issuebook(Request_id,Mid,Name,Bid,Bname,Issue_date,validreturndate)
	   VALUES('$request_id','$mid','$name','$bid','$bname',now(),ADDDATE(now(),8))");
     
	$result=$mysqli->query($sql);
	
	$sql4=$mysqli->query("update book set Availability='no' where Bid='$bid'");
	
	$query=$mysqli->query("select * from member where Mid='$mid'");
	while ($r=$query->fetch_array())
	{
		$book1=$r['Book1'];
	
	}
	
	
	
	if($book1==NULL)
	{
		$sql2=$mysqli->query("update member set Book1='$bid' where Mid='$mid'");
	}
	else
	{
		$sql3=$mysqli->query("update member set Book2='$bid' where Mid='$mid'");
	}
	
	
	
	//insert issue record into issuestore
	$sql=$mysqli->query("select * from issuebook where Request_id='$request_id'");
	
	while ($row=$sql->fetch_array())
	{
	$Issue_id=$row['Issue_id'];
    $mid=$row['Mid'];
	$name=$row['Name'];
	$bid=$row['Bid'];
	$bname=$row['Bname'];
	$sql=$mysqli->query("INSERT INTO issuestore(Issue_id,Mid,Name,Bid,Bname,Issue_date,validreturndate)
	   VALUES('$Issue_id','$mid','$name','$bid','$bname',now(),ADDDATE(now(),8))");
	}
	

	
	
	//delete request record
	$sql1=$mysqli->query("DELETE FROM requestbook WHERE Request_id='$request_id'"); 
    $result1=$mysqli->query($sql1);
header ('location:admin.php');







?>

