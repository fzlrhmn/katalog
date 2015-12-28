<?php 

class Jenis extends CI_Controller {
        
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('is_logged_in')) {
			redirect(base_url('index.php'));
		}
		$this->load->model('model_jenis');
	}


	/**
	 * @param  boolean
	 * @return 
	 */
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('content/jenis/jenis');
		$this->load->view('template/footer');
	}

	public function get_jenis( $id_jenis = false )
	{
		$data['data']	= $this->model_jenis->get_jenis( $id_jenis );
		for ($i=0; $i < count($data['data']); $i++) { 
			$data['data'][$i]['nomor'] = $i+1;
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function submit()
	{
		$data['data'] = $this->model_jenis->submit( $_POST );
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function update()
	{
		$data['data'] = $this->model_jenis->update( $_POST );
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function delete( $id_jenis )
	{
		$data = $this->model_jenis->delete( $id_jenis );
		redirect('index.php/jenis','refresh');
	}
}