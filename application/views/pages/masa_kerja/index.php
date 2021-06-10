    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Masa Kerja</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-users"></i> Master Masa Kerja</a></li>
                        <li class="breadcrumb-item active"> Data Masa Kerja</li>
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
                            <h3 class="card-title mt-2">Tabel Data Masa Kerja</h3>
                        </div>
                        <!-- /.card-header -->

                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
                        <?php if ($this->session->flashdata('pesan')) : ?>

                        <?php endif; ?>

                        <!-- SWEET ALERT -->

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="exp_masa_kerja" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Departemen</th>
                                            <th>Divisi</th>
                                            <th>Jabatan</th>
                                            <th>PKWT</th>
                                            <th>Periode</th>
                                            <th>Durasi</th>
                                            <th>Mulai</th>
                                            <th>Berakhir</th>
                                            <th>Status</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($masa_kerja as $mk) { ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $mk->nip; ?></td>
                                                <td><?= $mk->nama; ?></td>
                                                <td><?= $mk->id_departemen; ?></td>
                                                <td><?= $mk->id_divisi; ?></td>
                                                <td><?= $mk->id_jabatan; ?></td>
                                                <td><?= $mk->pkwt; ?></td>
                                                <td><?= $mk->periode; ?></td>
                                                <td><?= $mk->durasi; ?></td>
                                                <td><?= $mk->mulai_kerja; ?></td>
                                                <td><?= $mk->berakhir_kerja; ?></td>
                                                <td><?= $mk->status_kerja; ?></td>

                                                <td width="100px" class="text-center">
                                                    <a href="<?= base_url('masaKerja/ubah/' . $mk->id_masa_kerja); ?>" class="btn btn-warning btn-sm"><i class="fas fa-pen-square"></i></a>
                                                    <a href="<?= base_url('masaKerja/hapus/' . $mk->id_masa_kerja); ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="fas fa-trash-alt"></i></a>
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