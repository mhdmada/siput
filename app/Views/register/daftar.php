<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; SIPUTRI</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css"> 
  <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/selectric/public/selectric.css">
  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/style.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
      <div><center><h3>Dinas Tenaga Kerja, Koperasi dan UKM Kota Jambi</h3></center></div>
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
          
            <div class="login-brand">
              <img src="<?=base_url()?>/template/assets/img/kota_jambi.png" alt="logo" width="100" class="shadow-light rounded-square">
            </div>
            <div class="section-body"><center><h4>Sistem Informasi Pelayanan UMKM Terintegrasi Kota Jambi</h4></center></div>

            <div class="card card-primary">
              <div class="card-header"><h4>Daftar</h4></div>

              <form method="POST" action="<?=site_url('register/save')?>" class="needs-validation" novalidate="">
                  <?= csrf_field() ?>
              <div class="card-body">
              <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="name_user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password"  class="form-control" required>
                    </div>
                    </form>

                <form method="POST" action="<?=site_url('register/store')?>" class="needs-validation" novalidate="">
                  <?= csrf_field() ?>
              <div class="form-group">
                        <label>NIK</label>
                        <input type="text" name="nik" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Pemilik Usaha</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Usaha</label>
                        <input type="text" name="nama_usaha" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Kelurahan</label>
                        <input type="text" name="kelurahan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Kecamatan</label>
                        <input type="text" name="kecamatan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat Usaha</label>
                        <input type="text" name="alamat_usaha"  class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Bidang Usaha</label>
                      <select class="form-control selectric" name="bidang_usaha" multiple="2" placeholder="...">
                        <option>Kuliner</option>
                        <option>Fashion</option>
                        <option>Dagang</option>
                        <option>Industri</option>
                        <option>Jasa</option>
                        <option>Pertanian</option>
                        <option>Peternakan</option>
                        <option>Lainnya</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label>NIB</label>
                        <input type="text" name="nib"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>NPWP</label>
                        <input type="text" name="npwp"  class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Omzet Biaya</label>
                      <select class="form-control selectric" name="bidang_usaha" multiple="2" placeholder="...">
                        <option>Rp.5.000.000 - Rp.10.000.000</option>
                        <option>Rp.15.000.000 - Rp.20.000.000</option>
                        <option>Rp.25.000.000 - Rp.30.000.000</option>
                        <option>Rp.35.000.000 - Rp.40.000.000</option>
                        <option>Rp.45.000.000 - Rp.50.000.000</option>
                        <option>Rp.55.000.000 - Rp.60.000.000</option>
                        <option>Rp.65.000.000 - Rp.70.000.000</option>
                        <option>Rp.75.000.000 - Rp.80.000.000</option>
                        <option>Rp.85.000.000 - Rp.90.000.000</option>
                        <option>Rp.95.000.000 - Rp.100.000.000</option>
                        <option>Rp.105.000.000 - Rp.110.000.000</option>
                        <option>Rp.115.000.000 - Rp.120.000.000</option>
                        <option>Rp.125.000.000 - Rp.130.000.000</option>
                        <option>Rp.135.000.000 - Rp.140.000.000</option>
                        <option>Rp.145.000.000 - Rp.150.000.000</option>
                        <option>Rp.155.000.000 - Rp.160.000.000</option>
                        <option>Rp.165.000.000 - Rp.170.000.000</option>
                        <option>Rp.175.000.000 - Rp.180.000.000</option>
                        <option>Rp.185.000.000 - Rp.190.000.000</option>
                        <option>Rp.195.000.000 - Rp.200.000.000</option>

                      </select>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Tenaga Kerja</label>
                        <input type="text" name="jumlah_tenaga_kerja"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>No. Hp/wa</label>
                        <input type="text" name="no_hp" class="form-control" required>
                    </div>
                    </form>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Daftar
                    </button>
              
                </form>

              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; M.Ziqran Febian 2024
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="<?=base_url()?>/template/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="<?=base_url()?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>/template/assets/js/scripts.js"></script>
  <script src="<?=base_url()?>/template/node_modules/select2/dist/js/select2.full.min.js"></script>
  <script src="<?=base_url()?>/template/node_modules/selectric/public/jquery.selectric.min.js"></script>
  <script src="<?=base_url()?>/template/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  <!-- Page Specific JS File -->
</body>
</html>
