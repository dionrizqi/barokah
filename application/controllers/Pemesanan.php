<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {
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
		$data['title'] = "List Pemesanan";
		$data['desc'] = "List Pemesanan";
        $data['showAll'] = $this->Pemesanan_model->show_all();
		$this->load->view('page/pemesanan', $data);
	}
	public function edit_status(){
		$this->Pemesanan_model->edit_status();
	}
	public function delete_pesan(){
		$id_beli = $this->input->post('id_beli');
		$query = $this->db->delete('tbl_pembelian', array('id_beli' => $id_beli));
		if($query == TRUE){
			redirect(site_url('dashboard/pemesanan'));
		}else{
			echo "404 Error";
		}
	}
}