<?php
   session_start();
      if (isset($_SESSION['ses_email'])=="") {
            } else {
              echo"<content='0;url=?page=login'>";  
            }

?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>Login</b> Admin</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Masuk untuk memulai pekerjaan</p>

    <form method="post">
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <div class="col-xs-4">
          <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Masuk</button>
        </div>
      </div>
    </form>
           <?php
                require_once "koneksi.php";
                if (isset($_POST['login'])) {

                  $query = mysql_query("SELECT email, password from tb_user where email = '".$_POST['email']."' and password='".$_POST['password']."'")or die(mysql_error());
                  $data = mysql_fetch_array($query);
                  $cek  = mysql_num_rows($query);

                  if ($cek == 1) {
                    $_SESSION['ses_email'] = $data['email'];
                    echo"<meta http-equiv='refresh' content='0;url=user/index.php'>";
                    
                  }else{
                    echo "<div align='center'>
                    <font color='red'> Login Gagal !!! </font>
                    </div>";
                  }
             }

            ?>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div><br>
    <a href="?page=daftar" class="text-center">Daftar admin baru</a>

  </div>
</div>
</body>
</html>