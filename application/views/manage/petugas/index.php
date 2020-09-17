
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
                            <h4 class="m-t-0 header-title"><b>Daftar Petugas</b></h4>

                            <a class="btn btn-primary text-right" href="<?= base_url() ?>manage/petugas/tambah"><i class="fa fa-plus"></i> Tambah Petugas</a><br> <br>

                                <?= $this->session->flashdata('alert'); ?>

                            <table class="table table-hover mails m-0 table table-actions-bar">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Level</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php 
                                $no=1;
                                foreach ($petugas as $data) { ?>
                                <tr>
                                    <td><?=$no; ?></td>
                                    <td><?=$data['nama_petugas']; ?></td>
                                    <td><?=$data['username']; ?></td>
                                    <td><?=ucfirst($data['level']); ?></td>
                                    <td>
                                        <a href="<?= base_url('manage/petugas/ubah/').$data['id_petugas']?>" class="table-action-btn h3"><i class="mdi mdi-pencil-box-outline text-success"></i></a>
                                        
                                        <a href="<?= base_url('manage/petugas/hapus/').$data['id_petugas']?>" class="table-action-btn h3"><i class="mdi mdi-close-box-outline text-danger"></i></a>
                                    </td>
                                </tr>
                                <?php $no++; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

