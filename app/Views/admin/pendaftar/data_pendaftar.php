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
              <div class="card-header">
                <h4>Data Pendaftar Pelatihan UMKM</h4>
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
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Peserta</th>
                            <th>KTP</th>
                            <th>KK</th>
                            <th>NIB</th>
                            <th>NPWP</th>
                            <th>Kode Pendaftaran</th>
                            <th>Waktu Daftar</th>
                            <th>Status</th>
                            <th>Opsi</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $page = isset($_GET['page']) ? $_GET['page'] : 1;
                        $no = 1 + (10 * ($page - 1));
                        foreach ($pendaftaran as $row) {
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $row['nama_lengkap'] ?></td>
                                <td><a href="<?= site_url('uploads/berkas/' . $row['file_ktp']) ?>" download><?= $row['file_ktp'] ?></a></td>
                                <td><a href="<?= site_url('uploads/berkas/' . $row['file_kk']) ?>" download><?= $row['file_kk'] ?></a></td>
                                <td><a href="<?= site_url('uploads/berkas/' . $row['file_nib']) ?>" download><?= $row['file_nib'] ?></a></td>
                                <td><a href="<?= site_url('uploads/berkas/' . $row['file_npwp']) ?>" download><?= $row['file_npwp'] ?></a></td>
                                <td><?= $row['kode_daftar'] ?></td>
                                <td><?=date('d/m/Y', strtotime($row['created_at']))?></td>
                                <td><?= $row['status'] ?></td>
                                <td class="text-center" style="width:20%">
                                <form action="<?= site_url('adminpendaftaran/approve/' . $row['id_daftar']) ?>" method="post" class="d-inline">
                                <?= csrf_field() ?>
                                <button class="btn btn-success btn-sm">Approve</button>
                                </form>
                                <form action="<?= site_url('adminpendaftaran/reject/' . $row['id_daftar']) ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin tolak Data?')">
                                <?= csrf_field() ?>
                                <button class="btn btn-danger btn-sm">Tolak</button>
                                </form>
                                </td>
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