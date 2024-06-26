<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; SIPUTRI</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css"> 
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
              <div class="card-header"><h4>Login</h4></div>

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
                <form method="POST" action="<?=site_url('auth/loginProcess')?>" class="needs-validation" novalidate="">
                  <?= csrf_field() ?>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your username
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="" class="text-small">
                          Lupa Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      Tolong masukkan password Anda
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                  <div class="mt-5 text-muted text-center">
                     Belum Punya Akun? <a href=<?=site_url('register/index')?>>Daftar Sekarang</a>
                  </div>
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
  <!-- Page Specific JS File -->
</body>
</html>
