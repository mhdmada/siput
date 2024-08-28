<?= $this->extend('admin/layout/default') ?>

<?= $this->section('title') ?>
<title>Data UMKM &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <h1>Data UMKM</h1>
        <div class="section-header-button">
          <a href="<?=site_url('admin/umkm/add')?>" class="btn btn-primary">Tambah Data</a>
        </div>
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
            <h4>Data UMKM</h4>
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
                          <thead class="thead-active">
                          <tr>
                          <th>No</th>
                          <th>NIK</th>
                          <th>NAMA</th>
                          <th>ALAMAT</th>
                          <th>KELURAHAN</th>
                          <th>KECAMATAN</th>
                          <th>NAMA USAHA</th>
                          <th>ALAMAT USAHA</th>
                          <th>BIDANG USAHA</th>
                          <th>NIB</th>
                          <th>NPWP</th>
                          <th>OMZET</th>
                          <th>ASET</th>
                          <th>JUMLAH TENAGA KERJA</th>
                          <th>NO HP/WA</th>
                          <th>OPSI</th>
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
                          <td><?=$value['alamat']?></td>
                          <td><?=$value['kelurahan']?></td>
                          <td><?=$value['kecamatan']?></td>
                          <td><?=$value['nama_usaha']?></td>
                          <td><?=$value['alamat_usaha']?></td>
                          <td><?=$value['bidang_usaha']?></td>
                          <td><?=$value['nib']?></td>
                          <td><?=$value['npwp']?></td>
                          <td><?=$value['omzet_biaya']?></td>
                          <td><?=$value['aset']?></td>
                          <td><?=$value['jumlah_tenaga_kerja']?></td>
                          <td><?=$value['no_hp']?></td>
                          <td class ="text-center" style="width:10%">
                            <a href="<?=site_url('admin/umkm/edit/'.$value['id_umkm'])?>" class="btn btn-warning btn-sm"><i class = "fas fa-pencil-alt"></i></a>
                            <form action="<?=site_url('admin/umkm/'.$value['id_umkm'])?>" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus Data?')">
                            <?= csrf_field() ?>
                              <input type="hidden" name="_method" value="DELETE">
                              <button class="btn btn-danger btn-sm">
                                <i class = "fas fa-trash"></i>
                              </button>
                            </form> 
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