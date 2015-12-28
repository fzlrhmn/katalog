<?php 

class Buku extends CI_Controller {
        
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('is_logged_in')) {
			redirect(base_url('index.php'));
		}
		$this->load->model('model_buku');
		$this->load->model('model_jenis');
		$this->load->model('model_user');
		$this->load->model('model_bidang');
		$this->load->model('model_foto');
		$this->load->model('model_kabupaten');
		$this->load->model('model_kategori');
		$this->load->model('model_files');
	}


	/**
	 * @param  boolean
	 * @return 
	 */
	public function index()
	{
		$data['jenis']		= $this->model_jenis->get_jenis();
		$data['user']		= $this->model_user->get_user_buku();
		$data['bidang']		= $this->model_bidang->get_bidang();
		$data['kabupaten'] 	= $this->model_kabupaten->get_kabupaten();
		$data['kategori'] 	= $this->model_kategori->get_master_kategori();

		$this->load->view('template/header');
		$this->load->view('content/buku/buku', $data);
		$this->load->view('template/footer');
	}

	public function edit( $id_buku )
	{
		$data['jenis']		= $this->model_jenis->get_jenis();
		$data['user']		= $this->model_user->get_user_buku();
		$data['bidang']		= $this->model_bidang->get_bidang();
		$data['kabupaten'] 	= $this->model_kabupaten->get_kabupaten();
		$data['kategori'] 	= $this->model_kategori->get_master_kategori();
		$data['data']		= $this->model_buku->get_buku( $id_buku );
		for ($i=0; $i < count($data['data']); $i++) { 
			$data['data'][$i]['nomor'] = $i+1;

			$data['data'][$i]['files'] = $this->model_files->get_files($data['data'][$i]['id_buku']);
		}

		if ( count($data['data']) != 0 ) {
			$this->load->view('template/header');
			$this->load->view('content/buku/edit_buku', $data);
			$this->load->view('template/footer');
		}
		else{
			show_404();
		}
	}

	public function detail( $id_buku )
	{
		$data['data']		= $this->model_buku->get_buku( $id_buku );
		for ($i=0; $i < count($data['data']); $i++) {
			$data['data'][$i]['files'] = $this->model_files->get_files($data['data'][$i]['id_buku']);
		}

		if ( count($data['data']) != 0 ) {
			$this->load->view('template/header');
			$this->load->view('content/buku/detail_buku', $data);
			$this->load->view('template/footer');
		}
		else{
			show_404();
		}
	}

	public function get_buku( $id_buku = false )
	{
		$data['data']	= $this->model_buku->get_buku( $id_buku );
		for ($i=0; $i < count($data['data']); $i++) { 
			$data['data'][$i]['nomor'] = $i+1;

			$data['data'][$i]['files'] = $this->model_files->get_files($data['data'][$i]['id_buku']);
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function submit()
	{
		$files 			= $this->do_upload();
		if ( isset( $files['success'] ) ) {
			for ($i=0; $i < count($files['success']); $i++) { 
				$files['success'][$i]['kategori'] = $_POST['kategori'][$i];
			}
		}
		$data['data']	= $this->model_buku->submit( $_POST, $files );
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function update()
	{
		$files 			= $this->do_upload();

		if ( isset( $files['success'] ) ) {
			for ($i=0; $i < count($files['success']); $i++) { 
				$files['success'][$i]['kategori'] = $_POST['kategori'][$i];
			}
		}
		$data['data']	= $this->model_buku->update( $_POST, $files );
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function delete( $id_buku )
	{
		$data['data']	= $this->model_buku->delete( $id_buku );
		redirect('index.php/buku','refresh');
	}

	private function do_upload()
	{
		$data 	= array();
	    $files 	= $_FILES;
	    $cpt 	= count($_FILES['file_upload']['name']);
	    
	    for($i=0; $i<$cpt; $i++)
	    {           
	        $_FILES['file_baru']['name']		= $files['file_upload']['name'][$i];
	        $_FILES['file_baru']['type']		= $files['file_upload']['type'][$i];
	        $_FILES['file_baru']['tmp_name']	= $files['file_upload']['tmp_name'][$i];
	        $_FILES['file_baru']['error']		= $files['file_upload']['error'][$i];
	        $_FILES['file_baru']['size']		= $files['file_upload']['size'][$i];    

	        $config['upload_path'] 				= './file/';
	    	$config['allowed_types'] 			= '*';
	    	$config['max_size']      			= '0';
	    	$config['overwrite']     			= FALSE;

	        $this->load->library('upload', $config);
	        $this->upload->initialize($config);
	        
	        if ($this->upload->do_upload('file_baru')) {
	        	$data['success'][$i] 	= $this->upload->data();
	        }
	        else{
	        	$data['error'][$i] 		= $this->upload->display_errors();
	        }
	    }
	    return $data;
	}

	private function set_upload_options()
	{   
	    //upload an image options
	    $config = array();
	    $config['upload_path'] 		= './file/';
	    $config['allowed_types'] 	= '*';
	    $config['max_size']      	= '0';
	    $config['overwrite']     	= FALSE;

	    return $config;
	}

	public function migrate()
	{
		$data['data']		= $this->model_buku->get_buku_migrate();
		$object_cover['data']		= array();
		$object_file['data']		= array();
		for ($i=0; $i < count($data['data']); $i++) { 
			$cover 	= explode('/', $data['data'][$i]['cover']);
			$file 	= explode('/', $data['data'][$i]['file']);

			$cover_baru = $cover[1];
			$file_baru 	= $file[1];

			$object_cover['data'][$i]['file'] 		= $cover_baru;
			$object_cover['data'][$i]['id_kategori']= 1;
			$object_cover['data'][$i]['id_buku'] 	= $data['data'][$i]['id_buku'];


			$object_file['data'][$i]['file'] 		= $file_baru;
			$object_file['data'][$i]['id_kategori']	= 0;
			$object_file['data'][$i]['id_buku'] 	= $data['data'][$i]['id_buku'];
		}
		$this->model_buku->migrate($object_cover['data'], $object_file['data']);

		$this->output->set_content_type('application/json')->set_output(json_encode($object_file['data']));
	}
}