
        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-color panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Riwayat Pembayaran</h3>
                                <p class="panel-sub-title font-13 text-muted">Masukkan NISN untuk melihat riwayat pembayaran</p>
                            </div>
                            <div class="panel-body">
                                <form action="" method="post" class="form-horizontal">
                                   <?= $this->session->flashdata('alert'); ?>
                                    <div class="form-group">
                                      <div class="col-md-12">
                                        <input type="number" class="form-control" name="nisn" value="<?= $nisn ?>" placeholder="NISN" required>
                                        <?= form_error('nisn','<small class="text-danger">','</small>') ?>
                                      </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            <?php 

            if ( $this->pembayaran_model->validasi_pembayaran($nisn, NULL)[1] !== 0 ) { ?>

                <div class="row" >
                    <div class="col-sm-12">
                        <div class="card-box table-responsive" >
                            <h4 class="m-t-0 header-title"><b>Biodata Siswa</b></h4>

                            <table class="table table-hover mails m-0 table table-actions-bar" id="tagihan">
                                <thead>
                                <tr>
                                    <th>NISN</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Alamat</th>
                                    <th width="150">Biaya/Bulan</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td><?=$siswa['nisn']; ?></td>
                                    <td><?=$siswa['nama']; ?></td>
                                    <td><?=$siswa['nama_kelas']; ?></td>
                                    <td><?=$siswa['alamat']; ?></td>
                                    <td><?=rupiah($siswa['nominal']); ?></td>

                                </tr>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b><i class="fa fa-history"></i> Riwayat Pembayaran</b></h4>

                            <table class="table table-hover mails m-0 table table-actions-bar">
                                <thead>
                                <tr>
                                    <th>NISN</th>
                                    <th width="100">Petugas</th>
                                    <th>Nama Siswa</th>
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
                                foreach ($pembayaran as $data) : ?>
                                <tr>
                                    <td><?=$data['nisn']; ?></td>
                                    <td><?=$data['nama_petugas']; ?></td>
                                    <td><?=$siswa['nama']; ?></td>
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

            <?php } ?>


