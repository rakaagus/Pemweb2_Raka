<?php
require_once 'persegiPanjang.php';
$persegiPanjang1 = new PersegiPanjang(10, 20);
$persegiPanjang2 = new PersegiPanjang(20, 10);

echo "Luas PersgiPanjang I adalah: ".$persegiPanjang1->getLuas();
echo "<br>Luas PersgiPanjang II adalah: ".$persegiPanjang1->getLuas();
echo "Keliling PersgiPanjang I adalah: ".$persegiPanjang2->getKeliling();
echo "<br>Keliling PersgiPanjang II adalah: ".$persegiPanjang2->getKeliling();

?>