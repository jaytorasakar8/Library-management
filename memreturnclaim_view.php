<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:member_login.php");
} else 
{
?>
<?php
	$con=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('library') or die("cannot select DB");
	
	$mid=$_SESSION['mid'];
	
	$result=mysql_query("SELECT * FROM issuebook where Mid='$mid'");
	
	
	
	 echo "<table border='1' align='center'> 
  <th>Issue ID</th>
  <th>Member Id</th> 
 <th>Member Name</th>
 <th>Book ID</th> 
 <th>Book Name</th> 
  <th>Issue Date </th> 
 
 
 
 <th>Action</th>";
 
 $no=1;
 while($r=mysql_fetch_assoc($result))
 { 
 echo "<tr>
 <td>$r[Issue_id]</td> 
 <td>$r[Mid]</td>
 <td>$r[Name]</td> 
 <td>$r[Bid]</td>
 <td>$r[Bname]</td>
 <td>$r[Issue_date]</td>
  
 
 <td><a href='memreturn_claim.php?Issue_id=$r[Issue_id]'>Return Request</a></td> 
 </tr>";
   $no++; 
 }
 echo "</table>"; 
	
	
?>
<?php
}
?>

