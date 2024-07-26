<?= $this->extend('admin/layout/default') ?>

<?= $this->section('title') ?>
<title>Konfigurasi Perizinan Usaha &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <h1>Perizinan Usaha</h1>
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
<div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Konfigurasi Tampilan Perizinan Usaha</h4>
                  </div>
                  <div class="card-body">
                    <div id="accordion">
                    <div class="accordion" id="accordionExample">
            <?php 
            $titles = [
                1 => 'Surat Rekomendasi HAKI',
                2 => 'Pengurusan NIB',
                3 => 'Pengurusan NPWP',
                4 => 'Pengurusan P-IRT'
            ];
            foreach ($izin_usaha as $key => $izin): 
                if ($izin['id_izin'] >= 1 && $izin['id_izin'] <= 4): ?>
                    <div class="card">
                        <div class="card-header" id="heading<?= $izin['id_izin'] ?>">
                            <h2 class="mb-0">
                                <button class="btn btn-primary <?= $key != 0 ? 'collapsed' : '' ?>" role="button" data-toggle="collapse" data-target="#collapse<?= $izin['id_izin'] ?>" aria-expanded="<?= $key == 0 ? 'true' : 'false' ?>" aria-controls="collapse<?= $izin['id_izin'] ?>">
                                    <?= $titles[$izin['id_izin']] ?>
                                </button>
                            </h2>
                        </div>

                        <div id="collapse<?= $izin['id_izin'] ?>" class="collapse <?= $key == 0 ? 'show' : '' ?>" aria-labelledby="heading<?= $izin['id_izin'] ?>" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>1. <?= $izin['info_1'] ?></p>
                                <p>2. <?= $izin['info_2'] ?></p>
                                <p>3. <?= $izin['info_3'] ?></p>
                                <p>4. <?= $izin['info_4'] ?></p>
                                <p>5. <?= $izin['info_5'] ?></p>
                                <p>6. <?= $izin['info_6'] ?></p>
                                <p>7. <?= $izin['info_7'] ?></p>
                                <p>8. <?= $izin['info_8'] ?></p>
                                <p>9. <?= $izin['info_9'] ?></p>
                                <p>10. <?= $izin['info_10'] ?></p>
                                <a href="<?= site_url('adminperizinan/edit/' . $izin['id_izin']) ?>" class="btn btn-warning">Edit</a>
                            </div>
                        </div>
                    </div>
                <?php endif; 
            endforeach; ?>
        </div>  
          </div>
            </div>
                </div>
              </div>  
     </section>
<?= $this->endSection() ?>

