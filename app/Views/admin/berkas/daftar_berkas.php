<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Kirim Berkas &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <h1>Pengajuan Berkas</h1>
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
                <h4>List dokumen yang masuk</h4>
              </div>
                  <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Dokumen</th>
                            <th>Keterangan</th>
                            <th>Pengirim</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no  = 1;
                        foreach ($berkas as $row) {
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $row['berkas'] ?></td>
                                <td><?= $row['keterangan'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><a class="btn btn-info" href="<?=site_url('admin/berkas/download/'); ?><?= $row['id_berkas'] ?>">Unduh</a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                  </div>
                  <div class="card-footer">
                    <?= $pager->links('default', 'pagination') ?>
                  </div>  
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
     </section>
<?= $this->endSection() ?>