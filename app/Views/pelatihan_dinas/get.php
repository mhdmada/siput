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
                    <?php foreach ($syarat_pelatihan as $key =>$value ): ?>
                    <h4><?= $value['judul']?></h4>
                    <?php endforeach; ?>
                  </div>
                  <div class="card-body">
                  <div class="buttons">
                    <a href="<?= site_url('pelatihan_dinas/persyaratan') ?>" class="btn btn-primary">
                        Lihat Persyaratan
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