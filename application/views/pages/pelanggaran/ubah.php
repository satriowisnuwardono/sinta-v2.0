 <!-- Content Header (Page header) -->
 <div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1 class="m-0">Ubah Data Pelanggaran</h1>
             </div><!-- /.col -->
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="#"><i class="fas fa-medal"></i> Data Pelanggaran</a></li>
                     <li class="breadcrumb-item active"> Ubah Data Pelanggaran</li>
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
                         <h3 class="card-title mt-2">Form Ubah Data Pelanggaran</h3>
                     </div>
                     <!-- /.card-header -->
                     <?= form_open(); ?>
                     <div class="card-body">
                         <input type="hidden" name="id_pelanggaran" id="id_pelanggaran" value="<?= $pelanggaran->id_pelanggaran; ?>">
                         <div class="form-group row">
                             <label for="id_pegawai" class="col-md-4 col-form-label float-right">Nama</label>
                             <div class="col-md-6">
                                 <select class="form-control theSelect" name="id_pegawai" id="id_pegawai">
                                     <option value="<?= $pelanggaran->id_pegawai; ?>"><?= $pelanggaran->nip; ?> | <?= $pelanggaran->nama; ?></option>
                                 </select>
                             </div>
                         </div>
                         <div class="form-group row">
                             <label for="masa_berlaku" class="col-md-4 col-form-label float-right">Masa Berlaku</label>
                             <div class="col-md-6">
                                 <input type="text" name="masa_berlaku" id="amasa_berlaku" class="form-control" value="<?= $pelanggaran->masa_berlaku; ?>">
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
                                     <input type="date" class="form-control <?= form_error('tanggal_mulai') ? 'is-invalid' : ''; ?>" value="<?= $pelanggaran->tanggal_mulai; ?>" name="tanggal_mulai" id="tanggal_mulai">
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
                                     <input type="date" class="form-control <?= form_error('tanggal_berakhir') ? 'is-invalid' : ''; ?>" value="<?= $pelanggaran->tanggal_berakhir; ?>" name="tanggal_berakhir" id="tanggal_berakhir">
                                 </div>
                                 <small id="tanggal_berakhir" class="form-text text-danger"><?= form_error('tanggal_berakhir'); ?></small>
                             </div>
                         </div>
                         <div class="form-group row">
                             <label for="keterangan" class="col-md-4 col-form-label float-right">Keterangan</label>
                             <div class="col-md-6">
                                 <textarea class="form-control" name="keterangan" id="keterangan" rows="5"><?= $pelanggaran->keterangan; ?></textarea>
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