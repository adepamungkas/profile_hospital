<?php
class Data_login2 extends CI_Model
{

 function cek_login2($table,$where)
 {
  return $this->db->get_where($table,$where);
 }

}
?>
