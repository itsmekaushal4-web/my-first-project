<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="./index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">About</a>
      </li>

      <?php
      if(is_user_logged_in()):
      ?>
        <li class="nav-item d-none d-sm-inline-block">
        <a href="./functions/logout.php" class="nav-link">Logout</a>
      </li>
      <?php else: ?>

      <li class="nav-item d-none d-sm-inline-block">
        <a href="./login.php" class="nav-link">Login</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="./registration.php" class="nav-link">Sign Up</a>
      </li>

      <?php endif; ?>

    </ul>
  </nav>
  <!-- /.navbar -->