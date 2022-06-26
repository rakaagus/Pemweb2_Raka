<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>View Dosen</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
						<li class="breadcrumb-item"><a href="<?= base_url() ?>index.php/dosen">Dosen</a></li>
						<li class="breadcrumb-item active">Biodata Dosen</li>
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
				<h3 class="card-title">Biodata Dosen</h3>

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
                <div class="row mb-2">
                    <div class="col-sm-8">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>NIDN</td><td><?= $dsn->nidn ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Lengkap</td><td><?= $dsn->nama ?></td>
                                </tr>
                                <tr>
                                    <td>Gender</td><td><?= $dsn->gender ?></td>
                                </tr>
                                <tr>
                                    <td>Tempat, Tgl Lahir</td><td><?= $dsn->tmp_lahir ?>, <?= $dsn->tgl_lahir?></td>
                                </tr>
                                <tr>
                                    <td>Prodi</td><td><?= $dsn->prodi_kode ?></td>
                                </tr>
                                <tr>
                                    <td>Pendidikan Akhir</td><td><?= $dsn->pendidikan_akhir ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-4">Ini Foto</div>
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
