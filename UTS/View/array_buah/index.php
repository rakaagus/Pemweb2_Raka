<?php

include_once 'header.php';
include_once 'navbar.php';
include_once 'sidebar.php';

?>

<?php

    $nis1 = ['id'=>1, 'nim'=>'0110219085', 'uts'=>100, 'uas'=>90, 'tugas'=>90];
    $nis2 = ['id'=>2, 'nim'=>'0110219086', 'uts'=>70, 'uas'=>85, 'tugas'=>70];
    $nis3 = ['id'=>3, 'nim'=>'0110219087', 'uts'=>85, 'uas'=>90, 'tugas'=>88];
    $nis4 = ['id'=>4, 'nim'=>'0110219088', 'uts'=>90, 'uas'=>75, 'tugas'=>79];

    $ar_nilai = [$nis1, $nis2, $nis3, $nis4];

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Array Buah</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Array Buah</li>
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
        <h3 class="card-title">Daftar Data Siswa</h3>

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
      <!-- /.card-body -->
      <div class="card-footer">Footer</div>
      <!-- /.card-footer-->
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php

require_once 'footer.php'

?>
