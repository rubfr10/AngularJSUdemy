<?php
  session_start();
  unset($_SESSION['user']);
?>

<!-- Menu toggle button -->

<a href="" class="dropdown-toggle" data-toggle="dropdown">
  <i class="fa fa-envelope-o"></i>
  <span class="label label-success">{{mensajes.length}}</span>
</a>
<ul class="dropdown-menu">
  <li class="header">You have {{mensajes.length}} messages</li>
  <li>
    <!-- inner menu: contains the messages -->
    <ul class="menu">
      <li ng-repeat="mensaje in mensajes"><!-- start message -->
        <a href="">
          <div class="pull-left">
            <!-- User Image -->
            <img ng-src="{{mensaje.img}}" class="img-circle" alt="User Image">
          </div>
          <!-- Message title and timestamp -->
          <h4>
            {{mensaje.nombre}}
            <small><i class="fa fa-clock-o"></i>{{mensaje.fecha}}</small>
          </h4>
          <!-- The message -->
          <p>{{mensaje.mensaje | mensajeCorto}}</p>
        </a>
      </li>
      <!-- end message -->
    </ul>
    <!-- /.menu -->
  </li>
  <li class="footer"><a href="#">See All Messages</a></li>
</ul>