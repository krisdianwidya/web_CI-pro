<?php

class c_profil extends CI_Controller{
	function index(){
		$this->load->view('v_profil');
	}
	function data_profil(){
		$id_user = $this->session->userdata('id');
		$this->load->model('m_user');
		$data = $this->m_user->tampil_data_profil($id_user)->result();
		echo json_encode($data);
	}
	function iklan_saya_page(){
		$this->load->view('v_iklan_saya');
	}
	function iklan_saya(){
		$id_user = $this->session->userdata('id');

		$this->load->model('m_iklan');

		if(!isset($_POST['key_cari']) && !isset($_POST['key_kat'])) {
			$data['data_iklan_verif'] = $this->m_iklan->iklan_saya_verif($id_user)->result();
			$data['data_iklan_pending'] = $this->m_iklan->iklan_saya_pending($id_user)->result();
		}else if(isset($_POST['key_cari']) && !isset($_POST['key_kat'])) {
			$key_cari = $this->input->post('key_cari');
			$data['data_iklan_verif'] = $this->m_iklan->cari_iklan_saya_verif($id_user, $key_cari)->result();
			$data['data_iklan_pending'] = $this->m_iklan->cari_iklan_saya_pending($id_user, $key_cari)->result();
		}else if(isset($_POST['key_kat']) && !isset($_POST['key_cari'])){
			$key_kat = $this->input->post('key_kat');
			$data = $this->m_iklan->iklan_kategori($key_kat)->result();
			$data['data_iklan_verif'] = $this->m_iklan->iklan_saya_verif_kategori($id_user, $key_kat)->result();
			$data['data_iklan_pending'] = $this->m_iklan->iklan_saya_pending_kategori($id_user, $key_kat)->result();
		}
		echo json_encode($data);
	}
	function lihat_profil(){
		$id = $this->uri->segment(3);
		if($this->session->userdata('id') == $id){
			redirect(base_url("index.php/c_profil"));
		}

		$this->load->model('m_user');

		$where = array('ID_IKLAN' => $id);
		$data['data_user'] = $this->m_user->tampil_data($id)->result();
		$this->load->model('m_iklan');
		$data['data_iklan'] = $this->m_iklan->tampil_iklan($id)->result();
		$data['data'] = $this->m_iklan->tampil_iklan($id)->num_rows();
		$this->load->view('v_profil_lain',$data);
	}
	function edit_profil(){
		$this->load->model('m_user');
		$id_user = $this->session->userdata('id');
		$data['data_user'] = $this->m_user->tampil_data($id_user)->result();
		$this->load->view('v_edit_profil',$data);
	}
}
