<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {


	public function index()
	{
		$this->load->view('website/welcome');
	}

	public function home()
	{
		$this->load->view('website/home');
	}

	public function edit(){
		$this->load->view('website/editPage');
	}
}
