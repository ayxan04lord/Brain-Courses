<?php
class Language_Loader
{
    function loader() {
      
        $ci =& get_instance();
        $ci->load->helper('language');
        $siteLang = $ci->session->userdata('site_lang');
        if ($siteLang) {
            $ci->session->set_userdata('site_lang', $siteLang);
            $ci->lang->load('message',$siteLang);
        } else {
            $ci->session->set_userdata('site_lang','az');
            $ci->lang->load('message','az');
        }
    }
}