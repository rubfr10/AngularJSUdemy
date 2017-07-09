<?php
  session_start();

  if(!isset($_SESSION['user'])){
    echo("Acceso denegado");
    die;
  }

?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html ng-app="facturacionApp" ng-controller="mainCtrl">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistema de {{config.data.aplicacion}}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-yellow.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- Estilos personalizados -->

  <link rel="stylesheet" href="dist/css/animate.css">

  <!-- Importaciones de angular -->

  <script src="angular/libs/angular.min.js"></script>
  <script src="angular/libs/angular-route.min.js"></script>
  <script src="angular/libs/jcs-auto-validate.min.js"></script>

  <!-- Controladores -->

  <script src="angular/app.js"></script>
  <script src="angular/controladores/clientes_ctrl.js"></script>
  <script src="angular/controladores/dashboard_ctrl.js"></script>

  <!-- Servicios -->
  
  <script src="angular/servicios/config_srv.js"></script>
  <script src="angular/servicios/mensajes_srv.js"></script>
  <script src="angular/servicios/notificaciones_srv.js"></script>
  <script src="angular/servicios/clientes_srv.js"></script>

</head>

<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>{{config.data.iniciales[0]}}</b>{{config.data.iniciales | quitarLetra}}</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>{{config.data.aplicacion}}</b>{{config.data.iniciales}}</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">


          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu" ng-include="'template/mensajes.php'">
            
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu" ng-include="'template/notificaciones.php'">
            
          </li>
         
          <!-- User Account Menu -->
          <li class="dropdown user user-menu" ng-include="'template/usuario.php'"> 
          
          </li>

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" ng-include="'template/menu.php'">

  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{titulo}}
        <small>{{subtitulo}}</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content container-fluid" ng-view>
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
    {{config.data.version}}
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; {{config.data.anio}} 
      <a href="{{config.data.web}}" target="blank">Company</a>.
    </strong> All rights reserved.
  </footer>

 
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>