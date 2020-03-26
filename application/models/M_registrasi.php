<?php

class M_registrasi extends CI_Model
{
  function get_all_registrasi()
  {
    return $this->db->get_where('registrasi')->result_array();
  }

  public function tampil_data_join()
  {
      $this->db->select('registrasi.*, pasien.id_pasien, pasien.nama_pasien, pasien.alamat'); //mengambil semua data dari tabel data_users dan users
      $this->db->from('registrasi'); //dari tabel data_users
      $this->db->join('pasien', 'pasien.id_pasien = registrasi.id_pasien', 'left'); //menyatukan tabel users menggunakan left join
      $this->db->join('dokter', 'dokter.id_dokter = registrasi.id_dokter', 'left'); //menyatukan tabel users menggunakan left join
      $data = $this->db->get(); //mengambil seluruh data
      return $data->result(); //mengembalikan data
  }

  function select_all_join()
  {
      $this->db->select('registrasi.id_registrasi,registrasi.id_pasien,
                         registrasi.id_dokter,registrasi.no_antrian,registrasi.status_cek,
                         pasien.nama_pasien,pasien.alamat,dokter.nama_dokter')
                ->join('pasien','pasien.id_pasien=registrasi.id_pasien')
                ->join('dokter','dokter.id_dokter=registrasi.id_dokter');

                return $this->db->get('registrasi')->result();
  }

  function simpan_registrasi($data,$table){
		$this->db->insert($table,$data);
	}

  public function edit_registrasi($id_registrasi)
  {
    return $this->db->get_where('registrasi',['id_registrasi'=>$id_registrasi])->row_array();
  }

  public function update_registrasi($id_registrasi='',$data)
  {
    $this->db->where('id_registrasi',$id_registrasi);
    return $this->db->update('registrasi',$data);
  }

  public function delete_registrasi($id_registrasi='')
  {
    $this->db->where('id_registrasi',$id_registrasi);
    return $this->db->delete('registrasi');
  }

  function isi_pasien()
  {
  $this->db->order_by('nama_pasien','ASC');
  $pasien= $this->db->get('pasien');
  return $pasien->result_array();
  }

  function isi_dokter()
  {
  $this->db->order_by('nama_dokter','ASC');
  $dokter= $this->db->get('dokter');
  return $dokter->result_array();
  }

  public function antrian_otomatis($id_dokter)
  {
		  $this->db->select('RIGHT(registrasi.no_antrian,3) as kode', FALSE);
      $this->db->where('id_dokter',$id_dokter);
		  $this->db->order_by('no_antrian','DESC');
		  $this->db->limit(1);
		  $query = $this->db->get('registrasi');      //cek dulu apakah sudah ada kode di tabel.

      if($query->num_rows() <> 0)
      {
		   //jika kode ternyata sudah ada.
		   $data = $query->row();
		   $kode = intval($data->kode) + 1;
		  }
		  else
      {
		   //jika kode belum ada
		   $kode = 1;
		  }
		  $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT); // angka 3 menunjukkan jumlah digit angka 0
		  $kodejadi = "0".$kodemax;    // hasilnya ODJ-9921-0001 dst.
		  return $kodejadi;
	}

  function get_kode($id)
	{
		$query = $this->db->get_where('dokter',array('id_dokter'=>$id));

		 if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
	}
	function get_pendaftar($id)
	{
		$query=$this->db->get_where('registrasi',array('id_dokter'=>$id));
		if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
		}
	}

	function select_pendaftaran_join($id_dokter)
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

}
?>
