
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
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b><i class="fa fa-history"></i> Riwayat Pembayaran</b></h4>

                            <table class="table table-hover mails m-0 table table-actions-bar">
                                <thead>
                                <tr>
                                    <th>NO</th>
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
                                foreach ($pembayaran as $data): ?>
                                <tr>
                                    <td><?=$no; ?></td>
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


