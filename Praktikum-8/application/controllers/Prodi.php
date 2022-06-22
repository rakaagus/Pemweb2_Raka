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

    public function create(){
        $data = array(
            'title' => "Create Prodi",
        );
        $this->load->view('layout/header', $data);
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('prodi/create');
		$this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model('Prodi_model', 'prodi');

        $_kode = $this->input->post('kode');
        $_nama = $this->input->post('nama');
        $_kaprodi = $this->input->post('kaprodi');
        $_idedit = $this->input->post('id_edit');

        $data_prodi[] = $_kode;
        $data_prodi[] = $_nama;
        $data_prodi[] = $_kaprodi;

        if(isset($_idedit)){
            //update
            $data_prodi[] = $_idedit;
            $this->prodi->update($data_prodi);
        } else {
            // add data
            $this->prodi->save($data_prodi);
        }

        redirect(base_url().'index.php/prodi/','refresh');
    }

    public function detail(){
        $_kode = $this->input->get('id');
        $this->load->model('Prodi_model', 'prodi');

        $data = array(
            'title' => 'Detail Mahasiswa',
            'prodi' => $this->prodi->findById($_kode)
        );

        $this->load->view('layout/header', $data);
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('prodi/detail');
		$this->load->view('layout/footer');
    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model("Prodi_model", 'prodi');
        $prodi_edit = $this->prodi->findById($_id);

        $data = array(
            'title' => "Edit Mahasiswa",
            'prodi_edit' => $prodi_edit
        );

        $this->load->view('layout/header', $data);
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('prodi/edit');
		$this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model("Prodi_model", 'prodi');

        $this->prodi->delete($_id);

        redirect(base_url().'index.php/prodi/', 'refresh');
    }

}


?>