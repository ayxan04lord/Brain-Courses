<?php 
class User_model extends CI_Model{
    
    public function __construct()
    {
        parent::__construct();
    }

    public function get_limit_courses(){
        // return $this->db->get('courses')->result_array();
        return $this->db->order_by('c_id','DESC')->join('category','cg_id=c_category', 'left')->get("courses",6)->result_array();
    }

    public function get_all_courses(){
        // return $this->db->get('courses')->result_array();
        return $this->db->order_by('c_id','DESC')->join('category','cg_id=c_category', 'left')->get("courses")->result_array();
    }

    public function get_pag_courses($config, $page){
        // return $this->db->get('courses')->result_array();
        return $this->db->limit($config['per_page'], $page)->order_by('c_id','DESC')->join('category','cg_id=c_category', 'left')->get("courses")->result_array();
    }

    public function get_target_courses($id){
        return $this->db->where('c_id', $id)->join('category','cg_id=c_category', 'left')->get('courses')->row_array();
    }

    public function get_slider(){
        return $this->db->get('slider')->result_array();
    }

    public function get_limit_partners(){
        // return $this->db->get('courses')->result_array();
        return $this->db->get("partners",6)->result_array();
    }

    public function get_all_partners(){
        return $this->db->get('partners')->result_array();
    }

    public function get_pag_partners($config, $page){
        // return $this->db->get('courses')->result_array();
        return $this->db->limit($config['per_page'], $page)->get("partners")->result_array();
    }
}