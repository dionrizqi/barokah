<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		date_default_timezone_set("Asia/Jakarta");
	}
	public function index()
	{
		$data['title'] = "FAQ";
		$data['desc'] = "FAQ Toko Barokah";
		$data['showFaq'] = $this->Faq_model->show_faq();
		$this->load->view('page/faq', $data);	
	}
	public function act_faq_add()
	{
		$this->Faq_model->act_add();
	}
	
	public function act_faq_delete()
	{
		$id = $this->input->post('id_faq');
		$query = $this->Faq_model->act_delete($id);
		if ($query == TRUE) {
    			redirect(site_url('dashboard/faq'));
    		}else{
                echo "<script>alert('Delete FAQ Failed');location='javascript:history.go(-1)';</script>";
   		}
	}
	public function act_faq_edit()
	{
		$this->Faq_model->act_edit();
	}
	
}