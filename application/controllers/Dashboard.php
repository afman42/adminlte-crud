<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ($_SESSION['status'] != TRUE) {
			echo "<script>alert('Gagal Akses Masuk'); window.location='".site_url('welcome/login')."'</script>";
        }
    }

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('admin/dashboard');
        $this->load->view('template/footer');
    }
}