<?php
include ('db.php');
class users extends db {

	public function getUsers($keyword){
		if ($keyword) {
			$sql = 'select * from users Where username LIKE "%'.$keyword.'%"';
		}else
		{
			$sql = 'select * from users';
		}
		#$sql = 'select * FROM users';
		$users = $this->select($sql);
		return $users;
	}


	public function pick(){
		$sql = 'select * FROM users';
		$users = $this->select($sql);
		return $users;
	}

	public function deleteUser($id) {
		$sql = 'delete from users where id = '.$id;
		$this->query($sql);
	}

	public function insert($data){
		$sql = 'insert into users ("username", "password")'.
				'value ("'.$data['username'].'", "'.$data['password'].'")';
		$this->query($sql);
	}

	public function update($params){
		$sql = '.........cau sql.........';
		$this->query($sql);
	}

	public function findUser($id){
		$sql = 'select *from users where id = '.$id;
		$user = $this->select($sql);

		return $user[0];
	}

	public function updateUser($data){
		$sql = 'update `users` '.
				'SET `username` = "'.$data['username'].'", '.
				'`password` = "'.$data['password'].'"'.
				'WHERE id='.$data['id'];

		$this->query($sql);
	}
}
?>