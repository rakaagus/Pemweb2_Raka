<?php
$proses= $_GET['proses'];
$nama_mahasiswa = $_GET['nama'];
$mata_kuliah = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];

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
          <h5 class="card-title">Form Nilai Siswa</h5>
            <hr>
            <form class="col-6 mx-auto my-auto" action="form_nilai_get.php" method="GET" id="formNilai">
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

    <div class="container mt-4 my-5" id="card">
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
            } 
        ?>
    </script>
    
</body>
</html>