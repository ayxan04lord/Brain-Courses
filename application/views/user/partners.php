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
   <!-- about section start -->
   <div class="news_section layout_padding">
      <div class="container">

      <h1 class="news_taital"><?php echo $this->lang->line('nav_partners'); ?></h1>
         <div class="news_section_2">
            <div class="row">
               <?php foreach ($partners_data as $partners_item) : ?>
                  <?php if ($partners_item['p_status']) : ?>
                     <div class="col-md-6">
                     <a href="<?php echo $partners_item['p_link']; ?>"><div class="make_text" style="color: red; font-size:30px;"><?php echo $partners_item['p_title_' . $this->session->userdata("site_lang")]; ?></div></a>
                        <div class="mb-5">
                           <img src="<?php echo base_url('uploads/partners/') . $partners_item['p_img']; ?>" class="image_8" style="width:100%;  height:320px; object-fit:cover">
                           <div class="text_main" style="width: 100%;">

                           </div>

                        </div>
                     </div>
                  <?php endif; ?>
               <?php endforeach; ?>
               <style>
                  .pagination a, .pagination strong{
                     padding: 10px 10px ;
                     border: 1 px solid #1611AA !important;
                     margin-left: 5px;
                     text-decoration: none;
                     box-shadow: 0 0 8px rgba(5, 5, 5, 0.3);

                  }

                  .pagination strong{
                     background: #1611AA !important;
                     color: white;
                     border: 1 px solid #1611AA !important;
                  }

                  .pagination{
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
   <!-- about section end -->
   <!-- footer section start -->
   <?php $this->load->view('user/includes/Footer'); ?>
   <!-- footer section end -->

   <!-- Javascript files-->
   <?php $this->load->view('user/includes/FooterScripts'); ?>