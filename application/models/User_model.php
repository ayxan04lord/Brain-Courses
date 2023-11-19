<?php 
class User_model extends CI_Model{
    
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_courses(){
        return $this->db->get('courses')->result_array();
    }
}