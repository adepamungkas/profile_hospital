<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poli extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('M_poli', 'insert');
    $this->load->helper('url');

    if($this->session->userdata('status') != "login"){
     redirect('login');
    }

  }

  // halaman index
  function index()
  {
    $data['poli']=$this->insert->get_all_poli();
    $data['content']='admin/poli/v_poli';
    $this->load->view('admin/v_index', $data);
  }

  // fungsi tambah data
  function tambah_data()
  {
    $data['content']='admin/poli/v_tambah_poli';
    $this->load->view('admin/v_index', $data);
  }

  // fungsi simpan data
  function simpan_data()
  {
  		$nama_poli = $this->input->post('nama_poli');
  		$deskripsi = $this->input->post('deskripsi');

  		$data = array(
  			'nama_poli' => $nama_poli,
  			'deskripsi' => $deskripsi,
  			);

  		$this->insert->simpan_poli($data,'poli');
  		redirect('admin/poli');
  	}

  // fungsi edit data
  function edit_data($id_poli)
  {
    $where = array('id_poli' => $id_poli);
    $data['poli'] = $this->insert->edit_poli($where,'poli')->result();
    $data['content']='admin/poli/v_ubah_poli';
    $this->load->view('admin/v_index',$data);
  }

  // fungsi pengiriman data untuk diedit
  function update_data()
  {
  	$id_poli = $this->input->post('id_poli');
  	$nama_poli = $this->input->post('nama_poli');
  	$deskripsi = $this->input->post('deskripsi');

  	$data = array(
  		'nama_poli' => $nama_poli,
  		'deskripsi' => $deskripsi,
  	);

  	$where = array(
  		'id_poli' => $id_poli
  	);

  	$this->insert->update_poli($where,$data,'poli');
  	redirect('admin/poli');
  }

  // fungsi hapus data tersimpan
  function delete_data($id_poli)
  {
    $where = array('id_poli' => $id_poli);
    $this->insert->delete_poli($where,'poli');
    redirect('admin/poli');
  }

}
