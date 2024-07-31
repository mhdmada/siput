<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Persyaratan Pendaftaran Pelatihan UMKM &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <h1>Info Pelatihan Dinas</h1>
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
        <?php foreach ($syarat_pelatihan as $key => $value): ?>
        <div class="card-header">
            <h4><?= $value['judul']?></h4>
        </div>
        <div class="card-body">
            <div id="accordion">
                    <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-info-<?= $key ?>" aria-expanded="<?= $key === 0 ? 'true' : 'false' ?>">
                            <h4>Persyaratan</h4>
                        </div>
                        <div class="accordion-body collapse <?= $key === 0 ? 'show' : '' ?>" id="panel-body-info-<?= $key ?>" data-parent="#accordion">
                            <p class="mb-0">1. <?= $value['info_1'] ?></p>
                            <p class="mb-0">2. <?= $value['info_2'] ?></p>
                            <p class="mb-0">3. <?= $value['info_3'] ?></p>
                            <p class="mb-0">4. <?= $value['info_4'] ?></p>
                            <p class="mb-0">5. <?= $value['info_5'] ?></p>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-lokasi-<?= $key ?>" aria-expanded="true">
                            <h4>Lokasi</h4>
                        </div>
                        <div class="accordion-body show" id="panel-body-lokasi-<?= $key ?>" data-parent="#accordion">
                            <p class="mb-0">Lokasi: <?=$value['lokasi']?></p>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-jadwal-<?= $key ?>" aria-expanded="true">
                            <h4>Jadwal</h4>
                        </div>
                        <div class="accordion-body show" id="panel-body-jadwal-<?= $key ?>" data-parent="#accordion">
                            <p class="mb-0">Jadwal: <?=$value['jadwal']?></p>
                        </div>
                    </div>
                    <div class="buttons">
                    <a href="<?= site_url('pelatihan_dinas/daftar') ?>" class="btn btn-info">
                        Daftar Pelatihan
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
     </section>
<?= $this->endSection() ?>

