    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Data Pegawai</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('pegawai'); ?>"><i class="fas fa-id-card"></i> Data Pegawai</a></li>
                        <li class="breadcrumb-item active"> Detail Data Pegawai</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-outline card-success">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img src="<?= base_url('assets/dist/foto/' . $pegawai->foto); ?>" class="profile-user-img">
                            </div>
                            <h3 class="profile-username text-center"><?= $pegawai->nama; ?></h3>
                            <p class="text-muted text-center"><?= $pegawai->nip; ?></p>
                            <p class="text-muted text-center">Posisi</p>
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Tempat, Tanggal Lahir</b> <a class="float-right"><?= $pegawai->tempat_lahir; ?>, <?= $pegawai->tanggal_lahir; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Jenis Kelamin</b> <a class="float-right"><?= $pegawai->jenis_kelamin; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>NIK</b> <a class="float-right"><?= $pegawai->nik; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Agama</b> <a class="float-right"><?= $pegawai->agama; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Status Pernikahan</b> <a class="float-right"><?= $pegawai->status_pernikahan; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Nomor Telepon/HP</b> <a class="float-right"><?= $pegawai->nomor_telepon; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Pendidikan Akhir</b> <a class="float-right"><?= $pegawai->pendidikan_akhir; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Jurusan</b> <a class="float-right"><?= $pegawai->jurusan; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Referensi</b> <a class="float-right"><?= $pegawai->referensi; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Alamat</b> <a class="float-right"><?= $pegawai->alamat; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>RT/RW</b> <a class="float-right"><?= $pegawai->rt; ?>/<?= $pegawai->rw; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Kelurahan</b> <a class="float-right"><?= $pegawai->kelurahan; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Kecamatan</b> <a class="float-right"><?= $pegawai->kecamatan; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Kabupaten/Kota</b> <a class="float-right"><?= $pegawai->kabupaten; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Kode Pos</b> <a class="float-right"><?= $pegawai->kode_pos; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Provinsi</b> <a class="float-right"><?= $pegawai->provinsi; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Golongan Darah</b> <a class="float-right"><?= $pegawai->golongan_darah; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Kontak Darurat</b> <a class="float-right"><?= $pegawai->kontak_darurat; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Nama Kontak</b> <a class="float-right"><?= $pegawai->nama_kontak; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Hubungan</b> <a class="float-right"><?= $pegawai->hubungan; ?></a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card card-outline card-success">
                        <div class="card-header">
                            <div class="card-title">Data BPJS</div>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tools" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table dataTable">
                                <thead>
                                    <tr>
                                        <th>Health BPJS</th>
                                        <th>Clinic Name</th>
                                        <th>BPJS of Employment</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>
                                            <?php
                                            if (empty($bpjs->nomor_bpjs_ks)) {
                                                echo 'empty';
                                            } else {
                                                echo $bpjs->nomor_bpjs_ks;
                                            } ?>
                                        </td>
                                        <td>
                                            <?php
                                            if (empty($bpjs->nama_klinik)) {
                                                echo 'empty';
                                            } else {
                                                echo $bpjs->nama_klinik;
                                            } ?>
                                        </td>
                                        <td>
                                            <?php
                                            if (empty($bpjs->nomor_bpjs_tk)) {
                                                echo 'empty';
                                            } else {
                                                echo $bpjs->nomor_bpjs_tk;
                                            } ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card card-outline card-success">
                        <div class="card-header">
                            <div class="card-title">Data Masa Kerja</div>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tools" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>PKWT</th>
                                        <th>NIP</th>
                                        <th>Mulai</th>
                                        <th>Akhir</th>
                                        <th>Durasi</th>
                                        <th>Departemen</th>
                                        <th>Posisi</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($masa_kerja as $mk) : ?>
                                        <tr>
                                            <td>
                                                <?php
                                                if (empty($mk->pkwt)) {
                                                    echo 'empty';
                                                } else {
                                                    echo $mk->pkwt;
                                                } ?>
                                            </td>
                                            <td>
                                                <?php
                                                if (empty($mk->nip)) {
                                                    echo 'empty';
                                                } else {
                                                    echo $mk->nip;
                                                } ?>
                                            </td>
                                            <td>
                                                <?php
                                                if (empty($mk->mulai_kerja)) {
                                                    echo 'empty';
                                                } else {
                                                    echo $mk->mulai_kerja;
                                                } ?>
                                            </td>
                                            <td>
                                                <?php
                                                if (empty($mk->berakhir_kerja)) {
                                                    echo 'empty';
                                                } else {
                                                    echo $mk->berakhir_kerja;
                                                } ?>
                                            </td>
                                            <td>
                                                <?php
                                                if (empty($mk->durasi)) {
                                                    echo 'empty';
                                                } else {
                                                    echo $mk->durasi;
                                                } ?>
                                            </td>
                                            <td>
                                                <?php
                                                if (empty($mk->id_departemen)) {
                                                    echo 'empty';
                                                } else {
                                                    echo $mk->id_departemen;
                                                } ?>
                                            </td>
                                            <td>
                                                <?php
                                                if (empty($mk->id_jabatan)) {
                                                    echo 'empty';
                                                } else {
                                                    echo $mk->id_jabatan;
                                                } ?>
                                            </td>
                                            <td>
                                                <?php
                                                if (empty($mk->id_jabatan)) {
                                                    echo 'empty';
                                                } else {
                                                    echo $mk->id_jabatan;
                                                } ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Jenjang Karir -->
                    <div class="card card-outline card-success">
                        <div class="card-header">
                            <div class="card-title">Data Jenjang Karir</div>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tools" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- DEMOSI -->
                            <div class="form-group">
                                <a class="btn btn-tools" type="button" data-toggle="collapse" data-target="#demosi">
                                    <strong>DEMOSI</strong>
                                </a>
                                <div class="collapse" id="demosi">
                                    <div class="card card-body">
                                        <table class="table dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Jabatan Sebelum</th>
                                                    <th>Divisi Sebelum</th>
                                                    <th>Jabatan Sesudah</th>
                                                    <th>Divisi Sesudah</th>
                                                    <th>Tanggal SK</th>
                                                    <th>Nomor SK</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($demosi  as $d) : ?>
                                                    <tr>
                                                        <td><?= $d->jabatan_sebelum; ?></td>
                                                        <td><?= $d->divisi_sebelum; ?></td>
                                                        <td><?= $d->jabatan_sesudah; ?></td>
                                                        <td><?= $d->divisi_sesudah; ?></td>
                                                        <td><?= $d->tanggal_sk; ?></td>
                                                        <td><?= $d->nomor_sk; ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <!-- MUTASI -->
                            <div class="form-group">
                                <a class="btn btn-tools" type="button" data-toggle="collapse" data-target="#mutasi">
                                    <strong>MUTASI</strong>
                                </a>
                                <div class="collapse" id="mutasi">
                                    <div class="card card-body">
                                        <table class="table dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Jabatan Sebelum</th>
                                                    <th>Divisi Sebelum</th>
                                                    <th>Jabatan Sesudah</th>
                                                    <th>Divisi Sesudah</th>
                                                    <th>Tanggal SK</th>
                                                    <th>Nomor SK</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($mutasi  as $m) : ?>
                                                    <tr>
                                                        <td><?= $m->jabatan_sebelum; ?></td>
                                                        <td><?= $m->divisi_sebelum; ?></td>
                                                        <td><?= $m->jabatan_sesudah; ?></td>
                                                        <td><?= $m->divisi_sesudah; ?></td>
                                                        <td><?= $m->tanggal_sk; ?></td>
                                                        <td><?= $m->nomor_sk; ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <!-- PROMOSI -->
                            <div class="form-group">
                                <a class="btn btn-tools" type="button" data-toggle="collapse" data-target="#promosi">
                                    <strong>PROMOSI</strong>
                                </a>
                                <div class="collapse" id="promosi">
                                    <div class="card card-body">
                                        <table class="table dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Jabatan Sebelum</th>
                                                    <th>Divisi Sebelum</th>
                                                    <th>Jabatan Sesudah</th>
                                                    <th>Divisi Sesudah</th>
                                                    <th>Tanggal SK</th>
                                                    <th>Nomor SK</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($promosi  as $p) : ?>
                                                    <tr>
                                                        <td><?= $p->jabatan_sebelum; ?></td>
                                                        <td><?= $p->divisi_sebelum; ?></td>
                                                        <td><?= $p->jabatan_sesudah; ?></td>
                                                        <td><?= $p->divisi_sesudah; ?></td>
                                                        <td><?= $p->tanggal_sk; ?></td>
                                                        <td><?= $p->nomor_sk; ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Penghargaan dan Pelanggaran -->
                    <div class="card card-outline card-success">
                        <div class="card-header">
                            <div class="card-title">Data Penghargaan dan Pelanggaran</div>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tools" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- PENGHARGAAN -->
                            <div class="form-group">
                                <a class="btn btn-tools" type="button" data-toggle="collapse" data-target="#penghargaan">
                                    <strong>PENGHARGAAN</strong>
                                </a>
                                <div class="collapse" id="penghargaan">
                                    <div class="card card-body">
                                        <table class="table dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Keterangan</th>
                                                    <th>Tanggal</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- PELANGGARAN -->
                            <div class="form-group">
                                <a class="btn btn-tools" type="button" data-toggle="collapse" data-target="#pelanggaran">
                                    <strong>PELANGGARAN</strong>
                                </a>
                                <div class="collapse" id="pelanggaran">
                                    <div class="card card-body">
                                        <table class="table dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Keterangan</th>
                                                    <th>Tanggal</th>
                                                    <th>Masa Berlaku</th>
                                                    <th>Kadaluarsa</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pelatihan dan Sertifikasi -->
                    <div class="card card-outline card-success">
                        <div class="card-header">
                            <div class="card-title">Data Pelatihan dan Sertifikasi</div>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tools" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table dataTable">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Tanggal</th>
                                        <th>Penyelenggara</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Inventaris -->
                    <div class="card card-outline card-success">
                        <div class="card-header">
                            <div class="card-title">Data Inventaris</div>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tools" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table dataTable">
                                <thead>
                                    <tr>
                                        <th>Nama Barang</th>
                                        <th>Tanggal Diberikan</th>
                                        <th>Tanggal Pengembalian</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->