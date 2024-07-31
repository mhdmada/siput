<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Pendaftaran Pelatihan Dinas &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <h1>Daftar Pelatihan Dinas </h1>
        </div>

<?php if(session()->getFlashData('success')) : ?>
  <div class="alert alert-success alert-dismissible show fade">
    <div class="alert-body">
      <button class="close" data-dismiss="alert">x</button>
      <b>Success !</b>
      <?=session()->getFlashData('success')?>
    </div>
  </div> 
<?php endif; ?>
<?php if(session()->getFlashData('error')) : ?>
  <div class="alert alert-danger alert-dismissible show fade">
    <div class="alert-body">
      <button class="close" data-dismiss="alert">x</button>
      <b>Error !</b>
      <?=session()->getFlashData('error')?>
    </div>
  </div> 
<?php endif; ?>

<div class="section-body">
<div class="card">
      <div class="card-header">
                <h4>Daftar Pelatihan</h4>
                  </div>
                  <div class="card-body">
                  <form action="<?= site_url('pelatihan_dinas/save') ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= old('nama_lengkap') ?>">
                    </div>
                    <div class="form-group">
                        <label for="file_ktp">Upload KTP *(pdf,doc,docx)</label>
                        <input type="file" class="form-control" id="file_ktp" name="file_ktp">
                    </div>
                    <div class="form-group">
                        <label for="file_kk">Upload KK *(pdf,doc,docx)</label>
                        <input type="file" class="form-control" id="file_kk" name="file_kk">
                    </div>
                    <div class="form-group">
                        <label for="file_nib">Upload NIB *(pdf,doc,docx)</label>
                        <input type="file" class="form-control" id="file_nib" name="file_nib">
                    </div>
                    <div class="form-group">
                        <label for="file_npwp">Upload NPWP *(pdf,doc,docx)</label>
                        <input type="file" class="form-control" id="file_npwp" name="file_npwp">
                    </div>
                    <button type="submit" class="btn btn-primary">Daftar</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </form>
                    </div>
                    <div class="card-footer">
                        <p>*Pendaftaran tidak dipungut biaya</p>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
      </div>
     </section>
<?= $this->endSection() ?>