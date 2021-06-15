 <!-- Content Header (Page header) -->
 <div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1 class="m-0">Tambah Data Pelatihan & Sertifikat</h1>
             </div><!-- /.col -->
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="#"><i class="fas fa-medal"></i> Data Pelatihan & Sertifikat</a></li>
                     <li class="breadcrumb-item active"> Tambah Data Pelatihan & Sertifikat</li>
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
                         <h3 class="card-title mt-2">Form Tambah Data Pelatihan & Sertifikat</h3>
                     </div>
                     <!-- /.card-header -->
                     <?= form_open(''); ?>
                     <div class="card-body">
                         <input type="hidden" name="id_pelatihan" id="id_pelatihan" class="form-control" value="<?= $pelatihan->id_pelatihan; ?>">
                         <div class="form-group row">
                             <label for="id_pegawai" class="col-md-4 col-form-label float-right">Nama</label>
                             <div class="col-md-6">
                                 <select class="form-control theSelect" name="id_pegawai" id="id_pegawai">
                                     <option value="<?= $pelatihan->id_pegawai; ?>"><?= $pelatihan->nip; ?> | <?= $pelatihan->nama; ?></option>
                                 </select>
                             </div>
                         </div>
                         <div class="form-group row">
                             <label for="judul" class="col-md-4 col-form-label float-right">Judul</label>
                             <div class="col-md-6">
                                 <input type="text" name="judul" id="judul" class="form-control" value="<?= $pelatihan->judul; ?>">
                             </div>
                         </div>
                         <div class="form-group row">
                             <label for="nomor_sertifikat" class="col-md-4 col-form-label float-right">Nomor Sertifikat</label>
                             <div class="col-md-6">
                                 <input type="text" name="nomor_sertifikat" id="nomor_sertifikat" class="form-control" value="<?= $pelatihan->nomor_sertifikat; ?>">
                             </div>
                         </div>
                         <div class="form-group row">
                             <label for="penyelenggara" class="col-md-4 col-form-label float-right">Penyelenggara</label>
                             <div class="col-md-6">
                                 <input type="text" name="penyelenggara" id="penyelenggara" class="form-control" value=<?= $pelatihan->penyelenggara; ?>>
                             </div>
                         </div>
                         <div class="form-group row">
                             <label for="tanggal_mulai" class="col-md-4 col-form-label float-right">Tanggal Mulai</label>
                             <div class="col-md-6">
                                 <div class="input-group">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text">
                                             <i class="far fa-calendar-alt"></i>
                                         </span>
                                     </div>
                                     <input type="date" class="form-control <?= form_error('tanggal_mulai') ? 'is-invalid' : ''; ?>" value="<?= $pelatihan->tanggal_mulai; ?>" name="tanggal_mulai" id="tanggal_mulai">
                                 </div>
                                 <small id="tanggal_mulai" class="form-text text-danger"><?= form_error('tanggal_mulai'); ?></small>
                             </div>
                         </div>

                         <div class="form-group row">
                             <label for="tanggal_berakhir" class="col-md-4 col-form-label float-right">Tanggal Berakhir</label>
                             <div class="col-md-6">
                                 <div class="input-group">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text">
                                             <i class="far fa-calendar-alt"></i>
                                         </span>
                                     </div>
                                     <input type="date" class="form-control <?= form_error('tanggal_berakhir') ? 'is-invalid' : ''; ?>" value="<?= $pelatihan->tanggal_berakhir; ?>" name="tanggal_berakhir" id="tanggal_berakhir">
                                 </div>
                                 <small id="tanggal_berakhir" class="form-text text-danger"><?= form_error('tanggal_berakhir'); ?></small>
                             </div>
                         </div>
                     </div>
                     <!-- /.card-body -->
                     <div class="card-footer">
                         <button class="btn btn-success col-md-2 col-sm-12" type="submit" value="upload">Submit</button>
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