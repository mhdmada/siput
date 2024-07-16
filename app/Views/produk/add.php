<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Produk &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

    <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css"> 
    <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/selectric/public/selectric.css">

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <div class="section-header-back">
          <a href="<?=site_url('produk')?>" class="btn"><i class= "fas fa-arrow-left"></i></a>
        </div>
        <h1>Masukkan Produk Anda</h1>
        </div>

<div class="section-body">
        <div class="card">

        <div class="card-header">
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
                <form action="<?=site_url('produk')?>" method="post" autocomplete="off">
                <?= csrf_field() ?>
                    <div class="form-group">
                        <label>Nama Usaha</label>
                        <input type="text" name="nama_usaha" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Foto Produk</label>
                        <input type="file" name="foto_produk" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Lokasi Usaha</label>
                        <input type="text" name="lokasi_usaha" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Pemilik</label>
                        <input type="text" name="nama_pemilik" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Kontak</label>
                        <input type="number" name="no_hp" class="form-control" required>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i>Save</button>
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