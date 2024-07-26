<?= $this->extend('admin/layout/default') ?>

<?= $this->section('title') ?>
<title>Update Data &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <div class="section-header-back">
          <a href="<?=site_url('admin/perizinan')?>" class="btn"><i class= "fas fa-arrow-left"></i></a>
        </div>
        <h1>Update Data UMKM</h1>
        </div>

<div class="section-body">
        <div class="card">

        <div class="card-header">
            <h4>Edit Data</h4>
          </div>
                 <div class="card-body col-md-6">    
                <form action="<?= site_url('adminperizinan/update') ?>" method="post">
                <?= csrf_field() ?>
                    <input type="hidden" name="id_izin" value="<?= $izin['id_izin'] ?>">
                    <div class="form-group">
                        <label for="info_1">Info 1</label>
                        <input type="text" class="form-control" id="info_1" name="info_1" value="<?= $izin['info_1'] ?>" required>
                    </div>
            
                    <div class="form-group">
                        <label for="info_2">Info 2</label>
                        <input type="text" class="form-control" id="info_2" name="info_2" value="<?= $izin['info_2'] ?>" required>
                    </div>
            
                    <div class="form-group">
                        <label for="info_3">Info 3</label>
                        <input type="text" class="form-control" id="info_3" name="info_3" value="<?= $izin['info_3'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="info_4">Info 4</label>
                        <input type="text" class="form-control" id="info_4" name="info_4" value="<?= $izin['info_4'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="info_5">Info 5</label>
                        <input type="text" class="form-control" id="info_5" name="info_5" value="<?= $izin['info_5'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="info_6">Info 6</label>
                        <input type="text" class="form-control" id="info_6" name="info_6" value="<?= $izin['info_6'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="info_7">Info 7</label>
                        <input type="text" class="form-control" id="info_7" name="info_7" value="<?= $izin['info_7'] ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="info_8">Info 8</label>
                        <input type="text" class="form-control" id="info_8" name="info_8" value="<?= $izin['info_8'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="info_9">Info 9</label>
                        <input type="text" class="form-control" id="info_9" name="info_9" value="<?= $izin['info_9'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="info_10">Info 10</label>
                        <input type="text" class="form-control" id="info_10" name="info_10" value="<?= $izin['info_10'] ?>" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="<?= site_url('admin/perizinan') ?>" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
          </div>
      </div>
     </section>
<?= $this->endSection() ?>