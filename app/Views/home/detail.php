<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?php echo base_url();?>/assets/img/logo/logo.png" rel="icon">
  <title>Home - Detail Register</title>
  <link href="<?php echo base_url();?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>/assets/css/ruang-admin.min.css" rel="stylesheet">
</head>

<body>
	<br>
	<div class="container">
		<h2>Kartu Tanda Peserta Ujian</h2>
		<hr>
		<div class="content">
			<div class="content-body"> 
				<span>Foto : <?= $mahasiswa['foto'] ?></span>
			</div>
			<div class="content-body"> 
				<span>Nomor Pendaftaran : <?= $mahasiswa['no_pendaftaran'] ?></span>
			</div>
			<div class="content-body"> 
				<span>Nama Peserta : <?= $mahasiswa['nama'] ?></span>
			</div>
			<div class="content-body"> 
				<span>Email Peserta : <?= $mahasiswa['email'] ?></span>
			</div><hr>
			<p><strong>Note: Kartu ujian ini harap dibawa dan dilampirkan saat hari ujian.</strong></p><hr>
			<div class="pull-right">
				<a href="" target="_blank" title="Cetak" class="btn btn-success btn-sm"><i class="fa fa-print"></i> Cetak </a>
			</div>
		</div>
	</div>
</body>