<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 public function __construct()
	{
		parent:: __construct();
		date_default_timezone_set("Asia/Jakarta");
	}
	public function index()
	{
		$data['title'] = "Toko Barokah";
		$data['desc'] = "Toko Barokah";
		$data['showContact'] = $this->Contact_model->show_contact();
		$data['showProduk'] = $this->Produk_model->show_produk_home();
		$this->load->view('homelanding', $data);
	}
// 	public function clients()
// 	{
// 		$data['title'] = "Clients";
// 		$data['desc'] = "Clients of Adikari Wisesa Indonesia";
// 		$data['showClients'] = $this->Clients_model->show_clients();
// 		$this->load->view('page/clients', $data);
// 	}
// 	public function articles()
// 	{
// 		$data['title'] = "Articles";
// 		$data['desc'] = "What's new from Adikari Wisesa Indonesia";
// 		$this->load->library('pagination');
// 		$config['base_url'] = site_url('articles/'); //site url
//         $config['total_rows'] = $this->db->count_all('tbl_articles');; //total row
//         $config['per_page'] = 6;  //show record per halaman
//         $config["uri_segment"] = 3;  // uri parameter
//         $choice = $config["total_rows"] / $config["per_page"];
//         $config["num_links"] = floor($choice);
 
//         // Membuat Style pagination untuk BootStrap v4
//       		$config['first_link']       = 'First';
//         $config['last_link']        = 'Last';
//         $config['next_link']        = 'Next';
//         $config['prev_link']        = 'Prev';
//         $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
//         $config['full_tag_close']   = '</ul></nav></div>';
//         $config['num_tag_open']     = '<li class="page-item">';
//         $config['num_tag_close']    = '</li>';
//         $config['cur_tag_open']     = '<li class="page-item active"><a class="page-link">';
//         $config['cur_tag_close']    = '</a></li>';
//         $config['next_tag_open']    = '<li class="page-item">';
//         $config['next_tagl_close']  = '</li>';
//         $config['prev_tag_open']    = '<li class="page-item">';
//         $config['prev_tagl_close']  = 'Next</li>';
//         $config['first_tag_open']   = '<li class="page-item">';
//         $config['first_tagl_close'] = '</li>';
//         $config['last_tag_open']    = '<li class="page-item">';
//         $config['last_tagl_close']  = '</li>';
//         $this->pagination->initialize($config);
//         $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
//         $data['pagination'] = $this->pagination->create_links();
//         $data['showArticles'] = $this->Articles_model->get_list($config["per_page"], $data['page']);
// 		$this->load->view('page/articles', $data);
// 	}
// 	public function contact()
// 	{
// 		$data['title'] = "Contact";
// 		$data['desc'] = "Contact List of Adikari Wisesa Indonesia";
// 		$data['showContact'] = $this->Contact_model->show_contact();
// 		$this->load->view('page/contact', $data);
// 	}
// 	public function faq()
// 	{
// 		$data['title'] = "Frequently Asked Question";
// 		$data['desc'] = "FAQ of Adikari Wisesa Indonesia";
// 		$data['showFaq'] = $this->Faq_model->show_faq();
// 		$this->load->view('page/faq', $data);
// 	}
// 	public function show_articles($link){
// 		$where = array('link' => $link);
// 		$data['showConArt'] = $this->Articles_model->show_content($where, 'tbl_articles');
// 		$data['title'] = $this->db->query("select subject from tbl_articles where link = '$link' ")->result_array()[0]['subject'];
// 		$data['desc'] = substr($this->db->query("select content from tbl_articles where link = '$link' ")->result_array()[0]['content'], 3, 200);
// 		$this->load->view('page/articles/content', $data);
// 	}
// 	public function tag($tag){
// 		$data['showByTag'] = $this->db->query("select * from tbl_articles where tag = '$tag' or tag2 = '$tag' or tag3 = '$tag' order by created desc")->result();
// 		$data['title'] = "Showing data by Tag";
// 		$data['desc'] = "Showing data by Tag";
// 		$this->load->view('page/articles/showbytag', $data);
// 	}
// 	public function about()
// 	{
// 		$data['title'] = "About";
// 		$data['desc'] = "About Adikari Wisesa";
// 		$data['showAbout'] = $this->About_model->show_about();
// 		$data['showMile'] = $this->About_model->show_mile();
// 		$this->load->view('page/about', $data);	
// 	}
	
