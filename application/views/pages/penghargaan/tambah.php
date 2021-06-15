 <!-- Content Header (Page header) -->
 <div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1 class="m-0">Tambah Data Penghargaan</h1>
             </div><!-- /.col -->
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="#"><i class="fas fa-medal"></i> Data Penghargaan</a></li>
                     <li class="breadcrumb-item active"> Tambah Data Penghargaan</li>
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
                         <h3 class="card-title mt-2">Form Tambah Data Penghargaan</h3>
                     </div>
                     <!-- /.card-header -->
                     <?= form_open('penghargaan/tambah'); ?>
                     <div class="card-body">
                         <div class="form-group row">
                             <label for="id_pegawai" class="col-md-4 col-form-label float-right">Nama</label>
                             <div class="col-md-6">
                                 <select class="form-control theSelect" name="id_pegawai" id="id_pegawai">
                                     <option value="">--- Pilih Nama Pegawai ---</option>
                                     <?php foreach ($pegawai as $p) : ?>
                                         <option value="<?= $p->id_pegawai; ?>"><?= $p->nip; ?> | <?= $p->nama; ?></option>
                                     <?php endforeach; ?>
                                 </select>
                             </div>
                         </div>
                         <div class="form-group row">
                             <label for="tanggal_keterangan" class="col-md-4 col-form-label float-right">Tanggal</label>
                             <div class="col-md-6">
                                 <div class="input-group">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text">
                                             <i class="far fa-calendar-alt"></i>
                                         </span>
                                     </div>
                                     <input type="date" class="form-control <?= form_error('tanggal_keterangan') ? 'is-invalid' : ''; ?>" value="<?= set_value('tanggal_keterangan'); ?>" name="tanggal_keterangan" id="tanggal_keterangan">
                                 </div>
                                 <small id="tanggal_keterangan" class="form-text text-danger"><?= form_error('tanggal_keterangan'); ?></small>
                             </div>
                         </div>
                         <div class="form-group row">
                             <label for="keterangan" class="col-md-4 col-form-label float-right">Keterangan</label>
                             <div class="col-md-6">
                                 <textarea class="form-control" name="keterangan" id="keterangan" rows="5"></textarea>
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