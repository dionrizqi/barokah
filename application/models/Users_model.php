<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {
	public function show_user_login()
	{
		$id = $this->session->userdata('id_user');
		$art = $this->db->get_where('tbl_user', array('id_user' => $id))->result();
		return $art;
	}
	public function show_users()
	{
		$art = $this->db->get('tbl_user');
		return $art;
	}
	public function act_add()
	{
		if($this->input->post('level') == 0){
			$level = 'Admin';
		}else{
			$level = 'User';
		}
		$query = $this->db->insert('tbl_user', array(
			'id_user' => '',
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
			'alamat' => $this->input->post('alamat'),
			'position' => $level,
			'avatar' => NULL,
			'category' => $this->input->post('level')
		));
		if ($query == TRUE) {
			redirect(site_url('dashboard/users'));
		}else{
			echo "<script>alert('Add User Failed');location='javascript:history.go(-1)';</script>";
		}
	}
    public function act_delete($id)
    {
    	return $this->db->delete('tbl_user', array('id_user' => $id));
    }
    public function edit_user($where)
    {
        return $this->db->get_where('tbl_user', $where)->result();
    }
    public function act_edit()
    {
    	if ($this->input->post('password') != NULL) {
	    	$query = $this->db->update('tbl_user', array(
	            'name' => $this->input->post('name'),
	            'email' => $this->input->post('email'),
				'alamat' => $this->input->post('alamat'),
	            'password' => md5($this->input->post('password'))
	        ), array(
	            'id_user' => $this->input->post('id')
	        ));
	        if ($query == TRUE) {
	            echo "<script>location='javascript:history.go(-1)';</script>";
	        }else{
	            echo "<script>alert('Update User Failed');location='javascript:history.go(-1)';</script>";
	        }
    	}else{
    		$query = $this->db->update('tbl_user', array(
	            'name' => $this->input->post('name'),
	            'email' => $this->input->post('email'),
				'alamat' => $this->input->post('alamat')
	        ), array(
	            'id_user' => $this->input->post('id')
	        ));
	        if ($query == TRUE) {
	            echo "<script>location='javascript:history.go(-1)';</script>";
	        }else{
	            echo "<script>alert('Update User Failed');location='javascript:history.go(-1)';</script>";
	        }
    	}
    }
	
    public function act_edit_admin()
    {
		if($this->input->post('level') == 0){
			$level = 'Admin';
		}else{
			$level = 'User';
		}
    	if ($this->input->post('password') != NULL) {
	    	$query = $this->db->update('tbl_user', array(
	            'name' => $this->input->post('name'),
	            'email' => $this->input->post('email'),
				'alamat' => $this->input->post('alamat'),
	            'password' => md5($this->input->post('password')),
				'position' => $level,
				'category' => $this->input->post('level')
	        ), array(
	            'id_user' => $this->input->post('id')
	        ));
	        if ($query == TRUE) {
	            redirect(site_url('dashboard/users'));
	        }else{
	            echo "<script>alert('Update User Failed');location='javascript:history.go(-1)';</script>";
	        }
    	}else{
    		$query = $this->db->update('tbl_user', array(
	            'name' => $this->input->post('name'),
	            'email' => $this->input->post('email'),
				'alamat' => $this->input->post('alamat'),
				'position' => $level,
				'category' => $this->input->post('level')
	        ), array(
	            'id_user' => $this->input->post('id')
	        ));
	        if ($query == TRUE) {
	            redirect(site_url('dashboard/users'));
	        }else{
	            echo "<script>alert('Update User Failed');location='javascript:history.go(-1)';</script>";
	        }
    	}
    }
}
