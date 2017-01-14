<?php
	// $con=mysql_connect('localhost','root','37890fhasd') or die(mysql_error());
	// mysql_select_db('library') or die("cannot select DB");
	$mysqli = new mysqli('localhost','root','37890fhasd','library');
	if($mysqli->connect_error)
	{
		die('Connection Error('.$mysqli->connect_errno.')'.$mysqli->connection_error);
	}


?>