<?php
class Data_login3 extends CI_Model
{

 function cek_login3($table,$where)
 {
  return $this->db->get_where($table,$where);
 }

}
?>
