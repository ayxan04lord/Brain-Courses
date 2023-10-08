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
      <!-- about section start -->
      <div class="news_section layout_padding">
         <div class="container">
            <h1 class="news_taital">Our About</h1>
            <p class="news_text">Do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            <div class="news_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="news_taital_box">
                        <p class="date_text">01 Jan 2020</p>
                        <h4 class="make_text">Make it Simple</h4>
                        <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        <p class="post_text">Post By : Casinal</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <img src="<?php echo base_url('public/assets/'); ?>images/img-6.png" class="image_6" style="width:100%">
                     <h6 class="plus_text">+</h6>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- footer section start -->
      <?php $this->load->view('user/includes/Footer'); ?>
      <!-- footer section end -->
     
      <!-- Javascript files-->
      <?php $this->load->view('user/includes/FooterScripts'); ?>

