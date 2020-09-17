
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
                        <?= $this->session->flashdata('alert') ?>
                        <div class="panel panel-color panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Pembayaran</h3>
                                <p class="panel-sub-title font-13 text-muted">Masukkan NISN dan Tahun Tagihan untuk melakukan proses pembayaran</p>
                            </div>
                            <div class="panel-body">

                                <?= $this->session->flashdata('alert'); ?>

                                <form action="" method="post" class="form-horizontal">
                                    
                                    <div class="form-group">
                                      <div class="col-md-12">
                                        <input type="number" class="form-control" name="nisn" value="<?= $nisn ?>" placeholder="NISN">
                                        <?= form_error('nisn','<small class="text-danger">','</small>') ?>
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
                                            <button type="submit" class="btn btn-primary waves-effect waves-light" name="proses">Proses</button>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            <?php 

            if ($cek_pembayaran !== 0) { ?>

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
                                    <th width="150">Biaya</th>
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



                <div class="row" >
                    <div class="col-sm-12">
                        <div class="card-box table-responsive"> 

                            <h4 class="m-t-0 header-title"><b>Tagihan</b></h4>
                            <?= $this->session->flashdata('message'); ?>
                            <table class="table table-hover mails m-0 table table-actions-bar">
                                <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>ID</th>
                                    <th width="100">Petugas</th>
                                    <th>NISN</th>
                                    <th>Tanggal Bayar</th>
                                    <th>Bulan</th>
                                    <th>Tahun</th>
                                    <th width="150">Nominal</th>
                                    <th width="150">Status</th>
                                    <th width="200">Aksi</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php 
                                $no=1;
                                
                                foreach ($pembayaran as $data): ?>
                                <tr>
                                    <td><?=$no; ?></td>
                                    <td><?=$data['id_pembayaran']; ?></td>
                                    <td><?= $this->petugas_model->get_petugas_byId($data['id_petugas'])['nama_petugas']; ?></td>
                                    <td><?=$data['nisn']; ?></td>
                                    <td><?=$data['tgl_bayar']; ?></td>
                                    <td><?=$data['nama_bulan']; ?></td>
                                    <td><?=$data['tahun_dibayar']; ?></td>
                                    <td><?=rupiah($data['nominal']); ?></td>
                                    <td><?=tampil_status($data['status']); ?></td>
                                    <td><?php if ($data['status'] == 1) { ?>
                                        <a class="btn btn-warning" href="<?= base_url('manage/pembayaran/batalkan/').$data['id_pembayaran'].'/'.$nisn.'/'.$tahun ?>">Batal</a> 

                                        <a class="btn btn-success" href="<?= base_url('manage/pembayaran/cetak/').$data['id_pembayaran'] ?>" target="_blank"><i class="fa fa-print"></i> Cetak</a>
                                    <?php } else { ?>
                                        <a class="btn btn-danger" href="<?= base_url('manage/pembayaran/bayar/').$data['id_pembayaran'].'/'.$nisn.'/'.$tahun ?>">Bayar</a>
                                    <?php } ?>
                                    </td>
                                </tr>
                                <?php $no++; endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                

                


            <?php } ?>


