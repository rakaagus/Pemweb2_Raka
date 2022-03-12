<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Cart</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    
    <div class="container">
    <div class="card my-5">
        <div class="card-header">
            Form Pembelian
        </div>
        <div class="card-body">
            <form class="row g-3" method="POST" action="online_card.php" id="form">
                <div class="col-md-6">
                    <label for="inputFristName" class="form-label">Nama Depan</label>
                    <input type="text" class="form-control" id="inputFristName" name="firstName">
                </div>
                <div class="col-md-6">
                    <label for="inputLastName" class="form-label">Nama Belakang</label>
                    <input type="text" class="form-control" id="inputLastName" name="lastName">
                </div>
                <div class="col-12">
                    <label for="inputAlamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="inputAlamat" placeholder="1234 Main St" name="alamat">
                </div>
                <div class="col-md-10">
                    <label for="inputState" class="form-label">Kota</label>
                    <select id="inputState" class="form-select" name="kota">
                    <option selected>Choose...</option>
                    <option value="Bekasi">Bekasi</option>
                    <option value="Depok">Depok</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Jumlah</label>
                    <input type="number" class="form-control" id="inputZip" name="jumlah">
                </div>
                <fieldset class="row mb-3 my-3">
                    <legend class="col-form-label col-sm-2 pt-0">Product</legend>
                    <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="product" id="gridRadios1" value="TV" checked>
                        <label class="form-check-label" for="gridRadios1">
                        TV
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="product" id="gridRadios2" value="Kulkas">
                        <label class="form-check-label" for="gridRadios2">
                        Kulkas
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="product" id="gridRadios3" value="Ac">
                        <label class="form-check-label" for="gridRadios3">
                        Ac
                        </label>
                    </div>
                    </div>
                </fieldset>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="beli">Beli</button>
                </div>
            </form>
        </div>
    </div>
    </div>

    <?php
        $proses = $_POST["beli"];
        $kota = $_POST["kota"];
        $namaDepan = $_POST["firstName"];
        $namaBelakang = $_POST["lastName"];
        $product = $_POST["product"];
        $alamat = $_POST["alamat"];
        $jumlah = $_POST["jumlah"];

        $namaLengkap = $namaDepan." ".$namaBelakang;

        $total;
        if($product == "TV"){
            $total = $jumlah * 20000000;
        }elseif($product == "Kulkas"){
            $total = $jumlah * 1000000;
        }elseif($product == "AC"){
            $total = $jumlah * 900000;
        } else{
            $total = 0;
        }

        $gamabar_tv = "https://asset.kompas.com/crops/i_JxkjX7v3RQi4DKC13K83QKUms=/0x1:580x388/750x500/data/photo/2021/06/16/60c9859413632.jpg";
        $gamabr_kulkas = "https://asset.kompas.com/crops/i_JxkjX7v3RQi4DKC13K83QKUms=/0x1:580x388/750x500/data/photo/2021/06/16/60c9859413632.jpg";
        $gamabar_Ac = "https://blogpictures.99.co/merek-ac-terbaik-header.jpg";

        function getGambar(string $product){
            $gambar;
            switch($product){
                case "TV":
                    $gambar = $gamabar_tv;
                    return $gambar;
                    break;
                case "Ac":
                    $gambar = $gamabar_Ac;
                    return $gamabar;
                    break;
                case "Kulkas":
                    $gambar = $gamabr_kulkas;
                    return $gamabr;
                    break;
                default:
                    $gamabar = "https://images.bizlaw.id/gbr_artikel/images-2_294.webp";
                    return $gambar;
                    break;
            }
        }
    ?>

    <div class="container" id="cardContainer">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="<?= getGambar($product) ?>" class="img-fluid rounded-start" alt="Not Found">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Card Pesanan</h5>
                    <p class="card-text">Nama Pembeli: <?= $namaLengkap ?></p>
                    <p class="card-text">Jumlah Beli: <?= $jumlah ?></p>
                    <p class="card-text">ALamat Pembeli: <?= $alamat ?>, <?= $kota ?></p>
                    <p class="card-text">Total Pembelian: <?= $total ?></p>
                </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        let form = document.getElemetById("form");
        let cardContainer = document.getElementById("cardContainer");
        cardContainer.classList.add("d-none");

        form.addEventListener('submit', function(){
            cardContainer.classList.remove("d-none");
        });

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