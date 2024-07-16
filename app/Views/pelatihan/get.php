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
                 <div class="card-body table-responsive">
                      <table class="table table-bordered">
                        <tbody>
                          <thead class="active">
                          <tr>
                          <th>No</th>
                          <th>Nama Pelatihan</th>
                          <th>Jadwal Pelatihan</th>
                          <th>Lokasi Pelatihan</th>
                          <th>Link Pendaftaran</th>
                          <th>Deskripsi Pelatihan</th>
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
                    <?= $pager->links('default', 'pagination') ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
     </section>
<?= $this->endSection() ?>