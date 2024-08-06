<?= $this->extend('admin/layout/default') ?>

<?= $this->section('title') ?>
<title>Artikel &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <h1>Setting Artikel</h1>
        <div class="section-header-button">
          <a href="<?=site_url('admin/artikel/add')?>" class="btn btn-primary">Tambah Berita</a>
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
            <h4>Artikel Berita</h4>
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
                          <th>No</th>
                          <th>Judul Artikel</th>
                          <th>Foto artikel</th>
                          <th>Isi_Artikel</th>
                          <th>Tanggal dibuat</th>
                          <th>Author</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <?php 
                        $page = isset($_GET['page']) ? $_GET['page'] : 1;
                        $no = 1 + (5 * ($page - 1));
                        foreach ($artikel as $key => $value) :?>
                        <tr>
                          <td><?=$no++?></td>
                          <td><?=$value['judul_artikel']?></td>
                          <td><img src="<?=site_url('uploads/news/' . $value['foto_artikel']); ?>" class="img-picture mt-2" style="height: 100px;"></td>
                          <td><?=$value['isi_artikel']?></td>
                          <td><?=date('d/m/Y', strtotime($value['tgl_artikel']))?></td>
                          <td><?=$value['author']?></td>
                          <td class ="text-center" style="width:10%">
                          <a href="<?=site_url('admin/artikel/edit/'.$value['id_artikel'])?>" class="btn btn-warning btn-sm"><i class = "fas fa-pencil-alt"></i></a>
                          <form action="<?= site_url('adminartikel/destroy/' . $value['id_artikel']); ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                            <?= csrf_field() ?>
                          <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger btn-sm">
                              <i class="fas fa-trash"></i>
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