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
               <?php foreach ($partners_data as $partners_item) : ?>
                  <?php if ($partners_item['p_status']) : ?>
                     <div class="col-md-6">
                        <div class="make_text" style="color: red; size:18"><?php echo $partners_item['p_title']; ?></div>
                        <div class="image_main">
                           <img src="<?php echo base_url('uploads/partners/') . $partners_item['p_img']; ?>" class="image_8" style="width:100%;  height:320px; object-fit:cover">
                           <div class="text_main" style="width: 100%;">

                           </div>

                           <div class="seemore_text "><?php echo $partners_item['p_link']; ?></div>
                        </div>
                     </div>
                  <?php endif; ?>
               <?php endforeach; ?>
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