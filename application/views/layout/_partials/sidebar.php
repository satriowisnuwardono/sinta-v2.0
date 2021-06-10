<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link text-center">
        <i class="fab fa-staylinked" style="color: #F1872F"></i>
        <span class="brand-text font-weight-light"><strong>S I N T A</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('assets/dist/img/Icon.png'); ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $_SESSION['username'] ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url('beranda'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Beranda
                        </p>
                    </a>
                </li>

                <li class="nav-header">SUMBER DAYA MANUSIA</li>

                <!-- Master Departemen -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                            Master Departemen
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ml-4">
                            <a href="<?= base_url('departemen'); ?>" class="nav-link">
                                <i class="fas fa-sitemap nav-icon"></i>
                                <p>Data Departemen</p>
                            </a>
                        </li>
                        <li class="nav-item ml-4">
                            <a href="<?= base_url('divisi'); ?>" class="nav-link">
                                <i class="fas fa-sitemap nav-icon"></i>
                                <p>Data Divisi</p>
                            </a>
                        </li>
                        <li class="nav-item ml-4">
                            <a href="<?= base_url('jabatan'); ?>" class="nav-link">
                                <i class="fas fa-sitemap nav-icon"></i>
                                <p>Data Jabatan</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Master Pegawai -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Master Pegawai
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ml-4">
                            <a href="<?= base_url('pegawai'); ?>" class="nav-link">
                                <i class="fas fa-id-card nav-icon"></i>
                                <p>Data Pegawai</p>
                            </a>
                        </li>
                        <li class="nav-item ml-4">
                            <a href="<?= base_url('bpjs') ?>" class="nav-link">
                                <i class="fas fa-user-md nav-icon"></i>
                                <p>Data BPJS</p>
                            </a>
                        </li>
                        <li class="nav-item ml-4">
                            <a href="<?= base_url('masaKerja'); ?>" class="nav-link">
                                <i class="fas fa-clipboard-list nav-icon"></i>
                                <p>Data Masa Kerja</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Master Jenjang Karir -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-paste"></i>
                        <p>
                            Master Jenjang Karir
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ml-4">
                            <a href="<?= base_url('demosi'); ?>" class="nav-link">
                                <i class="fas fa-file nav-icon"></i>
                                <p>Data Demosi</p>
                            </a>
                        </li>
                        <li class="nav-item ml-4">
                            <a href="<?= base_url('mutasi') ?>" class="nav-link">
                                <i class="far fa-file-alt nav-icon"></i>
                                <p>Data Mutasi</p>
                            </a>
                        </li>
                        <li class="nav-item ml-4">
                            <a href="<?= base_url('promosi'); ?>" class="nav-link">
                                <i class="fas fa-file-alt nav-icon"></i>
                                <p>Data Promosi</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Master Gaji -->
                <li class="nav-header">AKUNTANSI</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-money-check-alt"></i>
                        <p>
                            Master Gaji
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ml-4">
                            <a href="<?= base_url('gaji'); ?>" class="nav-link">
                                <i class="fas fa-hand-holding-usd nav-icon"></i>
                                <p>Data Gaji</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- User Akses -->
                <?php
                if ($this->session->userdata('administrator') == '1') {
                ?>
                    <li class="nav-header">ADMINISTRATOR</li>

                    <!-- Master User -->
                    <li class="nav-item">
                        <a href="<?= base_url('user'); ?>" class="nav-link">
                            <i class="fas fa-user nav-icon"></i>
                            <p>User</p>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>