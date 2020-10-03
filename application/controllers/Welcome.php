<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome/login');
	}

	public function login()
	{
		$this->load->model('M_login');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_message('required','%s masih kosong, silahkan diisi');
        $this->form_validation->set_message('trim','%s diisi tanpa jarak');
        $username = $this->input->post('username',TRUE);
		$password = $this->input->post('password',TRUE);
		$where = array(
			'username' => $username,
			'password' => $password
		);
		$cek = $this->M_login->cek_login($where)->num_rows();
        $nampil = $this->M_login->cek_login($where)->row();
        //var_dump($cek);
        $url_kembali = site_url('welcome');
        $url_login = site_url('dashboard');
        if($this->form_validation->run() == FALSE){
            $this->load->view('welcome/login');
        }else {
            if($cek > 0){
                $_SESSION['username'] = $nampil->username;
                $_SESSION['id'] = $nampil->id;
                $_SESSION['status'] = TRUE;
                echo "<script>alert('Berhasil Login'); window.location='$url_login'</script>";
            }else{
                echo "<script>alert('Gagal Login'); window.location='$url_kembali'</script>";
            }                
        }
	}

	public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('welcome'));
    }
}
