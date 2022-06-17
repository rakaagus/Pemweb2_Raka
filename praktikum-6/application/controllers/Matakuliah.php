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

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('matakuliah/index');
        $this->load->view('layout/footer');
    }
}


?>