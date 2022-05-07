<?php

include_once 'header.php';
include_once 'navbar.php';
include_once 'sidebar.php';

?>

<?php
$proses= $_POST['proses'];
$nama_mahasiswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

$nilai_total = ($nilai_tugas + $nilai_uas + $nilai_uts) / 3;
$casting_nilai = (int)$nilai_total;

$status = "";
if($casting_nilai >= 55 ){
    $status = "Anda Lulus";
} else{
    $status = "Anda Harus Mengulang Semster Depan";
}

$predikat = "";
if($casting_nilai >= 0 && $casting_nilai < 35){
    $predikat = "E";
} elseif($casting_nilai >= 36 && $casting_nilai < 55){
    $predikat = "D";
} elseif($casting_nilai >= 56 && $casting_nilai < 69){
    $predikat = "C";
} elseif($casting_nilai >= 70 && $casting_nilai < 84){
    $predikat = "B";
} elseif($casting_nilai >= 85 && $casting_nilai < 100){
    $predikat = "A";
} else{
    $predikat = "I";
}

$keterangan = "";
switch($predikat){
    case "A":
        $keterangan = "Sangat Memuaskan";
        break;
    case "B":
        $keterangan = "Memuaskan";
        break;
    case "C":
        $keterangan = "Cukup";
        break;
    case "D":
        $keterangan = "Kurang";
        break;
    case "E":
        $keterangan = "Sangat Kurang";
        break;
    default:
        $keterangan = "Tidak Ada";
        break;
}
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Get Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Get Form</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Nilai Mahasiswa</h3>

        <div class="card-tools">
          <button
            type="button"
            class="btn btn-tool"
            data-card-widget="collapse"
            title="Collapse"
          >
            <i class="fas fa-minus"></i>
          </button>
          <button
            type="button"
            class="btn btn-tool"
            data-card-widget="remove"
            title="Remove"
          >
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
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
      <!-- /.card-body -->
      <div class="card-footer">Footer</div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php

require_once 'footer.php'

?>
