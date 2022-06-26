<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Prodi</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
						<li class="breadcrumb-item active">Prodi</li>
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
				<h3 class="card-title">Title</h3>

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
			<a class="btn btn-primary" href="<?= base_url() ?>index.php/prodi/create" role="button">Tambah Data</a>
              <table class="table">
				<thead>
					<tr>
						<th>NO</th>
						<th>KODE</th>
						<th>Nama Prodi</th>
						<th>Ketua Prodi</th>
						<th>Tools</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$nomor = 1;
						foreach($list_prodi as $prodi):
					?>
					<tr>
						<td><?= $nomor ?></td>
						<td><?= $prodi->kode?></td>
						<td><?= $prodi->nama?></td>
						<td><?= $prodi->kaprodi?></td>
						<td>
						<a class="btn btn-info" href="<?= base_url() ?>index.php/prodi/detail?id=<?= $prodi->kode?>" role="button">Detail</a>
							<a class="btn btn-warning" href="<?= base_url() ?>index.php/prodi/edit?id=<?= $prodi->kode?>" role="button">Update</a>
							<a class="btn btn-danger" href="<?= base_url() ?>index.php/prodi/delete?id=<?= $prodi->kode?>" role="button" onclick="if(!confirm('Yakin Hapus Data Prodi Berikut | <?=$prodi->kode?>?')) {return false}">Delete</a>
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
