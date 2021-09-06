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
        <a class="nav-link" href="<?php echo base_url();?>/dosen/index">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Profile</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>/dosen/modul">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Modul</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>/dosen/nilai">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Nilai</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>/dosen/studentrecord">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Student Record Sheet</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>/dosen/logbook">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Log Book</span>
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
                <span class="ml-2 d-none d-lg-inline text-white small">Dosen</span>
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
            <h1 class="h3 mb-0 text-gray-800">Tabel Student Record Sheet</h1>
           
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Student Record Sheet</h6>
                  <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addModal">Add New</button>
                </div>
                   
                <div class="table-responsive p-3">
                <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Program Studi</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Catatan</th>
                        <th>Keterangan</th>
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

                      <?php $a=1; foreach($student as $row):?>
                      <tr>
                      <td><?= $a++;?></td>
                      <td><?= $row->nim;?></td>
                      <td><?= $row->id_programstudi;?></td>
                      <td><?= $row->tanggal;?></td>
                      <td><?= $row->jam;?></td>
                      <td><?= $row->catatan;?></td>
                      <td><?= $row->keterangan;?></td>
                      <td>
                            <div class="btn-group">
                              <a href="#" class="btn btn-info btn-sm btn-edit" data-id="<?= $row->id;?>" data-nim="<?= $row->nim;?>" data-id_programstudi="<?= $row->id_programstudi;?>" data-tanggal="<?= $row->tanggal;?>" data-jam="<?= $row->jam;?>" data-catatan="<?= $row->catatan;?>" data-keterangan="<?= $row->keterangan;?>">Edit</a>
                              <a href="#" class="btn btn-danger btn-sm btn-delete" data-id="<?= $row->id;?>">Delete</a>
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
      
      <form action="addStudentRecord" method="post">
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Student Record Sheet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
                <div class="form-group">
                    <select name="nim" class="form-control" required>
                    <option value="">Select NIM</option>  
                      <?php foreach ($mahasiswa as $row) :?>
                            <option value="<?= $row->nim;?>"><?= $row->nama;?></option>  
                      <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <select name="id_programstudi" class="form-control" required>
                    <option value="">Select Program Studi</option>  
                      <?php foreach ($programstudi as $row) :?>
                            <option value="<?= $row->id_programstudi;?>"><?= $row->nama_prodi;?></option>  
                      <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <input type="date" class="form-control" name="tanggal" placeholder="Tanggal" required>
                </div>

                <div class="form-group">
                    <input type="time" class="form-control" name="jam" placeholder="Jam" required>
                </div>

                <div class="form-group">
                 <textarea type="text" class="form-control" name="catatan" placeholder="Catatan" required> </textarea>
             </div>

             <div class="form-group">
                 <textarea type="text" class="form-control" name="keterangan" placeholder="Keterangan" required></textarea>
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

    <form action="updateStudentRecord" method="post">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Student Record Sheet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
             <div class="form-group">
                 <select name="nim" class="form-control nim" required>
                 <option value="">Select NIM</option>  
                   <?php foreach ($mahasiswa as $row) :?>
                         <option value="<?= $row->nim;?>"><?= $row->nama;?></option>  
                   <?php endforeach; ?>
                 </select>
             </div>
             <div class="form-group">
                 <select name="id_programstudi" class="form-control id_programstudi" required>
                 <option value="">Select Program Studi</option>  
                   <?php foreach ($programstudi as $row) :?>
                         <option value="<?= $row->id_programstudi;?>"><?= $row->nama_prodi;?></option>  
                   <?php endforeach; ?>
                 </select>
             </div>

             <div class="form-group">
                 <input type="date" class="form-control tanggal" name="tanggal" placeholder="Tanggal" required>
             </div>

             <div class="form-group">
                 <input type="time" class="form-control jam" name="jam" placeholder="Jam" required>
             </div>

             <div class="form-group">
                 <textarea type="text" class="form-control catatan" name="catatan" placeholder="Catatan" required> </textarea>
             </div>

             <div class="form-group">
                 <textarea type="text" class="form-control keterangan" name="keterangan" placeholder="Keterangan" required></textarea>
             </div>
            
            
          
         </div>
            <div class="modal-footer">
            <input type="hidden" name="id" class="id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </div>
        </div>
        </div>
    </form>

      <form action="deleteStudentRecord" method="post">
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Student Record Sheet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
               <h4>Are you sure want to delete this Student Record Sheet?</h4>
             
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id" class="id">
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
            const id = $(this).data('id');
            const jam = $(this).data('jam');
            const tanggal = $(this).data('tanggal');
            const catatan = $(this).data('catatan');
            const keterangan = $(this).data('keterangan');
            const id_programstudi = $(this).data('id_programstudi');
            const nim = $(this).data('nim');
            // Set data to Form Edit
            $('.id').val(id);
            $('.jam').val(jam);
            $('.tanggal').val(tanggal);
            $('.catatan').val(catatan);
            $('.keterangan').val(keterangan);
            $('.id_programstudi').val(id_programstudi).trigger('change');
            $('.nim').val(nim).trigger('change');
            // Call Modal Edit
            $('#editModal').modal('show');
        });
 
        // get Delete Product
        $('.btn-delete').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            // Set data to Form Edit
            $('.id').val(id);
            // Call Modal Edit
            $('#deleteModal').modal('show');
        });
  </script>
</body>

</html>