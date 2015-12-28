<?php 

class Bidang extends CI_Controller {
        
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('is_logged_in')) {
			redirect(base_url('index.php'));
		}
		$this->load->model('model_bidang');
	}


	/**
	 * @param  boolean
	 * @return 
	 */
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('content/bidang/bidang');
		$this->load->view('template/footer');
	}

	public function get_bidang( $id_bidang = false )
	{
		$data['data']	= $this->model_bidang->get_bidang( $id_bidang );
		for ($i=0; $i < count($data['data']); $i++) { 
			$data['data'][$i]['nomor'] = $i+1;
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function submit()
	{
		$data['data'] = $this->model_bidang->submit( $_POST );
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function update()
	{
		$data['data'] = $this->model_bidang->update( $_POST );
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function delete( $id_bidang )
	{
		$data = $this->model_bidang->delete( $id_bidang );
		redirect('index.php/bidang','refresh');
	}
}