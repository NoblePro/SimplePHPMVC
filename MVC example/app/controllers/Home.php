<?php

class Home extends Controller{
	public function index($profesi = 'Programmer')
	{
		if( !isset($_COOKIE['id']) ){
			header("Location:http://localhost/pengaduan/public/login");
		}
		$data['nama'] = $this->model('Home_model')->getName($_COOKIE['id']);
		if( empty($data['nama']) ){
			header("Location:http://localhost/pengaduan/public/login");
		}
		$data['profesi'] = $profesi;
		$this->view('home/index' ,$data);
	}
}