<?php

class User_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
     
    
        $this->lang->load('message','english');
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['slider_data'] = $this->User_model->get_slider();
        $data['courses_data'] = $this->User_model->get_limit_courses();
        $data['partners_data'] = $this->User_model->get_all_partners();
        $this->load->view('user/index', $data);
    }

    public function courses()
    {
        $this->load->library('pagination');

        $config['base_url'] = base_url('courses');
        $config['total_rows'] = count($this->User_model->get_all_courses());
        $config['per_page'] = 6;
        // $config['use_page_numbers'] = TRUE;

        $this->pagination->initialize($config);

        $page = $this->uri->segment(2)?$this->uri->segment(2):0;

        $data['links'] = $this->pagination->create_links();
        $data['courses_data'] = $this->User_model->get_pag_courses($config, $page);
        $this->load->view('user/courses', $data);
    }

    public function partners()
    {

        $this->load->library('pagination');

        $config['base_url'] = base_url('partners');
        $config['total_rows'] = count($this->User_model->get_all_partners());
        $config['per_page'] = 6;
        // $config['use_page_numbers'] = TRUE;

        $this->pagination->initialize($config);

        $page = $this->uri->segment(2)?$this->uri->segment(2):0;

        $data['links'] = $this->pagination->create_links();
        $data['partners_data'] = $this->User_model->get_pag_partners($config, $page);
        // print_r('<pre>');
        // print_r($data['partners_data']);
        // die();
        $this->load->view('user/partners', $data);
    }

    public function contact()
    {
        $this->load->view('user/contact');
    }

    public function contact1()
    {
        $this->load->view('user/contact1');
    }

    public function blog()
    {
        $this->load->view('user/blog');
    }
}
