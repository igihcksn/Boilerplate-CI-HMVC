<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_frontend extends MX_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->klas   = $this->uri->segment(1) ;
            $this->load->library('form_validation');
            $this->load->library('datatables');
            
        }
        
    function view($data){
		$this->load->view('back',$data);
    }


}