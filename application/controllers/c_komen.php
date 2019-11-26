<?php

class c_komen extends CI_Controller{
	function buat_komen(){
		$this->load->model('m_detail');

		$id_iklan = $this->input->post('id_iklan');
		$id_user = $this->input->post('id_user');
		$komen = $this->input->post('komen');
		$data = array(
			'ID_IKLAN' => $id_iklan,
			'ID_USER' => $id_user,
			'ISI_KOMENTAR' => $komen
		);
		$this->m_detail->create_komen($data,'data_komentar');
		echo json_encode($data);
	}
	function hapus_komen(){
		$this->load->model('m_detail');

		$id = $this->uri->segment(3);
		$id_iklan = $this->uri->segment(4);
		$where = array('ID_KOMENTAR' => $id);

		$this->m_detail->del_komen($where,'data_komentar');
		redirect(base_url('index.php/c_pusat/detail/'.$id_iklan));
	}
}
