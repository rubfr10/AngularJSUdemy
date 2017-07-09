  <?php
  session_start();
  unset($_SESSION['user']);
?>


  <!-- Menu Toggle Button -->
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
  <!-- The user image in the navbar-->
  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
  <!-- hidden-xs hides the username on small devices so only the image appears. -->
  <span class="hidden-xs">{{usuario.nombre}}</span>
</a>
<ul class="dropdown-menu">
  <!-- The user image in the menu -->
  <li class="user-header">
    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

    <p>
      {{usuario.nombre}} - Web Developer
      <small>Member since Nov. 2012</small>
    </p>
  </li>

  <!-- Menu Body -->
  <li class="user-body">
    <div class="row">
      <div class="col-xs-4 text-center">
        <a href="">Followers</a>
      </div>
      <div class="col-xs-4 text-center">
        <a href="">Sales</a>
      </div>
      <div class="col-xs-4 text-center">
        <a href="">Friends</a>
      </div>
    </div>
    <!-- /.row -->
  </li>
  <!-- Menu Footer-->
  <li class="user-footer">
    <div class="pull-left">
      <a href="#" class="btn btn-default btn-flat">Profile</a>
    </div>
    <div class="pull-right">
      <a href="../public/" class="btn btn-default btn-flat">Sign out</a>
    </div>
  </li>
</ul>