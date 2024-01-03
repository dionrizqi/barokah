<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {
	public function show_produk_home()
	{
		$this->db->order_by('created', 'desc');
		$this->db->limit(3);
		$art = $this->db->get('tbl_produk')->result();
		return $art;
	}
    public function get_produk()
    {
    	$query = $this->db->query("SELECT a.*, b.tag category FROM tbl_produk a, tbl_tag b
		WHERE b.id_tag = a.id_cat ORDER BY created DESC");
        return $query;
    }
	public function get_list_terbaru()
	{
		$query = $this->db->query("SELECT a.*, b.tag category FROM tbl_produk a, tbl_tag b
		WHERE b.id_tag = a.id_cat ORDER BY created DESC LIMIT 3");
        return $query;
	}
    public function get_list($limit, $start)
    {
    	$query = $this->db->query("SELECT a.*, b.tag category FROM tbl_produk a, tbl_tag b
		WHERE b.id_tag = a.id_cat ORDER BY created DESC LIMIT $start, $limit");
        return $query;
    }
	public function get_list_tersedia($limit, $start)
    {
    	$query = $this->db->query("SELECT a.*, b.tag category FROM tbl_produk a, tbl_tag b
		WHERE b.id_tag = a.id_cat AND stok != 0 ORDER BY created DESC LIMIT $start, $limit");
        return $query;
    }
	public function get_list_kategori($limit, $start, $id)
    {
    	$query = $this->db->query("SELECT a.*, b.tag category FROM tbl_produk a, tbl_tag b
		WHERE b.id_tag = a.id_cat AND id_cat = '$id' ORDER BY created DESC");
        return $query;
    }
	public function get_list_search($key)
    {
    	$query = $this->db->query("SELECT a.*, b.tag category FROM tbl_produk a, tbl_tag b
		WHERE b.id_tag = a.id_cat AND nama LIKE '%$key%' ORDER BY created DESC");
        return $query;
    }
    public function show_content($link)
	{
		$query = $this->db->query("SELECT a.*, b.tag category FROM tbl_produk a, tbl_tag b
		WHERE b.id_tag = a.id_cat AND link = '$link'");
        return $query->result();
	}
	public function show_category()
	{
		$art = $this->db->get('tbl_tag');
		return $art;
	}
	public function simpan_keranjang($id, $jumlah, $harga){
		$user = $this->session->userdata('id_user');
		$query = $this->db->insert('tbl_keranjang', array(
			'id_keranjang' => '',
			'id_produk' => $id,
			'id_user' => $user,
			'jumlah' => $jumlah,
			'total' => ($jumlah * $harga)
		));
		if($query == TRUE){
			redirect(site_url('keranjang'));
		}else{
			echo "404 Error";
		}
	}

	private function bukti()
	{
		$config['upload_path'] = './upload/bukti/';
		$config['allowed_types'] = 'jpg|jpeg|png|svg';
		$config['overwrite'] = true;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ($this->upload->do_upload('bukti')) {
			return $this->upload->data('file_name');
		}
	}
	public function insert_keterangan(){
		
		$query = $this->db->insert('tbl_keterangan_beli', array(
			'id_ket' => '',
			'id_user' => $this->session->userdata('id_user'),
			'kurir' => $this->input->post('kurir'),
			'bukti' => $this->bukti()
		  ));
		return $query;
	}
	public function show_produk_id($id){
    	$query = $this->db->query("SELECT a.*, b.tag category FROM tbl_produk a, tbl_tag b
		WHERE b.id_tag = a.id_cat AND id_produk = '$id' ORDER BY created DESC")->result();
        return $query;
	}

	
	private function pictureThumbnail()
	{

		$config['upload_path'] = './upload/thumbnail/';
		$config['allowed_types'] = 'jpg|jpeg|png|svg';
		$config['overwrite'] = true;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('foto')) {
			return $this->upload->data('file_name');
		}
	}
	public function add_produk()
	{
		$cek = $this->db->get_where('tbl_produk',array('nama' => $this->input->post('nama')));
			$no = "";
		if ($cek->num_rows() > 0) {
			$no = $cek->num_rows();
			foreach ($cek->result() as $row) {
				$no++;
			}
		}
		$link = strtolower($this->input->post('nama'));
		$f_link = str_replace(" ","-","$link");
		$fin_link = preg_replace('/[^A-Za-z0-9\-]/', '', $f_link);
		$query = $this->db->insert('tbl_produk', array(
			'id_produk' => '',
			'nama' => $this->input->post('nama'),
			'deskripsi' => $this->input->post('deskripsi'),
			'harga' => $this->input->post('harga'),
			'created' => date('Y-m-d'),
			'stok' => $this->input->post('stok'),
			'thumbnail' => $this->pictureThumbnail(),
			'link' => $fin_link.$no,
			'id_cat' => $this->input->post('kategori')
		));
		if ($query == TRUE) {
			redirect(site_url('dashboard/produk'));
		}else{
			echo "<script>alert('Add Produk Failed');location='javascript:history.go(-1)';</script>";
		}
	}

	
    public function edit_produk()
    {
    	$cek = $this->db->get_where('tbl_produk',array('nama' => $this->input->post('nama'), 'id_produk !=' => $this->input->post('id')));
    	$no = "";
		if ($cek->num_rows() > 0) {
			$no = $cek->num_rows();
			foreach ($cek->result() as $row) {
				$no++;
			}
		}

    	$link = strtolower($this->input->post('nama'));
		$f_link = str_replace(" ","-","$link");
		$fin_link = preg_replace('/[^A-Za-z0-9\-]/', '', $f_link);
    	if (!empty($_FILES["foto"]["name"])) {
            $imgH = $this->pictureThumbnail();
        }else{
            $imgH = $this->input->post('fotolama');
        }

        $query = $this->db->update('tbl_produk', array(
            'nama' => $this->input->post('nama'),
			'deskripsi' => $this->input->post('deskripsi'),
			'harga' => $this->input->post('harga'),
			'stok' => $this->input->post('stok'),
			'thumbnail' => $imgH,
			'link' => $fin_link.$no,
			'id_cat' => $this->input->post('kategori')
        ), array(
            'id_produk' => $this->input->post('id')
        ));
        if ($query == TRUE) {
            redirect(site_url('dashboard/produk'));
        }else{
            echo "<script>alert('Update Produk Failed');location='javascript:history.go(-1)';</script>";
        }
    }
}
