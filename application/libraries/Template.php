<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template {

        public function page_view()
        {
          $CI =& get_instance();
          $CI->load->view('blocks/scripts_view.php');
      		$CI->load->view('blocks/header_view.php');
      		$CI->load->view('blocks/body_view.php');
      		$CI->load->view('blocks/footer_view.php');
        }
}
