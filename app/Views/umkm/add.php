<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Pendaftaran Usaha &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

    <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css"> 
    <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/selectric/public/selectric.css">

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <div class="section-header-back">
          <a href="<?=site_url('umkm')?>" class="btn"><i class= "fas fa-arrow-left"></i></a>
        </div>
        <h1>Pendaftaran Usaha</h1>
        </div>

<div class="section-body">
        <div class="card">

        <div class="card-header">
            <h4>Daftar UMKM</h4>
          </div>
          <!-- show alert validation -->
          <?php if(isset($validation)): ?>
                <div class="form-group col-12 col-md-12">
                    <div class="alert alert-danger" role="alert">
                      <?php echo \Config\Services::validation()->listErrors() ?>
                    </div>
                </div>
              <?php endif; ?>
                <div class="card-body col-md-6">
                <form action="<?=site_url('umkm')?>" method="post" autocomplete="off">
                <?= csrf_field() ?>
                    <div class="form-group">
                        <label>NIK *</label>
                        <input type="text" name="nik" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>NAMA SESUAI KTP *</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>ALAMAT SESUAI KTP *</label>
                        <input type="text" name="alamat" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>KELURAHAN SESUAI KTP *</label>
                        <input type="text" name="kelurahan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>KECAMATAN SESUAI KTP *</label>
                        <input type="text" name="kecamatan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>NAMA USAHA *</label>
                        <input type="text" name="nama_usaha" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>ALAMAT USAHA *</label>
                        <input type="text" name="alamat_usaha"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>BIDANG USAHA *</label>
                        <select class="form-control selectric" name="bidang_usaha">
                            <option></option>
                            <option>Kuliner</option>
                            <option>Fashion</option>
                            <option>Dagang</option>
                            <option>Industri</option>
                            <option>Jasa</option>
                            <option>Pertanian</option>
                            <option>Peternakan</option>
                            <option>Kriya</option>
                            <option>Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>NIB *</label>
                        <input type="text" name="nib"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>NPWP *</label>
                        <input type="text" name="npwp"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>OMZET PENDAPATAN *</label>
                        <select class="form-control selectric" name="omzet_biaya">
                          <option></option>
                          <option>Rp.5.000.000 - Rp.10.000.000</option>
                          <option>Rp.15.000.000 - Rp.20.000.000</option>
                          <option>Rp.25.000.000 - Rp.30.000.000</option>
                          <option>Rp.35.000.000 - Rp.40.000.000</option>
                          <option>Rp.45.000.000 - Rp.50.000.000</option>
                          <option>Rp.55.000.000 - Rp.60.000.000</option>
                          <option>Rp.65.000.000 - Rp.70.000.000</option>
                          <option>Rp.75.000.000 - Rp.80.000.000</option>
                          <option>Rp.85.000.000 - Rp.90.000.000</option>
                          <option>Rp.95.000.000 - Rp.100.000.000</option>
                          <option>Rp.105.000.000 - Rp.110.000.000</option>
                          <option>Rp.115.000.000 - Rp.120.000.000</option>
                          <option>Rp.125.000.000 - Rp.130.000.000</option>
                          <option>Rp.135.000.000 - Rp.140.000.000</option>
                          <option>Rp.145.000.000 - Rp.150.000.000</option>
                          <option>Rp.155.000.000 - Rp.160.000.000</option>
                          <option>Rp.165.000.000 - Rp.170.000.000</option>
                          <option>Rp.175.000.000 - Rp.180.000.000</option>
                          <option>Rp.185.000.000 - Rp.190.000.000</option>
                          <option>Rp.195.000.000 - Rp.200.000.000</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>ASET *</label>
                        <input type="text" name="aset" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>JUMLAH TENAGA KERJA *</label>
                        <input type="text" name="jumlah_tenaga_kerja"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>NO HP/WA *</label>
                        <input type="text" name="no_hp" class="form-control" required>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i>Daftar</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form> 
            </div>
          </div>
      </div>

    <script src="<?=base_url()?>/template/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?=base_url()?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>/template/assets/js/scripts.js"></script>
    <script src="<?=base_url()?>/template/node_modules/select2/dist/js/select2.full.min.js"></script>
    <script src="<?=base_url()?>/template/node_modules/selectric/public/jquery.selectric.min.js"></script>
    <script src="<?=base_url()?>/template/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>

     </section>
<?= $this->endSection() ?>