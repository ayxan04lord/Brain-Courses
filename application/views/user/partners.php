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
   <!-- about section start -->
   <div class="news_section layout_padding">
      <div class="container">

         <h1 class="news_taital"><?php echo $this->lang->line('nav_partners'); ?></h1>
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
   <!-- about section end -->
   <!-- footer section start -->
   <?php $this->load->view('user/includes/Footer'); ?>
   <!-- footer section end -->

   <!-- Javascript files-->
   <?php $this->load->view('user/includes/FooterScripts'); ?>