<?php

class c_user extends CI_Controller{

  function tambah(){
    $this->load->view('v_registrasi');
  }
  function tambah_aksi(){
    $this->load->model('m_user');
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $telpon = $this->input->post('telp');
    $username = $this->input->post('username');
    $password = $this->input->post('pass');
    $data = array(
      'NAMA_USER' => $nama,
      'NO_HP' => $telpon,
      'EMAIL' => $email,
      'USERNAME' => $username,
      'PASSWORD' => $password,
      'TIPE_USER' => 'Member'
    );
    $this->m_user->input_data($data,'data_user');
    $this->load->model('m_login');
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
    redirect(base_url("index.php/c_pusat"));
  }
  function hapus($id){
    $this->load->model('m_user');
    $where = array('ID_USER' => $id);
    $this->m_data->hapus_data($where,'data_user');
  }
  function update_data_profil(){
    $this->load->model('m_user');

    $id_user = $this->input->post('id_user');
    $nama_user = $this->input->post('nama_user');
    $telpno = $this->input->post('telpno');
    $email = $this->input->post('email');
    $birth_addr = $this->input->post('birth_addr');
    $birth_date = $this->input->post('birth_date');
    $alamat = $this->input->post('alamat');
    $jenis_kelamin = $this->input->post('jenis_kelamin');
    $username = $this->input->post('username');
    $password = $this->input->post('password');

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
          'NAMA_USER' => $nama_user,
          'NO_HP' => $telpno,
          'EMAIL' => $email,
          'TEMPAT_LAHIR' => $birth_addr,
          'TANGGAL_LAHIR' => $birth_date,
          'ALAMAT' => $alamat,
          'JENIS_KELAMIN ' => $jenis_kelamin,
          'USERNAME' => $username,
          'PASSWORD' => $password,
          'FOTO_USER' => $gbr['file_name']
        );
        $this->m_user->update($id_user,$data);
        echo json_encode($data);
      }else{
        echo "gagal melakukan edit iklan";
      }
    }else{
      $data = array(
        'NAMA_USER' => $nama_user,
        'NO_HP' => $telpno,
        'EMAIL' => $email,
        'TEMPAT_LAHIR' => $birth_addr,
        'TANGGAL_LAHIR' => $birth_date,
        'ALAMAT' => $alamat,
        'JENIS_KELAMIN ' => $jenis_kelamin,
        'USERNAME' => $username,
        'PASSWORD' => $password
      );
      $this->m_user->update($id_user,$data);
      echo json_encode($data);
    }
  }
}
