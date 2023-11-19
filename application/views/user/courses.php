<?php $this->load->view('user/includes/Headscripts'); ?>
   <body>
      <!--header section start -->
      <div class="header_section">
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
      <!-- footer section start -->
      <?php $this->load->view('user/includes/Footer'); ?>
      <!-- footer section end -->
      <!-- Javascript files-->
      <?php $this->load->view('user/includes/FooterScripts'); ?>

