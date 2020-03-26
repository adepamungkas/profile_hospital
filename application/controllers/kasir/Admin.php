<?php
class Admin extends CI_Controller{

 function __construct(){
  parent::__construct();

  if($this->session->userdata('status') != "login2"){
   redirect(base_url("login2"));
  }
 }

 function index(){
  $this->load->view('kasir/v_headeradmin');
  $this->load->view('kasir/v_indexadmin');
  $this->load->view('kasir/v_footeradmin');
 }
}
?>
