<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller{

    public function index(){

        $this->load->model("Dosen_model", 'dsn1');
        $this->dsn1->nidn = "02131";
        $this->dsn1->nama = "Ahmad Rio Adriansyah, S.Si. M.Si";
        $this->dsn1->gender = "Pria";
        $this->dsn1->pendidikan = "S2";

        $this->load->model("Dosen_model", 'dsn2');
        $this->dsn2->nidn = "02132";
        $this->dsn2->nama = "Sirojul Munir, S.Si, M.Kom";
        $this->dsn2->gender = "Pria";
        $this->dsn2->pendidikan = "S2";

        $this->load->model("Dosen_model", 'dsn3');
        $this->dsn3->nidn = "02133";
        $this->dsn3->nama = "Tifani Nabarian, S.Kom, M.T.i";
        $this->dsn3->gender = "Wanita";
        $this->dsn3->pendidikan = "S2";

        $data = array(
            'title' => "Dosen",
            'list_dosen' => [$this->dsn1, $this->dsn2, $this->dsn3]
        );

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('dosen/index');
        $this->load->view('layout/footer');
    }
}


?>