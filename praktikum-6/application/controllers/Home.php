<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  
    public function index()
    {
        $data = array(
            'title' => "Home"
        );
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('home/index');
        $this->load->view('layout/footer');
    }
}