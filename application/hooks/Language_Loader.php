<?php
class Language_Loader
{
    function initialize() {
        $ci =& get_instance();
        $ci->load->helper('language');
        $ci->session->userdata('site_lang','en');
        $siteLang = $ci->session->userdata('site_lang');
        if ($siteLang) {
            $ci->lang->load('message',$siteLang);
        } else {
            $ci->lang->load('message','eng');
        }
    }
}