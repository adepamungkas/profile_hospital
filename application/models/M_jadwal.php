<?php
class M_jadwal extends CI_Model
{

  function get_all_jadwal()
  {
    return $this->db->get_where('jadwal_dokter')->result_array();
  }

  function select_join3()
  {
      $this->db->select('jadwal_dokter.id_jadwal,jadwal_dokter.id_dokter,jadwal_dokter.hari,
                         jadwal_dokter.jam_kerja,jadwal_dokter.waktu,jadwal_dokter.asuransi_pasien,
                         dokter.id_dokter,dokter.nama_dokter,dokter.id_poli,
                         poli.id_poli,poli.nama_poli')
                ->join('dokter','dokter.id_dokter=jadwal_dokter.id_dokter')
                ->join('poli','poli.id_poli=dokter.id_poli');

                return $this->db->get('jadwal_dokter')->result();
  }

}

?>
