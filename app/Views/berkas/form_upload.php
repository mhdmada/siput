<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Pengajuan Berkas &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <h1>Pilih Berkas</h1>
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

        <div class="card">
              <div class="card-header">
                <h4>Pengajuan Berkas</h4>
              </div>
                  <div class="card-body">
                  <form method="post" action="<?=site_url('berkas/save'); ?>" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="berkas" class="form-label">Berkas</label><br>
                        <label>Ekstensi File : DOC, DOCX, PDF</label><br>
                        <label>Ukuran Max : 5 MB</label>
                        <input type="file" class="form-control" id="berkas" name="berkas" required>
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>

                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary" value="Upload" />
                    </div>
                </form>
                  </div>
                  <div class="card-footer">
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