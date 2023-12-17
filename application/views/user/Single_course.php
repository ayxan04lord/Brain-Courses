<?php $this->load->view('user/includes/Headscripts'); ?>

<body>
    <!--header section start -->
    <div class="header_section" style="padding-top: 0px;">
        <div class="header_bg">
            <div class="container">
                <?php $this->load->view('user/includes/Navbar'); ?>
            </div>
        </div>
    </div>
    <!--header section end -->
    <div class="services_section layout_padding">
        <div class="container">
            <style>
                .services_taital::after {
                    display: none;
                }
            </style>
            <h1 class="services_taital"><?php echo $this->lang->line('courses_title'); ?></h1>
            <div class="services_section_2">
                <div class="row mb-5">

                    <div class="col-md-6">
                        <img src="<?php echo base_url('uploads/courses/') . $courses_target['c_img']; ?>" class="image_8" style="width:100%;  height:320px; object-fit:cover">
                    </div>

                    <div class="col-md-6">
                        <div>
                            <div style="color:red; font-weight:bold"><?php echo $courses_target['c_title_' . $this->session->userdata("site_lang")]; ?></div>
                            <div><?php echo $courses_target['c_desc_' . $this->session->userdata("site_lang")]; ?></div>
                        </div>
                        <div class=" mt-5" style="color:black"><b><?php echo $courses_target['cg_name_' . $this->session->userdata("site_lang")]; ?></b></div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- footer section start -->
    <?php $this->load->view('user/includes/Footer'); ?>
    <!-- footer section end -->
    <!-- Javascript files-->
    <?php $this->load->view('user/includes/FooterScripts'); ?>