<div class="footer_section layout_padding">
   <style>
      .email_text{
         float: left;
         width: 45%;
      }
   </style>
         <div class="container">
         <input type="text" size="30px" class="email_text mr-5" id="mail" placeholder="Emailinizi daxil edin" name="Enter Your Email">
         <div class="subscribe_bt"><a href="javascript:void(0);" onclick="window.open('mailto:'+document.querySelector('#mail').value);">Yazılın</a></div>
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-lg-3 margin_top">
                     <div class="call_text"><a href="tel:+994556772714"><img src="<?php echo base_url('public/assets/'); ?>images/call-icon1.png"><span class="padding_left_15">İndi zəng et : +994556772714</span></a></div>
                     <div class="call_text"><a href="mailto:ayxan.mustafayev.2004@mail.ru"><img src="<?php echo base_url('public/assets/'); ?>images/mail-icon1.png"><span class="padding_left_15">Mail at : ayxan.mustafayev.2004@mail.ru</span></a></div>
                  </div>
                  <div class="col-lg-3">
                     <div class="information_main">
                        <h4 class="information_text">Haqqımızda</h4>
                        <p class="many_text">Kursumuzda sizi görməyə çox şad olarıq. Mərkəzimiz Sumqayıt şəh. Sülh küç. 6/17 yerləşir.</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="information_main">
                        <h4 class="information_text">Linklər</h4>
                        <div class="footer_menu">
                           <ul>
                              <li><a href="<?php echo base_url('index'); ?>">ANA SƏHİFƏ</a></li>
                              <li><a href="<?php echo base_url('about'); ?>">HAQQIMIZDA</a></li>
                              <li><a href="<?php echo base_url('courses'); ?>">KURSLAR</a></li>
                              <li><a href="<?php echo base_url('contact'); ?>">ƏLAQƏ</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="information_main">
                        <div class="footer_logo"><a href="<?php echo base_url('index'); ?>"><img src="<?php echo base_url('public/assets'); ?>/images/logobrain.jpg"></a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>