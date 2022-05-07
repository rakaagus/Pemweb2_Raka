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
        <h3 class="card-title">Form Nilai</h3>

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
      <form class="col-6 mx-auto my-auto" action="result.php" method="POST" id="formNilai">
              <div class="row mb-3">
                <label for="inputNama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputNama" name="nama">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputMatkul" class="col-sm-3 col-form-label">Mata Kuliah</label>
                <div class="col-sm-9">
                  <select class="form-select" aria-label="Default select example" name="matkul">
                    <option selected>--->Select<---</option>
                    <option value="DDP">DDP</option>
                    <option value="Basis Data">Basis Data 1</option>
                    <option value="Pw2">Pemogramaan Web 2</option>
                  </select>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputNilaiUts" class="col-sm-3 col-form-label">Nilai Uts</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="inputNilaiUts" name="nilai_uts" placeholder="Nilai Uts">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputNilaiUas" class="col-sm-3 col-form-label">Nilai Uas</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="inputNilaiUas" name="nilai_uas" placeholder="Nilai Uas">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputNilaiTugas" class="col-sm-3 col-form-label">Nilai Tugas</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="inputNilaiTugas" name="nilai_tugas" placeholder="Nilai Tugas/Praktikum">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-8">
                  <input type="submit" value="Simpan" class="btn btn-primary" name="proses">
                </div>
              </div>
            </form>
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
