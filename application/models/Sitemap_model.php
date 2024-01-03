<?php
class Sitemap_model extends CI_Model {
  
    function __construct()
    {
        parent::__construct();
    }
     
    function generate()
    {
        $this->db->select('link, created, pdf, tag');
        $this->db->from('tbl_articles');
        $this->db->order_by('id_articles',"DESC");
        $query = $this->db->get();
  
        return $query->result();
    }
}