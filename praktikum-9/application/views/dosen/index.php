<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Dosen</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
						<li class="breadcrumb-item active">Dosen</li>
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
				<h3 class="card-title">Data Dosen</h3>

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
			<a class="btn btn-primary" href="<?= base_url() ?>index.php/dosen/create" role="button">Tambah Data</a>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>NO</th>
						<th>NIDN</th>
						<th>Nama Dosen</th>
						<th>Gender</th>
						<th>Tempat Lahir</th>
						<th>Tanggal Lahir</th>
						<th>Pendidikan</th>
						<th>Prodi</th>
						<th>Tools</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$nomor = 1;
						foreach($list_dosen as $dsn):
					?>
					<tr>
						<td><?= $nomor ?></td>
						<td><?= $dsn->nidn?></td>
						<td><?= $dsn->nama?></td>
						<td><?= $dsn->gender?></td>
						<td><?= $dsn->tmp_lahir?></td>
						<td><?= $dsn->tgl_lahir?></td>
						<td><?= $dsn->pendidikan_akhir?></td>
						<td><?= $dsn->prodi_kode?></td>
						<td>
							<a class="btn btn-info" href="<?= base_url() ?>index.php/dosen/detail?id=<?= $dsn->nidn?>" role="button">Detail</a>
							<a class="btn btn-warning" href="<?= base_url() ?>index.php/dosen/edit?id=<?= $dsn->nidn?>" role="button">Update</a>
							<a class="btn btn-danger" href="<?= base_url() ?>index.php/dosen/delete?id=<?= $dsn->nidn?>" role="button" onclick="if(!confirm('Yakin Hapus Data Dosen Berikut | <?=$dsn->nama?>?')) {return false}">Delete</a>
						</td>
					</tr>
					<?php
						$nomor++;
						endforeach;
					?>
				</tbody>
			  </table>
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
