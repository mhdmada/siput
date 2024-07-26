<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Pelayanan Pelatihan &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <h1>Persyaratan Pendaftaran Pelatihan UMKM Dinas Tenaga Kerja, Koperasi dan UKM Kota Jambi</h1>
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
                    <h4>Persyaratan</h4>
                  </div>
                  <div class="card-body">
                    <div id="accordion">
                      <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-1" aria-expanded="active">
                          <h4>Surat Rekomendasi HAKI</h4>
                        </div>
                        <div class="accordion-body collapse show" id="panel-body-1" data-parent="#accordion">
                          <p class="mb-0">
                          1. Fotocopy KTP yang masih berlaku (2 lembar).
                          <br>
                          2. Fotocopy KK (2 lembar).
                          <br>
                          3. Surat Nomor Izin Berusaha (NIB) / surat keterangan dari Desa domisili bahwa memiliki usaha.
                          <br>
                          4. Pas Foto 4 x 6 (2 lembar).
                          <br>
                          5. Materai 10000.
                          </p>
                        </div>
                      </div>
                      <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-2" aria-expanded="true">
                          <h4>Panel 2</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-2" data-parent="#accordion">
                          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                      </div>
                      <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-3" aria-expanded="true">
                          <h4>Panel 3</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-3" data-parent="#accordion">
                          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                      </div>
                    </div>
                  </div>
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