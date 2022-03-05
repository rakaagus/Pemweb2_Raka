<?php

    $nis1 = ['id'=>1, 'nim'=>'0110219085', 'uts'=>100, 'uas'=>90, 'tugas'=>90];
    $nis2 = ['id'=>2, 'nim'=>'0110219086', 'uts'=>70, 'uas'=>85, 'tugas'=>70];
    $nis3 = ['id'=>3, 'nim'=>'0110219087', 'uts'=>85, 'uas'=>90, 'tugas'=>88];
    $nis4 = ['id'=>4, 'nim'=>'0110219088', 'uts'=>90, 'uas'=>75, 'tugas'=>79];

    $ar_nilai = [$nis1, $nis2, $nis3, $nis4];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum 2 - Raka Agus Maulana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-lg-4">
        <h3>Daftar Data Siswa</h3>
        <div class="col-lg-12">
        <table border="1" width="100%" class="table table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nim</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>TUGAS</th>
                <th>Nilai Akhir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach($ar_nilai as $ns){
                echo '<tr><td>'.$nomor.'</br>';
                echo '<td>' . $ns['nim'] . '</br>';
                echo '<td>' . $ns['uts'] . '</br>';
                echo '<td>' . $ns['uas'] . '</br>';
                echo '<td>' . $ns['tugas'] . '</br>';
                $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3;
                echo '<td>' . number_format($nilai_akhir, 2, ',', '.'). '</td>';
                echo '</tr>';
                $nomor++;
            }
            ?>
        </tbody>
    </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>