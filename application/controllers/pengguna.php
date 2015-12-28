<?php 

class Pengguna extends CI_Controller {
        
	public function __construct()
	{
		parent::__construct();
	}


	/**
	 * @param  boolean
	 * @return 
	 */
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('content/pengguna/pengguna');
		$this->load->view('template/footer');
	}
}