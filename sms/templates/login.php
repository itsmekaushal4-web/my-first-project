<div class="register-box">
  <div class="register-logo">
    <a href="./index.php"><b>SMS</b></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Login as User</p>
      <?php
      // print_r($_SESSION['errors']);
      if(isset($_SESSION['errors']) && !empty($_SESSION['errors'])): ?>
      <div class="alert alert-danger">
        <ul>
          <?php foreach($_SESSION['errors'] as $error): ?>
          <li><?php echo $error; ?></li> 
          <?php endforeach; ?>
        </ul>
      </div>
      <?php
      endif;
      unset($_SESSION['errors']);
      ?>
      <form action="./functions/login.php" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="./forgotpassword.php" class="text-center">Forgot Password?</a><br>
      <a href="./registration.php" class="text-center">Create a new account</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
