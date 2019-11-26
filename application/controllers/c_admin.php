<?php

class c_admin extends CI_Controller{

	function __construct(){
		parent::__construct();

		if($this->session->userdata('status') != "login" OR $this->session->userdata('tipe') != "1"){
			redirect(base_url("index.php/c_login/view_login_admin"));
		}
	}
	function monitor_member(){
		$id_user = $this->session->userdata('id');
		$this->load->model('m_user');
		$data_member['data_user'] = $this->m_user->tampil_member()->result();
		$data_member['data_user_adm'] = $this->m_user->tampil_data($id_user)->result();
		$this->load->view('v_monitor_member',$data_member);
	}
	function monitor_iklan(){
		$id_user = $this->session->userdata('id');
		$this->load->model('m_iklan');
		$data_iklan['data_'] = $this->m_iklan->belum_verif()->result();
		$data_iklan['data_v'] = $this->m_iklan->verif()->result();
		$this->load->model('m_user');
		$data_iklan['data_user'] = $this->m_user->tampil_data($id_user)->result();
		$this->load->view('v_monitor_iklan', $data_iklan);
	}
	function hapus_member(){
		$id = $this->uri->segment(3);
		$this->load->model('m_iklan');
		$data = $this->m_iklan->profilPost($id);
		foreach($data->result() as $d){
			$id_IKLAN = $d->ID_IKLAN;
			echo $id_IKLAN;
			$where2 = array('ID_IKLAN' => $id_IKLAN);

			$this->load->model('m_detail');
			$this->m_detail->del_komen($where2,'data_komentar');
		}

		$where = array('ID_USER' => $id);

		$this->load->model('m_iklan');
		$this->m_iklan->hapus_data($where,'data_iklan');

		$this->load->model('m_user');
		$this->m_user->hapus_data($where,'data_user');

		redirect('c_admin/monitor_member_iklan');
	}

	//komen juga kehapus
	function del_iklan(){
		$this->load->model('m_detail');
		$id = $this->uri->segment(3);
		$where = array('ID_IKLAN' => $id);
		$this->m_detail->del_komen($where,'data_komentar');
		$this->load->model('m_iklan');
		$this->m_iklan->hapus_data($where,'data_iklan');
		redirect('c_admin/monitor_iklan');
	}
	function verif_iklan(){
		$this->load->model('m_iklan');
		$id = $this->uri->segment(3);
		$this->m_iklan->doVerif($id);
		redirect('c_admin/monitor_iklan');
	}
}
