<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Tambah Data Pelatihan UMKM &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <div class="section-header-back">
          <a href="<?=site_url('pelatihan')?>" class="btn"><i class= "fas fa-arrow-left"></i></a>
        </div>
        <h1>Tambah Data Pelatihan UMKM</h1>
        </div>

<div class="section-body">
        <div class="card">

        <div class="card-header">
            <h4>Tambah Data Pelatihan UMKM</h4>
          </div>
                 <div class="card-body col-md-6">
                <form action="<?=site_url('pelatihan')?>" method="post" autocomplete="off">
                <?= csrf_field() ?>
                    <div class="form-group">
                        <label>Nama Pelatihan *</label>
                        <input type="text" name="nama_pelatihan" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Jadwal Pelatihan *</label>
                        <input type="date" name="jadwal_pelatihan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Lokasi Pelatihan *</label>
                        <input type="text" name="lokasi_pelatihan" class="form-control" required>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i>Save</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form> 
            </div>
          </div>
      </div>
     </section>
<?= $this->endSection() ?>