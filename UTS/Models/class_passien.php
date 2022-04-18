<?php

class Pasien{
    public $id;
    public $kode;
    public $nama;
    public $tmp_lahir;
    public $tgl_lahir;
    public $email;
    public $gender;
    
    function _construct($nama, $gender, $tgl_lahir, $tmp_lahir){
        $this->nama = $nama;
        $this->gender = $gender;
        $this->tgl_lahir = $tgl_lahir;
        $this->tmp_lahir = $tmp_lahir;
    }
}


?>