<?php

        require_once 'Mahasiswa.php';

        $proses = $_GET['proses'];
        $nim = $_GET['nim'];
        $matkul = $_GET['matkul'];
        $nilai = $_GET['nilai'];
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
    <div class="container mt-4">
      <div class="card">
        <div class="card-header">
          Sistem Penilaian
        </div>
        <div class="card-body">
          <h5 class="card-title">Form Nilai Siswa</h5>
            <hr>
            <form class="col-6 mx-auto my-auto" action="index.php" method="GET">
              <div class="row mb-3">
                <label for="inputNama" class="col-sm-3 col-form-label">Nim</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputNama" name="nim">
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
                <label for="inputNilaiTugas" class="col-sm-3 col-form-label">Nilai</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="inputNilaiTugas" name="nilai" placeholder="Nilai Tugas/Praktikum">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-8">
                  <input type="submit" value="Simpan" class="btn btn-primary" name="proses">
                </div>
              </div>
            </form>
            <?php

             $mhs = new Mahasiswa($matkul, $nilai, $nim);
             echo "NIM: " . $mhs->nim . "<br>";
             echo "Nama Matakuliah: " . $mhs->matakuliah . "<br>";
             echo "Nilai: " . $mhs->nilai . "<br>";
             echo "Hasil Ujian: " . $mhs->grade() . "<br>";
             echo "Grade: " . $mhs->hasil() . "<br>";
            
            ?>
        </div>
      </div>
    </div>

    <!-- Js boostrap -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        <?php
            if(!empty($proses)){
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