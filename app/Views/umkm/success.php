<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Daftar Usaha &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <h1>Pendaftaran Berhasil</h1>
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
              <h4>Pendaftaran Sukses</h4>
            </div>
            <div class="card-body">
            <p>Anda telah berhasil mendaftarkan usaha anda.
            Langkah selanjutnya anda mencetak surat pendaftaran anda dengan tombol Cetak Surat Usaha dibawah ini.
            </p>
            <div class="buttons float-left">
                    <a href="<?= site_url('umkm') ?>" class="btn btn-primary">
                        Kembali
                    </a>
                  </div>
                  <div class="buttons float-left">
                  <a href="<?= site_url('umkm/cetak/' . $umkm['id_umkm']) ?>" target="_blank" class="btn btn-success btn-print">
                  <i class="fas fa-print"></i> Cetak Surat Usaha
                  </a>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
     </section>
<?= $this->endSection() ?>