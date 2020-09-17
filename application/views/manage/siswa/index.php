
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
                            <h4 class="m-t-0 header-title"><b>Daftar Siswa</b></h4>

                            
                            <table class="table table-hover mails m-0 table table-actions-bar">
                            <div class="row">
                                <div class="col-sm-2">
                                    <a class="btn btn-primary text-right" href="<?= base_url() ?>manage/siswa/tambah"><i class="fa fa-plus"></i> Tambah Siswa</a>

                                </div>
                                <div class="col-sm-10">
                                    <form action="" method="post">
                                        <div class="form-group search-box">
                                            <input type="text" name="keyword" id="search-input" class="form-control product-search" placeholder="Cari Siswa...">
                                            <button type="submit" name="cari" class="btn btn-search"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </div><br> <br> <br>

                                <?= $this->session->flashdata('alert'); ?>
                            </div>
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NISN</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Alamat</th>
                                    <th>No Telp</th>
                                    <th>Tahun Masuk</th>
                                    <th>Biaya/Bulan</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php 
                                $no=1;
                                foreach ($siswa as $data) { ?>
                                <tr>
                                    <td><?=$no; ?></td>
                                    <td><?=$data['nisn']; ?></td>
                                    <td><?=$data['nama']; ?></td>
                                    <td><?=$data['nama_kelas']; ?></td>
                                    <td><?=$data['alamat']; ?></td>
                                    <td><?=$data['no_telp']; ?></td>
                                    <td><?=$data['tahun']; ?></td>
                                    <td><?=rupiah($data['nominal']); ?></td>
                                    <td>
                                        <a href="<?= base_url('manage/siswa/ubah/').$data['id_siswa']?>" class="table-action-btn h3"><i class="mdi mdi-pencil-box-outline text-success"></i></a>
                                        
                                        <a href="<?= base_url('manage/siswa/hapus/').$data['id_siswa']?>" class="table-action-btn h3"><i class="mdi mdi-close-box-outline text-danger"></i></a>
                                    </td>
                                </tr>
                                <?php $no++; } ?>
                                </tbody>
                            </table>
                            <div class="alert alert-danger">Pengingat : Menghapus data siswa sama artinya menghapus data tagihan SPP yang berkaitan dengan siswa tersebut</div>
                        </div>
                    </div>
                </div>
