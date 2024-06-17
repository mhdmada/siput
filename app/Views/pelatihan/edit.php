<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Update Data Pelatihan UMKM &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <div class="section-header-back">
          <a href="<?=site_url('pelatihan')?>" class="btn"><i class= "fas fa-arrow-left"></i></a>
        </div>
        <h1>Update Data Pelatihan UMKM</h1>
        </div>

<div class="section-body">
        <div class="card">

        <div class="card-header">
            <h4>Edit Data Pelatihan UMKM</h4>
          </div>
                 <div class="card-body col-md-6">
                <form action="<?=site_url('pelatihan/'.$pelatihan->id_pelatihan)?>" method="post" autocomplete="off">
                <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label>Nama Pelatihan</label>
                        <input type="text" name="nama_pelatihan" value="<?=$pelatihan->nama_pelatihan?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Jadwal Pelatihan</label>
                        <input type="date" name="jadwal_pelatihan" value="<?=$pelatihan->jadwal_pelatihan?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Lokasi Pelatihan</label>
                        <input type="text" name="lokasi_pelatihan" value="<?=$pelatihan->lokasi_pelatihan?>" class="form-control" required>
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