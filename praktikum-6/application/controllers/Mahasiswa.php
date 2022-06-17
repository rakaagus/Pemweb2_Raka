<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller{

    public function index(){

        $this->load->model("Mahasiswa_model", 'mhs1');
        $this->mhs1->id = 'mhs001';
        $this->mhs1->nim = '010002';
        $this->mhs1->nama = "Pajar Septianto";
        $this->mhs1->gender = "Pria";
        $this->mhs1->ipk = 3.70;

        $this->load->model("Mahasiswa_model", 'mhs2');
        $this->mhs2->id = 'mhs002';
        $this->mhs2->nim = '010002';
        $this->mhs2->nama = "Raka Agus Maulana";
        $this->mhs2->gender = "Pria";
        $this->mhs2->ipk = 3.90;

        $this->load->model("Mahasiswa_model", 'mhs3');
        $this->mhs3->id = 'mhs002';
        $this->mhs3->nim = '010003';
        $this->mhs3->nama = "Adina Syafina";
        $this->mhs3->gender = "Perempuan";
        $this->mhs3->ipk = 3.60;

        $data = array(
            'title' => "Mahasiswa",
            'list_mhs' => [$this->mhs1, $this->mhs2, $this->mhs3]
        );

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('mahasiswa/index');
        $this->load->view('layout/footer');
    }
}


?>