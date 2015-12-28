<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_files extends CI_Model {

	public function get_files( $id_buku = false )
	{
		$this->db->select('tbl_file.*, tbl_master_kategori.nama_kategori as kategori');
		$this->db->from('tbl_file');
		if( $id_buku != false ){
			$this->db->where('id_buku', $id_buku);
		}
		$this->db->where('tbl_file.deleted', 0);
		$this->db->order_by('id_kategori', 'asc');
		$this->db->join('tbl_master_kategori', 'tbl_file.id_kategori = tbl_master_kategori.id', 'left');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	public function delete( $id_file )
	{
		$object['deleted'] = 1;
		$this->db->where('id', $id_file);
		if ($this->db->update('tbl_file', $object)) {
			return true;
		}
		else{
			return false;
		}
	}

}

/* End of file model_files.php */
/* Location: ./application/models/model_files.php */