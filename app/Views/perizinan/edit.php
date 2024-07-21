<?= $this->extend('layout/default') ?>

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
                <form action="<?=site_url('perizinan/edit'.$izin_usaha->id_izin)?>" method="post" autocomplete="off">
                <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label>HAKI</label>
                        <input type="text" name="haki" value="<?=$izin_usaha->haki?>" class="form-control" required>
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