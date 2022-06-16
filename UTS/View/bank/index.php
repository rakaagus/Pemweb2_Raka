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
          <h1>Bmi</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Bmi</li>
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
        <div class="row">
          <div class="col-12 form">
            <form method="POST" action="result.php" name="myForm" onsubmit="return validateForm()">
              <!-- radiobutton gender 1 -->
              <div class="form-group row">
                <label class="col-4">Gender :</label>
                <div class="col-8">
                  <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="radio_0" type="radio" class="custom-control-input" value="Laki - Laki" require />
                    <label for="radio_0" class="custom-control-label">Laki-Laki</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="radio_1" type="radio" class="custom-control-input" value="Perempuan" require />
                    <label for="radio_1" class="custom-control-label">Perempuan</label>
                  </div>
                </div>
              </div>
              <!-- end radiabutton 1 -->
              <!-- text-area nama 1 -->
              <div class="form-group">
                <label for="text">Nama</label>
                <input id="nama" name="nama" type="text" class="form-control" />
              </div>
              <!-- end text area 1 -->

              <!-- text-area nama 1 -->
              <div class="form-group">
                <label for="text">Tanggal Lahir</label>
                <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" />
              </div>
              <!-- end text area 1 -->
              
              <!-- select area 1 berat badan -->
              <div class="form-group">
                <label for="berat-badan">Berat Badan</label>
                <div>
                  <input type="number" name="berat_badan" id="berat_badan" class="form-control" />
                  <span id="tinggi-badanHelpBlock" class="form-text text-muted">Dalam hitungan Kg </span>
                </div>
              </div>
              <!-- end select area 1 -->

              <!-- select area 2 tinggi badan -->
              <div class="form-group">
                <label for="tinggi-badan">Tinggi Badan</label>
                <div>
                  <input type="number" name="tinggi_badan" id="tinggi_badan" class="form-control" />
                  <span id="tinggi-badanHelpBlock" class="form-text text-muted">Dalam hitungan CM </span>
                </div>
              </div>
              <!-- end select area 2 -->

              <!-- submit button proses -->
              <div class="form-group">
                <button name="proses" type="submit" class="btn btn-primary">Submit</button>
              </div>
              <!-- end submit button -->

            </form>
          </div>
        </div>
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

<script>
    function validateForm() {
      let name = document.forms["myForm"]["nama"].value;
      let tglLahir = document.forms["myForm"]["tgl_lahir"].value;
      let beratBadan = document.forms["myForm"]["berat_badan"].value;
      let tinggiBadan = document.forms["myForm"]["tinggi_badan"].value;

      let gender = document.getElementsByName("gender");
      var formValid = false;

      var i = 0;
      while (!formValid && i < gender.length) {
          if (gender[i].checked) formValid = true;
          i++;        
      }

        if (name == "") {
            Swal.fire({
              title: "Error!",
              text: "Inputan Nama Wajib Diisi!!",
              icon: "error",
              confirmButtonText: "Confirm",
            });
            return false;
        } else if(!formValid){
          Swal.fire({
            title: "Error!",
            text: "Inputan Gender Wajib Diisi!!",
            icon: "error",
            confirmButtonText: "Cool",
          });
          return false;
        } else if(tglLahir == ""){
          Swal.fire({
            title: "Error!",
            text: "Inputan Tanggal Lahir Wajib Diisi!!",
            icon: "error",
            confirmButtonText: "Cool",
          });
          return false;
        }else if(beratBadan == ""){
          Swal.fire({
            title: "Error!",
            text: "Inputan Berat Badan Wajib Diisi!!",
            icon: "error",
            confirmButtonText: "Cool",
          });
          return false;
        } else if(tinggiBadan == ""){
          Swal.fire({
            title: "Error!",
            text: "Inputan Tinggi Badan Wajib Diisi!!",
            icon: "error",
            confirmButtonText: "Cool",
          });
          return false;
        } else if(tinggiBadan == "" && beratBadan == "" && tglLahir == "" && !formValid && name == ""){
          Swal.fire({
            title: "Error!",
            text: "Harap Masukan Dengan Benar!!",
            icon: "error",
            confirmButtonText: "Cool",
          });
          return false;
        } else {
          return true;
        }
      }
  </script>

<?php

require_once 'footer.php'

?>
