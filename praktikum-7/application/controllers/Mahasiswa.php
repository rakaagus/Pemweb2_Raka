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

        $this->load->view('layout/header.php', $data);
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/sidebar.php');
		$this->load->view('Mahasiswa/index');
		$this->load->view('layout/footer.php');
    }

    public function create(){
        $data = array(
            'title' => "Create Mahasiswa",
        );
        $this->load->view('layout/header.php', $data);
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/sidebar.php');
		$this->load->view('Mahasiswa/create');
		$this->load->view('layout/footer.php');
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

        $this->load->view('layout/header.php', $data);
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/sidebar.php');
		$this->load->view('Mahasiswa/view');
		$this->load->view('layout/footer.php');
    }
}


?>