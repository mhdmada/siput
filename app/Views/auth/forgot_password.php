<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Lupa Password &mdash; SIPUTRI</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css"> 
  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/style.css">
</head>

<body>
<div class="bg-image" style="
    height: 100vh; 
    background-image: url('<?= base_url('template/assets/img/kantor_dinas.jpg') ?>');
    background-size: cover; 
    background-position: center; 
    background-repeat: no-repeat;
">
  <div id="app">
    <section class="section">
      <div class="container"><br>
      <div style="text-align: center;">
      <h3 style="color: white; font-size: 24px;">Sistem Informasi Pelayanan UMKM Terintegrasi Kota Jambi</h3>
      </div>
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
          
            <div class="login-brand">
              <img src="<?=base_url()?>/template/assets/img/kota_jambi.png" alt="logo" width="100">
            </div>
            <div style="text-align: center;">
            <h3 style="color: white; font-size: 24px;">Dinas Tenaga Kerja, Koperasi dan UKM Kota Jambi</h3>
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Kirim Email Verifikasi</h4></div>

              <!-- alert success register  -->
              <div class="card-body">
              <?php if(session()->getFlashData('success')) : ?>
                 <div class="alert alert-success alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">x</button>
                        <b>Success !</b>
                        <?=session()->getFlashData('success')?>
                    </div>
                 </div> 
              <?php endif; ?>
                
              <!-- alert failed to login  -->
              <?php if(session()->getFlashData('error')) : ?>
                 <div class="alert alert-danger alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">x</button>
                        <b>Error !</b>
                        <?=session()->getFlashData('error')?>
                    </div>
                 </div> 
              <?php endif; ?>

                <form method="POST" action="<?= site_url('auth/processForgotPassword') ?>">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="email">Masukkan Email Anda</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>

              </div>
            </div><br>
            <div class="simple-footer">
              <p style="color : white">Copyright &copy; Dinas Tenaga Kerja, Koperasi dan UKM Kota Jambi</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
</div>

  <!-- General JS Scripts -->
  <script src="<?=base_url()?>/template/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="<?=base_url()?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>/template/assets/js/scripts.js"></script>
  <!-- Page Specific JS File -->
</body>
</html>
