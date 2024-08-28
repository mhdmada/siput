<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Pendaftaran Pelatihan Dinas &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <h1>Daftar Pelatihan Dinas </h1>
        </div>

<div class="section-body">
<div class="card">
      <div class="card-header">
                    <p><h5>Catat Info Berikut.</h5></p>
                    </div>
                    <div class="card-body">
                    <p>Pelatihan akan dilaksanakan pada lokasi dan jadwal berikut : </p>
                    <?php foreach ($syarat_pelatihan as $key => $value): ?>
                    <p>Lokasi : <?= $value['lokasi']?></p>
                    <p>Jadwal : <?= $value['jadwal']?></>
                    <?php endforeach; ?>
                    <p> Selanjutnya dilakukan sesi wawancara dengan calon peserta Pelatihan Kewirausahaan, yang sudah memenuhi administrasi dan calon peserta dimohon membawa berkas pendaftaran yang sesuai pada link pendaftaran. Bagi peserta yang lolos dan tidak lolos administrasi akan dihubungi oleh Penyelenggara. Untuk Info lebih lanjut hubungi kontak berikut : 089514806788
                    </p>
                    <div class="card-footer bg-whitesmoke">
                    <div class="buttons float-left">
                    <a href="<?= site_url('pelatihan_dinas') ?>" class="btn btn-primary">
                        Kembali
                    </a>
                    </div>
                    <div class="buttons float-left">
                    <a href="<?= site_url('pelatihan_dinas/cetak/' . $pendaftaran['id_daftar']) ?>" target="_blank" class="btn btn-success btn-print">
                    <i class="fas fa-print"></i> Cetak Bukti Pendaftaran
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