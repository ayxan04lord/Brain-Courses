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
   <!-- newsletter section start -->
   <style>
      
   </style>
   <div class="newsletter_section layout_padding">
      <div class="container">
         <div class="newsletter_main">
           
            <div class="container">
               <div class="row">
               
                  <div class="col-md-6">
                     <div class="row mx-auto">
                        <div class="card customStyle-card-form">
                           <div class="card-body">
                              <h5 class="card-title customStyle-card-title-form"><i class="bi bi-person"></i> Contact</h5>

                              <form class="row g-3 needs-validation" onsubmit="validateForm()" name="contactForm">

                                 <div class="col-md-3">
                                    <label for="validationCustom01" class="form-label">Full Name</label>
                                    <input name="fullName" type="text" id="fullNameForm" class="form-control" value="" required autocomplete="off">
                                 </div>

                                 <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">Phone</label>
                                    <div class="input-group has-validation">
                                       <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-telephone-fill"></i></span>
                                       <input name="phone" type="text" id="phoneForm" class="form-control" aria-describedby="inputGroupPrepend" required autocomplete="off">
                                    </div>
                                 </div>

                                 <div class="col-md-5">
                                    <label for="validationCustomUsername" class="form-label">Email</label>
                                    <div class="input-group has-validation">
                                       <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-envelope-at-fill"></i></span>
                                       <input name="email" type="text" id="emailForm" class="form-control" aria-describedby="inputGroupPrepend" required autocomplete="off">
                                    </div>
                                 </div>

                                 <div class="col-md-12">
                                    <label for="validationCustom03" class="form-label">Message</label>
                                    <textarea type="text" class="form-control" required autocomplete="off"></textarea>
                                 </div>

                                 <div class="col-12">
                                    <button class="btn btn-primary customStyle-btn-primary" type="submit"><i class="bi bi-send-fill"></i> Send </button>
                                 </div>

                              </form>

                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d115343.00538156935!2d49.68802161219034!3d40.56400867042153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1saz!2saz!4v1700650880791!5m2!1saz!2saz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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