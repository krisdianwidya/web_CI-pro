<?php

class m_login extends CI_Model{
  function cek_login($table,$where){
    return $this->db->get_where($table,$where);
  }
  function ambil($username){
    $query = $this->db->query(" SELECT ID_USER, TIPE_USER FROM data_user WHERE USERNAME LIKE '%$username%' ");
    return $query;
  }
}
