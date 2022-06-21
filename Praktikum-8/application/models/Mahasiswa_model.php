<?php

class Mahasiswa_model extends CI_Model{
    private $table = "mahasiswa";

    public function getAll(){
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id){
        $this->db->where('nim', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save($data){
        
    }

    public function update($data){
        
    }

    public function delete($data){
        
    }
}
?>