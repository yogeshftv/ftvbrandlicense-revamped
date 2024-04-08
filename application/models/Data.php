<?php

class Data extends CI_Model
{

    public function get_meta_details()
    {
       $query = $this->db->get_where('meta_content', array('status' => 0));
        return $query->result();

    }

    
}