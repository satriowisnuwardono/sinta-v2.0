    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Pelatihan & Sertifikat</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-certificate active"></i> Pelatihan & Sertifika</a></li>
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
                            <h3 class="card-title mt-2">Tabel Data Pelatihan & Sertifikat</h3>
                            <a class="btn btn-primary float-right" href="<?= base_url('pelatihan/tambah'); ?>"><i class="fas fa-plus-square"></i> Tambah Data Pelatihan</a>
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
                                            <th>Judul</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Tanggal Berakhir</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($pelatihan as $p) { ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $p->nama; ?></td>
                                                <td><?= $p->judul; ?></td>
                                                <td><?= $p->tanggal_mulai; ?></td>
                                                <td><?= $p->tanggal_berakhir; ?></td>
                                                <td width="100px" class="text-center">
                                                    <a href="<?= base_url('pelatihan/ubah/' . $p->id_pelatihan); ?>" class="btn btn-warning btn-sm"><i class="fas fa-pen-square"></i></a>
                                                    <a href="<?= base_url('pelatihan/hapus/' . $p->id_pelatihan); ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="fas fa-trash-alt"></i></a>
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