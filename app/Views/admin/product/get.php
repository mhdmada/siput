<?= $this->extend('admin/layout/default') ?>

<?= $this->section('title') ?>
<title>Produk UMKM &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <h1>Data Produk UMKM</h1>
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
                <h4>Daftar Info Produk</h4>
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
                      <thead class="active">
                        <tbody>
                      <tr>
                        <th>No</th>
                        <th>Foto Produk</th>
                        <th>Nama Produk</th>
                        <th>Nama Toko</th>
                        <th>Harga Produk</th>
                        <th>Alamat Toko</th>
                        <th>Kontak</th>
                        <th>Deskripsi Produk</th>
                        <th>Opsi</th>
                      </tr>
                      </thead>
                      <?php 
                        $page = isset($_GET['page']) ? $_GET['page'] : 1;
                        $no = 1 + (5 * ($page - 1));
                        foreach ($products as $key => $value) :?>
                        <tr>
                          <td><?=$no++?></td>
                          <td><img src="<?=site_url('uploads/' . $value['path']); ?>" class="img-picture mt-2" style="height: 100px;"></td>
                          <td><?=$value['nama_product']?></td>
                          <td><?=$value['nama_usaha']?></td>
                          <td><?=$value['harga_product']?></td>
                          <td><?=$value['alamat_usaha']?></td>
                          <td><?=$value['no_hp']?></td>
                          <td><?=$value['caption']?></td>
                          <td class ="text-center" style="width:10%">
                          <a href="<?=site_url('admin/product/edit/'.$value['id_product'])?>" class="btn btn-warning btn-sm"><i class = "fas fa-pencil-alt"></i></a>
                            <form action="<?=site_url('admin/product/'.$value['id_product'])?>" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus Data?')">
                            <?= csrf_field() ?>
                              <input type="hidden" name="_method" value="DELETE">
                              <button class="btn btn-danger btn-sm">
                                <i class = "fas fa-trash"></i>
                              </button>
                            </form>
                          </td>
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
                  <div class="card-footer">
                  <div class="buttons">
                    <a href="<?=site_url('admin/product/add'); ?>" class="btn btn-primary">
                        Tambah Data Produk
                    </a>
                    </div>
                  </div>
                  </div>  
                </div>
              </div>
            </div>
          </div>
      </div>
     </section>
<?= $this->endSection() ?>