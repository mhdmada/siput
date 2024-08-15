<?= $this->extend('admin/layout/default') ?>

<?= $this->section('title') ?>
<title>Edit Artikel &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <div class="section-header-back">
          <a href="<?=site_url('admin/artikel')?>" class="btn"><i class= "fas fa-arrow-left"></i></a>
        </div>
        <h1>Edit Artikel</h1>
        </div>

<div class="section-body">
        <div class="card">

        <div class="card-header">
            <h4>Edit Artikel</h4>
          </div>
                 <div class="card-body col-md-6">
                 <form action="<?= site_url('admin/artikel/update/' . $artikel['id_artikel']) ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                <div class="form-group">
                    <label for="judul_artikel">Judul Artikel</label>
                    <input type="text" class="form-control" id="judul_artikel" name="judul_artikel" value="<?= $artikel['judul_artikel'] ?>">
                </div>
                <div class="form-group">
                    <label for="image">Foto Artikel</label>
                    <input type="file" class="form-control" id="image" name="image">
                    <input type="hidden" name="old_image" value="<?= $artikel['foto_artikel'] ?>">
                    <br>
                    <p>Foto Sebelumnya :</p>
                    <img src="<?= site_url('uploads/news/' . $artikel['foto_artikel']) ?>" class="img-picture mt-2" style="height: 300px;">
                </div>
                <div class="form-group">
                    <label for="isi_artikel">Isi Artikel</label>
                    <textarea class="summernote" id="isi_artikel" name="isi_artikel" cols="50" rows="10" style="width: 800px; height: 400px;"><?= ($artikel['isi_artikel']) ?></textarea>
                    </div>
                <div class="form-group">
                    <label for="tgl_artikel">Tanggal dibuat</label>
                    <input type="date" class="form-control" id="tgl_artikel" name="tgl_artikel" value="<?= $artikel['tgl_artikel'] ?>">
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" name="author" value="<?= $artikel['author'] ?>">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            </div>
          </div>
      </div>
     </section>
<?= $this->endSection() ?>