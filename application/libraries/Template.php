<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template {

        public function page_view()
        {
          $CI =& get_instance();
          $CI->load->view('blocks/scripts_view.php');
      		$CI->load->view('blocks/header_view.php');
          $CI->load->view('blocks/menu_view.php');
      		$CI->load->view('blocks/bodyleft_view.php');
          $CI->load->view('blocks/bodyright_view.php');
      		$CI->load->view('blocks/footer_view.php');
        }
}
