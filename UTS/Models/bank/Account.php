<?php
class Account{
    public $nomor;
    protected $saldo;

    public function __construct($nomor, $saldo){
        $this->nomor = $nomor;
        $this->saldo = $saldo;
    }

    public function Deposite($uang){
        $this->saldo += $uang;
    }

    public function Widraw($uang){
        $this->saldo -= $uang;
    }

    public function Cetak(){
        print("Nomor Account Anda: $nomor");
        print("Jumlah Saldo Anda: $saldo");
    }
}


?>