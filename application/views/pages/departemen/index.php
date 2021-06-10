    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Departemen</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fas fas fa-building"></i> Master Departemen</a></li>
                        <li class="breadcrumb-item active"> Data Departemen</li>
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
                            <h3 class="card-title mt2">List Departemen</h3>
                        </div>

                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
                        <?php if ($this->session->flashdata('pesan')) : ?>

                        <?php endif; ?>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>Nama Departemen</td>
                                        <td>Opsi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($departemen as $d) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $d->nama_departemen; ?></td>
                                            <td>
                                                <a href="<?= base_url('departemen/hapus/' . $d->id_departemen); ?>" class="btn btn-danger btn-block"><i class="fas fa-trash"></i></a>
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
                            <h3 class="card-title mt2">Tambah Data Departemen</h3>
                        </div>
                        <?= form_open('departemen/tambah'); ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_departemen">Nama Departemen</label>
                                <input type="text" class="form-control" name="nama_departemen" id="nama_departemen">
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