// 	public function pdm()
// 	{
// 		$data['title'] = "Predictive Maintenance";
// 		$data['desc'] = "Adikari Wisesa Business of Predictive Maintenance";
// 		$data['showPdm'] = $this->Business_model->show_pdm();
// 		$data['showPdmI'] = $this->Business_model->show_pdm_car();
// 		$this->load->view('page/business/pdm', $data);	
// 	}
// 	public function pm()
// 	{
// 		$data['title'] = "Preventive Maintenance";
// 		$data['desc'] = "Adikari Wisesa Business of Preventive Maintenance";
// 		$data['showPm'] = $this->Business_model->show_pm();
// 		$data['showPmI'] = $this->Business_model->show_pm_car();
// 		$this->load->view('page/business/pm', $data);	
// 	}
// 	public function onm()
// 	{
// 		$data['title'] = "Operation & Maintenance";
// 		$data['desc'] = "Adikari Wisesa Business of Operation & Maintenance";
// 		$data['showOnm'] = $this->Business_model->show_onm();
// 		$data['showOnmI'] = $this->Business_model->show_onm_car();
// 		$this->load->view('page/business/onm', $data);	
// 	}
// 	public function rcm()
// 	{
// 		$data['title'] = "Reliability Center Maintenance";
// 		$data['desc'] = "Adikari Wisesa Business of Reliability Center Maintenance";
// 		$data['showRcm'] = $this->Business_model->show_rcm();
// 		$data['showRcmI'] = $this->Business_model->show_rcm_car();
// 		$this->load->view('page/business/rcm', $data);	
// 	}

// 	public function experiences()
// 	{
// 		$data['title'] = "Experiences";
// 		$data['desc'] = "Experiences List of Adikari Wisesa Indonesia";
// 		$data['showExp'] = $this->Exp_model->show_exp();
// 		$data['showExpF'] = $this->Exp_model->show_exp_first();
// 		$data['showExpS'] = $this->Exp_model->show_exp_second();
// 		$data['showExpT'] = $this->Exp_model->show_exp_third();
// 		$this->load->view('page/experiences', $data);	
// 	}
	public function privacy_policy()
	{
		$data['title'] = "Privacy Policy";
		$data['desc'] = "Privacy Policy of Adikari Wisesa Indonesia";
		$data['showPrivacy'] = $this->Privacy_model->show_privacy();
		$this->load->view('page/privacy', $data);	
	}
	public function terms_condition()
	{
		$data['title'] = "Terms and Condition";
		$data['desc'] = "Terms and Condition of Adikari Wisesa Indonesia";
		$data['showTerms'] = $this->Privacy_model->show_terms();
		$this->load->view('page/terms', $data);
	}
	public function login()
	{
		$data['title'] = "Login Admin";
		$data['desc'] = "Login page Admin";
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
				'category' => $isi->category,
				'avatar' => $isi->avatar,
				'status' => 'logged_in'
			);
		$this->session->set_userdata($dataSes);
		redirect(base_url('dashboard'));		
		}else{
			echo "<script>alert('Invalid Username or Password');location='javascript:history.go(-1)';</script>";
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
	public function add_message()
	{
		$this->Message_model->act_add();
	}
	public function sign_up(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$user = $this->input->post('username');
		$email = $this->input->post('email');
		$pass = $this->input->post('password');

		$query = $this->db->insert('tbl_user', array(
			'id_user' => '',
			'name' => $nama,
			'email' => $email,
			'password' => md5($pass),
			'alamat' => $alamat,
			'position' => 'User',
			'avatar' => NULL,
			'category' => 1
		));

		if($query == TRUE){
			redirect(site_url('login'));
			$this->session->set_flashdata('sukses', 'Akun anda berhasil dibuat silahkan login');
		}else{
			echo "Something is wrong";
		}
		echo "kontol";
	}
// 	public function downloadpdf($pdf)
// 	{
// 		$fileinfo = $this->Articles_model->download($pdf);
//         $file = 'upload/pdf/'.$fileinfo['pdf'];
//         force_download($file, NULL);
// 	}
}
