<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller{

    public function index(){

        $this->load->model("Mahasiswa_model", "mahasiswa");

        $data = array(
            'title' => "Mahasiswa",
            'list_mhs' => $this->mahasiswa->getAll()
        );

        $this->load->view('layout/header', $data);
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('mahasiswa/index');
		$this->load->view('layout/footer');
    }

    public function create(){
        $data = array(
            'title' => "Create Mahasiswa",
        );
        $this->load->view('layout/header', $data);
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('mahasiswa/create');
		$this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model('Mahasiswa_model', 'mhs1');
        $this->mhs1->nim = $this->input->post('nim');
        $this->mhs1->nama = $this->input->post('nama');
        $this->mhs1->gender = $this->input->post('jk');
        $this->mhs1->tmp_lahir = $this->input->post('tmp_lahir');
        $this->mhs1->tgl_lahir = $this->input->post('tgl_lahir');
        $this->mhs1->prodi = $this->input->post('prodi');
        $this->mhs1->ipk = $this->input->post('ipk');

        // die(print_r($this->mhs1));

        $data = array(
            'title' => "View Mahasiswa",
            'mhs1' => $this->mhs1
        );

        // $this->load->view('layout/header', $data);
		// $this->load->view('layout/navbar');
		// $this->load->view('layout/sidebar');
		// $this->load->view('mahasiswa/view');
		// $this->load->view('layout/footer');
    }

    public function detail(){
        $_nim = $this->input->get('id');
        $this->load->model('Mahasiswa_model', 'mahasiswa');

        $data = array(
            'title' => 'Detail Mahasiswa',
            'mhs' => $this->mahasiswa->findById($_nim)
        );

        $this->load->view('layout/header', $data);
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('mahasiswa/detail');
		$this->load->view('layout/footer');
    }
}


?>