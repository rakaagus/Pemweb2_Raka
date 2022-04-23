<?php
    require_once('../Models/class_pasien.php');
    require_once('../Models/class_bmiPasien.php');
    require_once('../Models/class_bmi.php');

    $date = date("y-m-d");

    $proses = $_POST['proses'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST["tgl_lahir"];
    $gender = $_POST['gender'];
    $beratBadan = $_POST['berat_badan'];
    $tinggiBadan = $_POST['tinggi_badan'];

    $passien1 = new Pasien("Ahmad", "Laki-Laki", "1990-05-19", "P001");
    $bmi1 = new Bmi(69.8, 165);
    $bmiPassien1 = new BmiPasien($bmi1, "2022-01-10", $passien1);

    $passien2 = new Pasien("Rina", "Perempuan", "2000-01-07", "P002");
    $bmi2 = new Bmi(55.3, 165);
    $bmiPassien2 = new BmiPasien($bmi2, "2022-01-10", $passien2);

    $passien3 = new Pasien("Lutfi", "Perempuan", "1995-06-10", "P003");
    $bmi3 = new Bmi(45.2, 171);
    $bmiPassien3 = new BmiPasien($bmi3, "2022-01-11", $passien3);

    $passien4 = new Pasien($nama, $gender, $tgl_lahir, "P004");
    $bmi4 = new Bmi($beratBadan, $tinggiBadan);
    $bmiPassien4 = new BmiPasien($bmi4, $date, $passien4);

    $data = [$bmiPassien1, $bmiPassien2, $bmiPassien3, $bmiPassien4];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Result - BMI</title>
    <!-- link bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- ends here -->
    <!-- personal css -->
    <link rel="stylesheet" href="result.css" />
    <!-- ends here -->
  </head>
  <body>
  <section id="homepage">
        <div class="container">
          <div class="card mt-2">
            <div class="card-body">
              <div class="row">
                <div class="col-6">
                  <img src="assests/img/weight.jpg" alt="weight" style="max-width: 70%; height: auto;"/>
                </div>
                <div class="col-6">
                  <p class="text-capitalize">Passien Dengan Nama <?= $nama; ?></p>
                  <p class="text-capitalize">Berat Badan Anda adalah <?= $beratBadan; ?> dan Tinggi Badan Anda <?= $tinggiBadan; ?></p>
                  <p class="text-capitalize">Hasil Bmi Kamu adalah <?= $bmi4->nilaiBmi(); ?></p>
                  <p class="text-capitalize">Status Bmi Kamu Adalah <?= $bmi4->statusBmi(); ?></p>
                </div>
                <div class="col-12 mt-2">
                  <div class="form-group">
                      <button  type="submit" class="btn btn-primary coba" name="showMoreData" onclick="showData()">Liat Data Passien lainnya</button>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="card mt-3 d-none" id="containerData">
            <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Tanggal Cek</th>
                  <th scope="col">Kode Pasien</th>
                  <th scope="col">Nama Pasien</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Berat (Kg)</th>
                  <th scope="col">Tinggi (Cm)</th>
                  <th scope="col">Nilai BMI</th>
                  <th scope="col">Status BMI</th>
                </tr>
              </thead>
              <tbody>
              <?php
                  $no = 1;
                  foreach ($data as $obj) :
                  ?>
                    <tr class="table-light text-center">
                      <td><?= $no ?></td>
                      <td><?= $obj->tanggal ?></td>
                      <td><?= $obj->pasien->kode ?></td>
                      <td><?= $obj->pasien->nama ?></td>
                      <td><?= $obj->pasien->gender ?></td>
                      <td><?= $obj->bmi->berat ?></td>
                      <td><?= $obj->bmi->tinggi ?></td>
                      <td><?= $obj->bmi->nilaiBMI() ?></td>
                      <td><?= $obj->bmi->statusBMI() ?></td>
                    </tr>
                  <?php
                    $no++;
                  endforeach;
                  ?>
              </tbody>
            </table>
            <div class="col-12 mt-2">
                  <div class="form-group">
                      <button  type="submit" class="btn btn-primary coba" name="showMoreData" onclick="closeData()">Tutup Data</button>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- SweetalertPopUp -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <scrtpt src="../helper/sweetAlert.js"></scrtpt>

    <script>
      function showData(){
        let display = document.getElementById("containerData");
        display.classList.remove("d-none");
        display.classList.add("d-block");
      }

      function closeData(){
        let display = document.getElementById("containerData");
        display.classList.remove("d-block");
        display.classList.add("d-none");
      }
      

        <?php
        if(is_null($proses)){
          echo 'Swal.fire({';
            echo 'icon: "error",';
            echo 'title: "error",';
            echo 'text: "Data Tidak Berhasil Didapatkan"';
          echo '})';
          header('Location: ' . $_SERVER['HTTP_REFERER']);
        } else if(is_null($gender)){
          echo 'Swal.fire({';
            echo 'icon: "error",';
            echo 'title: "error",';
            echo 'text: "Inputan Gender Harus Di isi"';
          echo '})';
          header('Location: ' . $_SERVER['HTTP_REFERER']);
        } else if(is_null($nama)){
          echo 'Swal.fire({';
            echo 'icon: "error",';
            echo 'title: "error",';
            echo 'text: "Inputan Nama Harus Di isi"';
          echo '})';
          header('Location: ' . $_SERVER['HTTP_REFERER']);
        }else if(is_null($tgl_lahir)){
          echo 'Swal.fire({';
            echo 'icon: "error",';
            echo 'title: "error",';
            echo 'text: "Inputan Tanggal Lahir Harus Di isi"';
          echo '})';
          header('Location: ' . $_SERVER['HTTP_REFERER']);
        }else if(is_null($tinggiBadan)){
          echo 'Swal.fire({';
            echo 'icon: "error",';
            echo 'title: "error",';
            echo 'text: "Inputan Tanggal Lahir Harus Di isi"';
          echo '})';
          header('Location: ' . $_SERVER['HTTP_REFERER']);
        }else if(is_null($tinggiBadan)){
          echo 'Swal.fire({';
            echo 'icon: "error",';
            echo 'title: "error",';
            echo 'text: "Inputan Tanggal Lahir Harus Di isi"';
          echo '})';
          header('Location: ' . $_SERVER['HTTP_REFERER']);
        } else{
          echo 'Swal.fire({';
            echo 'icon: "success",';
            echo 'title: "Success",';
            echo 'text: "Data Berhasil Disimpan"';
          echo '})';
        }
        ?>
    </script>

  </body>
</html>