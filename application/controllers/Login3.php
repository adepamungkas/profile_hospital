<?php
class Login3 extends CI_Controller{

 function __construct(){
  parent::__construct();
  $this->load->model('data_login3');
  $this->load->library('form_validation');

 }

 function index(){
   if($this->session->userdata('status') != "super_admin")
   {
     $this->load->view('super/v_login');
   }
   else
   {
    redirect('super/main');
   }

 }

 public function cek_login3()
 {
  $this->form_validation->set_rules('username', 'username', 'required');
  $this->form_validation->set_rules('password', 'password', 'required');
  // kondisi validasi data
  if ($this->form_validation->run()==false)
  {
    $this->load->view('super/v_login');
  }
  else
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $where = array(
     'username' => $username,
     'password' => md5($password)
     );
    $cek = $this->data_login3->cek_login3("admin",$where)->num_rows();
      // kondisi pengecekan data admin
      if($cek > 0)
      {
         $data_session = array(
          'nama' => $username,
          'status' => "super_admin"
          );
         $this->session->set_userdata($data_session);
         // tampilkan halaman admin
         redirect('super/main');
      }
      // selain itu tampilkan pesan gagal
      else
      {
        $this->load->view('super/v_login');
       ?>
       <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css"/>
        <div class="alert alert-warning">
          <strong>Login Gagal</strong> Cek Data Login <a href="<?php echo base_url('login3'); ?>" class="alert-link">Ulangi</a>.
        </div>
      <?php
      }
  }
 }

 function logout(){
  $this->session->sess_destroy();
  redirect(base_url('login3'));
 }
}
?>
