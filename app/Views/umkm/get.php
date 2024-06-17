<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Data UMKM &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <h1>Data UMKM</h1>
        <div class="section-header-button">
          <a href="<?=site_url('umkm/add')?>" class="btn btn-primary">Tambah Data</a>
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
                 <div class="card-body table-responsive">
                      <table class="table table-striped table-md">
                        <tbody>
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
                          <th>Action</th>
                        </tr>
                        <?php foreach ($umkm as $key => $value) :?>
                        <tr>
                          <td><?=$key + 1?></td>
                          <td><?=$value->nik?></td>
                          <td><?=$value->nama?></td>
                          <td><?=$value->nama_usaha?></td>
                          <td><?=$value->alamat?></td>
                          <td><?=$value->kelurahan?></td>
                          <td><?=$value->kecamatan?></td>
                          <td><?=$value->alamat_usaha?></td>
                          <td><?=$value->bidang_usaha?></td>
                          <td><?=$value->nib?></td>
                          <td><?=$value->npwp?></td>
                          <td><?=$value->omzet_biaya?></td>
                          <td><?=$value->jumlah_tenaga_kerja?></td>
                          <td><?=$value->no_hp?></td>
                          <td class ="text-center" style="width:10%">
                            <a href="<?=site_url('umkm/edit/'.$value->id_umkm)?>" class="btn btn-warning btn-sm"><i class = "fas fa-pencil-alt"></i></a>
                            <form action="<?=site_url('umkm/'.$value->id_umkm)?>" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus Data?')">
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
                  </div>
                  <!-- <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
      </div>
     </section>
<?= $this->endSection() ?>