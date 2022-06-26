<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller{

    public function index(){

        $this->load->model("Matakuliah_model", 'matkul1');
        $this->matkul1->nama = "Jaringan Komputer";
        $this->matkul1->sks = 4;
        $this->matkul1->kode = "9912";

        $this->load->model("Matakuliah_model", 'matkul2');
        $this->matkul2->nama = "Pemograman Web";
        $this->matkul2->sks = 4;
        $this->matkul2->kode = "9901";
        
        $this->load->model("Matakuliah_model", 'matkul3');
        $this->matkul3->nama = "Basis Data";
        $this->matkul3->sks = 4;
        $this->matkul3->kode = "9921";
        
        $data = array(
            'title' => "Matakuliah",
            'list_matkul' => [$this->matkul1, $this->matkul2, $this->matkul3]
        );

        $this->load->view('layout/header.php', $data);
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/sidebar.php');
		$this->load->view('matakuliah/index.php');
		$this->load->view('layout/footer.php');
    }

    public function create(){
        $data = array(
            'title' => "Create Matakuliah",
        );
        $this->load->view('layout/header.php', $data);
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/sidebar.php');
		$this->load->view('matakuliah/create');
		$this->load->view('layout/footer.php');
    }

    public function save(){
        $this->load->model('Matakuliah_model', 'matkul1');
        $this->matkul1->nama = $this->input->post('nama');
        $this->matkul1->sks = $this->input->post('sks');
        $this->matkul1->kode = $this->input->post('kode');

        // die(print_r($this->matkul1));

        $data = array(
            'title' => "View Mahasiswa",
            'matkul1' => $this->matkul1
        );

        $this->load->view('layout/header.php', $data);
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/sidebar.php');
		$this->load->view('matakuliah/view');
		$this->load->view('layout/footer.php');
    }
}


?>