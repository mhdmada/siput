<?= $this->extend('admin/layout/default') ?>

<?= $this->section('title') ?>
<title>Produk &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <h1>Edit Data</h1>
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
                <h4>Info</h4>
              </div>
                  <div class="card-body">    
        <form action="<?= site_url('admin/product/update/' . $products['id_product']) ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div class="form-group">
            <label for="nama_product">Nama Produk</label>
            <input type="text" class="form-control" id="nama_product" name="nama_product" value="<?= $products['nama_product'] ?>">
        </div>
        <div class="form-group">
            <label for="nama_usaha">Nama Usaha</label>
            <input type="text" class="form-control" id="nama_usaha" name="nama_usaha" value="<?= $products['nama_usaha'] ?>">
        </div>
        <div class="form-group">
            <label for="harga_product">Harga Produk</label>
            <input type="text" class="form-control" id="harga_product" name="harga_product" value="<?= $products['harga_product'] ?>">
        </div>
        <div class="form-group">
            <label for="alamat_usaha">Alamat Usaha</label>
            <input type="text" class="form-control" id="alamat_usaha" name="alamat_usaha" value="<?= $products['alamat_usaha'] ?>">
        </div>
        <div class="form-group">
            <label for="no_hp">Nomor HP</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $products['no_hp'] ?>">
        </div>
        <div class="form-group">
            <label for="caption">Deskripsi Produk</label>
            <textarea class="form-control" id="caption" name="caption"><?= $products['caption'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="image">Foto Produk</label>
            <input type="file" class="form-control" id="image" name="image">
            <input type="hidden" name="old_image" value="<?= $products['path'] ?>">
            <img src="<?= site_url('uploads/' . $products['path']) ?>" class="img-picture mt-2" style="height: 100px;">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
                </div>
                  </div>
                  <div class="card-footer">
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