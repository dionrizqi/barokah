<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
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
		$data['title'] = "Contact";
		$data['desc'] = "Contact List of Adikari Wisesa Indonesia";
		$data['showContact'] = $this->Contact_model->show_contact();
		$this->load->view('page/contact', $data);
	}
	public function act_contact_edit()
	{
		$this->Contact_model->act_edit_contact();
	}
	public function add_message()
	{
		$this->Message_model->act_add();
	}
	
}