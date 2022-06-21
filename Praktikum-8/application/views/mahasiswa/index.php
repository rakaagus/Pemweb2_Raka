<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Mahasiswa</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
						<li class="breadcrumb-item active">Mahasiswa</li>
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
				<h3 class="card-title">Data Mahasiswa <a class="btn btn-primary" href="<?= base_url() ?>index.php/mahasiswa/create" role="button">Tambah Data</a></h3>

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
			<table class="table table-striped">
				<thead>
					<tr>
						<th>NO</th>
						<th>NIM</th>
						<th>Nama Mahasiswa</th>
						<th>Gender</th>
						<th>Tempat Lahir</th>
						<th>Tanggal Lahir</th>
						<th>Ipk</th>
						<th>Prodi</th>
						<th>Tools</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$nomor = 1;
						foreach($list_mhs as $mhs):
					?>
					<tr>
						<td><?= $nomor ?></td>
						<td><?= $mhs->nim?></td>
						<td><?= $mhs->nama?></td>
						<td><?= $mhs->gender?></td>
						<td><?= $mhs->tmp_lahir?></td>
						<td><?= $mhs->tgl_lahir?></td>
						<td><?= $mhs->ipk?></td>
						<td><?= $mhs->prodi_kode?></td>
						<td>
							<a class="btn btn-info" href="mahasiswa/detail?id=<?= $mhs->nim?>" role="button">Detail</a>
							<a class="btn btn-warning" href="#" role="button">Update</a>
							<a class="btn btn-danger" href="#" role="button">Delete</a>
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
