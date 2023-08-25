<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/logos/icon.png">
  <!-- Bootstrap 3.3.7 -->
  <link href="<?php echo base_url() ?>assets/admin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/AdminLTE.min.css">
  <!-- iCheck -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/iCheck/square/blue.css">
	<link href="<?php echo base_url() ?>assets/admin/plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body style="background-image: url('<?php echo base_url() ?>assets/imagess/building.jpg'); background-size: cover;" class="hold-transition login-page">
<div class="login-box">
  
  <!-- /.login-logo -->
  <div class="login-box-body" style="opacity: 0.9">
    <div class="login-logo">
    <a href="<?php echo base_url() ?>">
      <b>Peternakan Telur Otomatis</b>
    </a>
  </div>
    <center><img src="<?php echo base_url() ?>assets/images/logos/icon.png" alt="login" width="180px" height="90px"></center>
    <br>
     <p class="login-box-msg"><font size="3">Masukan <b>Username</b> dan <b>Password</b></font></p>
    <?php 

      echo form_open(base_url('admin/login'));
     ?>
      <div class="form-group has-feedback">
        <input type="username" class="form-control" placeholder="Masukan Username" name="username" id="username" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Masukan Password" name="password" id="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" style="margin-left:15px">Login</button>
        </div>
        <!-- /.col -->
      </div>
                <?php 
echo form_close();
  ?>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>assets/admin/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/admin/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url() ?>assets/admin/plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/bower_components/sweetalert/sweetalert.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js"></script>
		<?php if ($this->session->flashdata('gagal')): ?>
        <script>
        swal({
          title: "Gagal",
          text: "Username atau Password Salah!!!",
          icon: "warning",
          button: "Oke",
        });
		</script>
		<?php endif;?>
		<?php if ($this->session->flashdata('validasigagal')): ?>
        <script>
        swal({
          title: "Gagal",
          text: "Anda Belum Login!!!",
          icon: "warning",
          button: "Oke",
        });
		</script>
		<?php endif;?>
		<?php if ($this->session->flashdata('sukses')): ?>
        <script>
        swal({
          title: "Sukses",
          text: "Anda Berhasil Logout!!!",
          icon: "success",
          button: "Oke",
        });
		</script>
		<?php endif;?>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
