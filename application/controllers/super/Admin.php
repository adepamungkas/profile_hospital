<?php
class Admin extends CI_Controller{

 function __construct(){
  parent::__construct();

  if($this->session->userdata('status') != "super_admin"){
   redirect(base_url("login3"));
  }
 }

 function index(){
  $this->load->view('super/v_headeradmin');
  $this->load->view('super/v_indexadmin');
  $this->load->view('super/v_footeradmin');
 }
}
?>
