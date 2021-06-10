    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data Pegawai</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-id-card"></i> Data Pegawai</a></li>
                        <li class="breadcrumb-item active"> Tambah Data Pegawai</li>
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
                            <h3 class="card-title mt-2">Form Tambah Data Pegawai</h3>
                        </div>
                        <!-- /.card-header -->
                        <?= form_open_multipart('pegawai/tambah'); ?>
                        <div class="card-body">
                            <div class="row form-group">
                                <div class="col-md-4 col-sm-12">
                                    <label for="nip">NIP <small>(nomor induk pegawai) *</small></label>
                                    <input type="text" class="form-control <?= form_error('nip') ? 'is-invalid' : ''; ?>" value="<?= set_value('nip'); ?>" name="nip" id="nip" autofocus>
                                    <small id="nik" class="form-text text-danger"><?= form_error('nip'); ?></small>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label for="nik">NIK <small>(nomor induk kependudukan) *</small></label>
                                    <input type="text" class="form-control <?= form_error('nik') ? 'is-invalid' : ''; ?>" value="<?= set_value('nik'); ?>" name="nik" id="nik">
                                    <small id="nik" class="form-text text-danger"><?= form_error('nik'); ?></small>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label for="kewarganegaraan">Kewarganegaraan *</label>
                                    <select class="form-control <?= form_error('kewarganegaraan') ? 'is-invalid' : ''; ?>" name="kewarganegaraan" id="kewarganegaraan">
                                        <option selected value="">Pilih...</option>
                                        <option>WNI</option>
                                        <option>WNA</option>
                                    </select>
                                    <small id="kewarganegaraan" class="form-text text-danger"><?= form_error('kewarganegaraan'); ?></small>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-4 col-sm-12">
                                    <label for="nama">Nama *</label>
                                    <input type="text" class="form-control <?= form_error('nama') ? 'is-invalid' : ''; ?>" value="<?= set_value('nama'); ?>" name="nama" id="nama">
                                    <small id="nama" class="form-text text-danger"><?= form_error('nama'); ?></small>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label for="tempat_lahir">Tempat Lahir *</label>
                                    <input type="text" class="form-control <?= form_error('tempat_lahir') ? 'is-invalid' : ''; ?>" value="<?= set_value('tempat_lahir'); ?>" name="tempat_lahir" id="tempat_lahir">
                                    <small id="tempat_lahir" class="form-text text-danger"><?= form_error('tempat_lahir'); ?></small>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label for="tanggal_lahir">Tanggal Lahir *</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="far fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                        <input type="date" class="form-control <?= form_error('tanggal_lahir') ? 'is-invalid' : ''; ?>" value="<?= set_value('tanggal_lahir'); ?>" name="tanggal_lahir" id="tanggal_lahir">
                                    </div>
                                    <small id="tanggal_lahir" class="form-text text-danger"><?= form_error('tanggal_lahir'); ?></small>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-4 col-sm-12">
                                    <label for="agama">Agama</label>
                                    <select class="form-control" name="agama" id="agama">
                                        <option selected value="">Pilih...</option>
                                        <option>ISLAM</option>
                                        <option>PROTESTAN</option>
                                        <option>KATOLIK</option>
                                        <option>HINDU</option>
                                        <option>BUDDHA</option>
                                        <option>KONGHUCU</option>
                                    </select>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label for="jenis_kelamin">Jenis Kelamin *</label>
                                    <select class="form-control <?= form_error('jenis_kelamin') ? 'is-invalid' : ''; ?>" name="jenis_kelamin" id="jenis_kelamin">
                                        <option selected value="">Pilih...</option>
                                        <option>LAKI-LAKI</option>
                                        <option>PEREMPUAN</option>
                                    </select>
                                    <small id="jenis_kelamin" class="form-text text-danger"><?= form_error('jenis_kelamin'); ?></small>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label for="status_pernikahan">Status Pernikahan *</label>
                                    <select class="form-control <?= form_error('status_pernikahan') ? 'is-invalid' : ''; ?>" name="status_pernikahan" id="status_pernikahan">
                                        <option selected value="">Pilih...</option>
                                        <option>TK</option>
                                        <option>K0</option>
                                        <option>K1</option>
                                        <option>K2</option>
                                        <option>K3</option>
                                    </select>
                                    <small id="status_pernikahan" class="form-text text-danger"><?= form_error('status_pernikahan'); ?></small>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-4 col-sm-12">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" id="alamat">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label for="rt">RT <small>(rukun tetangga)</small></label>
                                    <input type="text" class="form-control" name="rt" id="rt">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label for="rw">RW <small>(rukun warga)</small></label>
                                    <input type="text" class="form-control" name="rw" id="rw">
                                </div>

                            </div>

                            <div class="row form-group">
                                <div class="col-md-4 col-sm-12">
                                    <label for="kelurahan">Kelurahan</label>
                                    <input type="text" class="form-control" name="kelurahan" id="kelurahan">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label for="kecamatan">Kecamatan</label>
                                    <input type="text" class="form-control" name="kecamatan" id="kecamatan">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label for="kabupaten">Kabupaten/Kota</label>
                                    <input type="text" class="form-control" name="kabupaten" id="kabupaten">
                                </div>

                            </div>

                            <div class="row form-group">
                                <div class="col-md-4 col-sm-12">
                                    <label for="kode_pos">Kode Pos</label>
                                    <input type="text" class="form-control" name="kode_pos" id="kode_pos">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label for="provinsi">Provinsi</label>
                                    <input type="text" class="form-control" name="provinsi" id="provinsi">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label for="nomor_telepon">Nomor Telepon/HP *</label>
                                    <input type="text" class="form-control <?= form_error('nomor_telepon') ? 'is-invalid' : ''; ?>" value="<?= set_value('nomor_telepon'); ?>" name="nomor_telepon" id="nomor_telepon">
                                    <small id="nomor_telepon" class="form-text text-danger"><?= form_error('nomor_telepon'); ?></small>
                                </div>

                            </div>

                            <div class="row form-group">
                                <div class="col-md-4 col-sm-12">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label for="pendidikan_akhir">Pendidikan Akhir *</label>
                                    <select class="form-control <?= form_error('pendidikan_akhir') ? 'is-invalid' : ''; ?>" name="pendidikan_akhir" id="pendidikan_akhir">
                                        <option selected value="">Pilih...</option>
                                        <option>SD</option>
                                        <option>SMP</option>
                                        <option>SMA</option>
                                        <option>DIPLOMA I</option>
                                        <option>DIPLOMA I</option>
                                        <option>DIPLOMA III</option>
                                        <option>DIPLOMA IV</option>
                                        <option>STRATA I</option>
                                        <option>STRATA II</option>
                                        <option>STRATA III</option>
                                    </select>
                                    <small id="pendidikan_akhir" class="form-text text-danger"><?= form_error('pendidikan_akhir'); ?></small>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label for="jurusan">Jurusan *</label>
                                    <input type="text" class="form-control <?= form_error('jurusan') ? 'is-invalid' : ''; ?>" value="<?= set_value('jurusan'); ?>" name="jurusan" id="jurusan">
                                    <small id="jurusan" class="form-text text-danger"><?= form_error('jurusan'); ?></small>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-4 col-sm-12">
                                    <label for="kontak_darurat">Kontak Darurat *</label>
                                    <input type="text" class="form-control <?= form_error('kontak_darurat') ? 'is-invalid' : ''; ?>" value="<?= set_value('kontak_darurat'); ?>" name="kontak_darurat" id="kontak_darurat">
                                    <small id="kontak_darurat" class="form-text text-danger"><?= form_error('kontak_darurat'); ?></small>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label for="nama_kontak">Nama Kontak *</label>
                                    <input type="text" class="form-control <?= form_error('nama_kontak') ? 'is-invalid' : ''; ?>" value="<?= set_value('nama_kontak'); ?>" name="nama_kontak" id="nama_kontak">
                                    <small id="nama_kontak" class="form-text text-danger"><?= form_error('nama_kontak'); ?></small>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label for="hubungan">Hubungan *</label>
                                    <input type="text" class="form-control <?= form_error('hubungan') ? 'is-invalid' : ''; ?>" value="<?= set_value('hubungan'); ?>" name="hubungan" id="hubungan">
                                    <small id="hubungan" class="form-text text-danger"><?= form_error('hubungan'); ?></small>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-4 col-sm-12">
                                    <label for="tanggal_bekerja">Tanggal Bekerja *</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="far fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                        <input type="date" class="form-control <?= form_error('tanggal_bekerja') ? 'is-invalid' : ''; ?>" value="<?= set_value('tanggal_bekerja'); ?>" name="tanggal_bekerja" id="tanggal_bekerja">
                                    </div>
                                    <small id="tanggal_bekerja" class="form-text text-danger"><?= form_error('tanggal_bekerja'); ?></small>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label for="golongan_darah">Golongan Darah</label>
                                    <input type="text" class="form-control" name="golongan_darah" id="golongan_darah">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label for="referensi">Referensi</label>
                                    <input type="text" class="form-control" name="referensi" id="referensi">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-4 col-sm-12">
                                    <label for="foto">foto</label>
                                    <input type="file" class="form-control" name="foto" id="foto">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button class="btn btn-success col-md-2 col-sm-12" type="submit" value="upload">Submit</button>
                            <button class="btn btn-warning col-md-2 col-sm-12 float-right" type="reset">Reset</button>
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