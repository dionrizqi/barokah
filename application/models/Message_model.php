<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message_model extends CI_Model {
	public function show_message()
	{
		$art = $this->db->get('tbl_message')->result();
		return $art;
	}
	public function act_add()
	{
	    if($this->input->post('nameMs') == NULL OR $this->input->post('emailMs') == NULL OR $this->input->post('subjectMs') == NULL OR $this->input->post('messageMs') == NULL){
	        $this->session->set_flashdata('error', 'Field cannot be empty!');
			echo "<script>location='javascript:history.go(-1)';</script>";
	    }else{
    		$query = $this->db->insert('tbl_message', array(
    			'id_message' => '',
    			'name' => $this->input->post('nameMs'),
    			'email' => $this->input->post('emailMs'),
    			'subject' => $this->input->post('subjectMs'),
    			'message' => $this->input->post('messageMs')
    		));
    		if ($query == TRUE) {
    			$this->session->set_flashdata('success', 'Thank you for your message!');
    			echo "<script>location='javascript:history.go(-1)';</script>";;
    		}else{
    			$this->session->set_flashdata('error', 'Failed to insert message');
    			echo "<script>location='javascript:history.go(-1)';</script>";
    		}
	   }
	}
    public function act_delete($id)
    {
    	return $this->db->delete('tbl_message', array('id_message' => $id));
    }
}
