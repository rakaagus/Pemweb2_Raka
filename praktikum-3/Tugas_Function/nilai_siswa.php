<?php
    require_once 'libfungsi.php';

$proses= $_POST['proses'];
$nama_mahasiswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

$nilai_total = ($nilai_tugas + $nilai_uas + $nilai_uts) / 3;
$casting_nilai = (int)$nilai_total;

$status = kelulusan($casting_nilai);
$predikat = grade($casting_nilai);
$keterangan = predikat($predikat);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <div class="container mt-4">
      <div class="card">
        <div class="card-header">
          Sistem Penilaian
        </div>
        <div class="card-body">
          <h5 class="card-title">Kartu Siswa</h5>
            <hr>
            <h4>Nama Mahasiswa: <?= $nama_mahasiswa?></h4>
            <h4>Mata Kuliah : <?= $mata_kuliah?></h4>
            <h4>Kalkulasi Nilai</h4>
            <hr>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Nilai UTS</th>
                    <th scope="col">Nilai UAS</th>
                    <th scope="col">Nilai Tugas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $nilai_uts?></td>
                        <td><?= $nilai_uas?></td>
                        <td><?= $nilai_tugas?></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-end">Total NIlai : <?= $casting_nilai ?> </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-end">Grade Nilai : <?= $predikat ?>, <?= $keterangan?> </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-end">Status Mahasiswa : <?= $status ?> </td>
                    </tr>
                </tbody>
            </table>
            <button class="btn btn-primary" onclick="window.print()">Cetak</button>
        </div>
      </div>
    </div>
    


    <script>
        <?php
            if(!empty($proses)){
                echo 'Swal.fire({';
                    echo 'icon: "success",';
                    echo 'title: "Success",';
                    echo 'text: "Data Berhasil Disimpan"';
                echo '})';
            } else{
                echo 'Swal.fire({';
                    echo 'icon: "error",';
                    echo 'title: "error",';
                    echo 'text: "Data Tidak Berhasil Didapatkan"';
                echo '})';
            }
        ?>
    </script>
</body>
</html>