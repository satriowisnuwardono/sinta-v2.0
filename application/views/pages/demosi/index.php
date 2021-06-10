    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Demosi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-paste"></i> Master Jenjang Karir</a></li>
                        <li class="breadcrumb-item active"> Data Demosi</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title mt-2">Tabel Data Demosi</h3>
                            <a class="btn btn-primary float-right" href="<?= base_url('demosi/tambah'); ?>"><i class="fas fa-user-plus"></i> Tambah Data Demosi</a>
                        </div>
                        <!-- /.card-header -->

                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
                        <?php if ($this->session->flashdata('pesan')) : ?>

                        <?php endif; ?>

                        <!-- SWEET ALERT -->

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Jabatan Sebelum</th>
                                            <th>Divisi Sebelum</th>
                                            <th>Jabatan Sesudah</th>
                                            <th>Divisi Sesudah</th>
                                            <th>Tanggal SK</th>
                                            <th>Nomor SK</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($demosi as $dm) { ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $dm->nama; ?></td>
                                                <td><?= $dm->jabatan_sebelum; ?></td>
                                                <td><?= $dm->divisi_sebelum; ?></td>
                                                <td><?= $dm->jabatan_sesudah; ?></td>
                                                <td><?= $dm->divisi_sesudah; ?></td>
                                                <td><?= $dm->tanggal_sk; ?></td>
                                                <td><?= $dm->nomor_sk; ?></td>

                                                <td width="100px" class="text-center">
                                                    <a href="<?= base_url('demosi/ubah/' . $dm->id_demosi); ?>" class="btn btn-warning btn-sm"><i class="fas fa-pen-square"></i></a>
                                                    <a href="<?= base_url('demosi/hapus/' . $dm->id_demosi); ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->