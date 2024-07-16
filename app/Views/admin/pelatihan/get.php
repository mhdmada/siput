<?= $this->extend('admin/layout/default') ?>

<?= $this->section('title') ?>
<title>Data Pelatihan UMKM &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <h1>Data Pelatihan UMKM</h1>
        <div class="section-header-button">
          <a href="<?=site_url('admin/pelatihan/add')?>" class="btn btn-primary">Tambah Data</a>
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
            <h4>Data Pelatihan UMKM</h4>
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
                          <th>Action</th>
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
                          <td class ="text-center" style="width:10%">
                          <a href="<?=site_url('admin/pelatihan/edit/'.$value['id_pelatihan'])?>" class="btn btn-warning btn-sm"><i class = "fas fa-pencil-alt"></i></a>
                            <form action="<?=site_url('admin/pelatihan/'.$value['id_pelatihan'])?>" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus Data?')">
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
                    <?= $pager->links('default', 'pagination') ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
     </section>
<?= $this->endSection() ?>