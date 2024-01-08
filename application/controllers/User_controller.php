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
        $data['partners_data'] = $this->User_model->get_limit_partners();
        $this->load->view('user/index', $data);
    }

    public function courses()
    {
        $this->load->library('pagination');

        $config['base_url'] = base_url('courses');
        $config['total_rows'] = count($this->User_model->get_all_courses());
        $config['per_page'] = 6;
        $config["use_page_numbers"] = TRUE;
        $this->pagination->initialize($config);
        $page = $this->uri->segment(2)?$this->uri->segment(2):0;
        $data['links'] = $this->pagination->create_links();
        $data['courses_data'] = $this->User_model->get_pag_courses($config, $page);
        $total_pages = ceil((int)$config["total_rows"] / (int)$config["per_page"]);


        if ($page > $total_pages) {
            redirect(base_url("courses"));
        }
        $this->load->view('user/courses', $data);
    }

    public function single_course($id){
        $data['courses_target'] = $this->User_model->get_target_courses($id);
        if(empty($data['courses_target'])){
            redirect(base_url('courses'));
        }
        $this->load->view('user/Single_course', $data);
    }

    public function partners()
    {
        $this->load->library('pagination');
        $config['base_url'] = base_url('partners');
        $config['total_rows'] = count($this->User_model->get_all_partners());
        $config['per_page'] = 6;
        $this->pagination->initialize($config);
        $page = $this->uri->segment(2)?$this->uri->segment(2):0;
        $data['links'] = $this->pagination->create_links();
        $data['partners_data'] = $this->User_model->get_pag_partners($config, $page);
        $this->load->view('user/partners', $data);
    }

    public function contact()
    {
        $this->load->view('user/contact');
    }

    public function contact_act()
    {
       
            $fullName = $this->input->post('fullName', TRUE);
            $phone = $this->input->post('phone', TRUE);
            $email = $this->input->post('email', TRUE);
            $message = $this->input->post('message', TRUE);
    
            $data = [
                'ct_fullname' => $fullName,
                'ct_phone' => $phone,
                'ct_email' => $email,
                'ct_message' => $message
            ];
           
            $this->User_model->contact_insert($data);
            redirect(base_url('index'));
    
       
    }
}
