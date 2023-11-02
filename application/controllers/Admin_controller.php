<?php

class Admin_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
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

        $config['upload_path']          = './upload/courses';

        $this->load->library('upload', $config);
        // $this->upload->initialize($config);
        $this->upload->do_upload('file_upload');

        if (true) {
            $upload_slider_img = $this->upload->data();

            print_r("<pre>");
            die();

            $data = [
                'c_title' => $course_title,
                'c_desc' => $course_description,
                'c_img' => $upload_slider_img['file_name'],
                'c_category' => $course_select_option,
                'c_status' => str_contains($course_status,'on') ? TRUE : FALSE,
                
            ];

            

            $this->db->insert('courses', $data);
            redirect(base_url('l_slider'));
        }
    }

    public function admin_course_list()
    {
        $this->load->view('admin/course/List');
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
