<?php

class M_antrian extends CI_Model
{

  function select_antrian($id_dokter)
  {
      $this->db->select('registrasi.id_registrasi,registrasi.id_pasien,
                         registrasi.id_dokter,registrasi.no_antrian,registrasi.status_cek,
                         pasien.nama_pasien,pasien.alamat,pasien.no_telepon,dokter.nama_dokter')
                ->join('pasien','pasien.id_pasien=registrasi.id_pasien')
                ->join('dokter','dokter.id_dokter=registrasi.id_dokter')
                ->where('registrasi.id_dokter',$id_dokter);

              return $this->db->get('registrasi')->result();
  }

  public function get_dokter($id_dokter)
  {
    return $this->db->get_where('dokter',array('id_dokter' =>$id_dokter))->row();
  }

  function get_all_admin($id_dokter)
  {
    return $this->db->get_where('admin')->result_array();
  }

  public function edit($where,$table)
  {
    return $this->db->get_where($table,$where);
  }

  function tampil_join_admin($id_dokter)
  {
      $this->db->select('registrasi.id_registrasi,registrasi.id_pasien,
                         registrasi.id_dokter,registrasi.no_antrian,registrasi.status_cek,
                         pasien.nama_pasien,pasien.alamat,pasien.no_telepon,dokter.nama_dokter')
                ->join('pasien','pasien.id_pasien=registrasi.id_pasien')
                ->join('dokter','dokter.id_dokter=registrasi.id_dokter')
                ->where('registrasi.id_dokter',$id_dokter);

              return $this->db->get('registrasi')->result();
  }

}
?>
