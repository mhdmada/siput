<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Informasi Terbaru &mdash; SIPUTRI</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css"> 

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?=base_url()?>/template//node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/style.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/components.css">

  <style>
        .black-text a {
            color: black;
            text-decoration: none;
        }
    </style>

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
                            <a class="nav-link" href="<?=site_url('public/informasi')?>"><h5>Informasi</h5></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="<?=site_url('public/tentang')?>"><h5>Tentang</h5></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="<?=site_url('public/kontak')?>"><h5>Kontak</h5></a>
                          </li>
                        </ul>
                      </div>

          <form class="form-inline ml-auto">
            <a class="nav-link" href="<?=site_url('auth/login')?>"><h5>Login</h5></a>
          </form>
        </nav>

      <!-- Main Content -->
      <div class="main-content">
      <section class="section">
      <h2 class="center">Informasi Terbaru</h2>
      <hr class="my-4">
       <div class="row">
       <?php
       $page = isset($_GET['page']) ? $_GET['page'] : 1;
       $no = 1 + (9 * ($page - 1));
       foreach ($artikel as $value): ?>
         <div class="col-12 col-md-4 col-lg-4">
           <article class="article article-style-c">
             <div class="article-header">
               <div class="article-image" data-background="<?= site_url('uploads/news/' . $value['foto_artikel']); ?>">
               </div>
             </div>
             <div class="article-details">
               <div class="article-title">
               <h2 class="black-text"><a href="<?= site_url('news/detail/' . $value['id_artikel']) ?>"><?= substr($value['judul_artikel'], 0, 100); ?></a></h2>
               </div>
               <p><a href="<?= site_url('news/detail/' . $value['id_artikel']) ?>">Baca Selengkapnya</a></p>
               <div class="article-user">
                 <div class="article-user-details">
                   <div class="user-detail-name">
                     <a>Admin</a>
                   </div>
                   <div class="text"><?=date('d/m/Y', strtotime($value['tgl_artikel']))?></div>
                 </div>
               </div>
             </div>
           </article>
         </div>
         <?php endforeach; ?>
         <?php if ($pager->getPageCount() > 1): ?>
            <div class="container">
            <?= $pager->links('default', 'pagination') ?>
            </div>
            <?php endif; ?>
       </div>
        </section>
      </div>

      <nav class="navbar expand-lg bg-dark text-white py-3">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="footer-left">
                Copyright &copy; 2024 <span class="bullet">&bull;</span> Dinas Tenaga Kerja, Koperasi dan UKM Kota Jambi</a>
            </div>
            <div class="footer-right">
            <a href="https://www.disnakerkop.jambikota.go.id" class="text-white mr-3" target="_blank"><i class="fas fa-globe"></i></a>
            <a href="https://www.instagram.com/disnakerkopukm_kotajambi" class="text-white mr-3" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/disnakerkopukm.kotajambi.1/" class="text-white" target="_blank"><i class="fab fa-facebook"></i></a>
            </div>
        </div>
      </nav>
    </div>
  </div>


  <!-- General JS Scripts -->
  <script src="<?=base_url()?>/template//node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="<?=base_url()?>/template/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="<?=base_url()?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script> -->
  <script src="<?=base_url()?>/template/assets/js/stisla.js"></script>


  <!-- JS Libraies -->
  <script src="<?=base_url()?>/template/node_modules/gmaps/gmaps.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="<?=base_url()?>/template/assets/js/page/gmaps-geolocation.js"></script>

  <!-- Template JS File -->
  <script src="<?=base_url()?>/template/assets/js/scripts.js"></script>
  <script src="<?=base_url()?>/template/assets/js/custom.js"></script>
</body>
</html>

