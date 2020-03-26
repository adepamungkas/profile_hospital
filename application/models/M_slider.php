<?php

class M_slider extends CI_Model
{

  function get_slider()
  {
    return $this->db->get('sliderku');
  }

}


 ?>
