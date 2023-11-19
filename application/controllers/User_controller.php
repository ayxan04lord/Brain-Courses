<?php

class User_controller extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');
    }
    
    public function index(){
        $data['slider_data'] = $this->User_model->get_slider();
        $data['courses_data'] = $this->User_model->get_all_courses();
        $data['partners_data'] = $this->User_model->get_all_partners();
        $this->load->view('user/index', $data);
        

    }

    public function courses(){
        $data['courses_data'] = $this->User_model->get_all_courses();
        $this->load->view('user/courses', $data);
    }

    public function partners(){
        $data['partners_data'] = $this->User_model->get_all_partners();
        $this->load->view('user/partners',$data);
    }

    public function contact(){
        $this->load->view('user/contact');
    }

    public function blog(){
        $this->load->view('user/blog');
    }




}