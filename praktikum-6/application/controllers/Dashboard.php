<?php

class Dashboard extends CI_Controller{
    

    public function index(){
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('dashboard');
        $this->load->view('layouts/footer');
    }

}


?>