<section id="mahasiswa">
    <div class="container">
        <div class="row my-4">
            <div class="col">
                <h2 class="display-4">Data Dosen</h2>
                <hr />
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">NIDN</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Pendidikan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        <?php foreach ($list_dosen as $dsn) : ?>
                            <tr class="text-center">
                                <td><?= $no++ ?></td>
                                <td><?= $dsn->nidn ?></td>
                                <td><?= $dsn->nama ?></td>
                                <td><?= $dsn->gender ?></td>
                                <td><?= $dsn->pendidikan ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>