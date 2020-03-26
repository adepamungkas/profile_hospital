<?php

class M_dokter extends CI_Model
{
  function get_all_dokter()
  {
    return $this->db->get_where('dokter')->result_array();
  }

  public function tampil_join(){
      $this->db->select('dokter.*, poli.id_poli, poli.nama_poli'); //mengambil semua data dari tabel data_users dan users
      $this->db->from('dokter'); //dari tabel data_users
      $this->db->join('poli', 'poli.id_poli = dokter.id_poli', 'left'); //menyatukan tabel users menggunakan left join
      $data = $this->db->get_where(); //mengambil seluruh data
      return $data->result(); //mengembalikan data
    }

  function simpan_dokter($data,$table){
    $this->db->insert($table,$data);
  }

  public function edit_dokter($where,$table)
  {
    return $this->db->get_where($table,$where);
  }

  public function update_dokter($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }

  function isi_poli()
  {
  $this->db->order_by('nama_poli','ASC');
  $poli= $this->db->get('poli');
  return $poli->result_array();
  }

  function isi_status()
  {
  $this->db->order_by('status','ASC');
  $status_dokter= $this->db->get('status_dokter');
  return $status_dokter->result_array();
  }

  // model join table
  function getdata(){
    $this->db->select('*'); //memeilih semua field
    $this->db->from('dokter'); //memeilih tabel
    $this->db->join('poli', 'dokter.id_poli = poli.id_poli'); //join tabel transaksi field id_pemilik dengan tabel pemilik field yang punya isi sama

    $query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
                # code...
                $hasilTransaksi[] = $data;
            }
        return $hasilTransaksi; //hasil dari semua proses ada dimari
        }
    }

    // model hapus data
    function delete_dokter($where, $table)
    {
      $this->db->where($where); // Kode ini digunakan untuk menghapus record yang sudah ada
      $this->db->delete($table); // Kode ini digunakan untuk menghapus record yang sudah ada
    }

}


 ?>
