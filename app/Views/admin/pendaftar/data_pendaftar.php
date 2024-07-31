<?= $this->extend('admin/layout/default') ?>

<?= $this->section('title') ?>
<title>Pendaftar Pelatihan Dinas &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <h1>Berkas Pendaftar</h1>
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
                <h4>Data Pendaftar Pelatihan UMKM</h4>
              </div>
                  <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Peserta</th>
                            <th>KTP</th>
                            <th>KK</th>
                            <th>NIB</th>
                            <th>NPWP</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no  = 1;
                        foreach ($pendaftaran as $row) {
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $row['nama_lengkap'] ?></td>
                                <td><a href="<?= site_url('uploads/berkas/' . $row['file_ktp']) ?>" download><?= $row['file_ktp'] ?></a></td>
                                <td><a href="<?= site_url('uploads/berkas/' . $row['file_kk']) ?>" download><?= $row['file_kk'] ?></a></td>
                                <td><a href="<?= site_url('uploads/berkas/' . $row['file_nib']) ?>" download><?= $row['file_nib'] ?></a></td>
                                <td><a href="<?= site_url('uploads/berkas/' . $row['file_npwp']) ?>" download><?= $row['file_npwp'] ?></a></td>
                                <td class="text-center" style="width:10%">
                                <form action="<?= site_url('adminpendaftaran/destroy/' . $row['id_daftar']) ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus Data?')">
                                <?= csrf_field() ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger btn-sm">
                                <i class="fas fa-trash"></i>
                                </button>
                                </form>
                                </td>
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