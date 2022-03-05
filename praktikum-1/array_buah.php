<?php

$nama_buah = ["semangka", "melon", "Apel", "Jeruk", "Pepaya"];
$nilai_siswa = ['nim'=>'0110219085', 'uts'=>100, 'uas'=>80, 'tugas'=>60];

foreach($nilai_siswa as $siswa => $value){
    echo $siswa. " " .$value . "<br>";
}

?>