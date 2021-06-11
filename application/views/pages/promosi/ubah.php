 <!-- Content Header (Page header) -->
 <div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1 class="m-0">Ubah Data Promosi</h1>
             </div><!-- /.col -->
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="#"><i class="fas fa-file"></i> Data Promosi</a></li>
                     <li class="breadcrumb-item active"> Ubah Data Promosi</li>
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
                         <h3 class="card-title mt-2">Form Ubah Data Promosi</h3>
                     </div>
                     <!-- /.card-header -->
                     <?= form_open(); ?>
                     <div class="card-body">
                         <input type="hidden" class="form-control" name="id_promosi" id="id_promosi" value="<?= $promosi->id_promosi; ?>">
                         <div class="form-group row">
                             <label for="id_pegawai" class="col-md-4 col-form-label float-right">Nama</label>
                             <div class="col-md-6">
                                 <select class="form-control theSelect" name="id_pegawai" id="id_pegawai">
                                     <option value="<?= $promosi->id_pegawai; ?>"><?= $promosi->nip; ?> | <?= $promosi->nama; ?></option>
                                 </select>
                             </div>
                         </div>
                         <div class="form-group row">
                             <label for="divisi_sebelum" class="col-md-4 col-form-label float-right">Divisi Sebelum</label>
                             <div class="col-md-6">
                                 <select class="form-control theSelect" name="divisi_sebelum" id="divisi_sebelum">
                                     <option value="<?= $promosi->divisi_sebelum; ?>"><?= $promosi->divisi_sebelum; ?></option>
                                     <?php foreach ($divisi as $d) : ?>
                                         <option value="<?= $d->nama_divisi; ?>"><?= $d->nama_divisi; ?></option>
                                     <?php endforeach; ?>
                                 </select>
                             </div>
                         </div>
                         <div class="form-group row">
                             <label for="jabatan_sebelum" class="col-md-4 col-form-label float-right">Jabatan Sebelum</label>
                             <div class="col-md-6">
                                 <select class="form-control theSelect" name="jabatan_sebelum" id="jabatan_sebelum">
                                     <option value="<?= $promosi->jabatan_sebelum; ?>"><?= $promosi->jabatan_sebelum; ?></option>
                                     <?php foreach ($jabatan as $j) : ?>
                                         <option value="<?= $j->nama_jabatan; ?>"><?= $j->nama_jabatan; ?></option>
                                     <?php endforeach; ?>
                                 </select>
                             </div>
                         </div>
                         <div class="form-group row">
                             <label for="divisi_sesudah" class="col-md-4 col-form-label float-right">Divisi Sesudah</label>
                             <div class="col-md-6">
                                 <select class="form-control theSelect" name="divisi_sesudah" id="divisi_sesudah">
                                     <option value="<?= $promosi->divisi_sesudah; ?>"><?= $promosi->divisi_sesudah; ?></option>
                                     <?php foreach ($divisi as $p) : ?>
                                         <option value="<?= $p->nama_divisi; ?>"><?= $p->nama_divisi; ?></option>
                                     <?php endforeach; ?>
                                 </select>
                             </div>
                         </div>
                         <div class="form-group row">
                             <label for="jabatan_sesudah" class="col-md-4 col-form-label float-right">Jabatan Sesudah</label>
                             <div class="col-md-6">
                                 <select class="form-control theSelect" name="jabatan_sesudah" id="jabatan_sesudah">
                                     <option value="<?= $promosi->jabatan_sebelum; ?>"><?= $promosi->jabatan_sebelum; ?></option>
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
                                     <input type="date" class="form-control <?= form_error('tanggal_sk') ? 'is-invalid' : ''; ?>" value="<?= (set_value('tanggal_sk') ? set_value('tanggal_sk') : $promosi->tanggal_sk); ?>" name="tanggal_sk" id="tanggal_sk">
                                 </div>
                                 <small id="tanggal_sk" class="form-text text-danger"><?= form_error('tanggal_sk'); ?></small>
                             </div>
                         </div>
                         <div class="form-group row">
                             <label for="nomor_sk" class="col-md-4 col-form-label float-right">Nomor SK</label>
                             <div class="col-md-6">
                                 <input type="text" class="form-control" name="nomor_sk" id="nomor_sk" value="<?= $promosi->nomor_sk; ?>">
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