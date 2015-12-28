<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_foto extends CI_Model {

	public function upload_foto($name, $file_name, $path)
	{
		$file_ = explode('.', $file_name);
		// $config['file_name']		= '';

		$config['upload_path'] 		= $path;
		$config['allowed_types'] 	= 'gif|jpg|png|jpeg|pdf';
		$config['max_size']			= '0';
		$config['file_name']		= md5($file_[0]).'.jpg';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if (!$this->upload->do_upload($name)) {
			$data = array('error' => $this->upload->display_errors());
		}
		else{
			$data = array('upload_data' => $this->upload->data());
		}

		return $data['upload_data']['file_name'];
	}

	public function upload_dokumen($name, $file_name, $path)
	{
		$file_ = explode('.', $file_name);
		// $config['file_name']		= '';

		$config['upload_path'] 		= $path;
		$config['allowed_types'] 	= '*';
		$config['max_size']			= '0';
		$config['file_name']		= md5($file_[0]).'.pdf';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if (!$this->upload->do_upload($name)) {
			$data = array('error' => $this->upload->display_errors());
		}
		else{
			$data = array('upload_data' => $this->upload->data());
		}

		return $data['upload_data']['file_name'];
	}

}

/* End of file model_foto.php */
/* Location: ./application/models/model_foto.php */