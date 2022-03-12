<?php


//deklarasi Array
$data = array("rafi", "dika", "fikri", "budi");

$data2 = ["rafi", "dika", "fikri", "budi", 10, true, 10.5];

// echo $data[1];

$buah = [];

$buah[0] = "apel";
$buah[1] = "pisang";

$buah2 = [];

// var_dump($buah);
// echo "<br>";
// echo count($buah);

array_push($buah2, "apel", "pisang", "mangga");
print_r($buah2);
var_dump(in_array("udin", $buah2));
// echo count($data);
// unset($data);
// echo count($data);

?>