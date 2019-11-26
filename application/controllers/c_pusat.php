<?php

class c_pusat extends CI_Controller{

	function index(){
		$this->load->view('v_home');
	}

	function iklan_page(){
		$this->load->model('m_iklan');

		if(!isset($_POST['key_cari']) && !isset($_POST['key_kat'])) {
			$data = $this->m_iklan->ambil_iklan_baru()->result();
		}else if(isset($_POST['key_cari']) && !isset($_POST['key_kat'])) {
			$key_cari = $this->input->post('key_cari');
			$data = $this->m_iklan->ambil($key_cari)->result();
		}else if(isset($_POST['key_kat']) && !isset($_POST['key_cari'])){
			$key_kat = $this->input->post('key_kat');
			$data = $this->m_iklan->iklan_kategori($key_kat)->result();
		}
		echo json_encode($data);
	}

	function detail_page(){
		$this->load->view('v_detail_iklan');
	}
	function detail($id){
		$this->load->model('m_detail');
		$data['data_'] = $this->m_detail->tampil_detail($id)->result();
		$data['data_komen'] = $this->m_detail->tampil_komen($id)->result();
		echo json_encode($data);
	}
	function load_contact(){
		$this->load->view('v_contact');
	}
}
