<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_berita extends CI_Model {

    public function cek_login($data)
    {
        return $this->db->get_where('admin',$data);   
    }

    public function beritaAll()
    {
        return $this->db->get('berita')->result();
    }

    public function tambah($data)
    {
        return $this->db->insert('berita',$data);
    }
}