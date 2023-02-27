<?php

session_start();
if(isset($_SESSION['datos_login'])){
header("Location: ../Admin/index.php");
}
	


?>






<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ingreso/ tienda</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="./Admin/dashboard/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./Admin/dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./Admin/dashboard/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page" style="background-color: white;">
<div class="login-box">
  <div class="login-logo">
     <a href="index2.php" class="js-logo-clone col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center"><img src="images/carmen.png" alt="Image placeholder" width="70%" height="70%" ></a>
  </div>
  <!-- /.login-logo -->
  <div class="card" style="background-color: black;  border-radius: 2.5em;">
    <div class="card-body login-card-body" style="background-color: black;  border-radius: 2.5em;">
      <p class="login-box-msg" style="color: white">Ingresa a tu cuenta para comprar</p>

      <form action="./php/check.php" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember" style="color: white">
                Recordar contraseña
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block"  style="background-color: #D1D1D1">Ingresar</button>
          </div>
          <!-- /.col -->
        <br>
        <br>
          <?php 
            if(isset($_GET['error'])){
              echo '<div class="col-12 alert alert-danger">'.$_GET['error'].'</div>';
            }
          ?>
        </div>
      </form>

     

      <p class="mb-1">
        <a href="olvidar.php" style="color: white">Olvide mi contraseña</a>
      </p>
      <p class="mb-0">
        <a href="register.php" class="text-center" style="color: white">Crear una cuenta</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="./Admin/dashboard/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./Admin/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./Admin/dashboard/dist/js/adminlte.min.js"></script>

</body>
</html>
