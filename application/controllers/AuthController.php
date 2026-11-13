<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('JwtModel');
	}
	
	public function index()
	{
		// echo json_encode("Auth Controller");
		$data = array(
			'userId'=>145,
			'email'=>'reeshu@gmail.com',
			'userType'=>'admin'
		);
		echo $this->JwtModel->encode($data);

	}


	
}
