<?= $this->extend('admin/layout/default') ?>

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
          <a href="<?=site_url('admin/product')?>" class="btn"><i class= "fas fa-arrow-left"></i></a>
        </div>
        <h1>Daftarkan Produk Anda</h1>
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
                <?= form_open_multipart('adminproduct/store'); ?>
                <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="image">Gambar Produk</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama_product">Nama Produk</label>
                        <input type="text" name="nama_product" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama_usaha">Nama Usaha</label>
                        <input type="text" name="nama_usaha" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="harga_product">Harga Produk</label>
                        <input type="text" name="harga_product" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="alamat_usaha">Alamat Toko</label>
                        <input type="text" name="alamat_usaha" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="no_hp">Kontak</label>
                        <input type="text" name="no_hp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="caption">Caption</label>
                        <textarea name="caption" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-sm">Upload</button>
                    </div>
                    <?= form_close(); ?>
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