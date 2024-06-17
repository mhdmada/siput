<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Update Penjualan Produk UMKM &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <div class="section-header-back">
          <a href="<?=site_url('penjualan')?>" class="btn"><i class= "fas fa-arrow-left"></i></a>
        </div>
        <h1>Update Penjualan Produk UMKM</h1>
        </div>

<div class="section-body">
        <div class="card">

        <div class="card-header">
            <h4>Edit Penjualan Produk UMKM</h4>
          </div>
                 <div class="card-body col-md-6">
                <form action="<?=site_url('penjualan/'.$penjualan->id_penjualan)?>" method="post" autocomplete="off">
                <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label>Nama usaha</label>
                        <input type="text" name="nama_usaha" value="<?=$penjualan->nama_usaha?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Foto Produk</label>
                        <input type="file" name="foto_produk" value="<?=$penjualan->foto_produk?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Lokasi Usaha</label>
                        <input type="text" name="lokasi_usaha" value="<?=$penjualan->lokasi_usaha?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Pemilik</label>
                        <input type="text" name="nama_pemilik" value="<?=$penjualan->nama_pemilik?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>No. HP</label>
                        <input type="text" name="no_hp" value="<?=$penjualan->no_hp?>" class="form-control" required>
                    </div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i>Save</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form> 
            </div>
          </div>
      </div>
     </section>
<?= $this->endSection() ?>