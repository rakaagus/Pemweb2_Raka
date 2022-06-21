<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller{

    public function index(){
        $this->load->model("Prodi_model", "prodi");

        $data = array(
            'title' => "Prodi",
            'list_prodi' => $this->prodi->getAll()
        );

        $this->load->view('layout/header', $data);
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('prodi/index');
		$this->load->view('layout/footer');
    }

}


?>