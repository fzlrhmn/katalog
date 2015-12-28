<?php 

class Front extends CI_Controller {
        
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_prakata');
	}


	/**
	 * @param  boolean
	 * @return 
	 */
	public function index()
	{
		$data['prakata']	= $this->model_prakata->get_prakata();
		$this->load->view('template/front_header');
		$this->load->view('content/front/home', $data);
		$this->load->view('template/front_footer');
	}
}