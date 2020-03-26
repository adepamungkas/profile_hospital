 <?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Library Codeigniter Laporan v0.1
 * Oleh Romanda Hidayat
 * 6-6-2018
 */

class Laporan {

   protected $CI;

   public function __construct()
   {
     $this->CI =& get_instance();
     $this->CI->load->model('M_pendaftaran','daftar');
   }
   public function semua()
   {
     $get_laporan=$this->CI->daftar->get_all();
     return $get_laporan;
   }
   public function diterima()
   {
     $get_laporan=$this->CI->daftar->get_all_terima();
     return $get_laporan;
   }
   public function ditolak()
   {
     $get_laporan=$this->CI->daftar->get_all_tolak();
     return $get_laporan;
   }
 }
