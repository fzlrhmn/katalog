<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_buku extends CI_Model {

	public function get_buku( $id_buku = false )
	{
		$this->db->select('tbl_buku.*, tbl_bidang.bidang as bidang_buku, tbl_jenis.jenis_buku as jenis_buku, tbl_user.username as penyusun_buku, master_kabupaten.nama_kabupaten as nama_kabupaten');
		$this->db->from('tbl_buku');
		if( $id_buku != false ){
			$this->db->where('id_buku', $id_buku);
		}
		$this->db->join('tbl_bidang', 'tbl_buku.bidang = tbl_bidang.id_bidang', 'left');
		$this->db->join('tbl_jenis', 'tbl_buku.jenis = tbl_jenis.id_jenis', 'left');
		$this->db->join('tbl_user', 'tbl_buku.penyusun = tbl_user.id_user', 'left');
		$this->db->join('master_kabupaten', 'tbl_buku.id_kabupaten =master_kabupaten.id_kabupaten', 'left');
		$this->db->where('tbl_buku.deleted', 0);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	public function submit( $object, $files )
	{
		$input = array(
		   'no_buku' 		=> $object['no_buku'],
		   'judul' 			=> $object['judul'],
		   'penyusun' 		=> $object['penyusun'],
		   'tahun' 			=> $object['tahun'],
		   'id_kabupaten' 	=> $object['id_kabupaten'],
		   'jenis' 			=> $object['jenis'],
		   'bidang' 		=> $object['bidang'],
		   'rakBuku' 		=> $object['rakBuku'],
		   'deskripsi' 		=> $object['deskripsi']
		);

		$insert 	= $this->db->insert('tbl_buku', $input);
		$id_buku 	= $this->db->insert_id();

		if ( isset( $files['success'] ) ) {
			$file_kegiatan = array();
			for ($i=0; $i < count($files['success']); $i++) { 
				empty($file_kegiatan);
				$file_kegiatan['id_buku'] 		= $id_buku;
				$file_kegiatan['id_kategori'] 	= $files['success'][$i]['kategori'];
				$file_kegiatan['file'] 			= $files['success'][$i]['file_name'];

				$this->db->insert('tbl_file', $file_kegiatan);
			}
		}

		if ( $insert ) {
			$data['result'] 			= true;
			$data['id_buku']			= $id_buku;
		}
		else{
			$data['error_number']   	= $this->db->_error_number();
   			$data['error_message'] 		= $this->db->_error_message();
   			$data['result'] 			= false;
		}

		return $data;
	}

	public function update( $object, $files )
	{
		$input = array(
		   'no_buku' 		=> $object['no_buku'],
		   'judul' 			=> $object['judul'],
		   'penyusun' 		=> $object['penyusun'],
		   'tahun' 			=> $object['tahun'],
		   'id_kabupaten' 	=> $object['id_kabupaten'],
		   'jenis' 			=> $object['jenis'],
		   'bidang' 		=> $object['bidang'],
		   'rakBuku' 		=> $object['rakBuku'],
		   'deskripsi' 		=> $object['deskripsi']
		);
		$this->db->where('id_buku', $object['id_buku']);
		$insert 	= $this->db->update('tbl_buku', $input);

		if ( isset( $files['success'] ) ) {
			$file_kegiatan = array();
			for ($i=0; $i < count($files['success']); $i++) { 
				empty($file_kegiatan);
				$file_kegiatan['id_buku'] 		= $object['id_buku'];
				$file_kegiatan['id_kategori'] 	= $files['success'][$i]['kategori'];
				$file_kegiatan['file'] 			= $files['success'][$i]['file_name'];

				$this->db->insert('tbl_file', $file_kegiatan);
			}
		}

		if ( $insert ) {
			$data['result'] 			= true;
			$data['id_buku']			= $object['id_buku'];
		}
		else{
			$data['error_number']   	= $this->db->_error_number();
   			$data['error_message'] 		= $this->db->_error_message();
   			$data['result'] 			= false;
		}

		return $data;
	}

	public function delete( $id_buku )
	{
		$object['deleted'] = 1;
		$this->db->where('id_buku', $id_buku);
		if ($this->db->update('tbl_buku', $object)) {
			return true;
		}
		else{
			return false;
		}
	}

	public function get_buku_migrate()
	{
		$this->db->select('tbl_buku.cover as cover, tbl_buku.id_buku as id_buku, tbl_buku.file as file');
		$this->db->from('tbl_buku');
		$this->db->where('tbl_buku.deleted', 0);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	public function migrate($cover, $file)
	{
		$this->db->insert_batch('tbl_file', $cover);
		$this->db->insert_batch('tbl_file', $file);
	}

}

/* End of file model_buku.php */
/* Location: ./application/models/model_buku.php */