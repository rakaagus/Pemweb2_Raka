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
        $this->load->model('Mahasiswa_model', 'mahasiswa');

        $_nim = $this->input->post('nim');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('jk');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_prodi = $this->input->post('prodi');
        $_ipk = $this->input->post('ipk');
        $_idedit = $this->input->post('id_edit');

        $data_mhs[] = $_nim;
        $data_mhs[] = $_nama;
        $data_mhs[] = $_gender;
        $data_mhs[] = $_tmp_lahir;
        $data_mhs[] = $_tgl_lahir;
        $data_mhs[] = $_ipk;
        $data_mhs[] = $_prodi;
        

        if(isset($_idedit)){
            //update
            $data_mhs[] = $_idedit;
            $this->mahasiswa->update($data_mhs);
        } else {
            // add data
            $this->mahasiswa->save($data_mhs);
        }

        redirect(base_url().'index.php/mahasiswa/','refresh');
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

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model("Mahasiswa_model", 'mahasiswa');
        $mhs_edit = $this->mahasiswa->findById($_id);

        $data = array(
            'title' => "Edit Mahasiswa",
            'mhs_edit' => $mhs_edit
        );

        $this->load->view('layout/header', $data);
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('mahasiswa/edit');
		$this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model("Mahasiswa_model", 'mahasiswa');

        $this->mahasiswa->delete($_id);

        redirect(base_url().'index.php/mahasiswa/', 'refresh');
    }
}


?>