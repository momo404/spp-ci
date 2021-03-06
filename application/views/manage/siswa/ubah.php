<div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
				<div class="panel panel-border panel-custom">
					<div class="panel-heading"><i class="fa fa-users"></i> Ubah Siswa</div>
						<div class="panel-body">
                                <!-- start content -->
		                  <form class="form-horizontal" method="POST">
		                  	
		                  	<div class="form-group">
		                      <div class="col-md-12">
		                      <label>NISN</label>
		                        <input type="number" class="form-control" name="nisn" placeholder="NISN" value="<?=$siswa['nisn']?>">
		                        <?= form_error('nisn','<small class="text-danger">','</small>') ?>
		                      </div>
		                    </div>

		                    <div class="form-group">
		                      <div class="col-md-12">
		                      <label>Nama Siswa</label>
		                        <input type="text" class="form-control" name="nama" placeholder="Nama Siswa" value="<?=$siswa['nama']?>">
		                        <?= form_error('nama','<small class="text-danger">','</small>') ?>
		                      </div>
		                    </div>

		                    <div class="form-group">
		                      <div class="col-md-12">
		                      <label>Kelas</label>
		                        <select class="form-control" name="kelas">
	                        	<?php 
	                        	foreach ($kelas as $data): 
	                        		if ($siswa['id_kelas'] == $data['id_kelas']) : ?>
	                        			<option value="<?=$data['id_kelas']?>" selected><?=$data['nama_kelas']?></option>
		                        	<?php else : ?>
		                        		<option value="<?=$data['id_kelas']?>"><?=$data['nama_kelas']?></option>
		                        	<?php endif ?>
		                        <?php endforeach; ?>
		                        </select>
		                      </div>
		                    </div>

		                    <div class="form-group">
		                      <div class="col-md-12">
		                      <label>Alamat</label>
		                        <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?=$siswa['alamat']?>">
		                        <?= form_error('alamat','<small class="text-danger">','</small>') ?>
		                      </div>
		                    </div>

		                    <div class="form-group">
		                      <div class="col-md-12">
		                      <label>No Telp</label>
		                        <input type="text" class="form-control" name="no_telp" placeholder="No Telp" value="<?=$siswa['no_telp']?>">
		                        <?= form_error('no_telp','<small class="text-danger">','</small>') ?>
		                      </div>
		                    </div>

		                    <div class="form-group">
		                      <div class="col-md-12">
		                      <label>Tahun Masuk/Biaya</label>
		                        <select class="form-control" name="spp">
	                        	<?php 
	                        	foreach ($spp as $data): 
		                        	if ($siswa['id_spp'] == $data['id_spp']) : ?>
	                        			<option value="<?=$data['id_spp']?>" selected><?=$data['tahun']?> ( <?=rupiah($data['nominal'])?>/Bulan )</option>
		                        	<?php else : ?>
		                        		<option value="<?=$data['id_spp']?>"><?=$data['tahun']?> ( <?=rupiah($data['nominal'])?>/Bulan )</option>
		                        	<?php endif; ?>
		                        <?php endforeach; ?>
		                        </select>
		                      </div>
		                    </div>

		                    <div class="form-group m-b-0">
		                      <div class="col-md-6">
		                        <button type="submit" class="btn btn-info waves-effect waves-light" name="submit">Ubah</button>
		                      </div>
		                    </div>
		                  </form>

                                <!-- end content -->
                            </div>

                        </div>
                        <!-- col -->
                    </div>
                    <!-- Row-->