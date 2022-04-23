<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>BMI - mengukur dan menilai kesehatan anda</title>

      <!-- link bootstrap  -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
      
      <!-- link form builder -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

      <!-- personal css -->
      <link rel="stylesheet" href="assests/css/style.css" />

      <!-- SweetalertPopUp -->
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
      <section id="homepage" class="bg-primary">
        <h1 class="text-center text-light">BMI Calculate</h1>
        <div class="container">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-6 form">
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
                <div class="col-6 image">
                  <img src="assests/img/weight.jpg" alt="weight" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="../helper/sweetAlert.js"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    </body>
  </html>