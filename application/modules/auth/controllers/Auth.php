<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_frontend {

    public function index()
	{
		// $this->load->view('back');
		// $this->load->view('index');
		// $this->load->view('backend/layout/footer');
		// var_dump($data['content']);
		$this->load->view('index');	
	}
}
