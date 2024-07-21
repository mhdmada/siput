<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Produk UMKM &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <h1>Etalase Produk UMKM</h1>
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
                <h4>Info</h4>
              </div>
                  <div class="card-body">
                    <h5>Anda perlu mendaftarkan detail produk anda agar produk anda nantinya dapat ditampilkan di halaman utama website kami.</h5>
                  </div>
                    
                  <div class="card-footer">
                  <div class="buttons">
                    <a href="<?=site_url('product/add'); ?>" class="btn btn-primary">
                        Daftar sekarang juga
                    </a>
                    </div>
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