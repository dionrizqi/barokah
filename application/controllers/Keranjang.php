<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		date_default_timezone_set("Asia/Jakarta");
	}
	public function index()
	{
		$data['title'] = "Keranjang";
		$data['desc'] = "Keranjang Anda";
		$data['showKeranjang'] = $this->Keranjang_model->show_keranjang();
		$data['cekKeranjang'] = $this->Keranjang_model->cek_keranjang();
		$this->load->view('page/keranjang', $data);	
	}
	public function hapus()
	{
		$u = $this->Keranjang_model->hapus();
		echo json_encode($u);
	}

	
}