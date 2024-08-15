<?= $this->extend('admin/layout/default') ?>

<?= $this->section('title') ?>
<title>Edit Konten &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <div class="section-header-back">
          <a href="<?=site_url('admin/konten')?>" class="btn"><i class= "fas fa-arrow-left"></i></a>
        </div>
        <h1>Edit Konten</h1>
        </div>

<div class="section-body">
        <div class="card">

        <div class="card-header">
            <h4>Edit Konten</h4>
          </div>
                 <div class="card-body col-md-6">
                 <form action="<?= site_url('admin/konten/update/' . $konten['id_konten']) ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                <div class="form-group">
                    <label for="judul_konten">Judul Konten</label>
                    <input type="text" class="form-control" id="judul_konten" name="judul_konten" value="<?= $konten['judul_konten'] ?>">
                </div>
                <div class="form-group">
                    <label for="image">Foto Artikel</label>
                    <input type="file" class="form-control" id="image" name="image">
                    <input type="hidden" name="old_image" value="<?= $konten['gambar_konten'] ?>">
                    <br>
                    <p>Foto Sebelumnya :</p>
                    <img src="<?= site_url('uploads/content/' . $konten['gambar_konten']) ?>" class="img-picture mt-2" style="height: 300px;">
                </div>
                <div class="container-fluid">
                    <div class="form-group">
                    <label for="isi_konten">Isi Artikel</label>
                    <textarea class="summernote" id="isi_konten" name="isi_konten" cols="50" rows="10" style="width: 800px; height: 400px;"><?= ($konten['isi_konten']) ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" name="author" value="<?= $konten['author'] ?>">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            </div>
          </div>
      </div>
     </section>
<?= $this->endSection() ?>