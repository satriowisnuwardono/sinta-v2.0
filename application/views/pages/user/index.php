    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-users"></i> Master Pegawai</a></li>
                        <li class="breadcrumb-item active"> Data User</li>
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
                            <h3 class="card-title mt-2">Tabel Data User</h3>
                        </div>
                        <!-- /.card-header -->

                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
                        <?php if ($this->session->flashdata('pesan')) : ?>

                        <?php endif; ?>

                        <!-- SWEET ALERT -->

                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Akses Data Pegawai</th>
                                        <th>Akses Data BPJS</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($user as $u) { ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $u->nama; ?></td>
                                            <td><?= $u->username; ?></td>
                                            <td>
                                                <?php if ($u->data_pegawai == 1) {
                                                    echo "BACA SAJA";
                                                } elseif ($u->data_pegawai == 2) {
                                                    echo "BACA/TULIS";
                                                } else {
                                                    echo "TOLAK AKSES";
                                                } ?>
                                            </td>
                                            <td>
                                                <?php if ($u->data_bpjs == 1) {
                                                    echo "BACA SAJA";
                                                } elseif ($u->data_bpjs == 2) {
                                                    echo "BACA/TULIS";
                                                } else {
                                                    echo "TOLAK AKSES";
                                                } ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('user/ubah/' . $u->id_user); ?>" class="btn btn-warning btn-block"><i class="fas fa-pen-square"></i></a>

                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->