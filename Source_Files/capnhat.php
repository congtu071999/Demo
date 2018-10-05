

<?php
	include ('./users.php');
	$obj_users = new users();

	$id = '';
	$user = '';

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$user = $obj_users->findUser($id);
	}else {
		die('error');
	}
?>





<form>
		ID: <input type="text" name="id" value="?php echo $users['username']; ?>">
		User name: <input type="text" name="username" value="<?php echo $users['username']; ?>"> <br />
		PassWord: <input type="password" name="password" value="<?php echo $users['password']; ?>"> <br />
		<input type="submit" value="Thêm mới">
</form>


<?php
	if (isset($_GET['username'])) {
		$data = [
			'username' => $_GET['username'],
			'password' => $_GET['password'],
			'id' => $_GET['id']	
		];

		$obj_users->updateUser($data);
	}
?>
