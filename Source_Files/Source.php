<?php
	include ('./users.php');
	$obj_users = new users();

	#$users = $obj_users->pick();
	//xoa
	$id = '';
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$obj_users->deleteUser($id);
	}

	//tim kiem
	$keyword = '';
	if(isset($_GET['keyword'])){
		$keyword = $_GET['keyword'];
	}
	$users = $obj_users->getUsers($keyword);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ket noi database</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/styles.css">
	<script type="text/javascript" href="/public/js/script.js"></script>
	<style>
		.type{
			color:#6495ed;
			font-size: 40px;
			font-weight: bolder;
			text-align: center;
			border-bottom: 2px solid #e2eafd;
		}
		.row{
			color: #a2acee;
			text-align: center;
		}
		.row img{
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<h1 class="type">Our team</h1>

	<form>
		<input type="text" name="keyword" placeholder="Nhập từ khóa">
		<input type="submit" value="Tìm kiếm">
	</form>
	<div class="row">
		<?php foreach ($users as $users) : ?>
		<div class="col-md-4">
			<a href='Source.php?id=<?php echo $users['id']; ?>'>Xóa</a>
			<a href="themmoi.php?id=<?php echo $users['id'] ?>">Them moi</a>
			<a href="capnhat.php?id=<?php echo $users['id'] ?>">cập nhật</a>
			<img src="public/images/anh1.png" class="img-responsive">
			<div class="name">
				<h2><?php echo $users['username']; ?></h2>
			</div>
		</div>
		<?php endforeach ?>
	</div>
</body>
</html>