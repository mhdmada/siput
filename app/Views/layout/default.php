<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <?= $this->renderSection('title') ?>

  <!-- Untuk deklarasi variabel users -->
  <?php 
  use App\Models\UserModel;

  $userModel = new UserModel();
  $users = $userModel->find(session()->get('id_user'));
  ?>

  <!-- General CSS Files -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css"> 
  
  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?=base_url()?>/template//node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/style.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>

        <ul class="navbar-nav navbar-right">
        <div class="float-left">
        <li class="dropdown dropdown-list-toggle">
        <a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg">
            <i class="far fa-bell"></i>
        </a>
        <div class="dropdown-menu dropdown-list dropdown-menu-right">
            <div class="dropdown-header">Notifikasi</div>
            <div class="dropdown-list-content dropdown-list-icons">
                <?php if ($notification = session()->get('notification')): ?>
                    <a href="#" class="dropdown-item dropdown-item-unread">
                        <div class="dropdown-item-icon <?= $notification['type'] === 'success' ? 'bg-info' : 'bg-danger' ?> text-white">
                            <i class="fas <?= $notification['type'] === 'success' ? 'fa-check' : 'fa-times' ?>"></i>
                        </div>
                        <div class="dropdown-item-desc">
                            <?= $notification['message'] ?>
                            <?php
                            function timeAgo($timestamp) {
                              $timeDifference = time() - $timestamp;
                              $seconds = $timeDifference;
    
                              $minutes      = round($seconds / 60);           // value 60 is seconds
                              $hours        = round($seconds / 3600);         // value 3600 is 60 minutes * 60 seconds
                              $days         = round($seconds / 86400);        // value 86400 is 24 hours * 60 minutes * 60 seconds
                              $weeks        = round($seconds / 604800);       // value 604800 is 7 days * 24 hours * 60 minutes * 60 seconds
    
                              if ($seconds <= 60) {
                                  return "Baru saja"; // Sekitar beberapa detik
                              } else if ($minutes <= 60) {
                                  return "$minutes menit lalu";
                              } else if ($hours <= 24) {
                                  return "$hours jam lalu";
                              } else if ($days <= 7) {
                                  return "$days hari lalu";
                              } else {
                                  return "$weeks minggu lalu";
                              }
                            }
                            ?>
                            <div class="time"><?= timeAgo($notification['timestamp']) ?></div>
                        </div>
                    </a>
                    <?php else: ?>
                        <a href="#" class="dropdown-item">
                            <div class="dropdown-item-desc">
                                Tidak ada notifikasi baru.
                            </div>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </li>
      </div>
          <li class="dropdown"><a href="" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
          <img src="<?= site_url('/uploads/profile/' . ($users['foto_profil'] ?? 'avatar-1.png')) ?>" class="rounded-circle mr-1" style="width: 30px; height: 30px; object-fit: cover;">
            <div class="d-sm-none d-lg-inline-block"> Halo, <?= session()->get('username'); ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="<?=site_url('profile')?>" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profil
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?=site_url('auth/logout')?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?=site_url('dashboard')?>"><img src="<?=base_url()?>/template/assets/img/kota_jambi.png" alt="logo" width="20">&nbsp;SIPUTRI</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?=site_url()?>">Siputri</a>
          </div>
          <ul class="sidebar-menu">
              <?= $this->include('layout/menu') ?>
            </ul>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
      <?= $this->renderSection('content') ?>
      </div>

      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2024 <div class="bullet"></div> <a href="/">Dinas Tenaga Kerja, Koperasi, dan UKM Kota Jambi</a>
        </div>
        <div class="footer-right">
          1.0
        </div>
      </footer>
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

  <!-- Template JS File -->
  <script src="<?=base_url()?>/template/assets/js/scripts.js"></script>
  <script src="<?=base_url()?>/template/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
</body>
</html>
