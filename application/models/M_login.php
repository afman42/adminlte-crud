<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    public function cek_login($data)
    {
        return $this->db->get_where('admin',$data);   
    }
}