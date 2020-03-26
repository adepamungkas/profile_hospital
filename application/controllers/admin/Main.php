<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_dokter', 'insert');
    //Codeigniter : Write Less Do More
    if($this->session->userdata('status') != "login")
    {
     redirect('login');
    }

  }

  function index()
  {
    $data['show_dokter'] = $this->insert->tampil_join();
    $data['content']='admin/v_dashboard';
    $this->load->view('admin/v_index', $data);
  }

}
