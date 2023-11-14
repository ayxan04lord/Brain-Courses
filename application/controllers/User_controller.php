<?php

class User_controller extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        $this->load->view('user/index');
    }

    public function courses(){
        $this->load->view('user/courses');
    }

    public function partners(){
        $this->load->view('user/partners');
    }

    public function contact(){
        $this->load->view('user/contact');
    }

    public function blog(){
        $this->load->view('user/blog');
    }




}