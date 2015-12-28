<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Files extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('is_logged_in')) {
			redirect(base_url('index.php'));
		}
		$this->load->model('model_files');
	}

	public function delete_file( $id_file )
	{
		$data = $this->model_files->delete( $id_file );
		return $data;
	}

}

/* End of file files.php */
/* Location: ./application/controllers/files.php */