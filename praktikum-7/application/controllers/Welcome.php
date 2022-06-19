<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$data = array(
			'title' => "Home"
		);
		$this->load->view('layout/header.php', $data);
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/sidebar.php');
		$this->load->view('welcome.php');
		$this->load->view('layout/footer.php');
	}
}
