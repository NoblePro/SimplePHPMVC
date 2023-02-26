<?php

class Login extends Controller{
	public function index()
	{
		setcookie('id',null,0,'/');
		$this->view('login/index');
	}

	public function checkUser()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$hasil = false;
		$id = '';
		$result = $this->model('Login_model')->checkLogin($username, $password);
		if($result){
			foreach( $result as $row ){
				if(password_verify($password, $row['password'])){
					$hasil = true;
					$id = $row['id'];
				}
			}
		}
		if($hasil){
			setcookie('id',$id,0,'/');
			header("Location:http://localhost/pengaduan/public/home");
		} else{
			header("Location:http://localhost/pengaduan/public/login");
		}
	}
}