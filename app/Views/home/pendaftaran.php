<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?php echo base_url();?>/assets/img/logo/logo.png" rel="icon">
  <title>Home - Pendaftaran</title>
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
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h4 sm-2">Form Registrasi Mahasiswa Baru</h1>
            </div>
            <?php 
                  $errors = session()->getFlashdata('errors'); 
                  if (!empty($errors)) { ?>
                      <div class="alert alert-danger" role="alert">
                          <ul>
                          <?php foreach ($errors as $error) : ?>
                              <li><?= esc($error) ?></li>
                          <?php endforeach ?>
                          </ul>
                      </div>
                  <?php } ?>

                  <?php 
                    if (session()->getFlashdata('pesan')) {
                      echo '<div class="alert alert-warning" role="alert">';
                      echo session()->getFlashdata('pesan');
                      echo '</div>';
                    }
                  ?>
            <?php 
            echo form_open('home/save_register');
            ?>                                                                                                   
            <div class="row">
                      <div class="col-md-6">
                          <label class="control-label-sm">Lokasi Kampus yang diingikan</label>
                          <div class="form-group">
                            <select name="lokasi" id="lokasi" class="form-control" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                              <option value="">--Pilih--</option>
                              <option value="Aceh">Aceh</option>
                              <option value="Padang">Padang</option>
                            </select>
                          </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="control-label">Nama Lengkap</label>
                          <input type="text" id="nama" name="nama" class="form-control input-sm" placeholder="Masukkan Nama Lengkap" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                        </div>

                        <div class="form-group">
                          <label class="control-label">Tempat Lahir</label>
                          <input type="text" id="tmpt_lahir" name="tmpt_lahir" class="form-control input-sm" placeholder="Tempat Lahir" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                        </div>

                        <div class="form-group">
                          <label class="control-label">Tanggal Lahir</label>
                          <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control input-sm" placeholder="Tempat Lahir" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                        </div>

                        <div class="form-group">
                          <label class="control-label">Alamat</label>
                          <input type="text" id="alamat" name="alamat" class="form-control input-sm" placeholder="Masukkan Alamat Anda" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                        </div>

                        <div class="form-group">
                          <label class="control-label-sm">Jenis Kelamin</label>
                          <div class="form-group">
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" placeholder="Pilih Jenis Kelamin" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                              <option value="">--Pilih--</option>
                              <option value="Laki-laki">Laki-laki</option>
                              <option value="Perempuan">Perempuan</option>
                            </select>
                          </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="control-label">HP</label>
                        <input type="text" id="hp" name="hp" class="form-control input-sm" placeholder="Masukkan No Hp Anda" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                      </div>

                      <div class="form-group">
                        <label class="control-label">Email</label>
                        <input type="text" id="email" name="email" class="form-control input-sm" placeholder="Masukkan Email Anda" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                      </div>

                      <div class="form-group">
                          <label class="control-label-sm">Agama</label>
                          <div class="form-group">
                            <select id="agama" name="agama" class="form-control" placeholder="Pilih Agama" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                              <option value="">--Pilih--</option>
                              <option value="Islam">Islam</option>
                              <option value="Hindu">Hindu</option>
                              <option value="Budha">Budha</option>
                              <option value="Kristen Protestan">Kristen Protestan</option>
                              <option value="Katolik">Katolik</option>
                              <option value="DLL">DLL</option>
                            </select>
                          </div>
                      </div>

                        <div class="form-group">
                          <label class="control-label">Tinggi Badan (TB)</label>
                          <input  data-html="true"  data-toggle="tooltip" data-placement="top" title="1. Airline Staff Tinggi Badan Minimal Pria 168cm , Wanita 158cm 
2. Perhotelan Tinggi Badan Minimal Pria 160cm , Wanita 153cm 
3. Pramugari/a Tinggi Badan Minimal Pria 170cm, Wanita 163cm" type="text" id="tinggi" name="tinggi" class="form-control input-sm" placeholder="Tinggi Badan" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                        </div>

                        <div class="form-group">
                          <label class="control-label">Berat Badan (BB)</label>
                          <input type="text" id="berat" name="berat" class="form-control input-sm" placeholder="Berat Badan" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                        </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="control-label">Facebook</label>
                        <input type="text" id="facebook" name="facebook" class="form-control input-sm" placeholder="Nama Facebook Anda" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group">
                        <label class="control-label">Instagram</label>
                        <input type="text" id="instagram" name="instagram" class="form-control input-sm" placeholder="Nama Instagram" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group">
                        <label class="control-label">Photo</label>
                        <input class="form-control-file" type="file" name="foto" id="foto" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="control-label">Pendidikan Terakhir</label>
                        <input type="text" id="pendidikan" name="pendidikan" class="form-control input-sm" placeholder="Pendidikan Terakhir" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group">
                        <label class="control-label">Nama Sekolah</label>
                        <input type="text" id="sekolah" name="sekolah" class="form-control input-sm" placeholder="Nama Sekolah" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="control-label">Jurusan</label>
                        <input type="text" id="jurusan" name="jurusan" class="form-control input-sm" placeholder="Jurusan" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group">
                        <label class="control-label">Tahun Lulus</label>
                        <input type="text" id="tamat" name="tamat" class="form-control input-sm" placeholder="Tahun Lulus" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                      </div>
                    </div>
                  </div>
                  <hr>
                  
                <div class="row">  
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Nama Orang Tua</label>
                      <input type="text" id="nama_ortu" name="nama_ortu" class="form-control input-sm" value="" placeholder="Nama Orang Tua" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                      <label class="control-label">Pekerjaan Orang Tua</label>
                      <input type="text" id="pekerjaan_ortu" name="pekerjaan_ortu" class="form-control input-sm" value="" placeholder="Pekerjaan Orang tua" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Alamat</label>
                      <input type="text" id="alamat_ortu" name="alamat_ortu" class="form-control input-sm" value="" placeholder="Alamat Orang" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                      <label class="control-label">No HP Orang Tua</label>
                      <input type="text" id="hp_ortu" name="hp_ortu" class="form-control input-sm" value="" placeholder="No HP orang tua" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Program Class</label>
                        <select id="program_class" name="program_class" class="form-control" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                          <option value="">-- Pilih --</option>
                          <option value="AIRLINE STAFF">AIRLINE STAFF</option>
                          <option value="PERHOTELAN">PERHOTELAN</option>
                          <option value="PRAMUGARI">PRAMUGARI</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                        <label class="control-label">Dari Mana Anda Mengetahui ITC ?</label>
                          <select id="referal" name="referal" class="form-control pull-right" required data-live-search='true'> 
                            <option value="">-- Pilih --</option>
                            <option value="Web Resmi ITC">Web Resmi ITC</option>
                            <option value="Kunjungan Sekolah">Kunjungan Sekolah</option>
                            <option value="Sosial Media">Sosial Media</option>
                            <option value="Iklan Koran">Iklan Koran</option>
                            <option value="Alumni ITC">Alumni ITC</option>
                            <option value="Jobs Fair">Jobs Fair</option>
                            <option value="Teman">Teman</option>
                            <option value="Radio">Radio</option>
                            <option value="Kantor ITC">Kantor ITC</option>
                            <option value="DLL">DLL</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal-footer">
                    <button type="reset" class="btn btn-default">RESET</button> 
                    <button type="submit" class="btn btn-primary"> DAFTAR </button>
                  </div>
            <?php echo form_close() ?>                                                                                                      
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
  <script>
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
      });
    }, 3000);
  </script>

</body>

</html>