<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('status')!='logged_in') {
			redirect('/');
		}
		date_default_timezone_set("Asia/Jakarta");
	}
	public function act_users_add()
	{
		$this->Users_model->act_add();
	}
	public function act_users_delete()
	{
		$id = $this->input->post('id_user');
		$query = $this->Users_model->act_delete($id);
		if ($query == TRUE) {
    			redirect(site_url('dashboard/users'));
    		}else{
                echo "<script>alert('Delete User Failed');location='javascript:history.go(-1)';</script>";
   		}
	}
	public function act_users_edit()
	{
		$this->Users_model->act_edit();
	}
	public function act_users_edit_admin()
	{
		$this->Users_model->act_edit_admin();
	}
	
	
}