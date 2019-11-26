<?php

class c_login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_login');

	}
	function view_login(){
		$this->load->view('v_login');
	}
	function view_login_admin(){
		$this->load->view('v_login_admin');
	}
	function aksi_login(){
		$this->load->library('encrypt');

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'USERNAME' => $username,
			'PASSWORD' => $password
		);
		$cek = $this->m_login->cek_login("data_user",$where)->num_rows();
		if($cek > 0){
			$data = $this->m_login->ambil($username);
			foreach($data->result() as $u){
				$id = $u->ID_USER;
				$tipe = $u->TIPE_USER;
			}
			$data_session = array(
				'id' => $id,
				'username' => $username,
				'status' => "login"
			);
			$this->session->set_userdata($data_session);
			if($tipe != "1"){
				redirect(base_url("index.php/c_pusat"));
			}else{
				redirect(base_url("index.php/c_login/view_login"));
			}

		}else{
			redirect(base_url("index.php/c_login/view_login"));
			echo "Username dan password salah !";
		}
	}
	function aksi_login_admin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'USERNAME' => $username,
			'PASSWORD' => $password
		);
		$cek = $this->m_login->cek_login("data_user",$where)->num_rows();
		if($cek > 0){
			$data = $this->m_login->ambil($username);
			foreach($data->result() as $u){
				$id = $u->ID_USER;
				$tipe = $u->TIPE_USER;
			}
			$data_session = array(
				'id' => $id,
				'username' => $username,
				'tipe' => $tipe,
				'status' => "login"
			);
			$this->session->set_userdata($data_session);
			if($tipe != "1"){
				redirect(base_url("index.php/c_login/view_login_admin"));
			}else{
				redirect(base_url("index.php/c_admin/monitor_member"));
			}
		}else{
			redirect(base_url("index.php/c_login/view_login_admin"));
			echo "Username dan password salah !";
		}
	}
	function logout(){
		if($this->session->userdata('tipe') == "1"){
			$this->session->sess_destroy();
			redirect(base_url("index.php/c_login/view_login_admin"));
		}else {
			$this->session->sess_destroy();
			redirect(base_url("index.php/c_login/view_login"));
		}
	}
}
