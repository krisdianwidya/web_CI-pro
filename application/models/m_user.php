<?php

class m_user extends CI_Model{

	function tampil_data($id){
		return $this->db->get_where('data_user', array('ID_USER' => $id));
	}
	function tampil_data_profil($id){
		return $this->db->get_where('data_user', array('ID_USER' => $id));
	}
	function tampil_member(){
		return $this->db->get_where('data_user', array('TIPE_USER' => 'Member'));
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function update($user,$data){
		$this->db->where('ID_USER', $user);
		$this->db->update('data_user', $data);
	}
}
