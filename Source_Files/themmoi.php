<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>THem moi</title>
</head>
<body>
	<form>
		User name: <input type="text" name="username"> <br />
		PassWord: <input type="password" name="password"> <br />
		<input type="submit" value="Thêm mới">
	</form>
	<?php include ('users.php'); ?>
	<?php
	if(isset($_GET['username']))
	{
		$data = [
			'username' => $_GET['username'],
			'password' => $_GET['password']
		];
		$obj_users = new users();

		$obj_users->insert($data);
	}
	?>
</body>
</html>