<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		
		date_default_timezone_set("Asia/Jakarta");
	}
  public function index()
	{
		$data['title'] = "Produk";
		$data['desc'] = "Produk Toko Barokah";
		$this->load->library('pagination');
		$config['base_url'] = base_url('produk/index'); //site url
        $config['total_rows'] = $this->db->count_all('tbl_produk'); //total row
        $config['per_page'] = 6;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      	$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item">';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = '<li class="page-item active"><a class="page-link">';
        $config['cur_tag_close']    = '</a></li>';
        $config['next_tag_open']    = '<li class="page-item">';
        $config['next_tagl_close']  = '</li>';
        $config['prev_tag_open']    = '<li class="page-item">';
        $config['prev_tagl_close']  = 'Next</li>';
        $config['first_tag_open']   = '<li class="page-item">';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open']    = '<li class="page-item">';
        $config['last_tagl_close']  = '</li>';
        
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['showProduk'] = $this->Produk_model->get_list($config["per_page"], $data['page']);
        $data['pagination'] = $this->pagination->create_links();
        $data['showCategory'] = $this->Produk_model->show_category()->result();
		$this->load->view('page/produk', $data);
	}

  public function tersedia()
	{
		$data['title'] = "Produk Tersedia";
		$data['desc'] = "Produk Toko Barokah";
		$this->load->library('pagination');
		$config['base_url'] = base_url('produk/tersedia/index'); //site url
        $config['total_rows'] = $this->db->where('stok !=',0)->from("tbl_produk")->count_all_results(); //total row
        $config['per_page'] = 6;  //show record per halaman
        $config["uri_segment"] = 4;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      	$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item">';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = '<li class="page-item active"><a class="page-link">';
        $config['cur_tag_close']    = '</a></li>';
        $config['next_tag_open']    = '<li class="page-item">';
        $config['next_tagl_close']  = '</li>';
        $config['prev_tag_open']    = '<li class="page-item">';
        $config['prev_tagl_close']  = 'Next</li>';
        $config['first_tag_open']   = '<li class="page-item">';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open']    = '<li class="page-item">';
        $config['last_tagl_close']  = '</li>';
        
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['showProduk'] = $this->Produk_model->get_list_tersedia($config["per_page"], $data['page']);
        $data['pagination'] = $this->pagination->create_links();
        $data['showCategory'] = $this->Produk_model->show_category()->result();
		$this->load->view('page/produk/tersedia', $data);
	}

  public function terbaru()
	{
		$data['title'] = "Produk Terbaru";
		$data['desc'] = "Produk Toko Barokah";
    $data['showCategory'] = $this->Produk_model->show_category()->result();
    $data['showProduk'] = $this->Produk_model->get_list_terbaru();
        
		$this->load->view('page/produk/terbaru', $data);
	}

  public function category($id)
	{
		$data['title'] = "Kategori";
		$data['desc'] = "Produk Toko Barokah";
		$this->load->library('pagination');
		$config['base_url'] = base_url('produk/category/index'); //site url
        $config['total_rows'] = $this->db->where('id_cat',$id)->from("tbl_produk")->count_all_results(); //total row
        $config['per_page'] = 6;  //show record per halaman
        $config["uri_segment"] = 4;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      	$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item">';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = '<li class="page-item active"><a class="page-link">';
        $config['cur_tag_close']    = '</a></li>';
        $config['next_tag_open']    = '<li class="page-item">';
        $config['next_tagl_close']  = '</li>';
        $config['prev_tag_open']    = '<li class="page-item">';
        $config['prev_tagl_close']  = 'Next</li>';
        $config['first_tag_open']   = '<li class="page-item">';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open']    = '<li class="page-item">';
        $config['last_tagl_close']  = '</li>';
        
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['showProduk'] = $this->Produk_model->get_list_kategori($config["per_page"], $data['page'], $id);
        $data['pagination'] = $this->pagination->create_links();
        $data['showCategory'] = $this->Produk_model->show_category()->result();
		$this->load->view('page/produk/kategori', $data);
	}
  public function search()
  {
    $key = $this->input->post('search');
    $data['title'] = "Kategori";
	$data['desc'] = "Produk Toko Barokah";
	$data['showProduk'] = $this->Produk_model->get_list_search($key);
    $data['showCategory'] = $this->Produk_model->show_category()->result();
	$this->load->view('page/produk/search', $data);
  }

	public function show($link){
		$data['showConArt'] = $this->Produk_model->show_content($link, 'tbl_produk');
		$data['title'] = $this->db->query("select nama from tbl_produk where link = '$link' ")->result_array()[0]['nama'];
		$data['desc'] = "Lihat Produk";
		$this->load->view('page/produk/show', $data);
	}
	
  public function act_keranjang(){
    $id = $this->input->post('id');
    $jumlah = $this->input->post('jumlah');
    $harga = $this->input->post('harga');

    $this->Produk_model->simpan_keranjang($id, $jumlah, $harga);
  }

  public function beli(){
    $this->Produk_model->insert_keterangan();
    $last = $this->db->insert_id();
    $result = array();
    $result2 = array();
    foreach($_POST['id_keranjang'] as $key => $val){
      $result[] = array(
        'id_beli' => '',
        'id_produk' => $_POST['id_produk'][$key],
        'id_ket' => $last,
        'nama' => $_POST['nama'][$key],
        'email' => $_POST['email'][$key],
        'alamat' => $_POST['alamat'][$key],
        'jumlah' => $_POST['jumlah'][$key],
        'total' => $_POST['total'][$key],
        'keterangan' => $_POST['keterangan'][$key],
        'status' => 'Diproses',
        'resi' => 'Belum Ada'
      );
      $result2[] = array(
        'id_produk' => $_POST['id_produk'][$key],
        'stok' => $_POST['stok'][$key] - $_POST['jumlah'][$key]
      );
    }
    $this->db->insert_batch('tbl_pembelian', $result);
    $this->db->update_batch('tbl_produk', $result2, 'id_produk');  
    
    $this->db->where_in('id_keranjang', $_POST['id_keranjang']);
    $this->db->delete('tbl_keranjang');
    redirect(site_url('pemesanan'));
  }
  
  public function add_produk(){
    $this->Produk_model->add_produk();
  }

  public function add_category(){
    $query = $this->db->insert('tbl_tag', array(
      'id_tag' => '',
      'tag' => $this->input->post('nameTag')
    ));
    if($query == TRUE){
      redirect(site_url('dashboard/category'));
    }else{
      echo "404 Error";
    }
  }

  public function edit_produk(){
    $this->Produk_model->edit_produk();
  }

  public function delete_produk(){
    $id_produk = $this->input->post('id_produk');
    $query = $this->db->delete('tbl_produk', array('id_produk' => $id_produk));
    if($query == TRUE){
      redirect(site_url('dashboard/produk'));
    }else{
      echo "404 Error";
    }
  }

  public function delete_category(){
    $id_tag = $this->input->post('id_tag');
    $query = $this->db->delete('tbl_tag', array('id_tag' => $id_tag));
    if($query == TRUE){
      redirect(site_url('dashboard/category'));
    }else{
      echo "404 Error";
    }
  }

  public function edit_category(){
    $id_tag = $this->input->post('id_tag');
    $query = $this->db->update('tbl_tag', array(
      'tag' => $this->input->post('nameTag')),
      array(
        'id_tag' => $id_tag
      )
    );
    if($query == TRUE){
      redirect(site_url('dashboard/category'));
    }else{
      echo "404 Error";
    }
  }
}