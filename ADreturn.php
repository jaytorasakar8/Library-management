
<?php
	$con=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('library') or die("cannot select DB");
	
	$claim_return_id=$_GET['claim_return_id'];
	$result=mysql_query("SELECT * FROM claimreturn where claim_return_id='$claim_return_id'");
	
	
	
	while ($row=mysql_fetch_array($result))
	{
	$issue_id=$row['Issue_id'];
	$mid=$row['Mid'];
	$name=$row['Name'];
	$bid=$row['Bid'];
	$bname=$row['Bname'];
	$validreturndate=$row['validreturndate'];
	$validreturndate1=new DateTime($row['validreturndate']);
		$returndate=new DateTime(date('Y-m-d'));
		$diff=date_diff($returndate,$validreturndate1);
		$days=$diff->d;
	//insert requestclaim record into return table
	$sql=mysql_query("INSERT INTO returnbook(Issue_id,claim_return_id,Mid,Name,Bid,Bname,validreturndate,Return_date,diff)
	   VALUES('$issue_id','$claim_return_id','$mid','$name','$bid','$bname','$validreturndate',now(),'$days')");
     
	$result=mysql_query($sql);
	
     }
	 
	
	
	$sql2=mysql_query("update member set Book1=NULL where Mid='$mid'");
	
	$sql3=mysql_query("DELETE FROM claimreturn WHERE claim_return_id='$claim_return_id'"); 
	
	$sql4=mysql_query("update book set Availability='yes' where Bid='$bid'");
//inser into return store


$result=mysql_query("SELECT * FROM returnbook where claim_return_id='$claim_return_id'");
	while ($row=mysql_fetch_array($result))
	{
    $return_id=$row['Return_id'];
	$issue_id=$row['Issue_id'];
	$mid=$row['Mid'];
	$name=$row['Name'];
	$bid=$row['Bid'];
	$bname=$row['Bname'];
	$validreturndate=$row['validreturndate'];
    $returndate=$row['Return_date'];
	
	$sql=mysql_query("INSERT INTO returnstore(Return_id,Issue_id,Bid,Bname,Mid,Name,validreturndate,Return_date,diff)
	   VALUES('$return_id','$issue_id','$bid','$bname','$mid','$name','$validreturndate',now(),'$days')");
     
	$result=mysql_query($sql);
	
     }


//delete returnclaim record	 and return record
$sql1=mysql_query("DELETE FROM claimreturn WHERE claim_return_id='$claim_return_id'"); 
    $result1=mysql_query($sql1);

$sql1=mysql_query("DELETE FROM returnbook WHERE claim_return_id='$claim_return_id'"); 
    $result1=mysql_query($sql1);

$sql1=mysql_query("DELETE FROM issuebook WHERE Issue_id='$issue_id'"); 
    $result1=mysql_query($sql1);
	
	//create fine record


	header ('location:admin.php'); 



?>