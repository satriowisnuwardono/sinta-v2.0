<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Perbarui Data BPJS</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-id-card"></i> Data BPJS</a></li>
                    <li class="breadcrumb-item active"> Perbarui Data BPJS</li>
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
                        <h3 class="card-title mt-2">Form Perbarui Data BPJS</h3>
                    </div>
                    <!-- /.card-header -->
                    <?= form_open(); ?>
                    <input type="hidden" class="form-control" name="id_bpjs" id="id_bpjs" value="<?= $bpjs->id_bpjs; ?>">
                    <input type="hidden" class="form-control" name="id_pegawai" id="id_pegawai" value="<?= $bpjs->id_pegawai; ?>">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="nomor_bpjs_ks" class="col-sm-4 col-form-label">Nomor BPJS Kesehatan</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="nomor_bpjs_ks" id="nomor_bpjs_ks" value="<?= $bpjs->nomor_bpjs_ks; ?>" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_klinik" class="col-sm-4 col-form-label">Nama Faskes</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="nama_klinik" id="nama_klinik" value="<?= $bpjs->nama_klinik; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nomor_bpjs_tk" class="col-sm-4 col-form-label">Nomor BPJS Ketenagakerjaan</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="nomor_bpjs_tk" id="nomor_bpjs_tk" value="<?= $bpjs->nomor_bpjs_tk; ?>" autofocus>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button class="btn btn-success col-md-2 col-sm-12" type="submit">Simpan</button>
                        <a href="<?= base_url('bpjs'); ?>" class="btn btn-warning float-right col-md-2 col-sm-12" type="reset">Kembali</a>
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