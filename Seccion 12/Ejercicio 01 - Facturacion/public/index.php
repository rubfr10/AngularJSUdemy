<?php
  session_start();
  unset($_SESSION['user']);
?>

<!DOCTYPE html>
<html ng-app="loginApp" ng-controller="mainCtrl">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Facturación | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE.min.css">

 <script src="angular/libs/angular.min.js"></script>
 <script src="angular/app.js"></script>
 <script src="angular/servicios/login_srv.js"></script>


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Facturación</b>FAC</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form name="forma" ng-submit="ingresar(datos)">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Usuario" name="usuario" required="required" ng-model="datos.usuario">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="contrasena" required="required" ng-model="datos.contrasena">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat" ng-disabled="forma.$invalid || cargando">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
      <br>
      <div class="row" ng-show="invalido">
        <div class="col-md-12">
          <div class="alert alert-danger">
            <strong>Verificar</strong>
            {{mensaje}}
          </div>
        </div>
      </div>

    </form>

   

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


</body>
</html>
