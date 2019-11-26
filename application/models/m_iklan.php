<?php

class m_iklan extends CI_Model{
	function tampil_data(){
		return $this->db->get('data_iklan');
	}
	function ambil_iklan_baru(){
		$query = $this->db->query(" SELECT * FROM data_iklan WHERE VERIFIKASI=1 ORDER BY TANGGAL_IKLAN DESC");
		return $query;
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function update($iklan,$data){
		$this->db->where('ID_IKLAN', $iklan);
		$this->db->update('data_iklan', $data);
	}
	function iklan_saya_verif($id){
		$this->db->select('*');
		$this->db->from('data_iklan');
		$this->db->where('data_iklan.ID_USER', $id);
		$this->db->having('VERIFIKASI = 1');
		$this->db->order_by('TANGGAL_IKLAN', 'DESC');
		$query = $this->db->get();
		return $query;
	}
	function iklan_saya_pending($id){
		$this->db->select('*');
		$this->db->from('data_iklan');
		$this->db->where('data_iklan.ID_USER', $id);
		$this->db->having('VERIFIKASI = 0');
		$this->db->order_by('TANGGAL_IKLAN', 'DESC');
		$query = $this->db->get();
		return $query;
	}
	function cari_iklan_saya_verif($id, $key){
		$this->db->like('JUDUL_IKLAN', $key);
		$this->db->or_like('KATEGORI', $key);
		$this->db->or_like('DESKRIPSI', $key);
		$this->db->or_like('HARGA', $key);
		$this->db->where('data_iklan.ID_USER', $id);
		$this->db->having('VERIFIKASI = 1');
		$this->db->order_by('TANGGAL_IKLAN', 'DESC');
		return $this->db->get('data_iklan');
	}
	function cari_iklan_saya_pending($id, $key){
		$this->db->like('JUDUL_IKLAN', $key);
		$this->db->or_like('KATEGORI', $key);
		$this->db->or_like('DESKRIPSI', $key);
		$this->db->or_like('HARGA', $key);
		$this->db->where('data_iklan.ID_USER', $id);
		$this->db->having('VERIFIKASI = 0');
		$this->db->order_by('TANGGAL_IKLAN', 'DESC');
		return $this->db->get('data_iklan');
	}
	function postId($id){
		return $this->db->get_where('data_iklan', array('ID_IKLAN' => $id));
	}
	function iklan_kategori($kat){
		$query = $this->db->query(" SELECT * FROM data_iklan WHERE KATEGORI = '$kat' AND VERIFIKASI = 1 ORDER BY TANGGAL_IKLAN DESC ");
		return $query;
	}
	function iklan_saya_verif_kategori($id, $kat){
		$query = $this->db->query(" SELECT * FROM data_iklan WHERE KATEGORI = '$kat' AND ID_USER = '$id' HAVING VERIFIKASI = 1 ORDER BY TANGGAL_IKLAN DESC ");
		return $query;
	}
	function iklan_saya_pending_kategori($id, $kat){
		$query = $this->db->query(" SELECT * FROM data_iklan WHERE KATEGORI = '$kat' AND ID_USER = '$id' HAVING VERIFIKASI = 0 ORDER BY TANGGAL_IKLAN DESC ");
		return $query;
	}
	function tampil_iklan($id){
		return $this->db->get_where('data_iklan', array('ID_USER' => $id, 'VERIFIKASI' => 1));
	}
	function belum_verif(){
		$this->db->select('*');
		$this->db->from('data_iklan');
		$this->db->join('data_user', 'data_user.ID_USER = data_iklan.ID_USER');
		$this->db->where('data_iklan.VERIFIKASI', 0);
		$query = $this->db->get();
		return $query;
	}
	function ambil($key){
		$this->db->like('JUDUL_IKLAN', $key);
		$this->db->or_like('KATEGORI', $key);
		$this->db->or_like('DESKRIPSI', $key);
		$this->db->or_like('HARGA', $key);
		$this->db->having('VERIFIKASI = 1');
		$this->db->order_by('TANGGAL_IKLAN', 'DESC');
		return $this->db->get('data_iklan');
	}
	function verif(){
		$this->db->select('*');
		$this->db->from('data_iklan');
		$this->db->join('data_user', 'data_user.ID_USER = data_iklan.ID_USER');
		$this->db->where('data_iklan.VERIFIKASI', 1);
		$query = $this->db->get();
		return $query;
	}
	function doVerif($id_iklan){
		$this->db->set('VERIFIKASI', 1);
		$this->db->from('data_iklan');
		$this->db->join('data_user', 'data_user.ID_USER = data_iklan.ID_USER');
		$this->db->where('ID_IKLAN', $id_iklan);
		$this->db->update('data_iklan');
	}
}
