
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
					<div class="panel-heading"><i class="fa fa-money"></i> Ubah Data SPP</div>
						<div class="panel-body">
                                <!-- start content -->
		                  <form class="form-horizontal" method="POST">
		                  	<div class="form-group">
		                      <div class="col-md-12">
		                      <label>Tahun</label>
		                        <input type="text" class="form-control" name="tahun" placeholder="Tahun" value="<?=$spp['tahun']?>">
		                        <?= form_error('tahun','<small class="text-danger">','</small>') ?>
		                      </div>
		                    </div>

		                    <div class="form-group">
		                      <div class="col-md-12">
		                      <label>Nominal/Bulan</label>
		                        <input type="text" class="form-control" name="nominal" placeholder="Nominal" value="<?=$spp['nominal']?>">
		                        <?= form_error('nominal','<small class="text-danger">','</small>') ?>
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
