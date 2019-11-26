<?php

class c_iklan extends CI_Controller{
  function __construct(){
    parent::__construct();

    if($this->session->userdata('status') != "login" OR $this->session->userdata('tipe') != "Member"){
      redirect(base_url("index.php/c_login/view_login"));
    }
  }

  function tambah(){
    $this->load->view('v_pasang_iklan');
  }
  function tambah_iklan(){
    $this->load->model('m_iklan');

    $id_user = $this->session->userdata('id');

    $judul = $this->input->post('judul');
    $kategori = $this->input->post('kategori');
    $harga = $this->input->post('harga');
    $deskripsi = $this->input->post('deskripsi');

    $this->load->library('upload');
    $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
    $config['upload_path'] = './assets/uploads/'; //path folder
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
    $config['max_size'] = '6144'; //maksimum besar file 6M
    $config['max_width']  = '4000'; //lebar maksimum 4000 px
    $config['max_height']  = '4000'; //tinggi maksimu 4000 px
    $config['file_name'] = $nmfile; //nama yang terupload nantinya
    $this->upload->initialize($config);

    if($_FILES['filefoto']['name']){
      if($this->upload->do_upload('filefoto')){
        $gbr = $this->upload->data();
        $data = array(
          'ID_USER' => $id_user,
          'JUDUL_IKLAN' => $judul,
          'KATEGORI' => $kategori,
          'HARGA' => $harga,
          'DESKRIPSI' => $deskripsi,
          'VERIFIKASI' => '0',
          'FOTO_IKLAN' => $gbr['file_name']
        );
        $this->m_iklan->input_data($data,'data_iklan');
        redirect('c_profil');
      }else{
        echo "gagal memasang iklan";
      }
    }

  }
  function hapus_iklan(){
    $this->load->model('m_detail');
    $this->load->model('m_iklan');

    $id = $this->input->post('iklan_id');
    $where = array('ID_IKLAN' => $id);

    $data = $this->m_detail->del_komen($where,'data_komentar');
    $data = $this->m_iklan->hapus_data($where,'data_iklan');
    echo json_encode($data);
  }
  function edit_form(){
    $this->load->view('v_edit_iklan');
  }
  function edit($id){
    $this->load->model('m_iklan');
    $data = $this->m_iklan->postId($id)->result();
    echo json_encode($data);
  }
  function update(){
    $this->load->model('m_iklan');

    $id_iklan = $this->input->post('id_iklan');
    $judul = $this->input->post('judul');
    $kategori = $this->input->post('kategori');
    $harga = $this->input->post('harga');
    $deskripsi = $this->input->post('deskripsi');

    $this->load->library('upload');

    if($_FILES['foto']['name']){
      $config['upload_path'] = './assets/uploads/'; //path folder
      $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
      $config['max_size'] = '6144'; //maksimum besar file 6M
      $config['max_width']  = '4000'; //lebar maksimum 4000 px
      $config['max_height']  = '4000'; //tinggi maksimu 4000 px
      $config['file_name'] = $nmfile; //nama yang terupload nantinya
      $this->upload->initialize($config);

      if($this->upload->do_upload('foto')){
        $gbr = $this->upload->data();
        $data = array(
          'JUDUL_IKLAN' => $judul,
          'KATEGORI' => $kategori,
          'HARGA' => $harga,
          'DESKRIPSI' => $deskripsi,
          'FOTO_IKLAN' => $gbr['file_name']
        );
        $this->m_iklan->update($id_iklan,$data);
        echo json_encode($data);
      }else{
        echo "gagal melakukan edit iklan";
      }
    }else{
      $data = array(
        'JUDUL_IKLAN' => $judul,
        'KATEGORI' => $kategori,
        'HARGA' => $harga,
        'DESKRIPSI' => $deskripsi
      );
      $this->m_iklan->update($id_iklan,$data);
      echo json_encode($data);

    }
  }
  function iklan_laku(){
    $id_iklan = $this->input->post('iklan_id');

    $this->load->model('m_iklan');

    $data = array(
      'LAKU' => '1'
    );
    $this->m_iklan->update($id_iklan,$data);
    echo json_encode($data);
  }

}
