<?php $this->load->view('user/includes/Headscripts'); ?>

<body>

   <!--header section start -->
   <div class="header_section" style="padding-top: 0px; height:100vh;">
      <div class="header_bg">
         <div class="container">
            <?php $this->load->view('user/includes/Navbar'); ?>
         </div>
      </div>
      <!--banner section start -->
      <div class="banner_section" style="height: 100%;">
         <div id="my_slider" class="carousel slide d-flex justify-content-center align-items-center" data-ride="carousel" style="height: 100%;">
            <div class="carousel-inner">
               <?php $u_id_counter = 1; ?>
               <?php foreach ($slider_data as $slider_item) : ?>

                  <div class="carousel-item <?= $u_id_counter == 1 ? 'active' : ''; ?>">
                     <?php $u_id_counter++; ?>
                     <div class="container">
                        <div class="banner_taital_main">
                           <?php if ($slider_item['sl_status']) : ?>
                              <div class="row d-flex justify-content-between">

                                 <div class="col-md-6">

                                    <h1 class="banner_taital text-white"><?php echo $slider_item['sl_title_' . $this->session->userdata("site_lang")]; ?></h1>
                                    <div class="banner_text text-white"><?php echo $slider_item['sl_description_' . $this->session->userdata("site_lang")]; ?></div>
                                    <div class="btn_main">
                                       <div class="about_bt" style="color: black;"><a target="_blank" href="<?php echo $slider_item['sl_link']; ?>"><?php echo $this->lang->line('slider_about'); ?></a></div>

                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="image_1"><img style="width:350px; height:350px !important; object-fit:contain;" src="<?php echo base_url('uploads/slider/') . $slider_item['sl_img']; ?>"></div>
                                 </div>

                              </div>
                           <?php endif; ?>
                        </div>
                     </div>
                  </div>
               <?php endforeach; ?>


            </div>
            <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
               <i class="fa fa-arrow-left" style="font-size:24px"></i>
            </a>
            <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-right" style="font-size:24px"></i>
            </a>
         </div>
      </div>
      <!--banner section end -->
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
         <a href="<?php echo base_url('courses'); ?>">
            <h1 class="services_taital"><?php echo $this->lang->line('courses_title'); ?></h1>
         </a>
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
                              <a  href="<?php echo base_url('single_course/' . $courses_item['c_id']); ?>">
                                 <div class="seemore_text"><?php echo $courses_item['c_title_' . $this->session->userdata("site_lang")]; ?></div>
                              </a>
                              <div class="seemore_text" style="word-wrap: break-word;"><?php echo $courses_item['c_desc_' . $this->session->userdata("site_lang")]; ?></div>
                           </div>

                        </div>
                        <div class="seemore_text mt-5" style="color:black"><b><?php echo $courses_item['cg_name_' . $this->session->userdata("site_lang")]; ?></b></div>
                     </div>
                  <?php endif; ?>
               <?php endforeach; ?>
            </div>
         </div>
      </div>
   </div>
   <!-- services section end -->
   <!-- about section start -->
   <!-- <style>
      .image_main:hover::after{
         display: none;
      }
   </style> -->
   <div class="news_section layout_padding">
      <div class="container">
         <a href="<?php echo base_url('partners'); ?>">
            <h1 class="news_taital"><?php echo $this->lang->line('nav_partners'); ?></h1>
         </a>
         <div class="news_section_2">
            <div class="row">
               <?php foreach ($partners_data as $partners_item) : ?>
                  <?php if ($partners_item['p_status']) : ?>
                     <div class="col-md-4">
                        <a href="<?php echo $partners_item['p_link']; ?>">
                           <div class="make_text" style="color: red; font-size:30px;"><?php echo $partners_item['p_title_' . $this->session->userdata("site_lang")]; ?></div>
                        </a>
                        <a target="_blank" href="<?php echo $partners_item['p_link']; ?>">
                           <div class="image_main_course image_8">
                              <img src="<?php echo base_url('uploads/partners/') . $partners_item['p_img']; ?>" style="width:100%;  height:320px; object-fit:contain;backdrop-filter: blur(3px);">
                           </div>
                        </a>
                     </div>
                  <?php endif; ?>
               <?php endforeach; ?>
            </div>
         </div>
      </div>
   </div>
   <!-- about section end -->


   <div class="newsletter_section layout_padding pb-5">
      <div class="">
         <a href="<?php echo base_url('contact'); ?>">
            <h1 class="news_taital"><?php echo $this->lang->line('nav_contact'); ?></h1>
         </a>

         <div class="newsletter_main">

            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="row mx-auto">
                        <div class="card customStyle-card-form">
                           <div class="card-body">
                              <h5 class="card-title customStyle-card-title-form"><i class="bi bi-person"></i> <?php echo $this->lang->line('nav_contact'); ?></h5>

                              <form class="row g-3 needs-validation" name="contactForm" action="<?php echo base_url('contact_act'); ?>" method="POST" enctype="application/x-www-form-urlencoded">
                                 <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />

                                 <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label"><?php echo $this->lang->line('full_name'); ?></label>
                                    <input name="fullName" type="text" id="fullNameForm" class="form-control" value="" required autocomplete="off">
                                 </div>
                                 <div class="col-md-12">
                                    <label for="validationCustom02" class="form-label"><?php echo $this->lang->line('phone'); ?></label>
                                    <div class="input-group has-validation">
                                       <input name="phone" type="text" id="phoneForm" class="form-control" aria-describedby="inputGroupPrepend" required autocomplete="off">
                                    </div>
                                 </div>

                                 <div class="col-md-12">
                                    <label for="validationCustomUsername" class="form-label"><?php echo $this->lang->line('email'); ?></label>
                                    <div class="input-group has-validation">
                                       <input name="email" type="text" id="emailForm" class="form-control" aria-describedby="inputGroupPrepend" required autocomplete="off">
                                    </div>
                                 </div>

                                 <div class="col-md-12">
                                    <label for="validationCustom03" class="form-label"><?php echo $this->lang->line('message'); ?></label>
                                    <textarea name="message" type="text" class="form-control" required autocomplete="off"></textarea>
                                 </div>

                                 <div class="col-12 mt-3">
                                    <button class="btn btn-primary customStyle-btn-primary" type="submit"><i class="bi bi-send-fill"></i> <?php echo $this->lang->line('send'); ?> </button>
                                 </div>

                              </form>

                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2337.8181889954235!2d49.665554205421806!3d40.586695471451286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x403096dd2aeaf569%3A0x7403cd0225d4dbfb!2zMTkgU8O8bGgga8O8w6fJmXNpLCBTdW1xYXnEsXQgNTAwNg!5e0!3m2!1sru!2saz!4v1703699081084!5m2!1sru!2saz" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
               </div>
            </div>
         </div>

      </div>
   </div>
   <!-- contact section end -->
   <!-- footer section start -->
   <?php $this->load->view('user/includes/Footer'); ?>
   <!-- footer section end -->

   <!-- Javascript files-->
   <?php $this->load->view('user/includes/FooterScripts'); ?>