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

    public function courses_db_edit($id, $data)
    {
        $this->db->where('c_id',$id)->update('courses', $data);
    }

    public function courses_get_all()
    {

        return $this->db->order_by('c_id','DESC')->join('category','cg_id=c_category', 'left')->get("courses")->result_array();
    }

    public function courses_get_id($id){
        return $this->db->where('c_id',$id)->get("courses")->row_array();
    }

    public function delete_course($id){
        $this->db->where('c_id', $id)->delete('courses');
    }

    public function get_course_details($id)
    {
        return $this->db->order_by('c_id','DESC')->join('category','cg_id=c_category', 'left')->where('c_id', $id)->get('courses')->row_array();
       
    }
    public function slider_insert($data)
    {
        $this->db->insert("slider", $data);
    }

    public function slider_db_edit($id, $data){
        $this->db->where('sl_id',$id)->update('slider', $data);
    }

    public function slider_get_all(){
        return $this->db->get("slider")->result_array();
    }

    public function slider_get_id($id){
        return $this->db->where('sl_id',$id)->get("slider")->row_array();
    }

    public function delete_slider($id){
        $this->db->where('sl_id', $id)->delete('slider');
    }

    public function partners_insert($data)
    {
        $this->db->insert("partners", $data);
    }

    public function partners_get_all(){
        return $this->db->get("partners")->result_array();
    }

    public function partners_get_id($id){
        return $this->db->where('p_id',$id)->get("partners")->row_array();
    }

    public function delete_partners($id){
        $this->db->where('p_id', $id)->delete('partners');
    }

    public function partners_db_edit($id, $data){
        $this->db->where('p_id',$id)->update('partners', $data);
    }

    public function category_insert($data){
        $this->db->insert("category", $data);
    }

    public function category_get_all(){
        return $this->db->get("category")->result_array();
    }

    public function category_get_id($id){
        return $this->db->where('cg_id',$id)->get("category")->row_array();
    }

    public function delete_category($id){
        $this->db->where('cg_id', $id)->delete('category');
    }

    public function category_db_edit($id, $data){
        $this->db->where('cg_id',$id)->update('category', $data);
    }
}