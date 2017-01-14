<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>Admin register</title>
	
	
	<link rel="stylesheet" type="text/css" href="screen.css" media="screen" />
</head>
<body>

<div id="header">
	<img src="logo.png" name="logo" align="middle" />
	
	<p id="layoutdims"><marquee>Welcome to Online Library Management System</marquee></p>
</div>
<div class="colmask threecol">
	<div class="colmid">
		<div class="colleft">
			<div class="col1">
				<!-- Column 1 start -->
				<br><br><br><br>
				<form name="form1" method="post" action="">
				<label><b>Enter library code:<b></label>
				<input name="code" type="password"><br><br>
				<input type="submit" name="submit" value="submit">
				
				</form>
				<?php
					if(isset($_POST["submit"]))
					{
						$code=$_POST['code'];
						include 'conn.php';
						
						$query=$mysqli->query("SELECT * FROM library_code");
						while($row=$query->fetch_assoc())
						{
							$dbcode=$row['code'];
						}
						if($code == $dbcode)
						{
							header("Location: admin_reg.php");
						}
						else
						{
							echo"Enter valid code";
						}
					}
					
				
				?>
				<br><br><br><br><br>
				<!-- Column 1 end -->
			</div>
			<div class="col2">
				<!-- Column 2 start -->
					
				<!-- Column 2 end -->
			</div>
			<div class="col3">
				<!-- Column 3 start -->
					<div id="ads">
					
						
					
					</div>
				<!-- Column 3 end -->
			</div>
		</div>
	</div>
</div>
<div id="footer">
	
	
	
</div>

</body>
</html>
