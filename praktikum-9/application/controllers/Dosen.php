<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller{

    public function index(){

        $this->load->model("Dosen_model", 'dosen');

        $data = array(
            'title' => "Dosen",
            'list_dosen' => $this->dosen->getAll()
        );

        $this->load->view('layout/header.php', $data);
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/sidebar.php');
		$this->load->view('dosen/index.php');
		$this->load->view('layout/footer.php');
    }

    public function create(){
        $this->load->model("Prodi_model", 'prodi');
        $data = array(
            'title' => "Create Dosen",
            'list_prodi' => $this->prodi->getAll()
        );
        $this->load->view('layout/header.php', $data);
		$this->load->view('layout/navbar.php');
		$this->load->view('layout/sidebar.php');
		$this->load->view('dosen/create');
		$this->load->view('layout/footer.php');
    }

    public function save(){
        $this->load->model('Dosen_model', 'dosen');

        $_nidn = $this->input->post('nidn');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('jk');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_prodi = $this->input->post('prodi');
        $_pendidikan_akhir = $this->input->post('pendidikan_akhir');
        $_idedit = $this->input->post('id_edit');

        $data_dsn[] = $_nidn;
        $data_dsn[] = $_nama;
        $data_dsn[] = $_gender;
        $data_dsn[] = $_tmp_lahir;
        $data_dsn[] = $_tgl_lahir;
        $data_dsn[] = $_pendidikan_akhir;
        $data_dsn[] = $_prodi;

        // die(print_r($this->dsn1));
        if(isset($_idedit)){
            //update
            $data_dsn[] = $_idedit;
            $this->dosen->update($data_dsn);
        } else {
            // add data
            $this->dosen->save($data_dsn);
        }

        redirect(base_url().'index.php/dosen/','refresh');
    }

    public function detail(){
        $_nidn = $this->input->get('id');
        $this->load->model('Dosen_model', 'dosen');

        $data = array(
            'title' => 'Detail Dosen',
            'dsn' => $this->dosen->findById($_nidn)
        );

        $this->load->view('layout/header', $data);
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('dosen/detail');
		$this->load->view('layout/footer');
    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model("Dosen_model", 'dosen');
        $dsn_edit = $this->dosen->findById($_id);

        //kode unutk loop data prodi
        $this->load->model("Prodi_model", 'prodi');

        $data = array(
            'title' => 'Edit Dosen',
            'dsn_edit' => $dsn_edit,
            'list_prodi' => $this->prodi->getAll()
        );

        $this->load->view('layout/header', $data);
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('dosen/edit');
		$this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model("Dosen_model", 'dosen');

        $this->dosen->delete($_id);

        redirect(base_url().'index.php/dosen/', 'refresh');
    }
}


?>