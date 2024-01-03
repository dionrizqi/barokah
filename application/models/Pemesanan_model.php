<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan_model extends CI_Model {
    public function show_all(){
        $id = $this->session->userdata('id_user');
        $query = $this->db->query("SELECT a.*, b.nama produk, b.thumbnail img, 
            c.kurir kurir, c.bukti bukti
            FROM tbl_pembelian a, tbl_produk b, tbl_keterangan_beli c WHERE
            a.id_ket = c.id_ket AND a.id_produk = b.id_produk AND c.id_user = '$id'
            ORDER BY id_beli DESC
        ")->result();
        return $query;
    }

    public function get_all(){
        $id = $this->session->userdata('id_user');
        $query = $this->db->query("SELECT a.*, b.nama produk, b.thumbnail img, 
            c.kurir kurir, c.bukti bukti
            FROM tbl_pembelian a, tbl_produk b, tbl_keterangan_beli c WHERE
            a.id_ket = c.id_ket AND a.id_produk = b.id_produk
            ORDER BY id_beli DESC
        ");
        return $query;
    }

    public function edit_status(){
        
        if($this->input->post('txtresi') == ''){
            $resi = "Belum Ada";
        }else{
            $resi = $this->input->post('txtresi');
        }

        $query = $this->db->update('tbl_pembelian', array(
            'status' => $this->input->post('status'),
            'resi' => $resi
        ), array(
            'id_beli' => $this->input->post('id_beli')
        ));

        if($query == TRUE){
            redirect(site_url('dashboard/pemesanan'));
        }else{
            echo "404 Error";
        }
    }
}