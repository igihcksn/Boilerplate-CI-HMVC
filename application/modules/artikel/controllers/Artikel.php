<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends MY_frontend {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('M_index');
		$this->page_limit = 4;
        
    }

    public function index()
	{
		$data['articles']= $this->db->get('artikel')->result_array();
		$data['content'] = $this->klas.'/index';
		$this->view($data);	
	}

	public function all_index()
	{
	   $this->datatables->select('id,judul,kategori,gambar,detail')->from('artikel');
	   echo $this->datatables->generate();
	}

	// function all_index() { 
	// 	header('Content-Type: application/json');
    // 	echo $this->M_index->get_all_artikel();
	// }

	// function all_index() { 
	// 	$get['data'] = $this->M_index->get_all_artikel();
	// 	echo json_encode($get);
	// }

	public function add_artikel()
	{
		$data['content'] = $this->klas.'/add';
		$this->view($data);	
	}

	public function save_artikel()
	{
		$this->form_validation->set_rules('title', 'Title', 'required|trim');
		$this->form_validation->set_rules('category', 'Category', 'required|trim');
		// $this->form_validation->set_rules('image', 'Title', 'required');
		$this->form_validation->set_rules('detail', 'Detail', 'required');
		if ($this->form_validation->run() == FALSE)
        {
            $data['content'] = $this->klas.'/add';
			$this->view($data);
        }
        else
        {
            $data = array(
				'judul' => $this->input->post('title'),
				'kategori' => $this->input->post('category'),
				'gambar' => 'default.jpg',
				'detail' => $this->input->post('detail'),
				'penulis' => 'admin',
				'date_created' => date("Y-m-d h:i")
			);

			$this->db->insert('artikel',$data);
			$this->session->set_flashdata('success_message', 'Data Berhasil Ditambah.');
			redirect(base_url("artikel"));
        }
	}
}
