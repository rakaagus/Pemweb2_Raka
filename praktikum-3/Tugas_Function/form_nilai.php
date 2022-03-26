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
            <form class="col-6 mx-auto my-auto" action="nilai_siswa.php" method="POST">
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
      </div>
    </div>

    <!-- Js boostrap -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>