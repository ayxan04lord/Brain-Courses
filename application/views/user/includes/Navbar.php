<nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <a class="logo" href="<?php base_url('index') ?>"><img src="<?php echo base_url('public/assets/images/logo.png') ?>"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">

                  <?php
                  $current_segment=$this->uri->segment(1);
                  ?>
                     <ul class="navbar-nav mr-auto">
                        <li class="nav-item <?= $current_segment=='index'||$current_segment==''?'active':''; ?>">
                           <a class="nav-link" href="<?php echo base_url('index');?>">ANA SƏHİFƏ</a>
                        </li>
                        <li class="nav-item <?= $current_segment=='services'?'active':''; ?>">
                           <a class="nav-link" href="<?php echo base_url('services');?>">KURSLAR</a>
                        </li>
                        <li class="nav-item <?= $current_segment=='about'?'active':''; ?>">
                           <a class="nav-link" href="<?php echo base_url('about');?>">HAQQIMIZDA</a>
                        </li>
                        <li class="nav-item <?= $current_segment=='contact'?'active':''; ?>">
                           <a class="nav-link" href="<?php echo base_url('contact');?>">ƏLAQƏ</a>
                        </li>
                     </ul>
                     <div class="call_section">
                        <ul>
                           <li><a href="#"><img src="<?php echo base_url('public/assets/images/fb-icon.png'); ?>"></a></li>
                           <li><a href="#"><img src="<?php echo base_url('public/assets/images/twitter-icon.png'); ?>"></a></li>
                           <li><a href="#"><img src="<?php echo base_url('public/assets/images/linkedin-icon.png'); ?>"></a></li>
                           <li><a href="#"><img src="<?php echo base_url('public/assets/images/instagram-icon.png'); ?>"></a></li>
                           <div class="donate_bt"><a href="#"><img src="<?php echo base_url('public/assets/images/search-icon.png'); ?>"></a></div>
                        </ul>
                     </div>
                  </div>
               </nav>