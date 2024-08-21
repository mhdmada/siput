<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Informasi Pelatihan &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <h1>Informasi Pelatihan</h1>
        <!-- <div class="section-header-button">
          <a href="<?=site_url('pelatihan/add')?>" class="btn btn-primary">Tambah Data</a>
        </div> -->
        </div>

<?php if(session()->getFlashData('success')) : ?>
  <div class="alert alert-success alert-dismissible show fade">
    <div class="alert-body">
      <button class="close" data-dismiss="alert">x</button>
      <b>Success !</b>
      <?=session()->getFlashData('success')?>
    </div>
  </div> 
<?php endif; ?>
<?php if(session()->getFlashData('error')) : ?>
  <div class="alert alert-danger alert-dismissible show fade">
    <div class="alert-body">
      <button class="close" data-dismiss="alert">x</button>
      <b>Error !</b>
      <?=session()->getFlashData('error')?>
    </div>
  </div> 
<?php endif; ?>

<div class="section-body">
        <div class="card">
        <div class="card-header">
            <h4>Daftar Pelatihan</h4>
          </div>
          <div class="card-header">
            <form action="" method="get" autocomplete="off">
              <div class="float-left">
                <input type="text" name="keyword" value="<?= isset($keyword) ? $keyword : '' ?>" class="form-control" style="width:155pt;" placeholder="Cari Data">
              </div>
              <div class="float-right ml-2">
                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
              </div>
            </form>
          </div>
                 <div class="card-body table-responsive">
                 <?php if($noResults): ?>
                  <h6>Tidak ada hasil.</h6>
                 <?php else: ?>
                      <table class="table table-bordered">
                        <tbody>
                          <thead class="active">
                          <tr>
                          <th>NO</th>
                          <th>NAMA PELATIHAN</th>
                          <th>JADWAL PELATIHAN</th>
                          <th>LOKASI PELATIHAN</th>
                          <th>LINK PENDAFTARAN</th>
                          <th>DESKRIPSI PELATIHAN</th>
                        </tr>
                        </thead>
                        <?php 
                        $page = isset($_GET['page']) ? $_GET['page'] : 1;
                        $no = 1 + (5 * ($page - 1));
                        foreach ($pelatihan as $key => $value) :?>
                        <tr>
                          <td><?=$no++?></td>
                          <td><?=$value['nama_pelatihan']?></td>
                          <td><?=date('d/m/Y', strtotime($value['jadwal_pelatihan']))?></td>
                          <td><?=$value['lokasi_pelatihan']?></td>
                          <td><a href=link><?=$value['link_pendaftaran']?></a></td>
                          <td><?=$value['deskripsi_pelatihan']?></td>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                    <?php if ($pager->getPageCount() > 1): ?>
                      <?= $pager->links('default', 'pagination') ?>
                    <?php endif; ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
     </section>
<?= $this->endSection() ?>