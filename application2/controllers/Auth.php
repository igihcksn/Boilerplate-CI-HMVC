<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index()
	{
		$this->load->view('backend/auth/layout/header');
		$this->load->view('backend/auth/login');
		$this->load->view('backend/auth/layout/footer');
    }
    
    public function register()
    {
        $this->load->view('backend/auth/layout/header');
		$this->load->view('backend/auth/register');
		$this->load->view('backend/auth/layout/footer');
    }
}
