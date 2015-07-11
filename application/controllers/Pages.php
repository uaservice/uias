<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		// $this->load->view('template_view');
		$this->load->view('blocks/scripts_view.php');
		$this->load->view('blocks/header_view.php');
		$this->load->view('blocks/body_view.php');
		$this->load->view('blocks/footer_view.php');
	}
}
