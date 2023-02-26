<?php
class Login_model{
	public function checkLogin($username, $password){
		$query = 'SELECT * FROM `user` WHERE username="'.$username.'"';
		$dbcontroller = new DBController();
		$this->memory = $dbcontroller->executeSelectQuery($query);
		return $this->memory;
	}
}