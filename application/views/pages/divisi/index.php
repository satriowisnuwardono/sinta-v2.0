    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Divisi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fas fas fa-building"></i> Master Departemen</a></li>
                        <li class="breadcrumb-item active"> Data Divisi</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <divl class="col-md-8">
                    <div class="card card-outline card-warning">
                        <div class="card-header">
                            <h3 class="card-title mt2">List Divisi</h3>
                        </div>

                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
                        <?php if ($this->session->flashdata('pesan')) : ?>

                        <?php endif; ?>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>Nama Divisi</td>
                                        <td>Opsi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($divisi as $d) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $d->nama_divisi; ?></td>
                                            <td>
                                                <a href="<?= base_url('divisi/hapus/' . $d->id_divisi); ?>" class="btn btn-danger btn-block"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </divl>
                <div class="col-md-4">
                    <div class="card card-outline card-warning">
                        <div class="card-header">
                            <h3 class="card-title mt2">Tambah Data Divisi</h3>
                        </div>
                        <?= form_open('divisi/tambah'); ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="id_departemen">Nama Departemen</label>
                                <select name="id_departemen" id="id_departemen" class="form-control">
                                    <option value="" selected>--- Pilih Departemen ---</option>
                                    <?php foreach ($departemen as $dm) : ?>
                                        <option value="<?= $dm->id_departemen; ?>"><?= $dm->nama_departemen; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nama_divisi">Nama Divisi</label>
                                <input type="text" class="form-control" name="nama_divisi" id="nama_divisi">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success btn-block" type="submit">Simpan</button>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>