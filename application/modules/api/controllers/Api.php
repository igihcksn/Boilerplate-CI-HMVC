<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';
use Restserver\Libraries\REST_Controller;

class Api extends REST_Controller {

	public function __construct()
    {
		parent::__construct();
        // $this->load->model('M_index');
        $this->klas   = $this->uri->segment(1) ;
		$this->page_limit = 4;
        
    }

    public function artikel_get()
	{
        $response = $this->db->get('artikel')->result_array();
        $this->response($response);
	}
}
