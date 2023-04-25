<?php

class Posts_model extends CI_Model{

    public function __construct(){

        $this->load->database();
    }

    public function get_posts(){

        $query = $this->db->get('post');
        return $query->result_array();
    }
}