<?php

class M_pasien extends CI_Model
{
  function get_all_pasien()
  {
    return $this->db->get_where('pasien')->result_array();
  }

  function simpan_pasien($data,$table){
    $this->db->insert($table,$data);
  }

  public function edit_pasien($where,$table)
  {
    return $this->db->get_where($table,$where);
  }

  public function update_pasien($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }

  // model hapus data
  public function delete_pasien($where, $table)
  {
    $this->db->where($where); // Kode ini digunakan untuk menghapus record yang sudah ada
    $this->db->delete($table); // Kode ini digunakan untuk menghapus record yang sudah ada
  }

}


 ?>
