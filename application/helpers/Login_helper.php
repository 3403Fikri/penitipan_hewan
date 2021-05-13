<?php
 defined('BASEPATH') OR exit('no direct access');

function isLogin()
 {
     $CI = & get_instance();
     if ($CI->session->userdata('isLogin') == false) {
         redirect('login');
     }
 }

?>