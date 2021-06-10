<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Perbarui Data Gaji</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-id-card"></i> Data Gaji</a></li>
                    <li class="breadcrumb-item active"> Perbarui Data Gaji</li>
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
                        <h3 class="card-title mt-2">Form Perbarui Data Gaji</h3>
                    </div>
                    <!-- /.card-header -->
                    <?= form_open(); ?>
                    <input type="hidden" class="form-control" name="id_gaji" id="id_gaji" value="<?= $gaji->id_gaji; ?>">
                    <input type="hidden" class="form-control" name="id_pegawai" id="id_pegawai" value="<?= $gaji->id_pegawai; ?>">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="gaji_pokok" class="col-sm-4 col-form-label">Gaji Pokok</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="gaji_pokok" id="gaji_pokok" value="<?= $gaji->gaji_pokok; ?>" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="npwp" class="col-sm-4 col-form-label">NPWP <small>(Nomor Pokok Wajib Pajak)</small></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="npwp" id="npwp" value="<?= $gaji->npwp; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nomor_rekening" class="col-sm-4 col-form-label">Nomor Rekening</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="nomor_rekening" id="nomor_rekening" value="<?= $gaji->nomor_rekening; ?>" autofocus>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button class="btn btn-success col-md-2 col-sm-12" type="submit">Simpan</button>
                        <a href="<?= base_url('gaji'); ?>" class="btn btn-warning float-right col-md-2 col-sm-12" type="reset">Kembali</a>
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