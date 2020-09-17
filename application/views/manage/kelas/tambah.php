
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
					<div class="panel-heading"><i class="fa fa-list"></i> Tambah Kelas</div>
						<div class="panel-body">
                                <!-- start content -->
		                  <form class="form-horizontal" method="POST">
		                  	
		                  	<div class="form-group">
		                      <div class="col-md-12">
		                      <label>Kelas</label>
		                        <input type="text" class="form-control" name="kelas" placeholder="Kelas" required>
		                        <?= form_error('kelas','<small class="text-danger">','</small>') ?>
		                      </div>
		                    </div>

		                    <div class="form-group">
		                      <div class="col-md-12">
		                      <label>Kompetensi Keahlian</label>
		                        <input type="text" class="form-control" name="kompetensi" placeholder="Kompetensi Keahlian" required>
		                        <?= form_error('kompetensi','<small class="text-danger">','</small>') ?>
		                      </div>
		                    </div>

		                    <div class="form-group m-b-0">
		                      <div class="col-md-6">
		                        <button type="submit" class="btn btn-info waves-effect waves-light" name="submit">Tambah</button>
		                      </div>
		                    </div>
		                  </form>

                                <!-- end content -->
                            </div>

                        </div>
                        <!-- col -->
                    </div>
                    <!-- Row-->

