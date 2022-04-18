<?php

require_once "../AccountBank.php";
$norek = $_POST['norek'];
$nama = $_POST['nama'];
$saldo = $_POST['saldo'];

$ab1 = new AccountBank(223156, 6200000, "Sonia");
$ab2 = new AccountBank(233478, 700000, "Riska");
$ab3 = new AccountBank(145686, 5000000, "Jodi");
$ab4 = new AccountBank(347625, 8000000, "Susan");
$ab5 = new AccountBank($norek, $saldo, $nama);
$ab1->transfer($ab2, 200000);

$ar_ab = [$ab1, $ab2, $ab3, $ab4, $ab5];