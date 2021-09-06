<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?php echo base_url();?>/assets/img/logo/logo.png" rel="icon">
  <title>Home - Pengumuman</title>
  <link href="<?php echo base_url();?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>/assets/css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url();?>/home">
        <div class="sidebar-brand-icon">
          <img src="<?php echo base_url();?>/assets/img/logo/logo2.png">
        </div>
        <div class="sidebar-brand-text mx-3">Akademik</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>/home">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>/home/persyaratan">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Lihat Persyaratan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>/home/pendaftaran">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Pendaftaran Peserta Didik</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>/home/pengumuman">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Pengumuman</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>/home/pendaftaran_ulang">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Pendaftaran Ulang</span>
        </a>
      </li>
      <hr class="sidebar-divider">
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?"
                      aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">

          <!-- Row -->
          <div class="row">
            <div class="container">
              <h2>Pengumuman Kelulusan</h2>
              
              <!-- Form -->
              <?php 
            echo form_open('home/pengumuman1');
            ?> 
                <div class="container">
                  <div class="row">
                    <div class="col-sm">
                      <div class="input-group">
                        <input type="text" id="no_pendaftaran" name="no_pendaftaran" class="form-control" placeholder="Nomor Pendaftaran" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="col-sm">
                      <div class="input-group">
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="col-sm">
                      <div class="input-group">
                        <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="input-group-btn">
                      <button class="btn btn-primary" type="submit" name="submit">Periksa</button>
                    </div>
                </div>
                <?php echo form_close() ?>  
              <!-- End Form -->

            </div>
          </div>       
        </div>
        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b><a href="<?php echo base_url();?>/assets/https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="<?php echo base_url();?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url();?>/assets/js/ruang-admin.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
</body>

</html>