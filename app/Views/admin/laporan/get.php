<?= $this->extend('admin/layout/default') ?>

<?= $this->section('title') ?>
<title>Data Laporan UMKM &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <h1>Data Laporan UMKM</h1>
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
                <form action="<?=site_url('admin/laporan/export')?>" method="get">
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
                          <thead class="thead-active">
                          <tr>
                          <th>No</th>
                          <th>NIK</th>
                          <th>Nama</th>
                          <th>Nama Usaha</th>
                          <th>Alamat</th>
                          <th>Kelurahan</th>
                          <th>Kecamatan</th>
                          <th>Alamat Usaha</th>
                          <th>Bidang Usaha</th>
                          <th>NIB</th>
                          <th>NPWP</th>
                          <th>Omzet Biaya</th>
                          <th>Jumlah Tenaga Kerja</th>
                          <th>No.Hp/Wa</th>
                        </tr>
                        </thead>
                        <?php 
                        $page = isset($_GET['page']) ? $_GET['page'] : 1;
                        $no = 1 + (5 * ($page - 1));
                        foreach ($umkm as $key => $value) :?>
                        <tr>
                          <td><?=$no++?></td>
                          <td><?=$value['nik']?></td>
                          <td><?=$value['nama']?></td>
                          <td><?=$value['nama_usaha']?></td>
                          <td><?=$value['alamat']?></td>
                          <td><?=$value['kelurahan']?></td>
                          <td><?=$value['kecamatan']?></td>
                          <td><?=$value['alamat_usaha']?></td>
                          <td><?=$value['bidang_usaha']?></td>
                          <td><?=$value['nib']?></td>
                          <td><?=$value['npwp']?></td>
                          <td><?=$value['omzet_biaya']?></td>
                          <td><?=$value['jumlah_tenaga_kerja']?></td>
                          <td><?=$value['no_hp']?></td>
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