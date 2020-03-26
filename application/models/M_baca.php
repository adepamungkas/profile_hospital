<?php
class M_baca extends CI_Model
{

  function tampil()
  {
    $query=$this->db->get('berita');
    if($query ->num_rows()>0)
    {
    return $query->result();
    }
    else
    {
    return array();
    }
  }

  function detail_berita($where,$table)
  {
    return $this->db->get_where($table,$where);
  }

  function per_id($id_berita)
  {
    $this->db->where('id_berita',$id_berita);
    $query=$this->db->get('berita');
    return $query->result();
  }

  function tampil_artikel()
  {
    $query=$this->db->get('artikel');
    if($query ->num_rows()>0)
    {
    return $query->result();
    }
    else
    {
    return array();
    }
  }

  function detail_artikel($where,$table)
  {
    return $this->db->get_where($table,$where);
  }

  function per_id_artikel($id_artikel)
  {
    $this->db->where('id_artikel',$id_artikel);
    $query=$this->db->get('artikel');
    return $query->result();
  }

}

?>
