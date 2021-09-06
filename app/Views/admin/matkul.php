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
            <h1 class="h3 mb-0 text-gray-800">Tabel Mata Kuliah</h1>
           
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Mata Kuliah</h6>
                  <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addModal">Add New</button>
                 </div>
                   
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Kode Matkul</th>
                        <th>Nama Matkul</th>
                        <th>SKS</th>
                        <th>Periode</th>
                        <th>Id Program Studi</th>
                        <th>Id Pegawai</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </tfoot>
                    <tbody>

                      <?php $a=1; foreach($matkul as $row):?>
                      <tr>
                      <td><?= $a++;?></td>
                      <td><?= $row->kode_matkul;?></td>
                      <td><?= $row->nama_matkul;?></td>
                      <td><?= $row->sks;?></td>
                      <td><?= $row->periode;?></td>
                      <td><?= $row->id_programstudi;?></td>
                      <td><?= $row->id_pegawai;?></td>
                      <td>
                            <div class="btn-group">
                              <a href="#" class="btn btn-info btn-sm btn-edit" data-id_mata_kuliah="<?= $row->id_mata_kuliah;?>" data-nama_matkul="<?= $row->kode_matkul;?>" data-nama_matkul="<?= $row->nama_matkul;?>" data-nama_matkul="<?= $row->sks;?>" data-periode="<?= $row->periode;?>" data-id_programstudi="<?= $row->id_programstudi;?>" data-id_pegawai="<?= $row->id_pegawai;?>">Edit</a>
                              <a href="#" class="btn btn-danger btn-sm btn-delete" data-id_mata_kuliah="<?= $row->id_mata_kuliah;?>">Delete</a>
                            </div>
                      </td>
                      </tr>
                      <?php endforeach;?>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        <!---Container Fluid-->
      </div>
      
      <form action="addMatkul" method="post">
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Matkul</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
                <div class="form-group">
                    <input type="text" class="form-control" name="kode_matkul" placeholder="Kode Matkul" required>
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control" name="nama_matkul" placeholder="Nama Matkul" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="sks" placeholder="Jumlah SKS" required>
                </div>
                 
                <div class="form-group">
                    <input type="text" class="form-control" name="periode" placeholder="Periode" required>
                </div>
               
                <div class="form-group">
                    <select name="id_programstudi" class="form-control" required>
                    <option value="">Pilih Program Studi</option>  
                      <?php foreach ($program_studi as $row) :?>
                            <option value="<?= $row->id_programstudi;?>"><?= $row->nama_prodi;?></option>  
                      <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <select name="id_pegawai" class="form-control" required>
                    <option value="">Pilih Dosen</option>  
                      <?php foreach ($dosen as $row) :?>
                            <option value="<?= $row->id_pegawai;?>"><?= $row->nama;?></option>  
                      <?php endforeach; ?>
                    </select>
                </div>
             
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </div>
        </div>
        </div>
    </form>

    <form action="updateMatkul" method="post">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Matkul</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
            <div class="form-group">
                    <input type="text" class="form-control" name="kode_matkul" placeholder="Kode Matkul" required>
            </div>
             
             <div class="form-group">
                  <input type="text" class="form-control nama_matkul" name="nama_matkul" placeholder="Nama Matkul" required>
             </div>

             <div class="form-group">
                    <input type="text" class="form-control" name="sks" placeholder="Jumlah SKS" required>
            </div>
              
             <div class="form-group">
                 <input type="text" class="form-control periode" name="periode" placeholder="Periode" required>
             </div>
            
             <div class="form-group">
                 <select name="id_programstudi" class="form-control id_programstudi" required>
                 <option value="">Pilih Program Studi</option>  
                   <?php foreach ($program_studi as $row) :?>
                         <option value="<?= $row->id_programstudi;?>"><?= $row->nama_prodi;?></option>  
                   <?php endforeach; ?>
                 </select>
             </div>

             <div class="form-group">
                 <select name="id_pegawai" class="form-control id_pegawai" required>
                 <option value="">Pilih Dosen</option>  
                   <?php foreach ($dosen as $row) :?>
                         <option value="<?= $row->id_pegawai;?>"><?= $row->nama;?></option>  
                   <?php endforeach; ?>
                 </select>
             </div>
          
         </div>
            <div class="modal-footer">
            <input type="hidden" name="id_mata_kuliah" class="id_mata_kuliah">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </div>
        </div>
        </div>
    </form>

      <form action="deleteMatkul" method="post">
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete MatKul</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
               <h4>Are you sure want to delete this Matkul?</h4>
             
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id_mata_kuliah" class="id_mata_kuliah">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-primary">Yes</button>
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

  <script src="<?php echo base_url();?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url();?>/assets/js/ruang-admin.min.js"></script>
 <!-- Page level plugins -->
  <script src="<?php echo base_url();?>/assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url();?>/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });

      $('.btn-edit').on('click',function(){
            // get data from button edit
            const id_mata_kuliah = $(this).data('id_mata_kuliah');
            const nama_matkul = $(this).data('nama_matkul');
            const periode = $(this).data('periode');
            const id_programstudi = $(this).data('id_programstudi');
            const id_pegawai = $(this).data('id_pegawai');
            // Set data to Form Edit
            $('.id_mata_kuliah').val(id_mata_kuliah);
            $('.nama_matkul').val(nama_matkul);
            $('.periode').val(periode);
            $('.id_programstudi').val(id_programstudi);
            $('.id_pegawai').val(id_pegawai).trigger('change');
            // Call Modal Edit
            $('#editModal').modal('show');
        });
 
        // get Delete Product
      $('.btn-delete').on('click',function(){
            // get data from button edit
            const id_mata_kuliah = $(this).data('id_mata_kuliah');
            // Set data to Form Edit
            $('.id_mata_kuliah').val(id_mata_kuliah);
            // Call Modal Edit
            $('#deleteModal').modal('show');
        });
  </script>
</body>

</html>