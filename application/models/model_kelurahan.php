<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_kelurahan extends CI_Model {

	public function get_kelurahan($id_kelurahan = false)
	{
		$this->db->select('kelurahan.no_kecamatan, kelurahan.kelurahan, kelurahan.nomor, kecamatan.kecamatan');
		$this->db->from('kelurahan');
		if ($id_kelurahan!=false) {
			$this->db->where('id', $id_kelurahan);
		}
		$this->db->join('kecamatan', 'kecamatan.nomor = kelurahan.no_kecamatan', 'left');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	public function get_kelurahan_by_kecamatan($id_kecamatan = false)
	{
		$this->db->select('no_kecamatan, kelurahan, nomor');
		$this->db->from('kelurahan');
		if ($id_kecamatan!=false) {
			$this->db->where('no_kecamatan', $id_kecamatan);
		}
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	public function get_desa_geo()
	{
		$this->db->select('asWkb(the_geom) as wkb, desa, id_kecamatan, id_kabupaten');
		$this->db->from('master_desa_backup');
		$this->db->limit(8000);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

}

/* End of file Model_kelurahan.php */
/* Location: ./application/models/Model_kelurahan.php */