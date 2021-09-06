<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?php echo base_url();?>/assets/img/logo/logo.png" rel="icon">
  <title>Home - Akademik</title>
  <link href="<?php echo base_url();?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>/assets/css/ruang-admin.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php base_url() ?>">
        <div class="sidebar-brand-icon">
          <img src="<?php echo base_url();?>/assets/img/logo/logo2.png">
        </div>
        <div class="sidebar-brand-text mx-3">Akademik</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="<?php base_url() ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>/admin/index">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Pegawai</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>/admin/matkul">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Mata Kuliah</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>/admin/studentlog">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Student Log</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>/admin/profile">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Profile</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>/admin/modul">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Modul</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>/admin/nilai">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Nilai</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>/admin/kelulusan">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Kelulusan</span>
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
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
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

            <!--- Profile --->
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="ml-2 d-none d-lg-inline text-white small">Admin</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="login.html">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
              <!--- End Profile --->
            </li>
          </ul>
        </nav>
        <!-- Topbar -->
      
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tabel Profile</h1>
           
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
                 </div>

              
    
    <form action="updateUser" method="post">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
                <div class="form-group">
                     <input type="text" class="form-control username" name="username" placeholder="Username">
                </div>
                 
                <div class="form-group">
                    <input type="text" class="form-control email" name="email" placeholder="Email">
                </div>
 
                <div class="form-group">
                    <input type="password" class="form-control password" name="password" placeholder="Password">
                </div>

                <div class="form-group">
                    <select name="user_level" class="form-control user_level">
                        <option value="">-Select User Level-</option>
                        
                        <option value="pegawai">Pegawai</option>
                        <option value="mahasiswa">Mahasiswa</option>
                        <option value="orangtua">Orang Tua</option>
                       
                    </select>
                </div>
             
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id_user" class="id_user">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </div>
        </div>
        </div>
    </form>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script>
              <b><a href="<?php echo base_url();?>" target="_blank">Akademik<a></b>
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

  <script src="<?php echo base_url();?>/public/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>/public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>/public/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url();?>/public/assets/js/ruang-admin.min.js"></script>
 <!-- Page level plugins -->
  <script src="<?php echo base_url();?>/public/assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url();?>/public/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });

      $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const username = $(this).data('username');
            const email = $(this).data('email');
            const password = $(this).data('password');
            const user_level = $(this).data('user_level');
            // Set data to Form Edit
            $('.id_user').val(id);
            $('.username').val(username);
            $('.email').val(email);
            $('.password').val(password);
            $('.user_level').val(user_level).trigger('change');
            // Call Modal Edit
            $('#editModal').modal('show');
        });
 
        // get Delete Product
      $('.btn-delete').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            // Set data to Form Edit
            $('.id_user').val(id);
            // Call Modal Edit
            $('#deleteModal').modal('show');
        });
  </script>
</body>

</html>