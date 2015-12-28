<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// if (!$this->session->userdata('is_logged_in')) {
		// 	redirect(base_url('index.php'));
		// }
		$this->load->model('model_kategori');
	}


	/**
	 * @param  boolean
	 * @return 
	 */
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('content/kategori/kategori');
		$this->load->view('template/footer');
	}

	public function get_kategori( $id_kategori = false )
	{
		$data['data']	= $this->model_kategori->get_master_kategori( $id_kategori );
		for ($i=0; $i < count($data['data']); $i++) { 
			$data['data'][$i]['nomor'] = $i+1;
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function get_kategori_select( $id_kategori = false )
	{
		$data	= $this->model_kategori->get_master_kategori_for_select();
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function submit()
	{
		$data['data'] = $this->model_kategori->submit( $_POST );
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function update()
	{
		$data['data'] = $this->model_kategori->update( $_POST );
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function delete( $id_kategori )
	{
		$data = $this->model_kategori->delete( $id_kategori );
		redirect('index.php/kategori','refresh');
	}

}

/* End of file kategori.php */
/* Location: ./application/controllers/kategori.php */