<?php
// Include header.php
include_once "./header.php";
?>

<!-- Form -->
<section class="form">
    <div class="container">
        <div class="row mt-4 text-center">
            <div class="col">
                <h2 class="display-4 text-primary">Form Customer</h2>
            </div>
        </div>
        <div class="row justify-content-center gap-4 my-4">
            <div class="col-lg-4">
                <!-- Form -->
                <form class="w-auto bg-light border border-success p-3 rounded shadow" action="#" method="POST">
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
                <!-- End Form -->
            </div>

        </div>
    </div>
</section>
<!-- End Form -->

<?php
require_once "Models/main.php";
?>

<!-- Table -->
<section class="table">
    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="display-5 text-white">Daftar Customer</h2>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-lg-8 table-responsive">
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
        </div>
    </div>
</section>
<!-- End Table -->
<?
// Include footer php
include_once "./footer.php";
?>