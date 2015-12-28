<?php 

class Front extends CI_Controller {
        
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_prakata');
		$this->load->model('model_buku');
		$this->load->model('model_files');
		$this->load->model('model_jenis');
		$this->load->model('model_user');
		$this->load->model('model_bidang');
		$this->load->model('model_kabupaten');
		$this->load->model('model_kategori');
	}


	/**
	 * @param  boolean
	 * @return 
	 */
	public function index()
	{
		$data['prakata']	= $this->model_prakata->get_prakata();
		$data['jenis']		= $this->model_jenis->get_jenis();
		$data['user']		= $this->model_user->get_user_buku();
		$data['bidang']		= $this->model_bidang->get_bidang();
		$data['kabupaten'] 	= $this->model_kabupaten->get_kabupaten();
		$data['kategori'] 	= $this->model_kategori->get_master_kategori();
		$this->load->view('template/front_header');
		$this->load->view('content/front/home', $data);
		$this->load->view('template/front_footer');
	}

	public function get_buku()
	{
		$data['buku']		= $this->model_buku->get_buku_front();
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function submit()
	{
		$data['buku']		= $this->model_buku->search_buku_front($_POST);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function detail_buku($id_buku)
	{
		$data		= $this->model_buku->get_buku($id_buku);
		for ($i=0; $i < count($data); $i++) {
			$data[$i]['files'] = $this->model_files->get_files($data[$i]['id_buku']);
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function files($id_buku)
	{
		$data['data'] = $this->model_files->get_files($id_buku);
		for ($i=0; $i < count($data['data']); $i++) {
			$data['data'][$i]['nomor'] = $i+1;
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}
}