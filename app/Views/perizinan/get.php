<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Perizinan Usaha &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
        <div class="section-header">
        <h1>Perizinan Usaha</h1>
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
                    <h4>Tata Cara Pengurusan Dokumen</h4>
                  </div>
                  <div class="card-body">
                      <!-- <?php foreach ($izin_usaha as $key => $value) :?> -->
                        <ul class="nav nav-tabs" id="myTab2" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="haki-tab2" data-toggle="tab" href="#haki2" role="tab" aria-controls="haki" aria-selected="true">Surat Rekomendasi HAKI</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="nib-tab2" data-toggle="tab" href="#nib2" role="tab" aria-controls="nib" aria-selected="false">NIB</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="npwp-tab2" data-toggle="tab" href="#npwp2" role="tab" aria-controls="npwp" aria-selected="false">NPWP</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="p_irt-tab2" data-toggle="tab" href="#p_irt2" role="tab" aria-controls="p_irt" aria-selected="false">P.IRT</a>
                      </li>
                    </ul>
                    <div class="tab-content tab-bordered" id="myTab3Content">
                    <div class="tab-pane fade show active" id="haki2" role="tabpanel" aria-labelledby="haki-tab2">
                      <!-- <h4><?=$value->haki?></h4> -->
                      1. Masuk ke situs e-hakcipta.dgip.go.id atau unduh aplikasi e-Hak Cipta dari  Direktorat Jenderal Kekayaan Intelektual (Dirjen HKI).
                      <br>
                      2. Lakukan pendaftaran dengan mengisi username dan password.
                      <br>
                      3. Setelah pendaftaran username dan password berhasil, login menggunakan username tadi.
                      <br>
                      4. Unggah dokumen-dokumen persyaratan yang diminta.
                      <br>
                      5. Selanjutnya, kamu akan menerima kode pembayaran. Lakukan pembayaran.
                      <br>
                      6. Tunggu proses pengecekan.
                      <br>
                      7. Apabila proses pendaftaran hak cipta telah disetujui, maka kamu akan melihat keterangan approve atau telah disetujui.
                      <br>
                      8. Selanjutnya, kamu bisa mengunduh dan mencetak sendiri Haki atas karyamu.
                    </div>
                    <div class="tab-pane fade" id="nib2" role="tabpanel" aria-labelledby="nib-tab2">
                      <!-- <h4><?=$value->nib?></h4> -->
                      1. Pemohon membuka website OSS di www.oss.go.id.
                      <br>
                      2. Klik tombol Daftar lalu isi formulir yang ada di layar.
                      <br>
                      3. Isi semua data diri dengan lengkap dan isi alamat email.
                      <br>
                      4. Cek email dan buka email registrasi dari OSS dengan klik tombol Aktivasi.
                      <br>
                      5. Masuk ke akun OSS dan isi Data Usaha yang diminta.
                    </div>
                    <div class="tab-pane fade" id="npwp2" role="tabpanel" aria-labelledby="npwp-tab2">
                      <!-- <h4><?=$value->npwp?> -->
                      1. Kunjungi https://ereg.pajak.go.id/daftar untuk langsung mengakses halaman pendaftaran NPWP online di situs Dirjen Pajak.
                      <br>
                      2. Silakan mendaftar terlebih dahulu untuk mendapatkan akun dengan mengklik “daftar”. ...
                      <br>
                      3. Lakukan Aktivasi Akun.
                      <br>
                      4. Isi Formulir Pendaftaran.
                    </h4></div>
                    <div class="tab-pane fade" id="p_irt2" role="tabpanel" aria-labelledby="p_irt-tab2">
                      <!-- <h4><?=$value->p_irt?></h4> -->
                      1. Membuat akun OSS di oss.go.id.
                      <br>
                      2. Mengisi kelengkapan data pelaku usaha dan data produk pangan.
                      <br>
                      3. Jika memenuhi persyaratan, SPP-IRT akan otomatis diterbitkan melalui OSS.
                      <br>
                      4. Melakukan pemenuhan komitmen dalam jangka waktu yang ditentukan.
                    </div>
                    </div>
                    <!-- <?php endforeach; ?> -->
                  </div>
                  <!-- <div class="card-footer">
                  <div class="buttons">
                    <a href="<?=site_url('perizinan/edit')?>" class="btn btn-primary">
                        Edit Info
                    </a>
                    </div>
                  </div> -->
                </div>
            </div>  
     </section>
<?= $this->endSection() ?>