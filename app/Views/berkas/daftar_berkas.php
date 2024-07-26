<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Daftar Berkas &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <h1>Pengajuan Berkas</h1>
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
                <h4>List dokumen yang masuk</h4>
              </div>
                  <div class="card-body">
                  <h5>Anda bisa mengirimkan berkas anda secara online ke Dinas Tenaga Kerja, Koperasi dan UKM Kota Jambi</h5>
                  </div>
                  <div class="card-footer">
                  <div class="buttons">
                    <a href="<?=site_url('berkas/create'); ?>" class="btn btn-primary">
                        Upload Berkas
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