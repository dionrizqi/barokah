<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Minami_istriku extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		date_default_timezone_set("Asia/Jakarta");
	}
	public function index()
	{
		$data['title'] = "Istriku";
		$data['desc'] = "Istrinya Dion";
		$this->load->view('page/minami_istriku', $data);	
	}
	
}