<?= $this->extend('admin/layout/default') ?>

<?= $this->section('title') ?>
<title>Laporan Rekapitulasi Pelatihan UMKM &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <h1>Laporan Rekap Pelatihan UMKM</h1>
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
        <div class="card-body">
            <form action="" method="get" autocomplete="off">
            <div class="float-left">
                    <input type="text" name="keyword" value="<?= isset($keyword) ? $keyword : '' ?>" class="form-control" style="width:155pt;" placeholder="Cari Data">
                </div>
                <div class="float-left ml-2">
                    <button type="submit" class="btn btn-info"><i class="fas fa-search"></i></button>
            </div>
            <div class="float-right ml-2">
                    <button type="submit" class="btn btn-dark">Sortir</button>
                </div> 
                <div class="float-right ml-2">
                    <select name="tahun" class="form-control">
                        <option value="">Pilih Tahun</option>
                        <?php for ($i = date('Y'); $i >= 2000; $i--): ?>
                            <option value="<?= $i ?>" <?= (isset($tahun) && $tahun == $i) ? 'selected' : '' ?>><?= $i ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
                <div class="float-right ml-2">
                    <select name="bulan" class="form-control">
                        <option value="">Pilih Bulan</option>
                        <?php for ($i = 1; $i <= 12; $i++): ?>
                            <option value="<?= $i ?>" <?= (isset($bulan) && $bulan == $i) ? 'selected' : '' ?>><?= date('F', mktime(0, 0, 0, $i, 1)) ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
            </form>
            <div class="float-right mr-2">
                <form action="<?=site_url('admin/rekap_laporan/export')?>" method="get">
                    <input type="hidden" name="keyword" value="<?= isset($keyword) ? $keyword : '' ?>">
                    <input type="hidden" name="bulan" value="<?= isset($bulan) ? $bulan : '' ?>">
                    <input type="hidden" name="tahun" value="<?= isset($tahun) ? $tahun : '' ?>">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-file-download"></i> Export Excel
                    </button>
                </form>
            </div>
            </div>
                 <div class="card-footer table-responsive">
                 <?php if($noResults): ?>
                  <h6>Tidak ada hasil.</h6>
                 <?php else: ?>
                      <table class="table table-bordered">
                        <tbody>
                        <thead class="active">
                          <tr>
                          <th>No</th>
                          <th>NAMA PELATIHAN</th>
                          <th>JADWAL PELATIHAN</th>
                          <th>LOKASI PELATIHAN</th>
                          <th>JUMLAH PESERTA</th>
                        </tr>
                        </thead>
                        <?php 
                        $page = isset($_GET['page']) ? $_GET['page'] : 1;
                        $no = 1 + (10 * ($page - 1));
                        foreach ($syarat_pelatihan as $key => $value) :?>
                        <tr>
                          <td><?=$no++?></td>
                          <td><?=$value['judul']?></td>
                          <td><?=date('d/m/Y', strtotime($value['jadwal']))?></td>
                          <td><?=$value['lokasi']?></td>
                          <td><?=$jumlah_peserta?></td>
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