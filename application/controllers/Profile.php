<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
// 		if ($this->session->userdata('status')!='logged_in') {
// 			redirect('/');
// 		}
		date_default_timezone_set("Asia/Jakarta");
	}
	public function index()
	{
		$data['title'] = "Profile Anda";
		$data['desc'] = "Profile Anda";
		$data['showProfile'] = $this->Users_model->show_user_login();
		$this->load->view('page/profile', $data);
	}
	public function edit()
	{
		$this->Users_model->act_edit();
	}
	
}