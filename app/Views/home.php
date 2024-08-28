<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Home &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
        <div class="section-header">
        <marquee scrollamount="10" direction="left"><h3>Selamat Datang di Sistem Informasi Pelayanan UMKM Terintegrasi Kota Jambi - Dinas Tenaga Kerja, Koperasi dan UKM Kota Jambi</h3></marquee>
        </div>

         <div class="section-body">
          <div class="row">
         <div class="col-12 mb-4">
                <div class="hero text-white hero-bg-image" data-background="<?=base_url()?>/template/assets/img/umkm.jpg">
                  <div class="hero-inner">
                    <h2>Daftarkan usaha anda secara online.</h2>
                    <p class="lead">Sekarang anda dapat mendaftarkan usaha anda dimana saja dan kapan saja di aplikasi SIPUTRI.</p>
                    <div class="mt-4">
                      <a href="<?= base_url('umkm/add') ?>" class="btn btn-outline-white btn-lg btn-icon icon-left">Daftar Sekarang</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 mb-4">
                <div class="hero text-white hero-bg-image" data-background="<?=base_url()?>/template/assets/img/conference.jpg">
                  <div class="hero-inner">
                    <h2>Daftar Pelatihan UMKM Dinas Tenaga Kerja, Koperasi dan UKM Kota Jambi.</h2>
                    <p class="lead">Anda dapat mendaftar pelatihan secara online melalui aplikasi SIPUTRI.</p>
                    <div class="mt-4">
                      <a href="<?= base_url('pelatihan_dinas') ?>" class="btn btn-outline-white btn-lg btn-icon icon-left">Daftar Sekarang</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
     </section>
<?= $this->endSection() ?>