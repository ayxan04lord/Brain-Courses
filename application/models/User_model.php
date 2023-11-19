<?php 
class User_model extends CI_Model{
    
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_courses(){
        // return $this->db->get('courses')->result_array();
        return $this->db->order_by('c_id','DESC')->join('category','cg_id=c_category', 'left')->get("courses")->result_array();
    }

    public function get_slider(){
        return $this->db->get('slider')->result_array();
    }

    public function get_all_partners(){
        return $this->db->get('partners')->result_array();
    }
}