<?php
class LangSwitch extends CI_Controller
{
 
    public function __construct() {
        parent::__construct();
       
    }               
 
    function switchLanguage($language = "") {
        $language = ($language != "" && ($language == 'arabic') || $language == 'english' ) ? $language : "arabic";
        $this->session->set_userdata('site_lang', $language);
        $this->session->set_userdata('refered_from', $_SERVER['HTTP_REFERER']);
		redirect($this->session->userdata('refered_from')); 
    }
}
?>