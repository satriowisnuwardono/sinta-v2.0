 <!-- Content Header (Page header) -->
 <div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1 class="m-0">Ubah Data Masa Kerja</h1>
             </div><!-- /.col -->
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="#"><i class="fas fa-id-card"></i> Data Masa Kerja</a></li>
                     <li class="breadcrumb-item active"> Ubah Data Masa Kerja</li>
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
                         <h3 class="card-title mt-2">Form Ubah Data Masa Kerja</h3>
                     </div>
                     <!-- /.card-header -->
                     <?= form_open(); ?>
                     <div class="card-body">
                         <div class="row">
                             <div class="form-group col-md-6 col-sm-12">
                                 <label for="nip">NIP <small>(Nomor Induk Pegawai)</small></label>
                                 <input type="hidden" name="id_masa_kerja" id="id_masa_kerja" class="form-control" value="<?= $masa_kerja->id_masa_kerja; ?>">
                                 <input type="hidden" name="id_pegawai" id="id_pegawai" class="form-control" value="<?= $masa_kerja->id_pegawai; ?>">
                                 <input type="text" class="form-control" name="nip" id="nip" value="<?= $masa_kerja->nip; ?>" readonly>
                             </div>
                             <div class="form-group col-md-6 col-sm-12">
                                 <label for="id_departemen">Departemen</label>
                                 <select class="form-control" name="id_departemen" id="id_departemen">
                                     <option value="<?= $masa_kerja->id_departemen; ?>"><?= $masa_kerja->nama_departemen; ?></option>
                                     <?php foreach ($departemen as $row) : ?>
                                         <option value="<?php echo $row->id_departemen; ?>"><?php echo $row->nama_departemen; ?></option>
                                     <?php endforeach; ?>
                                 </select>
                             </div>
                         </div>
                         <div class="row">
                             <div class="form-group col-md-6 col-sm-12">
                                 <label for="id_divisi">Divisi</small></label>
                                 <select class="form-control" name="id_divisi" id="id_divisi">
                                     <option value="<?= $masa_kerja->id_divisi; ?>"><?= $masa_kerja->nama_divisi; ?></option>
                                 </select>
                             </div>
                             <div class="form-group col-md-6 col-sm-12">
                                 <label for="id_jabatan">Jabatan</label>
                                 <select class="form-control" name="id_jabatan" id="id_jabatan">
                                     <option value="<?= $masa_kerja->id_jabatan; ?>"><?= $masa_kerja->nama_jabatan; ?></option>
                                 </select>
                             </div>
                         </div>
                         <div class="row">
                             <div class="form-group col-md-6 ol-sm-12">
                                 <label for="pkwt">PKWT <small>(Perjanjian Kerja Waktu Tertentu)</small></label>
                                 <input type="text" name="pkwt" id="pkwt" class="form-control" value="<?= $masa_kerja->pkwt; ?>">
                             </div>
                             <div class="form-group col-md-6 ol-sm-12">
                                 <label for="periode">Periode</small></label>
                                 <input type="text" name="periode" id="periode" class="form-control" value="<?= $masa_kerja->periode; ?>">
                             </div>
                         </div>
                         <div class="row">
                             <div class="form-group col-md-6 ol-sm-12">
                                 <label for="durasi">Durasi</label>
                                 <input type="text" name="durasi" id="durasi" class="form-control" value="<?= $masa_kerja->durasi; ?>">
                             </div>
                             <div class="form-group col-md-6 ol-sm-12">
                                 <label for="status_kerja">Status Kerja</label>
                                 <select class="form-control" name="status_kerja" id="status_kerja">
                                     <option selected value="<?= $masa_kerja->status_kerja; ?>"><?= $masa_kerja->status_kerja; ?></option>
                                     <option>KONTRAK</option>
                                     <option>TETAP</option>
                                     <option>UJI COBA</option>
                                 </select>
                             </div>
                         </div>
                         <div class="row">
                             <div class="form-group col-md-6 col-sm-12">
                                 <label for="mulai_kerja">Mulai Kerja *</label>
                                 <div class="input-group">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text">
                                             <i class="far fa-calendar-alt"></i>
                                         </span>
                                     </div>
                                     <input type="date" class="form-control <?= form_error('mulai_kerja') ? 'is-invalid' : ''; ?>" value="<?= $masa_kerja->mulai_kerja; ?>" name="mulai_kerja" id="mulai_kerja">
                                 </div>
                                 <small id="mulai_kerja" class="form-text text-danger"><?= form_error('mulai_kerja'); ?></small>
                             </div>
                             <div class="form-group col-md-6 col-sm-12">
                                 <label for="berakhir_kerja">Berakhir Kerja *</label>
                                 <div class="input-group">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text">
                                             <i class="far fa-calendar-alt"></i>
                                         </span>
                                     </div>
                                     <input type="date" class="form-control <?= form_error('berakhir_kerja') ? 'is-invalid' : ''; ?>" value="<?= $masa_kerja->berakhir_kerja; ?>" name="berakhir_kerja" id="berakhir_kerja">
                                 </div>
                                 <small id="berakhir_kerja" class="form-text text-danger"><?= form_error('berakhir_kerja'); ?></small>
                             </div>
                         </div>
                     </div>
                     <div class="card-footer">
                         <button class="btn btn-success col-md-2 col-sm-12" type="submit">Submit</button>
                         <button class="btn btn-warning col-md-2 col-sm-12 float-right" type="reset">Reset</button>
                     </div>
                     <?= form_close(); ?>
                 </div>
             </div>
         </div>
     </div>
 </section>