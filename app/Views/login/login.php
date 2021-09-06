<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?php echo base_url();?>/assets/img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Login</title>
  <link href="<?php echo base_url();?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>/assets/css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <?php 
                  $errors = session()->getFlashdata('errors');
                  if (!empty($errors)) { ?>
                      <div class="alert alert-danger" role="alert">
                        <ul>
                          <?php foreach ($errors as $key => $value) { ?>
                            <li><?= esc($value) ?></li>
                          <?php } ?> 
                        </ul>
                      </div>
                  <?php } ?>
                  
                  <?php 
                    if (session()->getFlashdata('pesan')) {
                      echo '<div class="alert alert-warning" role="alert">';
                      echo session()->getFlashdata('pesan');
                      echo '</div>';
                    }
                    if (session()->getFlashdata('sukses')) {
                      echo '<div class="alert alert-success" role="alert">';
                      echo session()->getFlashdata('sukses');
                      echo '</div>';
                    }
                  ?>
                    <?php echo form_open('auth/cek_login'); ?>
                        <div class="form-group">
                          <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                        </div>
                        <div class="form-group">
                          <input type="password" name="password" class="form-control" placeholder="Password"required autofocus>
                        </div>
                        <div class="form-group">
                          <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Log In</button>
                        </div>
                        <hr>
                        <div class="text-center">
                          <a class="font-weight-bold small" href="<?php echo base_url('register') ?>">Register</a>
                        </div>
                      <?php echo form_close() ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
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