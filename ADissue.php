
<?php
	$con=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('library') or die("cannot select DB");
	
	$request_id=$_GET['request_id'];
	$result=mysql_query("SELECT * FROM requestbook where Request_id=$request_id");
	$row = mysql_fetch_array($result);
	$request_id=$row['Request_id'];
    $mid=$row['Mid'];
	$name=$row['Name'];
	$bid=$row['Bid'];
	$bname=$row['Bname'];
	
	//insert request record into issue table
	$sql=mysql_query("INSERT INTO issuebook(Request_id,Mid,Name,Bid,Bname,Issue_date,validreturndate)
	   VALUES('$request_id','$mid','$name','$bid','$bname',now(),ADDDATE(now(),8))");
     
	$result=mysql_query($sql);
	
	$sql4=mysql_query("update book set Availability='no' where Bid='$bid'");
	
	$query=mysql_query("select * from member where Mid='$mid'");
	while ($r=mysql_fetch_array($query))
	{
		$book1=$r['Book1'];
	
	}
	
	
	
	if($book1==NULL)
	{
		$sql2=mysql_query("update member set Book1='$bid' where Mid='$mid'");
	}
	else
	{
		$sql3=mysql_query("update member set Book2='$bid' where Mid='$mid'");
	}
	
	
	
	//insert issue record into issuestore
	$sql=mysql_query("select * from issuebook where Request_id='$request_id'");
	
	while ($row=mysql_fetch_array($sql))
	{
	$Issue_id=$row['Issue_id'];
    $mid=$row['Mid'];
	$name=$row['Name'];
	$bid=$row['Bid'];
	$bname=$row['Bname'];
	$sql=mysql_query("INSERT INTO issuestore(Issue_id,Mid,Name,Bid,Bname,Issue_date,validreturndate)
	   VALUES('$Issue_id','$mid','$name','$bid','$bname',now(),ADDDATE(now(),8))");
	}
	

	
	
	//delete request record
	$sql1=mysql_query("DELETE FROM requestbook WHERE Request_id='$request_id'"); 
    $result1=mysql_query($sql1);
header ('location:admin.php');







?>

