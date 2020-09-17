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
                            <h4 class="m-t-0 header-title"><b>Daftar SPP</b></h4>

                            <a class="btn btn-primary text-right" href="<?= base_url() ?>manage/spp/tambah"><i class="fa fa-plus"></i> Tambah SPP</a> <br> <br>

                            <?= $this->session->flashdata('alert'); ?>

                            <table class="table table-hover mails m-0 table table-actions-bar">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tahun Angkatan</th>
                                    <th>Nominal/Bulan</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php 
                                $no=1;
                                foreach ($spp as $data) { ?>
                                <tr>
                                    <td><?=$no; ?></td>
                                    <td><?=$data['tahun']; ?></td>
                                    <td><?=rupiah($data['nominal']); ?></td>
                                    <td>
                                        <a href="<?= base_url('manage/spp/ubah/').$data['id_spp']?>" class="table-action-btn h3"><i class="mdi mdi-pencil-box-outline text-success"></i></a>
                                        
                                        <a href="<?= base_url('manage/spp/hapus/').$data['id_spp']?>" class="table-action-btn h3"><i class="mdi mdi-close-box-outline text-danger"></i></a>
                                    </td>
                                </tr>
                                <?php $no++; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>