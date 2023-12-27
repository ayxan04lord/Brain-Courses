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
   <!-- newsletter section start -->

   <div class="newsletter_section layout_padding">
      <div class="container">
         <div class="newsletter_main">

            <div class="container">
               <h1 class="news_taital"><?php echo $this->lang->line('nav_contact'); ?></h1>

               <div class="row">

                  <div class="col-md-6">
                     <div class="row mx-auto">
                        <div class="card customStyle-card-form">
                           <div class="card-body">
                              <h5 class="card-title customStyle-card-title-form"><i class="bi bi-person"></i> Contact</h5>

                              <form class="row g-3 needs-validation" name="contactForm" method="POST" action="<?php echo base_url('contact_act'); ?>" enctype="application/x-www-form-urlencoded">
                                 <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
                                 <div class="col-md-12">
                                    <label for="fullName" class="form-label">Full Name</label>
                                    <input name="fullName" type="text" id="fullNameForm" class="form-control" value="" required autocomplete="off">
                                 </div>

                                 <div class="col-md-12">
                                    <label for="phone" class="form-label">Phone</label>
                                    <div class="input-group has-validation">
                                       <input name="phone" type="text" id="phoneForm" class="form-control" aria-describedby="inputGroupPrepend" required autocomplete="off">
                                    </div>
                                 </div>

                                 <div class="col-md-12">
                                    <label for="validationCustomUsername" class="form-label">Email</label>
                                    <div class="input-group has-validation">
                                       <input name="email" type="text" id="emailForm" class="form-control" aria-describedby="inputGroupPrepend" required autocomplete="off">
                                    </div>
                                 </div>

                                 <div class="col-md-12">
                                    <label for="validationCustom03" class="form-label">Message</label>
                                    <textarea name="message" type="text" class="form-control" required autocomplete="off"></textarea>
                                 </div>

                                 <div class="col-12 mt-3">
                                    <button class="btn btn-primary customStyle-btn-primary" type="submit"><i class="bi bi-send-fill"></i> Send </button>
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
   <!-- newsletter section end -->
   <!-- contact section start -->
   <div class="contact_section layout_padding">
      <div class="container-fluid">

      </div>
   </div>
   <!-- contact section end -->
   <!-- footer section start -->
   <?php $this->load->view('user/includes/Footer'); ?>
   <!-- Javascript files-->
   <?php $this->load->view('user/includes/FooterScripts'); ?>