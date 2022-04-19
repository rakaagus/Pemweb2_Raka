<?php

require_once 'class_bmi.php';
require_once 'class_pasien.php';

class BmiPasien{
    public $id;
    public $bmi;
    public $tanggal;
    public $passien;

    function _construct($bmi, $tanggal, $passien){
        $this->bmi = $bmi;
        $this->tanggal = $tanggal;
        $this->passien = $passien;
    }
}

?>