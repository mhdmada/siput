<?= $this->extend('admin/layout/default') ?>

<?= $this->section('title') ?>
<title>Admin &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
        <div class="section-header">
        <marquee scrollamount="10" direction="left"><h3>Selamat Datang Admin SIPUTRI (Sistem Informasi Pelayanan UMKM TeRIntegrasi Kota Jambi) - Dinas Tenaga Kerja, Koperasi dan UKM Kota Jambi</h3></marquee>
        </div>

         <div class="section-body">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Data UMKM</h4>
                  </div>
                  <div class="card-body">
                  <?= $totalUmkm ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Info Pelatihan UMKM</h4>
                  </div>
                  <div class="card-body">
                  <?= $totalPelatihan ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Data Produk UMKM</h4>
                  </div>
                  <div class="card-body">
                  <?= $totalProducts ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Pengguna</h4>
                  </div>
                  <div class="card-body">
                  <?= $totalUsers ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
     </section>
<?= $this->endSection() ?>