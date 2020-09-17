
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
					<div class="panel-heading"><i class="fa fa-cog"></i> Ubah Password</div>
						<div class="panel-body">
                                <!-- start content -->
                          <?= $this->session->flashdata('alert'); ?>

		                  <form class="form-horizontal" method="POST">

		                    <div class="form-group">
		                      <div class="col-md-12">
		                      <label>Password Lama</label>
		                        <input type="password" class="form-control" name="password" value="<?= set_value('password'); ?>">
		                         <?= form_error('password','<small class="text-danger">','</small>') ?>
		                      </div>
		                    </div>

		                    <div class="form-group">
		                      <div class="col-md-12">
		                      <label>Password Baru</label>
		                        <input type="password" class="form-control" name="password1"  >
		                         <?= form_error('password1','<small class="text-danger">','</small>') ?>
		                      </div>
		                    </div>

		                    <div class="form-group">
		                      <div class="col-md-12">
		                      <label>Konfirmasi Password Baru</label>
		                        <input type="password" class="form-control" name="password2" >
		                         <?= form_error('password2','<small class="text-danger">','</small>') ?>
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
