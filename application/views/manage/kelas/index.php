
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
                            <h4 class="m-t-0 header-title"><b>Daftar Kelas</b></h4>

                            <a class="btn btn-primary text-right" href="<?= base_url() ?>manage/kelas/tambah"><i class="fa fa-plus"></i> Tambah Kelas</a><br> <br>

                            <?= $this->session->flashdata('alert'); ?>

                            <table class="table table-hover mails m-0 table table-actions-bar">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kelas</th>
                                    <th>Kompetensi Keahlian</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php 
                                $no=1;
                                foreach ($kelas as $data) { ?>
                                <tr>
                                    <td><?=$no; ?></td>
                                    <td><?=$data['nama_kelas']; ?></td>
                                    <td><?=$data['kompetensi_keahlian']; ?></td>
                                    <td>
                                        <a href="<?= base_url('manage/kelas/ubah/').$data['id_kelas']?>" class="table-action-btn h3"><i class="mdi mdi-pencil-box-outline text-success"></i></a>
                                        
                                        <a href="<?= base_url('manage/kelas/hapus/').$data['id_kelas']?>" class="table-action-btn h3"><i class="mdi mdi-close-box-outline text-danger"></i></a>
                                    </td>
                                </tr>
                                <?php $no++; } ?>
                                </tbody>
                            </table>
                            <div class="alert alert-danger">Pengingat : Menghapus data kelas sama artinya menghapus semua data siswa yang ada pada kelas tersebut</div>
                        </div>
                    </div>
                </div>
