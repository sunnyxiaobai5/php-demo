<?php
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Home</title>
</head>
<body>
<div align="center">
	<?php
		if(@$_SESSION["authentication"])
		{
	?>
		<a href="logout.php">logout</a>
	<?php	
		}
		else
		{
	?>
		<a href="login.php">login</a>
	<?php } ?>
</div>
</body>
</html>
