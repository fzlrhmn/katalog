<?php 

class Prakata extends CI_Controller {
        
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('is_logged_in')) {
			redirect(base_url('index.php'));
		}
		$this->load->model('model_prakata');
	}


	/**
	 * @param  boolean
	 * @return 
	 */
	public function index()
	{
		$data['prakata']	= $this->model_prakata->get_prakata();

		$this->load->view('template/header');
		$this->load->view('content/prakata/prakata', $data);
		$this->load->view('template/footer');
	}

	public function update()
	{
		$data['data']	= $this->model_prakata->update( $_POST );
		redirect('index.php/prakata','refresh');
	}
}