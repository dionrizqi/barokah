<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

public function index()
	{
		$data['title'] = "Login";
		$data['desc'] = "Login page";
		$this->load->view('login', $data);
	}
	public function actlogin()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => md5($password)
		);
		$cek = $this->Login_model->cek_login("tbl_user", $where)->num_rows();
		if ($cek > 0) {
			$isi = $this->Login_model->cek_login("tbl_user", $where)->row();
			$dataSes = array(
				'id_user' => $isi->id_user,
				'name' => $isi->name,
				'email' => $isi->email,
				'position' => $isi->position,
				'alamat' => $isi->alamat,
				'category' => $isi->category,
				'avatar' => $isi->avatar,
				'status' => 'logged_in'
			);
			$this->session->set_userdata($dataSes);
			if($this->session->userdata('category') == 0){
				redirect(base_url('dashboard'));		
			}else{
				redirect(base_url('/'));
			}
		}else{
			echo "<script>alert('Invalid Username or Password');location='javascript:history.go(-1)';</script>";
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}
