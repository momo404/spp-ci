
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


            <?php if ($this->session->userdata('level') == "admin") : ?>

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="card-box widget-box-three">
                            <div class="bg-icon pull-left">
                                <i class="ti-bar-chart"></i>
                            </div>
                            <div class="text-right">
                                <p class="text-success m-t-5 text-uppercase font-600 font-secondary">Total Pembayaran</p>
                                <h2 class="m-b-10"><span data-plugin="counterup"><?= $count['all'] ?></span></h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card-box widget-box-three">
                            <div class="bg-icon pull-left">
                                <i class="ti-book"></i>
                            </div>
                            <div class="text-right">
                                <p class="text-success m-t-5 text-uppercase font-600 font-secondary">Pembayaran Tahun Ini</p>
                                <h2 class="m-b-10"><span data-plugin="counterup"><?= $count['tahunan'] ?></span></h2>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="card-box widget-box-three">
                            <div class="bg-icon pull-left">
                                <i class="ti-agenda"></i>
                            </div>
                            <div class="text-right">
                                <p class="text-warning m-t-5 text-uppercase font-600 font-secondary">Pembayaran Bulan Ini</p>
                                <h2 class="m-b-10"><span data-plugin="counterup"><?= $count['bulanan'] ?></span></h2>
                            </div>
                        </div>
                    </div>

                     <div class="col-lg-3 col-md-6">
                        <div class="card-box widget-box-three">
                            <div class="bg-icon pull-left">
                                <i class="ti-bookmark-alt"></i>
                            </div>
                            <div class="text-right">
                                <p class="text-pink m-t-5 text-uppercase font-600 font-secondary">Pembayaran Hari Ini</p>
                                <h2 class="m-b-10"><span data-plugin="counterup"><?= $count['harian'] ?></span></h2>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->
           <?php else : ?>

            <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-color panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Pembayaran</h3>
                                <p class="panel-sub-title font-13 text-muted">Masukkan NISN dan Tahun Tagihan untuk melakukan proses pembayaran</p>
                            </div>
                            <div class="panel-body">
                                <?= form_open('manage/pembayaran/entri', ' class="form-horizontal"'); ?>
                                    <div class="form-group">
                                      <div class="col-md-12">
                                        <input type="number" class="form-control" name="nisn" placeholder="NISN" required>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-md-12">
                                        <select class="form-control" name="tahun">
                                            <option>Pilih Tahun Tagihan</option>
                                        <?php  
                                        foreach ($tahun_tagihan as $data) : 
                                            if ($tahun == $data['tahun'] OR set_value('tahun') == $data['tahun']) : ?>
                                                <option value="<?=$data['tahun']?>" selected><?=$data['tahun']?></option>
                                            <?php else : ?>
                                                <option value="<?=$data['tahun']?>"><?=$data['tahun']?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                        </select>
                                        <?= form_error('tahun','<small class="text-danger">','</small>') ?>
                                      </div>
                                    </div>
                                    <div class="form-group m-b-0">
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light" name="proses">Bayar Tagihan</button>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            
            <?php endif; ?>

            <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b><i class="fa fa-history"></i> Riwayat Pembayaran</b></h4>

                            <table class="table table-hover mails m-0 table table-actions-bar">
                                <thead>
                                <tr>
                                    <th>NISN</th>
                                    <th width="100">Petugas</th>
                                    <th>Nama</th>
                                    <th>Tanggal Bayar</th>
                                    <th>Bulan Dibayar</th>
                                    <th>Tahun Dibayar</th>
                                    <th width="150">Nominal</th>
                                    <th width="150">Status</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php 
                                $no=1;
                                foreach ($pembayaran as $data): ?>
                                <tr>
                                    <td><?=$data['nisn']; ?></td>
                                    <td><?=$data['nama_petugas']; ?></td>
                                    <td><?=$this->siswa_model->get_siswa_byNisn($data['nisn'])['nama']; ?></td>
                                    <td><?=$data['tgl_bayar']; ?></td>
                                    <td><?=$data['nama_bulan']; ?></td>
                                    <td><?=$data['tahun_dibayar']; ?></td>
                                    <td><?=rupiah($data['nominal']); ?></td>
                                    <td><?=tampil_status($data['status']); ?></td>
                                </tr>
                                <?php $no++; endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
