<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_berita');
        if ($_SESSION['status'] != TRUE) {
			echo "<script>alert('Gagal Akses Masuk'); window.location='".site_url('welcome/login')."'</script>";
        }
    }

    public function index()
    {
        $data['berita'] = $this->M_berita->beritaAll();
        $this->load->view('template/header');
        $this->load->view('admin/home',$data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_message('required','%s masih kosong, silahkan diisi');
        $judul = $this->input->post('judul',TRUE);       
        $deskripsi = $this->input->post('deskripsi',TRUE);       
        $foto = $this->input->post('foto',TRUE);       
        if($this->form_validation->run() == FALSE){
            $this->load->view('template/header');
            $this->load->view('admin/home_tambah');
            $this->load->view('template/footer');
        }else {
            $data = [
                'judul' => $judul,
                'deskripsi' => $deskripsi
            ];
            $this->M_berita->tambah($data);
            redirect(site_url('home'));
        }
    }
}