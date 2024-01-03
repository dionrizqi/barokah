<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Sitemap extends CI_Controller {
 
 public function index(){
     $data['artikel'] = $this->Sitemap_model->generate();
     $this->load->view('articles_sitemap',$data);
 }
 
}