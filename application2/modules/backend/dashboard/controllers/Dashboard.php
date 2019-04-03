<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_frontend {

    public function index()
	{
		$this->load->view('backend/dashboard/index');
		$this->load->view('backend/layout/footer');
	}
}
