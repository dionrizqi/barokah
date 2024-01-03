<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang_model extends CI_Model {
    public function show_keranjang()
    {
        $id_user = $this->session->userdata('id_user');
        $query = $this->db->query("SELECT a.*, b.nama produk, b.harga harga, b.thumbnail img, c.name user,
        c.email email, c.alamat alamat, b.stok stok 
        FROM tbl_keranjang a, tbl_produk b, tbl_user c WHERE 
        a.id_user = '$id_user' AND a.id_produk = b.id_produk AND a.id_user = c.id_user ");
        return $query;
    }
    public function cek_keranjang()
    {
        $id_user = $this->session->userdata('id_user');
        $query = $this->db->query("SELECT * FROM tbl_keranjang WHERE id_user = '$id_user'");
        return $query;
    }
    public function hapus()
    {
        $id = $this->input->post('idnya');
        $query= $this->db->delete('tbl_keranjang', array('id_keranjang' => $id));
        return $query;
    }
}