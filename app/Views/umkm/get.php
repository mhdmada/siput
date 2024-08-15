<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Daftar Usaha &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <h1>Daftar Usaha</h1>
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
              <h4>Pendaftaran Usaha Mikro, Kecil dan Menengah</h4>
            </div>
            <div class="card-body">
            <p>Anda dapat mendaftarkan usaha secara online ke 
               Dinas Tenaga Kerja, Koperasi dan UKM Kota Jambi Bidang UKM</p>
            <div class="buttons">
                    <a href="<?= site_url('umkm/add') ?>" class="btn btn-primary">
                        Daftarkan Usaha
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