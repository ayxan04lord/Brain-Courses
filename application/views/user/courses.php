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
   <!-- services section start -->
   <div class="services_section layout_padding">
      <div class="container">
         <style>
            .services_taital::after {
               display: none;
            }

            .image_main_course {
               position: relative;
               overflow: hidden;
               border-radius: 125px 0px / 125px 0px;
            }

            .image_main_course::before {
               content: "";
               position: absolute;
               top: 0px;
               left: 0px;
               width: 100%;
               transform: scale(1.2);
               filter: grayscale(0.64);
               transform-origin: 50% 50%;
               height: 100%;
               background-image: radial-gradient(circle, rgba(0, 0, 0, 1) 1%, rgba(1, 0, 56, 1) 16%, rgba(2, 0, 117, 1) 33%, rgba(3, 0, 255, 1) 76%, rgba(3, 0, 255, 1) 91%);
               z-index: -1;
            }
         </style>
         <h1 class="services_taital"><?php echo $this->lang->line('courses_title'); ?></h1>
         <div class="services_section_2">
            <div class="row mb-5">
               <?php foreach ($courses_data as $courses_item) : ?>
                  <?php if ($courses_item['c_status']) : ?>
                     <div class="col-md-4">
                        <div class="image_main">


                           <div class="image_main_course image_8">
                              <img src="<?php echo base_url('uploads/courses/') . $courses_item['c_img']; ?>" style="width:100%;  height:320px; object-fit:contain;backdrop-filter: blur(3px);">
                           </div>
                           <div class="text_main" style="width: 100%;">
                              <a href="<?php echo base_url('single_course/' . $courses_item['c_id']); ?>">
                                 <div class="seemore_text"><?php echo $courses_item['c_title_' . $this->session->userdata("site_lang")]; ?></div>
                              </a>
                              <div class="seemore_text" style="word-wrap: break-word;"><?php echo $courses_item['c_desc_' . $this->session->userdata("site_lang")]; ?></div>
                           </div>

                        </div>
                        <div class="seemore_text mt-5" style="color:black"><b><?php echo $courses_item['cg_name_' . $this->session->userdata("site_lang")]; ?></b></div>
                     </div>
                  <?php endif; ?>
               <?php endforeach; ?>
               <style>
                  .pagination a,
                  .pagination strong {
                     padding: 10px 10px;
                     border: 1 px solid #1611AA !important;
                     margin-left: 5px;
                     text-decoration: none;
                     box-shadow: 0 0 8px rgba(5, 5, 5, 0.3);

                  }

                  .pagination strong {
                     background: #1611AA !important;
                     color: white;
                     border: 1 px solid #1611AA !important;
                  }

                  .pagination {
                     /* text-align: center !important; */
                     /* display: inline; */
                     /* float: inline-start; */
                     justify-content: center;
                  }
               </style>

            </div>
            <p class="pagination"><?php echo $links; ?></p>
         </div>
      </div>
   </div>
   <!-- services section end -->
   <!-- footer section start -->
   <?php $this->load->view('user/includes/Footer'); ?>
   <!-- footer section end -->
   <!-- Javascript files-->
   <?php $this->load->view('user/includes/FooterScripts'); ?>