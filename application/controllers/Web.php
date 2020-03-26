<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('text');
		$this->load->model('M_poli');
		$this->load->model('M_dokter');
		$this->load->model('M_slider');
		$this->load->model('M_baca');
		$this->load->model('M_jadwal');
	}

	public function index()
	{
		$data['judul']="Utama";
		$data['poli']=$this->M_poli->get_all_poli();
		$data['dokter']=$this->M_dokter->tampil_join();
		$data['slider']=$this->M_slider->get_slider();
		$data['berita']=$this->M_baca->tampil();
		$this->load->view('user/v_header',$data);
		$this->load->view('user/v_slider',$data);
		$this->load->view('user/v_index',$data);
		$this->load->view('user/v_footer',$data);
	}

	function selanjutnya()
	{
		$id_berita=$this->uri->segment(3);
		$data['berita']=$this->M_baca->per_id($id_berita);
		$this->load->view('selanjutnya',$data);
	}

	public function profil()
	{
		$data['judul']="Profil";
		$data['poli']=$this->M_poli->get_all_poli();
		$this->load->view('user/v_header',$data);
		$this->load->view('user/v_profil',$data);
		$this->load->view('user/v_footer',$data);
	}
	public function struktur_organisasi()
	{
		$data['judul']="Struktur Organisasi";
		$data['poli']=$this->M_poli->get_all_poli();
		$this->load->view('user/v_header',$data);
		$this->load->view('user/v_struktur',$data);
		$this->load->view('user/v_footer',$data);
	}

	public function fasilitas()
	{
		$data['judul']="Fasilitas";
		$data['poli']=$this->M_poli->get_all_poli();
		$this->load->view('user/v_header',$data);
		$this->load->view('user/v_fasilitas',$data);
		$this->load->view('user/v_footer',$data);
	}

	public function pendaftaran()
	{
		$data['judul']="Pendaftaran";
		$data['poli']=$this->M_poli->get_all_poli();
		$this->load->view('user/v_header',$data);
		$this->load->view('user/v_pendaftaran',$data);
		$this->load->view('user/v_footer',$data);
	}

	public function berita()
	{
		$data['judul']="Berita";
		$data['poli']=$this->M_poli->get_all_poli();
		$data['berita']=$this->M_baca->tampil();
		$this->load->view('user/v_header',$data);
		$this->load->view('user/v_berita',$data);
		$this->load->view('user/v_footer',$data);
	}

	public function detail_berita($id_berita)
	{
		$data['judul']="Detail Berita";
		$where = array('id_berita' => $id_berita);
		$data['detail_berita'] = $this->M_baca->detail_berita($where,'berita')->result();
		$data['berita']=$this->M_baca->tampil();
		$this->load->view('user/v_header',$data);
		$this->load->view('user/v_detail_berita',$data);
		$this->load->view('user/v_footer',$data);
	}

	public function data_dokter()
	{
		$data['judul']="Data Dokter";
		$data['dokter']=$this->M_dokter->tampil_join();
		$data['poli']=$this->M_poli->get_all_poli();
		$this->load->view('user/v_header',$data);
		$this->load->view('user/v_data_dokter',$data);
		$this->load->view('user/v_footer',$data);
	}

	public function jadwal_dokter()
	{
		$data['judul']="Jadwal Dokter";
		$data['select_join3']=$this->M_jadwal->select_join3();
		$data['poli']=$this->M_poli->get_all_poli();
		$this->load->view('user/v_header',$data);
		$this->load->view('user/v_jadwal_dokter',$data);
		$this->load->view('user/v_footer',$data);
	}

	public function galeri()
	{
		$data['judul']="Galeri";
		$data['poli']=$this->M_poli->get_all_poli();
		$this->load->view('user/v_header',$data);
		$this->load->view('user/v_galeri',$data);
		$this->load->view('user/v_footer',$data);
	}

	public function antrian()
	{
		$data['judul']="Antrian";
		$data['poli']=$this->M_poli->get_all_poli();
		$data['dokter'] = $this->M_dokter->tampil_join();
		$this->load->view('user/v_header',$data);
		$this->load->view('user/v_antrian',$data);
		$this->load->view('user/v_footer',$data);
	}

	public function artikel()
	{
		$data['judul']="Artikel";
		$data['artikel']=$this->M_baca->tampil_artikel();
		$this->load->view('user/v_header',$data);
		$this->load->view('user/v_artikel',$data);
		$this->load->view('user/v_footer',$data);
	}

	public function detail_artikel($id_artikel)
	{
		$data['judul']="Detail Artikel";
		$where = array('id_artikel' => $id_artikel);
		$data['detail_artikel'] = $this->M_baca->detail_artikel($where,'artikel')->result();
		$data['artikel']=$this->M_baca->tampil_artikel();
		$this->load->view('user/v_header',$data);
		$this->load->view('user/v_detail_artikel',$data);
		$this->load->view('user/v_footer',$data);
	}

}
