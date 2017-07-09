<?php
  session_start();
  unset($_SESSION['user']);
?>


<!-- Menu toggle button -->
<a href="" class="dropdown-toggle" data-toggle="dropdown">
  <i class="fa fa-bell-o"></i>
  <span class="label label-warning" ng-hide="notificaciones.length===0">{{notificaciones.length}}</span>
</a>
<ul class="dropdown-menu">
  <li class="header">You have {{notificaciones.length}} notifications</li>
  <li ng-repeat="notif in notificaciones">
    <!-- Inner Menu: contains the notifications -->
    <ul class="menu">
      <li><!-- start notification -->
        <a href="">
          <i class="fa {{notif.icono}} text-aqua"></i> {{notif.texto}}
        </a>
      </li>
      <!-- end notification -->
    </ul>
  </li>
  <li class="footer"><a href="">View all</a></li>
</ul>