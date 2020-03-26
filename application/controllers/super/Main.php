<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('M_registrasi','registrasi');
    $this->load->model('M_dokter','dokter');
    $this->load->model('M_antrian','antrian');

    if($this->session->userdata('status') != "super_admin")
    {
     redirect('login3');
    }
  }

  function index()
  {
    $data['show_dokter']=$this->dokter->tampil_join();
    $data['content']='super/v_dashboard';
    $this->load->view('super/v_index', $data);
  }

  function antrian_dokter($id_dokter)
  {
    $data['show_dokter']=$this->dokter->tampil_join();
    $data['get_dokter']=$this->registrasi->get_dokter($id_dokter);
    $data['semua_antrian1']=$this->registrasi->select_pendaftaran_join($id_dokter);
    $data['admin2'] = $this->antrian->tampil_join_admin($id_dokter);
    $data['content']='super/dokter/v_semua_antrian';
    $this->load->view('super/v_index',$data);
  }

  function antrian($id_dokter)
  {
    $data['admin2'] = $this->antrian->tampil_join_admin($id_dokter);
    $data['content']='super/antrian/v_antrian';
    $this->load->view('super/v_index',$data);
  }

}
