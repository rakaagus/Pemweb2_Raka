<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Form Belanja Online</title>
</head>

<body>
    <div class="container">
        <div class="row my-4">
            <div class="col">
                <h1 class="display-5">Belanja Online</h1>
            </div>
        </div>
        <div class="row justify-content-lg-between">
            <div class="col-lg-4 mb-3 order-lg-1 order-2">
                <form method="POST" class="border-4 border-dark" action="Belanja-online.php">
                    <!-- Customer -->
                    <div class="mb-3 d-lg-flex">
                        <label for="exampleFormControlInput1" class="form-label me-4 align-self-center">Customer</label>
                        <input type="text" class="form-control" name="customer" placeholder="Nama" value="" />
                    </div>
                    <!-- End Customer -->

                    <!-- Produk -->
                    <div class="mb-3 d-flex gap-2">
                        <label class="form-label me-2">Pilih Produk</label>
                        <input class="form-check-input" name="produk" type="radio" value="TV" />
                        <label class="form-check-label">TV</label>
                        <input class="form-check-input" name="produk" type="radio" value="Kulkas" />
                        <label class="form-check-label">Kulkas</label>
                        <input class="form-check-input" name="produk" type="radio" value="Mesin Cuci" />
                        <label class="form-check-label">Mesin Cuci</label>
                    </div>
                    <!-- End Produk -->

                    <!-- Jumlah -->
                    <div class="mb-3 d-lg-flex">
                        <label class="form-label align-self-center me-5">Jumlah</label>
                        <input type="text" class="form-control w-50" placeholder="Jumlah" name="jml_beli" value="" />
                    </div>
                    <!-- End Jumlah -->

                    <!-- Button -->
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary" name="proses">Submit</button>
                    </div>

                    <?php
                    $proses = $_POST["proses"];
                    $namaPelanggan = $_POST["customer"];
                    $produk = $_POST["produk"];
                    $jmlBeli = $_POST["jml_beli"];

                    $total;
                    if ($produk == "TV") {
                        $total = $jmlBeli * 4200000;
                    } elseif ($produk == "Kulkas") {
                        $total = $jmlBeli * 3100000;
                    } elseif ($produk == "Mesin Cuci") {
                        $total = $jmlBeli * 3800000;
                    } else {
                        $total;
                    }

                    $totalBelanja = number_format($total);

                    echo "
                        <div class='bg-primary w-75 rounded-2 text-white p-2 mt-4 mb-3 shadow-md'>
                            Nama Customer : {$namaPelanggan}<br/>
                            Produk Pilihan : {$produk}<br/>
                            Jumlah Beli : {$jmlBeli}<br/>
                            Total Belanja : Rp.{$totalBelanja}<br/>
                        </div>
                        ";
                    ?>
                </form>

            </div>
            <!-- List Harga -->
            <div class="col-lg-4 mb-5 order-lg-2 order-1 shadow-md">
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">
                        Daftar Harga
                    </li>
                    <li class="list-group-item">TV : 4.200.000</li>
                    <li class="list-group-item">Kulkas : 3.100.000</li>
                    <li class="list-group-item">Mesin Cuci : 3.800.000</li>
                    <li class="list-group-item active" aria-current="true">
                        Harga Dapat Berubah Setiap Saat
                    </li>
                </ul>
            </div>
            <!-- End List Harga -->
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>