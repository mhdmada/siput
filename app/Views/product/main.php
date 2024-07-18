<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Produk UMKM &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <h1>Produk UMKM Anda</h1>
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

        <div class="card">
              <div class="card-header">
                <h4>Info</h4>
              </div>
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead class="active">
                        <tbody>
                      <tr>
                        <th>No</th>
                        <th>Foto Produk</th>
                        <th>Deskripsi</th>
                      </tr>
                      </thead>
                      <?php 
                        $page = isset($_GET['page']) ? $_GET['page'] : 1;
                        $no = 1 + (5 * ($page - 1));
                        foreach ($products as $key => $value) :?>
                        <tr>
                          <td><?=$no++?></td>
                          <td><img src="<?=site_url('uploads/' . $value['path']); ?> "class="img-top" style="height: 150px; width:40%; cover:fit"></td>
                          <td><?=$value['caption']?></td>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                    <?= $pager->links('default', 'pagination') ?>
                  </div>
                  <div class="card-footer">
                  <div class="buttons">
                    <a href="<?=site_url('product/add'); ?>" class="btn btn-primary">
                        Daftar sekarang juga
                    </a>
                    </div>
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