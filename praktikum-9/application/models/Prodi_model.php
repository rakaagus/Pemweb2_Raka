<?php
class Prodi_model extends CI_Model{
    private $table = "prodi";


    public function getAll(){
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id){
        $this->db->where("kode", $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save($data){
        $sql = "INSERT INTO prodi (kode, nama, kaprodi)
        VALUES (?,?,?)";
        $this->db->query($sql, $data);
    }

    public function update($data){
        $sql = "UPDATE prodi SET kode=?, nama=?, kaprodi=? WHERE kode=?";
        $this->db->query($sql, $data);
    }

    public function delete($id){
        $sql = "DELETE FROM prodi WHERE kode=?";
        $this->db->query($sql, array($id));
    }
}

?>