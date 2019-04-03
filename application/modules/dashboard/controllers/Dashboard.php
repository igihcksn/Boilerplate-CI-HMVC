<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_frontend {

    public function index()
	{
		// $this->load->view('back');
		// $this->load->view('index');
		// $this->load->view('backend/layout/footer');
		$data['content'] = $this->klas.'/dash';
		// var_dump($data['content']);
		$this->view($data);	
	}
}
