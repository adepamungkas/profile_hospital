<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_pasien', 'insert');
    $this->load->helper('url');

    //Codeigniter : Write Less Do More
    if($this->session->userdata('status') != "login"){
     redirect('login');
    }

  }
  function index()
  {
    $data['pasien']=$this->insert->get_all_pasien();
    $data['content']='admin/pasien/v_pasien';
    $this->load->view('admin/v_index', $data);
  }

  function tambah_data()
  {
    $data['content']='admin/pasien/v_tambah_pasien';
    $this->load->view('admin/v_index', $data);
  }

  function simpan_data()
  {
      $nama_pasien = $this->input->post('nama_pasien');
      $alamat = $this->input->post('alamat');
      $no_telepon = $this->input->post('no_telepon');

      $data = array(
        'nama_pasien' => $nama_pasien,
        'alamat' => $alamat,
        'no_telepon' => $no_telepon,
        'status_pasien'=>'N',
        );
      $this->insert->simpan_pasien($data,'pasien');
      redirect('admin/pasien');
  }

  function edit_data($id_pasien)
  {
    $where = array('id_pasien' => $id_pasien);
    $data['pasien'] = $this->insert->edit_pasien($where,'pasien')->result();
    $data['content']='admin/pasien/v_ubah_pasien';
    $this->load->view('admin/v_index',$data);
  }

  function update_data()
  {
    $id_pasien = $this->input->post('id_pasien');
    $nama_pasien = $this->input->post('nama_pasien');
    $status_pasien = $this->input->post('status_pasien');
    $alamat = $this->input->post('alamat');
    $no_telepon = $this->input->post('no_telepon');

    $data = array(
      'nama_pasien' => $nama_pasien,
      'alamat' => $alamat,
      'no_telepon' => $no_telepon,
    );

    $where = array(
      'id_pasien' => $id_pasien
    );

    $this->insert->update_pasien($where,$data,'pasien');
    redirect('admin/pasien');
  }

  // fungsi hapus data tersimpan
  function delete_data($id_pasien)
  {
    $where = array('id_pasien' => $id_pasien);
    $this->insert->delete_pasien($where,'pasien');
    redirect('admin/pasien');
  }

}
