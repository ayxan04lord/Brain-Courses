<?php

class Admin_controller extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->load->view('admin/Admin_login');
    }

    public function dashboard(){
        $this->load->view('admin/index');
    }

    public function admin_course_create(){
        $this->load->view('admin/course/Create');
    }

    public function admin_course_list(){
        $this->load->view('admin/course/List');
    }
}