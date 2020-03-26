<?php

/**
 *
 */
class M_poli extends CI_Model
{
  function get_all_poli()
  {
    return $this->db->get_where('poli')->result_array();
  }

  function simpan_poli($data,$table)
  {
		$this->db->insert($table,$data);
	}

  public function edit_poli($where,$table)
  {
    return $this->db->get_where($table,$where);
  }

  public function update_poli($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }

  // model hapus data
  public function delete_poli($where, $table)
  {
    $this->db->where($where); // Kode ini digunakan untuk menghapus record yang sudah ada
    $this->db->delete($table); // Kode ini digunakan untuk menghapus record yang sudah ada
  }

}


 ?>
