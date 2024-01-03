<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('status')!='logged_in') {
			redirect('/');
		}
		date_default_timezone_set("Asia/Jakarta");
	}

	public function index()
	{
		$data['countProduk'] = $this->Produk_model->get_produk()->num_rows();
		$data['countPemesanan'] = $this->Pemesanan_model->get_all()->num_rows();
		$data['countUser'] = $this->Users_model->show_users()->num_rows();
		$data['countCategory'] = $this->Produk_model->show_category()->num_rows();
		$data['page_view'] = 'admin/dashboard';
		$this->load->view('admin/index', $data);
	}
	public function contact()
	{
		$data['showContact'] = $this->Contact_model->show_contact();
		$data['page_view'] = 'admin/contact/contact_list.php';
		$this->load->view('admin/index', $data);
	}
	public function contact_edit($id)
	{
		$where = array('id_contact' => $id);
		$data['showCnId'] = $this->Contact_model->get_contact($where,'tbl_contact');
		$data['page_view'] = 'admin/contact/contact_edit';
		$this->load->view('admin/index', $data);
	}
	public function faq()
	{
		$data['showFaq'] = $this->Faq_model->show_faq();
		$data['page_view'] = 'admin/faq/faq_list.php';
		$this->load->view('admin/index', $data);
	}
	public function faq_add()
	{	
		$data['page_view'] = 'admin/faq/faq_add';
		$this->load->view('admin/index', $data);
	}
	public function faq_edit($id)
	{
		$where = array('id_faq' => $id);
		$data['showFId'] = $this->Faq_model->edit_faq($where,'tbl_faq');
		$data['page_view'] = 'admin/faq/faq_edit';
		$this->load->view('admin/index', $data);
	}
	public function users()
	{
		$data['showUser'] = $this->Users_model->show_users()->result();
		$data['page_view'] = 'admin/users/users_list.php';
		$this->load->view('admin/index', $data);
	}
	public function user_add()
	{	
		$data['page_view'] = 'admin/users/users_add';
		$this->load->view('admin/index', $data);
	}
	public function users_edit($id)
	{
		$where = array('id_user' => $id);
		$data['showUId'] = $this->Users_model->edit_user($where,'tbl_user');
		$data['page_view'] = 'admin/users/users_edit';
		$this->load->view('admin/index', $data);
	}
	public function produk()
	{
		$data['showProduk'] = $this->Produk_model->get_produk()->result();
		$data['page_view'] = 'admin/produk/produk_list';
		$this->load->view('admin/index', $data);
	}
	public function produk_add()
	{
		$data['showTag'] = $this->Produk_model->show_category()->result();
		$data['page_view'] = 'admin/produk/produk_add';
		$this->load->view('admin/index', $data);	
	}
	public function produk_edit($id)
	{
		$data['showTag'] = $this->Produk_model->show_category()->result();
		$id_produk = $id;
		$data['showArId'] = $this->Produk_model->show_produk_id($id);
		$data['page_view'] = 'admin/produk/produk_edit';
		$this->load->view('admin/index', $data);
	}
	public function category()
	{
		$data['showCategory'] = $this->Produk_model->show_category()->result();
		$data['page_view'] = 'admin/produk/category';
		$this->load->view('admin/index', $data);
	}
	public function message()
	{
		$data['showMessage'] = $this->Message_model->show_message();
		$data['page_view'] = 'admin/message/message_list.php';
		$this->load->view('admin/index', $data);
	}
	public function pemesanan()
	{
		$data['showPesan'] = $this->Pemesanan_model->get_all()->result();
		$data['page_view'] = 'admin/pemesanan/pesan_list';
		$this->load->view('admin/index', $data);
	}

}