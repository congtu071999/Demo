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
		$users = $this->query($sql);
		return $users;
	}

	public function delete($params) {
		$sql = '........cau sql..........';
		$this->query($sql);
	}

	public function insert($params){
		$sql = '.........cau sql..........';
		$this->query($sql);
	}

	public function update($params){
		$sql = '.........cau sql.........';
		$this->query($sql);
	}
}
?>