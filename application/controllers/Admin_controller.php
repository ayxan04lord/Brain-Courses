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
        $this->load->helper('captcha');
        $vals = array(
            
            'img_path'      => './uploads/captcha/',
            'img_url'       => base_url('/uploads/captcha/'),
            'font_path'     => 'system/fonts/texb.ttf',
            'img_width'     => 150,
            'img_height'    => 50,
            'expiration'    => 7200,
            'word_length'   => 6,
            'font_size'     => 16,
            'pool'          => '012346789ABCDEF',
    
            // White background and border, black text and red grid
            'colors'        => array(
                    'background' => array(255, 255, 255),
                    'border' => array(255, 255, 255),
                    'text' => array(0, 0, 0),
                    'grid' => array(255, 40, 40)
            )
    );
    
    $cap = create_captcha($vals);
    $this->session->unset_userdata('adm_captcha');
    $this->session->set_userdata('adm_captcha', $cap);
    $this->load->view('admin/Admin_login');
    }

    public function login_action()
    {
        
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);
        $captcha = $this->input->post('captcha',TRUE);
        $adm_captcha = $this->session->userdata('adm_captcha')['word'];
        

        if (!empty($username) && !empty($password) && !empty($captcha)) {

            if(strtolower($adm_captcha)==strtolower($captcha)){
                $data = [
                    'a_username' => $username,
                    'a_password' => md5($password),
                ];
    
                $checkUser = $this->db->select('a_id')->where($data)->get('admin')->row_array();
    
                if ($checkUser) {
                    $_SESSION['admin_id'] = $checkUser['a_id'];
    
                    redirect(base_url('admin_dashboard'));
                } else {
                    $this->session->set_flashdata('err', 'Username or password is wrong!');
                    redirect($_SERVER['HTTP_REFERER']);
                }
            }else{
                $this->session->set_flashdata('err', 'Please, enter correct captcha!');
                redirect($_SERVER['HTTP_REFERER']);
            }


           
        } else {
            $this->session->set_flashdata('err', 'Please, fill in all the fields!');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
    
    public function logOut(){
        $this->session->unset_userdata('admin_id');
        $this->session->set_flashdata('success', 'We will wait you!');
        redirect(base_url('admin_login'));

    }
    public function dashboard()
    {
        $this->load->view('admin/index');
    }

    // Course CRUD Start

    public function admin_course_create()
    {
        $data['categories_list'] = $this->Admin_model->category_get_all();
        $this->load->view('admin/course/Create', $data);
    }

    public function admin_course_create_act()
    {
        $course_title_en = $this->input->post('course_title', TRUE);
        $course_title_az = $this->input->post('course_title_aze', TRUE);
        $course_title_rus = $this->input->post('course_title_rus', TRUE);
        $course_select_option = $this->input->post("course_select_option", TRUE);
        $course_description_en = $this->input->post('course_description', TRUE);
        $course_description_az = $this->input->post('course_description_aze', TRUE);
        $course_description_rus = $this->input->post('course_description_rus', TRUE);
        $course_status = $this->input->post('course_status', TRUE);
        $config['upload_path'] = './uploads/courses';
        $config["allowed_types"] = "png|PNG|jpg|JPG|jpeg|JPEG";
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('file_upload')) {
            $upload_slider_img = $this->upload->data();
            $data = [
                'c_title_en' => $course_title_en,
                'c_title_az' => $course_title_az,
                'c_title_rus' => $course_title_rus,
                'c_desc_en' => $course_description_en,
                'c_desc_az' => $course_description_az,
                'c_desc_rus' => $course_description_rus,
                'c_img' => $upload_slider_img['file_name'],
                'c_category' => $course_select_option,
                'c_status' => str_contains($course_status, 'on') ? TRUE : FALSE
            ];
            $this->Admin_model->courses_insert($data);
            redirect(base_url('admin_course_list'));
        } else {
            $data = [
                'c_title_en' => $course_title_en,
                'c_title_az' => $course_title_az,
                'c_title_rus' => $course_title_rus,
                'c_desc_en' => $course_description_en,
                'c_desc_az' => $course_description_az,
                'c_desc_rus' => $course_description_rus,
                'c_category' => $course_select_option,
                'c_status' => str_contains($course_status, 'on') ? TRUE : FALSE
            ];
            $this->Admin_model->courses_insert($data);
            redirect(base_url('admin_course_list'));
        }
    }

    public function admin_course_edit($id)
    {
        $data['categories_list'] = $this->Admin_model->category_get_all();
        $data["course_data"] = $this->Admin_model->courses_get_id($id);
        $this->load->view('admin/course/Edit', $data);
    }

    public function admin_course_edit_act($id)
    {
        $course_title = $this->input->post('course_title', TRUE);
        $course_title_az = $this->input->post('course_title_aze', TRUE);
        $course_title_rus = $this->input->post('course_title_rus', TRUE);
        $course_select_option = $this->input->post("course_select_option", TRUE);
        $course_description = $this->input->post('course_description', TRUE);
        $course_description_az = $this->input->post('course_description_aze', TRUE);
        $course_description_rus = $this->input->post('course_description_rus', TRUE);
        $course_status = $this->input->post('course_status', TRUE);
        $config['upload_path'] = './uploads/courses';
        $config["allowed_types"] = "png|PNG|jpg|JPG|jpeg|JPEG";
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('file_upload')) {
            $upload_slider_img = $this->upload->data();
            $data = [
                'c_title_en' => $course_title,
                'c_title_az' => $course_title_az,
                'c_title_rus' => $course_title_rus,
                'c_desc_en' => $course_description,
                'c_desc_az' => $course_description_az,
                'c_desc_rus' => $course_description_rus,
                'c_img' => $upload_slider_img['file_name'],
                'c_category' => $course_select_option,
                'c_status' => str_contains($course_status, 'on') ? TRUE : FALSE
            ];
            $this->Admin_model->courses_db_edit($id, $data);
            redirect(base_url('admin_course_list'));
        } else {
            $data = [
                'c_title_en' => $course_title,
                'c_title_az' => $course_title_az,
                'c_title_rus' => $course_title_rus,
                'c_desc_en' => $course_description,
                'c_desc_az' => $course_description_az,
                'c_desc_rus' => $course_description_rus,
                'c_category' => $course_select_option,
                'c_status' => str_contains($course_status, 'on') ? TRUE : FALSE
            ];
            $this->Admin_model->courses_db_edit($id, $data);
            redirect(base_url('admin_course_list'));
        }
    }

    public function admin_course_delete($id)
    {
        $this->Admin_model->delete_course($id);
        redirect(base_url('admin_course_list'));
    }

    public function admin_course_list()
    {
        
        $data["courses_data"] = $this->Admin_model->courses_get_all();
        $this->load->view('admin/course/List', $data);
    }

    // Course CRUD End

    // Slider CRUD Start

    public function admin_slider_create()
    {
        $this->load->view('admin/slider/Create');
    }

    public function admin_slider_create_act()
    {
        $slider_title_en = $this->input->post('slider_title_en', TRUE);
        $slider_title_rus = $this->input->post('slider_title_rus', TRUE);
        $slider_title_az = $this->input->post('slider_title_az', TRUE);
        $slider_description_en = $this->input->post('slider_description_en', TRUE);
        $slider_description_az = $this->input->post('slider_description_az', TRUE);
        $slider_description_rus = $this->input->post('slider_description_rus', TRUE);
        $slider_link = $this->input->post("slider_link", TRUE);
        $slider_status = $this->input->post('slider_status', TRUE);


        $config['upload_path'] = './uploads/slider';
        $config["allowed_types"] = "png|PNG|jpg|JPG|jpeg|JPEG";
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('file_upload')) {
            $upload_slider_img = $this->upload->data();
            $data = [
                'sl_title_en' => $slider_title_en,
                'sl_title_rus' => $slider_title_rus,
                'sl_title_az' => $slider_title_az,
                'sl_description_en' => $slider_description_en,
                'sl_description_az' => $slider_description_az,
                'sl_description_rus' => $slider_description_rus,
                'sl_img' => $upload_slider_img['file_name'],
                'sl_link' => $slider_link,
                'sl_status' => str_contains($slider_status, 'on') ? TRUE : FALSE
            ];
            $this->db->insert('slider', $data);
            redirect(base_url('admin_slider_list'));
        } else {
            $data = [
                'sl_title_en' => $slider_title_en,
                'sl_title_rus' => $slider_title_rus,
                'sl_title_az' => $slider_title_az,
                'sl_description_en' => $slider_description_en,
                'sl_description_az' => $slider_description_az,
                'sl_description_rus' => $slider_description_rus,
                'sl_link' => $slider_link,
                'sl_status' => str_contains($slider_status, 'on') ? TRUE : FALSE
            ];
            $this->db->insert('slider', $data);
            redirect(base_url('admin_slider_list'));
        }
    }

    public function admin_slider_edit($id)
    {
        $data["slider_data"] = $this->Admin_model->slider_get_id($id);
        $this->load->view('admin/slider/Edit', $data);
    }

    public function admin_slider_edit_act($id)
    {
       
        $slider_title_en = $this->input->post('slider_title_en', TRUE);
        $slider_title_rus = $this->input->post('slider_title_rus', TRUE);
        $slider_title_az = $this->input->post('slider_title_az', TRUE);
        $slider_description_en = $this->input->post('slider_description_en', TRUE);
        $slider_description_az = $this->input->post('slider_description_az', TRUE);
        $slider_description_rus = $this->input->post('slider_description_rus', TRUE);
        $slider_link = $this->input->post('slider_link', TRUE);
        $slider_status = $this->input->post('slider_status', TRUE);
        $config['upload_path'] = './uploads/slider';
        $config["allowed_types"] = "png|PNG|jpg|JPG|jpeg|JPEG";
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('file_upload')) {
            $upload_slider_img = $this->upload->data();
            $data = [
                'sl_title_en' => $slider_title_en,
                'sl_title_rus' => $slider_title_rus,
                'sl_title_az' => $slider_title_az,
                'sl_description_en' => $slider_description_en,
                'sl_description_az' => $slider_description_az,
                'sl_description_rus' => $slider_description_rus,
                'sl_link' => $slider_link,
                
                'sl_img' => $upload_slider_img['file_name'],
                'sl_status' => str_contains($slider_status, 'on') ? TRUE : FALSE
            ];


            $this->Admin_model->slider_db_edit($id, $data);
            redirect(base_url('admin_slider_list'));
        } else {
            $data = [
                'sl_title_en' => $slider_title_en,
                'sl_title_rus' => $slider_title_rus,
                'sl_title_az' => $slider_title_az,
                'sl_description_en' => $slider_description_en,
                'sl_description_az' => $slider_description_az,
                'sl_description_rus' => $slider_description_rus,
                'sl_link' => $slider_link,
                'sl_status' => str_contains($slider_status, 'on') ? TRUE : FALSE
            ];
            $this->Admin_model->slider_db_edit($id, $data);
            redirect(base_url('admin_slider_list'));
        }
    }

    public function admin_slider_delete($id)
    {
        $this->Admin_model->delete_slider($id);
        redirect(base_url('admin_slider_list'));
    }

    public function admin_slider_list()
    {
        $data["slider_data"] = $this->Admin_model->slider_get_all();
        $this->load->view('admin/slider/List', $data);
    }

    // Slider CRUD End

    // Partners CRUD Start

    public function admin_partners_create()
    {
        $this->load->view('admin/partners/Create');
    }

    public function admin_partners_create_act()
    {
        $partners_title_az = $this->input->post('partners_title_az', TRUE);
        $partners_title_en = $this->input->post('partners_title_en', TRUE);
        $partners_title_rus = $this->input->post('partners_title_rus', TRUE);
        $partners_link = $this->input->post('partners_link', TRUE);
        $partners_status = $this->input->post('partners_status', TRUE);
        $config['upload_path'] = './uploads/partners';
        $config["allowed_types"] = "png|PNG|jpg|JPG|jpeg|JPEG";
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('file_upload')) {
            $upload_partners_img = $this->upload->data();
            $data = [
                'p_title_az' => $partners_title_az,
                'p_title_en' => $partners_title_en,
                'p_title_rus' => $partners_title_rus,
                'p_link'  => $partners_link,
                'p_img' => $upload_partners_img['file_name'],
                'p_status' => str_contains($partners_status, 'on') ? TRUE : FALSE
            ];
            $this->Admin_model->partners_insert($data);
            redirect(base_url('admin_partners_list'));
        } else {
            $data = [
                'p_title_az' => $partners_title_az,
                'p_title_en' => $partners_title_en,
                'p_title_rus' => $partners_title_rus,
                'p_link'  => $partners_link,
                'p_status' => str_contains($partners_status, 'on') ? TRUE : FALSE
            ];
            $this->Admin_model->partners_insert($data);
            redirect(base_url('admin_partners_list'));
        }
    }

    public function admin_partners_edit($id)
    {
        $data["partners_data"] = $this->Admin_model->partners_get_id($id);
        $this->load->view('admin/partners/Edit', $data);
    }

    public function admin_partners_edit_act($id)
    {
        $partners_title_az = $this->input->post('partners_title_az', TRUE);
        $partners_title_en = $this->input->post('partners_title_en', TRUE);
        $partners_title_rus = $this->input->post('partners_title_rus', TRUE);
        $partners_link = $this->input->post('partners_link', TRUE);
        $partners_status = $this->input->post('partners_status', TRUE);
        $config['upload_path'] = './uploads/partners';
        $config["allowed_types"] = "png|PNG|jpg|JPG|jpeg|JPEG";
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('file_upload')) {
            $upload_partners_img = $this->upload->data();
            $data = [
                'p_title_az' => $partners_title_az,
                'p_title_en' => $partners_title_en,
                'p_title_rus' => $partners_title_rus,
                'p_link'  => $partners_link,
                'p_img' => $upload_partners_img['file_name'],
                'p_status' => str_contains($partners_status, 'on') ? TRUE : FALSE
            ];
            $this->Admin_model->partners_db_edit($id, $data);
            redirect(base_url('admin_partners_list'));
        } else {
            $data = [
                'p_title_az' => $partners_title_az,
                'p_title_en' => $partners_title_en,
                'p_title_rus' => $partners_title_rus,
                'p_link'  => $partners_link,
                'p_status' => str_contains($partners_status, 'on') ? TRUE : FALSE
            ];
            $this->Admin_model->partners_db_edit($id, $data);
            redirect(base_url('admin_partners_list'));
        }
    }

    public function admin_partners_delete($id)
    {
        $this->Admin_model->delete_partners($id);
        redirect(base_url('admin_partners_list'));
    }


    public function admin_partners_list()
    {
        $data["partners_data"] = $this->Admin_model->partners_get_all();
        $this->load->view('admin/partners/List', $data);
    }

    // Partners CRUD End

    // Category CRUD Start

    public function admin_category_create()
    {
        $this->load->view('admin/category/Create');
    }

    public function admin_category_create_act()
    {
        $category_name = $this->input->post('course_category', TRUE);

        $data = [
            'cg_name' => $category_name,

        ];


        $this->Admin_model->category_insert($data);
        redirect(base_url('admin_category_list'));
    }

    public function admin_category_edit($id)
    {
        $data["category_data"] = $this->Admin_model->category_get_id($id);
        $this->load->view('admin/category/Edit', $data);
    }

    public function admin_category_edit_act($id)
    {
        $category_name = $this->input->post('course_category', TRUE);

        $data = [
            'cg_name' => $category_name,

        ];
        $this->Admin_model->category_db_edit($id, $data);
        redirect(base_url('admin_category_list'));
    }

    public function admin_category_delete($id)
    {
        $this->Admin_model->delete_category($id);
        redirect(base_url('admin_category_list'));
    }

    public function admin_category_list()
    {
        $data["category_data"] = $this->Admin_model->category_get_all();
        $this->load->view('admin/category/List', $data);
    }

    // Category CRUD End
}
