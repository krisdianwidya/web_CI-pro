<?php

class m_detail extends CI_Model{
	function tampil_detail($id_iklan){
		$this->db->select('*');
		$this->db->from('data_iklan');
		$this->db->join('data_user', 'data_user.ID_USER = data_iklan.ID_USER');
		$this->db->having('data_iklan.ID_IKLAN', $id_iklan);
		$query = $this->db->get();
		return $query;
	}
	function tampil_komen($id_iklan){
		$this->db->select('*');
		$this->db->from('data_komentar');
		$this->db->join('data_user', 'data_user.ID_USER = data_komentar.ID_USER');
		$this->db->having('data_komentar.ID_IKLAN', $id_iklan);
		$this->db->order_by('tanggal_komentar', 'DESC');
		$query = $this->db->get();
		return $query;
	}
	function create_komen($data,$table){
		$this->db->insert($table,$data);
	}
	function del_komen($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
