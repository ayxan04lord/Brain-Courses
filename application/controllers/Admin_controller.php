<?php

class Admin_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index()
    {
        $this->load->view('admin/Admin_login');
    }

    public function dashboard()
    {
        $this->load->view('admin/index');
    }

    public function admin_course_create()
    {
        $this->load->view('admin/course/Create');
    }

    public function admin_course_create_act()
    {
        $course_title = $this->input->post('course_title', TRUE);
        $course_select_option = $this->input->post("course_select_option", TRUE);
        $course_description = $this->input->post('course_description', TRUE);
        $course_status = $this->input->post('course_status', TRUE);
        $config['upload_path'] = './uploads/courses';
        $config["allowed_types"] = "png|PNG|jpg|JPG|jpeg|JPEG";
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('file_upload')) {
            $upload_slider_img = $this->upload->data();
            $data = [
                'c_title' => $course_title,
                'c_desc' => $course_description,
                'c_img' => $upload_slider_img['file_name'],
                'c_category' => $course_select_option,
                'c_status' => str_contains($course_status,'on') ? TRUE : FALSE
            ];
            $this->db->insert('courses', $data);
            redirect(base_url('admin/course_list'));
        }
        else{
            $data = [
                'c_title' => $course_title,
                'c_desc' => $course_description,
                'c_category' => $course_select_option,
                'c_status' => str_contains($course_status,'on') ? TRUE : FALSE
            ];
            $this->db->insert('courses', $data);
            redirect(base_url('admin/course_list'));
        }
    }

    public function admin_course_list()
    {
        $data["courses_data"] = $this->Admin_model->courses_get_all();
        $this->load->view('admin/course/List',$data);
    }

    public function admin_course_edit($id)
    {
        $data["course_data"] = $this->Admin_model->courses_get_id($id);
        $this->load->view('admin/course/Edit',$data);
    }

    public function admin_slider_create()
    {
        $this->load->view('admin/slider/Create');
    }

    public function admin_slider_list()
    {
        $this->load->view('admin/slider/List');
    }

    public function admin_partners_create()
    {
        $this->load->view('admin/partners/Create');
    }

    public function admin_partners_list()
    {
        $this->load->view('admin/partners/List');
    }

    public function admin_category_create()
    {
        $this->load->view('admin/category/Create');
    }

    public function admin_category_list()
    {
        $this->load->view('admin/category/List');
    }
}
