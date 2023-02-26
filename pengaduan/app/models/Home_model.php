<?php
class Home_model{
	public function getName($id){
		$query = 'SELECT * FROM `user` WHERE id="'.$id.'"';
		$dbcontroller = new DBController();
		$this->memory = $dbcontroller->executeSelectQuery($query);
		return $this->memory;
	}
}