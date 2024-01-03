<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq_model extends CI_Model {
	public function show_faq()
	{
		$art = $this->db->get('tbl_faq')->result();
		return $art;
	}
	public function act_add()
	{
		$query = $this->db->insert('tbl_faq', array(
			'id_faq' => '',
			'question' => $this->input->post('questionF'),
			'content' => $this->input->post('descriptionF'),
			'status' => 'show'
		));
		if ($query == TRUE) {
			redirect(site_url('dashboard/faq'));
		}else{
			echo "<script>alert('Add FAQ Failed');location='javascript:history.go(-1)';</script>";
		}
	}
    public function act_delete($id)
    {
    	return $this->db->delete('tbl_faq', array('id_faq' => $id));
    }
    public function edit_faq($where)
    {
        return $this->db->get_where('tbl_faq', $where)->result();
    }
    public function act_edit()
    {
        $query = $this->db->update('tbl_faq', array(
			'question' => $this->input->post('questionF'),
			'content' => $this->input->post('descriptionF'),
			'status' => 'show'
        ), array(
            'id_faq' => $this->input->post('id')
        ));
        if ($query == TRUE) {
            redirect(site_url('dashboard/faq'));
        }else{
            echo "<script>alert('Update FAQ Failed');location='javascript:history.go(-1)';</script>";
        }
    }
}
