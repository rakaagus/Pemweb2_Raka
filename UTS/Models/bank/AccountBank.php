<?php

require_once 'Account.php';

class AccountBank extends Account{
    public $customer;
    public static $biaya_admin = 4500;

    public function __construct($nomor, $saldo, $customer){
        parent::__construct($nomor, $saldo);
        $this->customer = $customer;
    }

    public function Transfer($tujuan, $jumlah_transfer){
        $tujuan->Deposite($jumlah_transfer);
        $this->Widraw($jumlah_transfer);
        $this->Widraw(self::$biaya_admin);
    }

    public function Cetak(){
        parent::Cetak();
        print($this->customer);
    }

    public function seSaldo(){
        print("Rp. " . number_format($this->saldo,2,',','.'));
    }
}

?>