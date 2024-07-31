<?= $this->extend('admin/layout/default') ?>

<?= $this->section('title') ?>
<title>Konfigurasi Persyaratan Pendaftaran Pelatihan UMKM &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <h1>Edit Info Syarat Pelatihan Dinas</h1>
        </div>

<div class="section-body">
<div class="container">
    <div class="card">
        <?php if(session()->getFlashdata('error')): ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>
        <?php if(session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>
        <div class="card-body">
        <form action="<?= site_url('admin/syarat_pelatihan/update/' . $syarat_pelatihan['id_syarat']) ?>" method="post">
        <?=csrf_field() ?>
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="<?= $syarat_pelatihan['judul'] ?>">
        </div>
        <div class="form-group">
            <label for="info_1">Info 1</label>
            <input type="text" class="form-control" id="info_1" name="info_1" value="<?= $syarat_pelatihan['info_1'] ?>">
        </div>
        <div class="form-group">
            <label for="info_2">Info 2</label>
            <input type="text" class="form-control" id="info_2" name="info_2" value="<?= $syarat_pelatihan['info_2'] ?>">
        </div>
        <div class="form-group">
            <label for="info_3">Info 3</label>
            <input type="text" class="form-control" id="info_3" name="info_3" value="<?= $syarat_pelatihan['info_3'] ?>">
        </div>
        <div class="form-group">
            <label for="info_4">Info 4</label>
            <input type="text" class="form-control" id="info_4" name="info_4" value="<?= $syarat_pelatihan['info_4'] ?>">
        </div>
        <div class="form-group">
            <label for="info_5">Info 5</label>
            <input type="text" class="form-control" id="info_5" name="info_5" value="<?= $syarat_pelatihan['info_5'] ?>">
        </div>
        <div class="form-group">
            <label for="lokasi">Lokasi</label>
            <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= $syarat_pelatihan['lokasi'] ?>">
        </div>
        <div class="form-group">
            <label for="jadwal">Jadwal</label>
            <input type="text" class="form-control" id="jadwal" name="jadwal" value="<?= $syarat_pelatihan['jadwal'] ?>">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    </div>
</div>
</div>
</section>
<?= $this->endSection() ?>

