<?php

class User_controller extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        $this->load->view('user/index');
    }

    public function about(){
        $this->load->view('user/about');
    }

    public function blog(){
        $this->load->view('user/blog');
    }

    public function contact(){
        $this->load->view('user/contact');
    }

    public function courses(){
        $this->load->view('user/courses');
    }


}