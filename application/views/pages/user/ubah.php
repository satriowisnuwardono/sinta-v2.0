<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Ubah Data Pegawai</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-id-card"></i> Data Pegawai</a></li>
                    <li class="breadcrumb-item active"> Ubah Data Pegawai</li>
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
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title mt-2">Form Ubah Data Pegawai</h3>
                    </div>
                    <!-- /.card-header -->
                    <?= form_open(); ?>
                    <input type="hidden" class="form-control" name="id_user" id="id_user" value="<?= $user->id_user; ?>">
                    <input type="hidden" class="form-control" name="id_pegawai" id="id_pegawai" value="<?= $user->id_pegawai; ?>">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="username" class="col-sm-4 col-form-label">Username</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="username" id="username" value="<?= $user->username; ?>" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-4 col-form-label">Password</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="password" id="password" value="<?= $user->password; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="data_pegawai" class="col-sm-4 col-form-label">Data Pegawai</label>
                            <div class="col-sm-6 row ml-1">
                                <div class="form-check col-sm-4">
                                    <input class="form-check-input" type="radio" name="data_pegawai" value="1" <?php if ($user->data_pegawai == 1) echo "checked" ?>>
                                    <label class="form-check-label">BACA</label>
                                </div>
                                <div class="form-check col-sm-4">
                                    <input class="form-check-input" type="radio" name="data_pegawai" value="2" <?php if ($user->data_pegawai == 2) echo "checked" ?>>
                                    <label class="form-check-label">BACA/TULIS</label>
                                </div>
                                <div class="form-check col-sm-4">
                                    <input class="form-check-input" type="radio" name="data_pegawai" value="0" <?php if ($user->data_pegawai == 0) echo "checked" ?>>
                                    <label class="form-check-label">TOLAK AKSES</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="data_bpjs" class="col-sm-4 col-form-label">Data BPJS</label>
                            <div class="col-sm-6 row ml-1">
                                <div class="form-check col-sm-4">
                                    <input class="form-check-input" type="radio" name="data_bpjs" value="1" <?php if ($user->data_bpjs == 1) echo "checked" ?>>
                                    <label class="form-check-label">BACA</label>
                                </div>
                                <div class="form-check col-sm-4">
                                    <input class="form-check-input" type="radio" name="data_bpjs" value="2" <?php if ($user->data_bpjs == 2) echo "checked" ?>>
                                    <label class="form-check-label">BACA/TULIS</label>
                                </div>
                                <div class="form-check col-sm-4">
                                    <input class="form-check-input" type="radio" name="data_bpjs" value="0" <?php if ($user->data_bpjs == 0) echo "checked" ?>>
                                    <label class="form-check-label">TOLAK AKSES</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button class="btn btn-success col-md-2 col-sm-12" type="submit">Submit</button>
                        <a href="<?= base_url('user'); ?>" class="btn btn-warning float-right col-md-2 col-sm-12" type="reset">Kembali</a>
                    </div>
                    <!-- /.card-footer -->
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->