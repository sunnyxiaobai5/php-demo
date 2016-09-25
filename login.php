<?php
	session_start();
	$userName = "userName";
	$passwd = "passwd";

	if(isset($_POST["userName"]) && isset($_POST["passwd"]))
	{
		if($_POST["userName"] == $userName && $_POST["passwd"] == $passwd)
		{
			$_SESSION["authentication"] = true;
			$host = $_SERVER["HTTP_HOST"];//返回当前主机目录，此处为localhost.all_demo
			$path = rtrim(dirname($_SERVER["PHP_SELF"]),"/\\");//dirname()返回路径中的目录部分
			header("location:http://$host$path/index.php");
			exit;
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Login</title>
</head>
<body>
<div align="center">
	<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
		<table>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="userName" value="<?php echo htmlspecialchars(@$_POST["userName"]) ?>" /></td>	
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="passwd" /></td>	
			</tr>
			<tr>
				<td><input type="reset" name="reset" value="reset" /></td>
				<td><input type="submit" name="submit" value="submit" /></td>
			</tr>
		</table>
	</form>
<?php if(count($_POST)>0) echo "用户名或密码错误!!!"; ?>
</div>
</body>
</html>
