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
					<div class="panel-heading"><i class="fa fa-book"></i> Cetak Laporan</div>
						<div class="panel-body">

							<?= $this->session->flashdata('alert'); ?>
						<!-- start content -->
		                  <?= form_open('manage/laporan', ' class="form-horizontal"'); ?>

		                  	<div class="form-group">
		                      <div class="col-md-6">
		                      <label>Laporan Pembayaran Harian</label>
		                        <input type="date" class="form-control" name="tanggal" placeholder="Tanggal" required>
		                      </div>
		                      <div class="col-md-6" style="margin-top: 6px;">
		                      <br>
	                      		<button type="submit" class="btn btn-primary waves-effect waves-light" ><i class="fa fa-print"></i> Cetak</button>
		                      </div>
		                    </div>
		                </form>

		                <?= form_open('manage/laporan', ' class="form-horizontal"'); ?>
		                    <div class="form-group">
		                      <div class="col-md-3">
		                      <label>Laporan Pembayaran Bulanan</label>
		                        <select class="form-control" name="bulanan_bulan">
		                        	<option>Pilih Bulan</option>
		                        	<?php 
		                        	
		                        	foreach ($bulan as $data): ?>
		                        	<option value="<?=$data['id_bulan']?>"><?=$data['nama_bulan']?></option>
		                        	<?php endforeach; ?>
		                        </select>
	                      		
		                      </div>
		                      <div class="col-md-3" style="margin-top: 5px;">
		                      	<br>
		                        <select class="form-control" name="bulanan_tahun" required>
                                    <option>Pilih Tahun</option>
                                <?php  
                                
                                foreach ($tahun_tagihan as $data) : ?>
                                    <option value="<?=$data['tahun']?>"><?=$data['tahun']?></option>
                                <?php endforeach; ?>
                                </select>
	                      		
		                      </div>
		                      <div class="col-md-6" style="margin-top: 6px;">
		                      <br>
	                      		<button type="submit" class="btn btn-primary waves-effect waves-light" ><i class="fa fa-print"></i> Cetak</button>
		                      </div>
		                    </div>
		                </form>

		                <?= form_open('manage/laporan', ' class="form-horizontal"'); ?>
		                    <div class="form-group">
		                      <div class="col-md-6">
		                      <label>Laporan Pembayaran Tahunan</label>
		                        <select class="form-control" name="tahunan" required>
                                    <option>Pilih Tahun</option>
                                <?php  
                              
                                foreach ($tahun_tagihan as $data) : ?>
                                    <option value="<?=$data['tahun']?>"><?=$data['tahun']?></option>
                                <?php endforeach; ?>
                                </select>
		                      </div>
		                      <div class="col-md-6" style="margin-top: 6px;">
		                      <br>
	                      		<button type="submit" class="btn btn-primary waves-effect waves-light" ><i class="fa fa-print"></i> Cetak</button>
		                      </div>
		                    </div>
		                </form>

		                  

                                <!-- end content -->
                            </div>

                        </div>
                        <!-- col -->
                    </div>
                    <!-- Row-->
