<?php
class Mahasiswa{
    var $matakuliah;
    var $nilai;
    var $nim;

    function __construct($matakuliah, $nilai, $nim){
        $this->matakuliah = $matakuliah;
        $this->nilai = $nilai;
        $this->nim = $nim;
    }

    function grade(){
        if($this->nilai >= 0 && $this->nilai < 35){
            return "E";
        } elseif($this->nilai >= 36 && $this->nilai < 55){
            return "D";
        } elseif($this->nilai >= 56 && $this->nilai < 69){
            return "C";
        } elseif($this->nilai >= 70 && $this->nilai < 84){
            return "B";
        } elseif($this->nilai >= 85 && $this->nilai < 100){
            return "A";
        } else{
            return "I";
        }    
    }

    function hasil(){
        if($this->nilai >= 55 ){
            return "Anda Lulus";
        } else{
            return "Anda Harus Mengulang Semster Depan";
        }
    }
}
?>