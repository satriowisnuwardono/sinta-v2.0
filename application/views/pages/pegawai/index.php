    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Pegawai</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-users"></i> Master Pegawai</a></li>
                        <li class="breadcrumb-item active"> Data Pegawai</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
    <?php if ($this->session->flashdata('pesan')) : ?>

    <?php endif; ?>

    <!-- SWEET ALERT -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title mt-2">Tabel Data Pegawai</h3>
                            <a class="btn btn-primary float-right" href="<?= base_url('pegawai/tambah'); ?>"><i class="fas fa-user-plus"></i> Tambah Pegawai</a>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">
                            <!-- Super Admin dan Admin Akses -->
                            <?php if (
                                $this->session->userdata('data_pegawai') == '1' or
                                $this->session->userdata('data_pegawai') == '2'
                            ) { ?>
                                <div class="table-responsive">
                                    <table id="exp_pegawai" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>NIP</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Agama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Status Pernikahan</th>
                                                <th>Alamat</th>
                                                <th>RT</th>
                                                <th>RW</th>
                                                <th>Kelurahan</th>
                                                <th>Kecamatan</th>
                                                <th>Kabupaten</th>
                                                <th>Kode Pos</th>
                                                <th>Provinsi</th>
                                                <th>Kewarganegaraan</th>
                                                <th>Pendidikan Akhir</th>
                                                <th>Jurusan</th>
                                                <th>Nomor Telepon</th>
                                                <th>Email</th>
                                                <th>Kontak Darurat</th>
                                                <th>Nama Kontak</th>
                                                <th>Hubungan</th>
                                                <th>Tanggal Bekerja</th>
                                                <th>Golongan Darah</th>
                                                <th>Referensi</th>
                                                <th>Umur</th>
                                                <?php if ($this->session->userdata('data_pegawai') == '1') { ?>
                                                    <th>Masa Kerja</th>
                                                <?php } ?>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $i = 1;
                                            foreach ($pegawai as $p) { ?>
                                                <tr>
                                                    <td><?= $i++; ?></td>
                                                    <td><?= $p->nip; ?></td>
                                                    <td><?= $p->nik; ?></td>
                                                    <td><?= $p->nama; ?></td>
                                                    <td><?= $p->tempat_lahir; ?></td>
                                                    <td><?= $p->tanggal_lahir; ?></td>
                                                    <td><?= $p->agama; ?></td>
                                                    <td><?= $p->jenis_kelamin; ?></td>
                                                    <td><?= $p->status_pernikahan; ?></td>
                                                    <td><?= $p->alamat; ?></td>
                                                    <td><?= $p->rt; ?></td>
                                                    <td><?= $p->rw; ?></td>
                                                    <td><?= $p->kelurahan; ?></td>
                                                    <td><?= $p->kecamatan; ?></td>
                                                    <td><?= $p->kabupaten; ?></td>
                                                    <td><?= $p->kode_pos; ?></td>
                                                    <td><?= $p->provinsi; ?></td>
                                                    <td><?= $p->kewarganegaraan; ?></td>
                                                    <td><?= $p->pendidikan_akhir; ?></td>
                                                    <td><?= $p->jurusan; ?></td>
                                                    <td><?= $p->nomor_telepon; ?></td>
                                                    <td><?= $p->email; ?></td>
                                                    <td><?= $p->kontak_darurat; ?></td>
                                                    <td><?= $p->nama_kontak; ?></td>
                                                    <td><?= $p->hubungan; ?></td>
                                                    <td><?= $p->tanggal_bekerja; ?></td>
                                                    <td><?= $p->golongan_darah; ?></td>
                                                    <td><?= $p->referensi; ?></td>
                                                    <td>
                                                        <?php
                                                        $lahir = new DateTime($p->tanggal_lahir);
                                                        $today = new DateTime();
                                                        $umur = $today->diff($lahir);
                                                        echo $umur->y;
                                                        echo ' Tahun ';
                                                        // echo $umur->m;
                                                        // echo ' Bulan, dan ';
                                                        // echo $umur->d;
                                                        // echo " Hari";
                                                        ?>
                                                    </td>
                                                    <?php if ($this->session->userdata('data_pegawai') == '1') { ?>
                                                        <td>
                                                            <a href="<?= base_url('masaKerja/tambah/' . $p->id_pegawai); ?>" class="btn btn-block btn-sm btn-secondary"><i class="fas fa-clipboard-list"></i></a>
                                                        </td>
                                                    <?php } ?>
                                                    <td class="text-center">
                                                        <a href="<?= base_url('pegawai/detail/' . $p->id_pegawai); ?>" class="btn btn-info btn-sm"><i class="fas fa-info-circle"></i></a>
                                                        <?php if ($this->session->userdata('data_pegawai') == '1') { ?>
                                                            <a href="<?= base_url('pegawai/ubah/' . $p->id_pegawai); ?>" class="btn btn-warning btn-sm"><i class="fas fa-pen-square"></i></a>
                                                            <a href="<?= base_url('pegawai/hapus/' . $p->id_pegawai); ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="fas fa-trash-alt"></i></a>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php } ?>

                            <!-- User Akses -->
                            <?php if (
                                $this->session->userdata('data_pegawai') == '0'
                            ) { ?>
                                <table id="exp_pegawai" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Tempat, Tanggal Lahir</th>
                                            <th>Nomor KTP</th>
                                            <th>Agama</th>
                                            <th>Status Pernikahan</th>
                                            <th>Umur</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($pegawai as $p) { ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $p->nip; ?></td>
                                                <td><?= $p->nama; ?></td>
                                                <td><?= $p->tempat_lahir; ?>, <?= $p->tanggal_lahir; ?></td>
                                                <td><?= $p->nik; ?></td>
                                                <td><?= $p->agama; ?></td>
                                                <td><?= $p->status_pernikahan; ?></td>
                                                <td>
                                                    <?php
                                                    $lahir = new DateTime($p->tanggal_lahir);
                                                    $today = new DateTime();
                                                    $umur = $today->diff($lahir);
                                                    echo $umur->y;
                                                    echo ' Tahun ';
                                                    // echo $umur->m;
                                                    // echo ' Bulan, dan ';
                                                    // echo $umur->d;
                                                    // echo " Hari";
                                                    ?>
                                                </td>
                                                <td class="text-center">
                                                    <a href="<?= base_url('pegawai/detail/' . $p->id_pegawai); ?>" class="btn btn-info btn-sm"><i class="fas fa-info-circle"></i></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            <?php } ?>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->