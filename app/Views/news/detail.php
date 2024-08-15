<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?= esc($artikel['judul_artikel']); ?> - Berita</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css"> 

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?=base_url()?>/template//node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/style.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/components.css">
</head>

<body class="layout-3">
    <div id="app">
        <div class="main-wrapper container">
        <div class="navbar-bg"></div>
        <br>
            <nav class="navbar navbar-expand-lg bg">
            <a class="navbar-brand" href="<?=site_url()?>"><img src="<?=site_url()?>/template/assets/img/kota_jambi.png" alt="logo" width="40">&nbsp;SIPUTRI</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse navbar-right" id="navbarNav">
                        <ul class="navbar-nav">
                          <li class="nav-item active">
                            <a class="nav-link" href="<?=site_url()?>"><h5>Beranda</h5><span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item dropdown">
                          <a class="nav-link dropdown" href="" id="profilDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <h5>Profil</h5>
                          </a>
                            <div class="dropdown-menu" aria-labelledby="profilDropdown">
                            <a class="dropdown-item" href="<?=site_url('public/visi_misi')?>">Visi dan Misi</a>
                            <a class="dropdown-item" href="<?=site_url('public/struktur')?>">Struktur Organisasi</a>
                          </div>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="iwan"><h5>Informasi</h5></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="<?=site_url('public/tentang')?>"><h5>Tentang</h5></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="z"><h5>Kontak</h5></a>
                          </li>
                        </ul>
                      </div>

          <form class="form-inline ml-auto">
          <ul class="navbar-nav">
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
          </div>
            <a class="nav-link" href="<?=site_url('auth/login')?>"><h5>Login</h5></a>
          </form>
            </nav>
            
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1><?= esc($artikel['judul_artikel']); ?></h1>
                    </div>

                    <div class="section-body">
                        <div class="card">
                            <div class="card-body">
                            <div style="display: flex; justify-content: center; align-items: center;">
                                <img src="<?= base_url('uploads/news/' . esc($artikel['foto_artikel'])); ?>" alt="Berita" height="700px" width="70%">
                            </div>
                            <div class="card-footer">
                                <p><?= htmlspecialchars_decode($artikel['isi_artikel']); ?></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <nav class="navbar expand-lg bg-dark text-white py-3">
                <div class="container-fluid d-flex justify-content-between align-items-center">
                    <div class="footer-left">
                        Copyright &copy; 2024 <span class="bullet">&bull;</span> Dinas Tenaga Kerja, Koperasi dan UKM Kota Jambi
                    </div>
                    <div class="footer-right">
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url() ?>/template/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/template/assets/js/scripts.js"></script>
</body>
</html>
