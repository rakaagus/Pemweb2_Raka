<?php

include_once 'header.php';
include_once 'navbar.php';
include_once 'sidebar.php';

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Bank</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Bank</li>
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
        <h3 class="card-title">Form Validate</h3>

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
        <form action="#" method="POST">
            <div class="mb-3">
                <label class="form-label">Nomer Rekening</label>
                <input type="text" class="form-control norek" name="norek" value="" />
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Customer</label>
                <input type="text" class="form-control nama" name="nama" value="" />
            </div>
            <div class="mb-3">
                <label class="form-label">Saldo Awal</label>
                <input type="text" class="form-control saldo" name="saldo" value="" />
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary w-100" name="simpan">
                    Simpan
                </button>
            </div>
        </form>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">Footer</div>
      <!-- /.card-footer-->
    </div>

    <?php
    require_once("../../Models/bank/AccountBank.php");
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

    ?>

    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Form Validate</h3>

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
      <table class="table table-hover shadow-md">
          <thead>
              <tr class="table-dark table-active text-white text-center">
                  <td>No</td>
                  <td>Nomer Rekening</td>
                  <td>Nama Customer</td>
                  <td>Saldo</td>
              </tr>
          </thead>
          <tbody>
              <?php
              if (isset($_POST['simpan'])) {
                  $no = 1;
                  foreach ($ar_ab as $obj) :
                      ?>
                          <tr class="table-light text-center">
                              <td><?= $no ?></td>
                              <td><?= $obj->nomor ?></td>
                              <td><?= $obj->customer ?></td>
                              <td><?= $obj->seSaldo() ?></td>
                          </tr>
                      <?php
                  $no++;
                  endforeach;
              }
              ?>
          </tbody>
        </table>
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
