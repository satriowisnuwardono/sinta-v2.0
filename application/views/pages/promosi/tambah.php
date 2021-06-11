 <!-- Content Header (Page header) -->
 <div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1 class="m-0">Tambah Data Promosi</h1>
             </div><!-- /.col -->
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="#"><i class="fas fa-file"></i> Data Promosi</a></li>
                     <li class="breadcrumb-item active"> Tambah Data Promosi</li>
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
                         <h3 class="card-title mt-2">Form Tambah Data promosi</h3>
                     </div>
                     <!-- /.card-header -->
                     <?= form_open('promosi/tambah'); ?>
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
                             <label for="divisi_sebelum" class="col-md-4 col-form-label float-right">Divisi Sebelum</label>
                             <div class="col-md-6">
                                 <select class="form-control" name="divisi_sebelum" id="divisi_sebelum">
                                     <option value="">--- Pilih Divisi ---</option>
                                     <?php foreach ($divisi as $p) : ?>
                                         <option value="<?= $p->nama_divisi; ?>"><?= $p->nama_divisi; ?></option>
                                     <?php endforeach; ?>
                                 </select>
                             </div>
                         </div>
                         <div class="form-group row">
                             <label for="jabatan_sebelum" class="col-md-4 col-form-label float-right">Jabatan Sebelum</label>
                             <div class="col-md-6">
                                 <select class="form-control" name="jabatan_sebelum" id="jabatan_sebelum">
                                     <option value="">--- Pilih Jabatan ---</option>
                                     <?php foreach ($jabatan as $p) : ?>
                                         <option value="<?= $p->nama_jabatan; ?>"><?= $p->nama_jabatan; ?></option>
                                     <?php endforeach; ?>
                                 </select>
                             </div>
                         </div>
                         <div class="form-group row">
                             <label for="divisi_sesudah" class="col-md-4 col-form-label float-right">Divisi Sesudah</label>
                             <div class="col-md-6">
                                 <select class="form-control" name="divisi_sesudah" id="divisi_sesudah">
                                     <option value="">--- Pilih Divisi ---</option>
                                     <?php foreach ($divisi as $p) : ?>
                                         <option value="<?= $p->nama_divisi; ?>"><?= $p->nama_divisi; ?></option>
                                     <?php endforeach; ?>
                                 </select>
                             </div>
                         </div>
                         <div class="form-group row">
                             <label for="jabatan_sesudah" class="col-md-4 col-form-label float-right">Jabatan Sesudah</label>
                             <div class="col-md-6">
                                 <select class="form-control" name="jabatan_sesudah" id="jabatan_sesudah">
                                     <option value="">--- Pilih Jabatan ---</option>
                                     <?php foreach ($jabatan as $p) : ?>
                                         <option value="<?= $p->nama_jabatan; ?>"><?= $p->nama_jabatan; ?></option>
                                     <?php endforeach; ?>
                                 </select>
                             </div>
                         </div>
                         <div class="form-group row">
                             <label for="tanggal_sk" class="col-md-4 col-form-label float-right">Tanggal SK</label>
                             <div class="col-md-6">
                                 <div class="input-group">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text">
                                             <i class="far fa-calendar-alt"></i>
                                         </span>
                                     </div>
                                     <input type="date" class="form-control <?= form_error('tanggal_sk') ? 'is-invalid' : ''; ?>" value="<?= set_value('tanggal_sk'); ?>" name="tanggal_sk" id="tanggal_sk">
                                 </div>
                                 <small id="tanggal_sk" class="form-text text-danger"><?= form_error('tanggal_sk'); ?></small>
                             </div>
                         </div>
                         <div class="form-group row">
                             <label for="nomor_sk" class="col-md-4 col-form-label float-right">Nomor SK</label>
                             <div class="col-md-6">
                                 <input type="text" class="form-control" name="nomor_sk" id="nomor_sk">
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