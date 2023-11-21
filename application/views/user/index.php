<?php $this->load->view('user/includes/Headscripts'); ?>

<body>
   <!--header section start -->
   <div class="header_section">
      <div class="header_bg">
         <div class="container">
            <?php $this->load->view('user/includes/Navbar'); ?>
         </div>
      </div>
      <!--banner section start -->
      <div class="banner_section layout_padding p-5">
         <div id="my_slider"  class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <?php $u_id_counter = 1; ?>
               <?php foreach ($slider_data as $slider_item) : ?>
                  
                  <div class="carousel-item <?= $u_id_counter==1?'active':''; ?>">
                  <?php $u_id_counter++; ?>
                     <div class="container">
                        <div class="banner_taital_main">
                        <?php if($slider_item['sl_status']): ?>
                        <div class="row">
                 
                           <div class="col-md-6">
                              <h1 class="banner_taital"><?php echo $slider_item['sl_title']; ?></h1>
                              <p class="banner_text"><?php echo $slider_item['sl_description']; ?></p>
                              <div class="btn_main">
                                 <div class="about_bt" style="color: black;"><a href="<?php echo base_url('contact'); ?>">Haqqımızda</a></div>
                                 <div class="quote_bt"><a href="">Qiymətini öyrən</a></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="image_1"><img style="width:350px; height:350px !important;" src="<?php echo base_url('uploads/slider/').$slider_item['sl_img']; ?>"></div>
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
               .services_taital::after{
                  display: none;
               }
            </style>
            <h1 class="services_taital">Bizim Kurslarımız</h1>
            <div class="services_section_2">
               <div class="row mb-5">
               <?php foreach($courses_data as $courses_item): ?>
                  <?php if($courses_item['c_status']): ?>
                  <div class="col-md-6">
                     <div class="image_main">
                        <img src="<?php echo base_url('uploads/courses/').$courses_item['c_img']; ?>" class="image_8" style="width:100%;  height:320px; object-fit:cover">
                        <div class="text_main" style="width: 100%;">
                           <div class="seemore_text"><?php echo $courses_item['c_title']; ?></div>
                           <div class="seemore_text text-truncate" style="word-wrap: break-word;"><?php echo $courses_item['c_desc']; ?></div>
                        </div>
                       
                     </div>
                     <div class="seemore_text mt-5" style="color:black"><b><?php echo $courses_item['cg_name']; ?></b></div>
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
         <h1 class="news_taital">ƏMƏKDAŞLIQ</h1>
         <div class="news_section_2">
         <div class="row">
               <?php foreach ($partners_data as $partners_item) : ?>
                  <?php if ($partners_item['p_status']) : ?>
                     <div class="col-md-6">
                        <div class="make_text" style="color: red; font-size:30px;"><?php echo $partners_item['p_title']; ?></div>
                        <div class="mb-5">
                           <img src="<?php echo base_url('uploads/partners/') . $partners_item['p_img']; ?>" class="image_8" style="width:100%;  height:320px; object-fit:cover">
                           <div class="text_main" style="width: 100%;">
                           </div>
                           <div class="seemore_text mb-5"><a href="<?php echo $partners_item['p_link']; ?>"><?php echo $partners_item['p_link']; ?></a></div>
                        </div>
                     </div>
                  <?php endif; ?>
               <?php endforeach; ?>
            </div>
         </div>
      </div>
   </div>
   <!-- about section end -->
   
  
   <!-- newsletter section start -->
   <div class="newsletter_section layout_padding">
      <div class="container">
         <div class="newsletter_main">
            <h1 class="newsletter_taital">Get<br> Your free consuting </h1>
            <div class="get_quote_bt"><a href="#">Get A Quote</a></div>
         </div>
         <p class="dolor_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
      </div>
   </div>
   <!-- newsletter section end -->

   <!-- contact section start -->
   <div class="contact_section layout_padding">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-6 padding_left0">
               <div class="mail_section">
                  <div class="contact_img">
                     <h1 class="contact_taital">Best Educations In World Here</h1>
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