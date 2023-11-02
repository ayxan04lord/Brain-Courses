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
            <h1 class="services_taital"><span style="color: #fcce2d">Bizim</span> Kurslarımız</h1>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="image_main">
                        <img src="images/img-2.png" class="image_8" style="width:100%">
                        <div class="text_main">
                           <div class="seemore_text">İngilis dili</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="image_main">
                        <img src="images/img-3.png" class="image_8" style="width:100%">
                        <div class="text_main">
                           <div class="seemore_text">Rus dili</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="image_main">
                        <img src="images/img-4.png" class="image_8" style="width:100%">
                        <div class="text_main">
                           <div class="seemore_text">Türk dili</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="image_main">
                        <img src="images/img-5.png" class="image_8" style="width:100%">
                        <div class="text_main">
                           <div class="seemore_text">Alman dili</div>
                        </div>
                     </div>
                  </div>
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

