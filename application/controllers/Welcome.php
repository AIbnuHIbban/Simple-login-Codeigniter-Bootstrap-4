<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$this->load->view('welcome_message');
	}

	public function login(){
		$data = array(
			'username' => $this->input->post('username'),
			'password' => sha1($this->input->post('password'))
		);

		$cek = $this->M_Welcome->cekLogin($data)->num_rows();
		$data = $this->M_Welcome->cekLogin($data)->row();

		if ($cek > 0) { // Jika Berhasil
			$sess = array(
				'username' => $data->username,
				'status'   => TRUE
			);

			$this->session->set_userdata($sess);

			redirect('admin/dashboard');
		}else{ // Jika Gagal
			$this->session->set_flashdata('pesan','Maaf Anda Gagal Masuk');
			redirect(base_url());
		}


	}

	public function KeHalamanAdmin(){
		$this->load->view('admin/index');
	}

	public function logout(){
		session_unset('username');
		session_unset('status');
		session_destroy();
		
		redirect(base_url());
	}
}
