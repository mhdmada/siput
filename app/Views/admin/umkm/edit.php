<?= $this->extend('admin/layout/default') ?>

<?= $this->section('title') ?>
<title>Update Data UMKM &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <div class="section-header-back">
          <a href="<?=site_url('admin/umkm')?>" class="btn"><i class= "fas fa-arrow-left"></i></a>
        </div>
        <h1>Update Data UMKM</h1>
        </div>

<div class="section-body">
        <div class="card">

        <div class="card-header">
            <h4>Edit Data UMKM</h4>
          </div>
                 <div class="card-body col-md-6">
                <form action="<?=site_url('admin/umkm/'.$umkm->id_umkm)?>" method="post" autocomplete="off">
                <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="text" name="nik" value="<?=$umkm->nik?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>NAMA LENGKAP</label>
                        <input type="text" name="nama" value="<?=$umkm->nama?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>ALAMAT</label>
                        <input type="text" name="alamat" value="<?=$umkm->alamat?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>KELURAHAN</label>
                        <input type="text" name="kelurahan" value="<?=$umkm->kelurahan?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>KECAMATAN</label>
                        <input type="text" name="kecamatan" value="<?=$umkm->kecamatan?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>NAMA USAHA</label>
                        <input type="text" name="nama_usaha" value="<?=$umkm->nama_usaha?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>ALAMAT USAHA</label>
                        <input type="text" name="alamat_usaha" value="<?=$umkm->alamat_usaha?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>BIDANG USAHA</label>
                        <select class="form-control selectric" name="bidang_usaha" value="<?=$umkm->bidang_usaha?>"  required>
                            <option></option>
                            <option>Kuliner</option>
                            <option>Fashion</option>
                            <option>Dagang</option>
                            <option>Industri</option>
                            <option>Jasa</option>
                            <option>Pertanian</option>
                            <option>Peternakan</option>
                            <option>Lainnya</option>
                        </select>
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
                        <label>OMZET</label>
                        <select class="form-control selectric" name="omzet_biaya" value="<?=$umkm->omzet_biaya?>" required>
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
                        <label>ASET</label>
                        <input type="text" name="aset" value="<?=$umkm->aset?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>JUMLAH TENAGA KERJA</label>
                        <input type="text" name="jumlah_tenaga_kerja" value="<?=$umkm->jumlah_tenaga_kerja?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>NO HP/WA</label>
                        <input type="text" inputmode="numeric" name="no_hp" value="<?=$umkm->no_hp?>" class="form-control" required>
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