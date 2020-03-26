<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller{

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
    $data['dokter2'] = $this->insert->tampil_join();
    $data['content']='admin/dokter/v_dokter';
    $this->load->view('admin/v_index', $data);
  }

  function tambah_data()
  {
    $data['poli']=$this->insert->isi_poli();
    $data['status_dokter']=$this->insert->isi_status();
    $data['content']='admin/dokter/v_tambah_dokter';
    $this->load->view('admin/v_index', $data);
  }

  function simpan_data(){
      $kode_dokter = $this->input->post('kode_dokter');
      $nama_dokter = $this->input->post('nama_dokter');
      $id_poli = $this->input->post('id_poli');
      $status_dokter = $this->input->post('status_dokter');

      $data = array(
        'kode_dokter' => $kode_dokter,
        'nama_dokter' => $nama_dokter,
        'id_poli' => $id_poli,
        'status_dokter'=>$status_dokter,
        );
      $this->insert->simpan_dokter($data,'dokter');
      redirect('admin/dokter');
    }

  function edit_data($id_dokter)
  {
      $where = array('id_dokter' => $id_dokter);
      $data['dokter'] = $this->insert->edit_dokter($where,'dokter')->result();
      $data['poli']=$this->insert->isi_poli();
      $data['status_dokter']=$this->insert->isi_status();
      $data['content']='admin/dokter/v_ubah_dokter';
      $this->load->view('admin/v_index',$data);
  }

  function update_data()
  {
    $id_dokter = $this->input->post('id_dokter');
    $kode_dokter = $this->input->post('kode_dokter');
    $nama_dokter = $this->input->post('nama_dokter');
    $id_poli = $this->input->post('id_poli');
    $status_dokter = $this->input->post('status_dokter');

    $data = array(
      'kode_dokter' => $kode_dokter,
      'nama_dokter' => $nama_dokter,
      'id_poli' => $id_poli,
      'status_dokter' => $status_dokter,
    );

    $where = array(
      'id_dokter' => $id_dokter
    );

    $this->insert->update_dokter($where,$data,'dokter');
    redirect('admin/dokter');
  }

  // fungsi hapus data tersimpan
  function delete_data($id_dokter)
  {
    $where = array('id_dokter' => $id_dokter);
    $this->insert->delete_dokter($where,'dokter');
    redirect('admin/dokter');
  }

}
