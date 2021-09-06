<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?php echo base_url();?>/assets/img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Register</title>
  <link href="<?php echo base_url();?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>/assets/css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Register Content -->
  
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Register</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Register Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Register</h1>
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
                  echo form_open('register/save_register'); 
                  ?>
                    <div class="form-group">
                      <label>Nama Lengkap</label>
                      <input type="text" class="form-control" name="nama_user" id="nama_user" placeholder="Masukkan Nama Lengkap Anda" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')">
                    </div>
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username Anda" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp"
                        placeholder="Masukkan Email Anda" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password Anda" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')">
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                  <?php echo form_close() ?>
                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="<?php echo base_url('auth') ?>">Login</a>
                  </div>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Register Content -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
</body>

</html>
  <!-- Register Content -->
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