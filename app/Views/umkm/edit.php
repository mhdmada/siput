<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Update Data UMKM &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <div class="section-header-back">
          <a href="<?=site_url('umkm')?>" class="btn"><i class= "fas fa-arrow-left"></i></a>
        </div>
        <h1>Update Data UMKM</h1>
        </div>

<div class="section-body">
        <div class="card">

        <div class="card-header">
            <h4>Edit Data UMKM</h4>
          </div>
                 <div class="card-body col-md-6">
                <form action="<?=site_url('umkm/'.$umkm->id_umkm)?>" method="post" autocomplete="off">
                <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="text" name="nik" value="<?=$umkm->nik?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" value="<?=$umkm->nama?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Usaha</label>
                        <input type="text" name="nama_usaha" value="<?=$umkm->nama_usaha?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" value="<?=$umkm->alamat?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Kelurahan</label>
                        <input type="text" name="kelurahan" value="<?=$umkm->kelurahan?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Kecamatan</label>
                        <input type="text" name="kecamatan" value="<?=$umkm->kecamatan?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat Usaha</label>
                        <input type="text" name="alamat_usaha" value="<?=$umkm->alamat_usaha?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Bidang Usaha</label>
                        <input type="text" name="bidang_usaha" value="<?=$umkm->bidang_usaha?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>NIB</label>
                        <input type="text" name="nib" value="<?=$umkm->nib?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>NPWP</label>
                        <input type="text" name="npwp" value="<?=$umkm->npwp?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Omzet Biaya</label>
                        <input type="text" name="omzet_biaya" value="<?=$umkm->omzet_biaya?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Tenaga Kerja</label>
                        <input type="text" name="jumlah_tenaga_kerja" value="<?=$umkm->jumlah_tenaga_kerja?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>No. Hp/wa</label>
                        <input type="text" name="no_hp" value="<?=$umkm->no_hp?>" class="form-control" required>
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