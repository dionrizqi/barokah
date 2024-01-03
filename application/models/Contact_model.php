<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model {
    public function show_contact()
    {
        return $this->db->get('tbl_contact')->result();
    }
    public function get_contact($where)
    {
        return $this->db->get_where('tbl_contact', $where)->result();
    }
    public function act_edit_contact()
    {
        $concatAd = $this->input->post('addressCn') ."<br>". $this->input->post('ctPostCn');
        $concatPh = $this->input->post('phone1Cn') ." ". $this->input->post('phone2Cn');
        $query = $this->db->update('tbl_contact', array(
            'address' => $concatAd,
            'phone' => $concatPh,
            'email' => $this->input->post('emailCn'),
            'web' => $this->input->post('webCn'),
            'name' => $this->input->post('nameCn')
        ), array(
            'id_contact' => $this->input->post('id')
        ));
        if ($query == TRUE) {
            redirect(site_url('dashboard/contact'));
        }else{
            echo "<script>alert('Update Contact Failed');location='javascript:history.go(-1)';</script>";
        }
    }
}