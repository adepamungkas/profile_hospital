<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('M_registrasi', 'insert');
    $this->load->model('M_dokter');
    $this->load->helper('url');

    if($this->session->userdata('status') != "login"){
     redirect('login');
    }

  }

  function index()
  {
    $data['registrasi']=$this->insert->get_all_registrasi();
    $data['dokter2'] = $this->M_dokter->tampil_join();
    $data['content']='admin/registrasi/v_registrasi';
    $data['dokter']=$this->insert->isi_dokter();
    $this->load->view('admin/v_index', $data);
  }

  function tambah_data($id_dokter)
  {
    $data['pasien']=$this->insert->isi_pasien();
    $data['kodeunik'] = $this->insert->antrian_otomatis($id_dokter);
    $data['dokter']=$this->insert->isi_dokter();
    $data['get_dokter']=$this->insert->get_dokter($id_dokter);
    $data['content']='admin/registrasi/v_tambah_registrasi';
    $this->load->view('admin/v_index', $data);
  }

  function semua_antrian($id_dokter)
  {
	  $data['get_dokter']=$this->insert->get_dokter($id_dokter);
    $data['semua_antrian1']=$this->insert->select_pendaftaran_join($id_dokter);
    $data['content']='admin/registrasi/v_semua_antrian';
    $this->load->view('admin/v_index',$data);
	}

  function simpan_data()
  {
  		$id_pasien = $this->input->post('id_pasien');
  		$id_dokter = $this->input->post('id_dokter');
  		$no_antrian = $this->input->post('no_antrian');

  		$data = array(
  			'id_pasien' => $id_pasien,
  			'id_dokter' => $id_dokter,
        'no_antrian' => $no_antrian,
        'status_cek' => 'B',
  			);

  		$this->insert->simpan_registrasi($data,'registrasi');
  		redirect('admin/registrasi');
  }

  function edit_data()
  {
    $data['content']='admin/registrasi/v_ubah_registrasi';
    $this->load->view('admin/v_index',$data);
  }

  // public function cetak_semua()
  // {
  //   $data['laporan']=$this->laporan->semua();
  //   $this->load->view('admin/laporan/v_laporan_pendaftar', $data);
  // }
  // public function cetak_diterima()
  // {
  //   $data['laporan']=$this->laporan->diterima();
  //   $this->load->view('admin/laporan/v_laporan_terima', $data);
  // }
}
