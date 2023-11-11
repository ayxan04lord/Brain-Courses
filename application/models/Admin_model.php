<?php
 
class Admin_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
 
    public function courses_insert($data)
    {
        $this->db->insert("courses", $data);
    }

    public function courses_get_all(){
        return $this->db->get("courses")->result_array();

    }

    public function courses_get_id($id){
        return $this->db->where('c_id',$id)->get("courses")->row_array();

    }
}