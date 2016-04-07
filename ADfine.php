<?php


$result=mysql_query("SELECT * FROM returnstore where diff>0");
$no=1;
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
	$diff=$row['diff'];

 $sql=mysql_query("insert into fine_unpaid(Issue_id,Return_id,Bid,Mid,Name,Issue_date,Return_date,diff,Amount) 
   values($issue_id,$returnid,$bid,$mid,$mname,$issuedate,$returndate,$diff,'100')");
$no++;
	}








?>