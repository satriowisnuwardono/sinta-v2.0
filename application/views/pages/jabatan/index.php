    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Jabatan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fas fas fa-building"></i> Master Departemen</a></li>
                        <li class="breadcrumb-item active"> Data Jabatan</li>
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
                            <h3 class="card-title mt2">List Jabatan</h3>
                        </div>

                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
                        <?php if ($this->session->flashdata('pesan')) : ?>

                        <?php endif; ?>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>Nama Jabatan</td>
                                        <td>Opsi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($jabatan as $j) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $j->nama_jabatan; ?></td>
                                            <td>
                                                <a href="<?= base_url('jabatan/hapus/' . $j->id_jabatan); ?>" class="btn btn-danger btn-block"><i class="fas fa-trash"></i></a>
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
                            <h3 class="card-title mt2">Tambah Data Jabatan</h3>
                        </div>
                        <?= form_open('jabatan/tambah'); ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="id_departemen">Nama Deprtemen</label>
                                <select name="id_departemen" id="id_departemen" class="form-control">
                                    <option value="">---Pilih Departemen---</option>
                                    <?php foreach ($departemen as $dm) : ?>
                                        <option value="<?= $dm->id_departemen; ?>"><?= $dm->nama_departemen; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id_divisi">Nama Divisi</label>
                                <select name="id_divisi" id="id_divisi" required="required" class="form-control">
                                    <option>---Pilih Divisi---</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nama_jabatan">Nama jabatan</label>
                                <input type="text" class="form-control" name="nama_jabatan" id="nama_jabatan">
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