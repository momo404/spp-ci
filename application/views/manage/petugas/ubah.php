
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
					<div class="panel-heading"><i class="fa fa-user"></i> Ubah Petugas</div>
						<div class="panel-body">
                                <!-- start content -->
		                  <form class="form-horizontal" method="POST">
		                  	

		                    <div class="form-group">
		                      <div class="col-md-12">
		                      <label>Nama Petugas</label>
		                        <input type="text" class="form-control" name="nama" placeholder="Nama Petugas" value="<?=$petugas['nama_petugas']?>">
		                        <?= form_error('nama','<small class="text-danger">','</small>') ?>
		                      </div>
		                    </div>


		                    <div class="form-group">
		                      <div class="col-md-12">
		                      <label>Username</label>
		                        <input type="text" class="form-control" name="username" placeholder="Username" value="<?=$petugas['username']?>">
		                        <?= form_error('username','<small class="text-danger">','</small>') ?>
		                      </div>
		                    </div>

		                    <div class="form-group">
		                      <div class="col-md-12">
		                      <label>Password</label>
		                        <input type="password" class="form-control" name="password1" placeholder="Password" value="<?=$petugas['password']?>">
		                        <?= form_error('password1','<small class="text-danger">','</small>') ?>
		                      </div>
		                    </div>

		                    <div class="form-group">
		                      <div class="col-md-12">
		                      <label>Konfirmasi Password</label>
		                        <input type="password" class="form-control" name="password2" placeholder="Password" value="<?=$petugas['password']?>">
		                        <?= form_error('password2','<small class="text-danger">','</small>') ?>
		                      </div>
		                    </div>

		                    <div class="form-group">
		                      <div class="col-md-12">
		                      <label>Level</label>
		                        <select class="form-control" name="level">
		                        <?php foreach ($level as $data) : ?>
		                        	<?php if ( $petugas['level'] == $data ) : ?>
		                        		<<option value="<?=$data?>" selected><?=ucfirst($data)?></option>
		                        	<?php else : ?>
		                        		<option value="<?=$data?>"><?=ucfirst($data)?></option>
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
