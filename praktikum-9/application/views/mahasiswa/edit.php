<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Update Mahasiswa</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
						<li class="breadcrumb-item"><a href="<?= base_url() ?>index.php/mahasiswa">Mahasiswa</a></li>
						<li class="breadcrumb-item active">Update Mahasiswa</li>
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
				<h3 class="card-title">Update</h3>

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
            <?php
                $hidden = ['id_edit' => $mhs_edit->nim];
            ?>
            <?php echo form_open('mahasiswa/save', '', $hidden)?>
                <div class="form-group row">
                    <label for="nim" class="col-4 col-form-label">Nim</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-500px"></i>
                        </div>
                        </div> 
                        <input id="nim" name="nim" type="text" class="form-control" value="<?=$mhs_edit->nim?>">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama</label> 
                    <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control" value="<?=$mhs_edit->nama?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Jenis Kelamin</label> 
                    <div class="col-8">
                        <?php 
                            $checked_l = ($mhs_edit->gender == "L")?"checked":"";
                            $checked_p = ($mhs_edit->gender == "P")?"checked":"";
                        ?>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L" <?=$checked_l?> > 
                        <label for="jk_0" class="custom-control-label">Laki-laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P" <?=$checked_p?> > 
                        <label for="jk_1" class="custom-control-label">Wanita</label>
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-location-arrow"></i>
                        </div>
                        </div> 
                        <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" value="<?=$mhs_edit->tmp_lahir?>">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal lahir</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-calendar"></i>
                        </div>
                        </div> 
                        <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" value="<?=$mhs_edit->tgl_lahir?>">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prodi" class="col-4 col-form-label">Program Studi</label> 
                    <div class="col-8">
                    <select id="prodi" name="prodi" class="custom-select">
                        <?php

                            foreach($list_prodi as $prodi):
                            $selected = "";
                            if($mhs_edit->prodi_kode == $prodi->kode){
                                $selected = "selected";
                            }
                        ?>
                        <option value="<?= $prodi->kode?>" <?=$selected?> ><?=$prodi->nama?></option>
                        <?php endforeach; ?>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ipk" class="col-4 col-form-label">IPK</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-area-chart"></i>
                        </div>
                        </div> 
                        <input id="ipk" name="ipk" type="text" class="form-control" value="<?=$mhs_edit->ipk?>">
                    </div>
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                <?php echo form_close();?>
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
