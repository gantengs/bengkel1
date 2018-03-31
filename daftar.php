<!DOCTYPE html>
<html>
<head>
  <title>Daftar admin</title>
</head>

<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="?page=beranda"><b>Daftar</b> Admin</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Daftar</p>

    <form method="post">
      <div class="form-group has-feedback">
        <input type="text" name="nama_user" class="form-control" placeholder="Nama Lengkap">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="alamat" class="form-control" placeholder="Alamat">
        <span class="glyphicon glyphicon-home form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="jekel" class="form-control" placeholder="Jenis Kelamin">
        <span class="glyphicon fa-genderless form-control-feedback"></span>
      </div>
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
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="simpan" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
      </div>
    </form>

           <?php
                require_once "koneksi.php";
                if (isset($_POST['simpan'])) {
                  $nama = $_POST['nama_user'];
                  $email = $_POST['email'];
                  $password = $_POST['password'];
                  $alamat = $_POST['alamat'];
                  $jekel = $_POST['jekel'];
                  $validasi = mysql_query("SELECT email from tb_user where email = '".$_POST['email']."'");
                  $cek = mysql_num_rows($validasi);

                  if ($nama == "" || $email =="" || $password == "") {
                    echo "<center>Kolom masih ada yang kosong</center>";
                  }elseif ($cek == 0) {
                    $query = mysql_query("INSERT INTO tb_user (nama, email, password, alamat, jekel) values ('".$nama."','".$email."', '".$password."', '".$alamat."', '".$jekel."')")or die(mysql_error());
                    echo "<div class='alert alert-success'><a href='?page=beranda' class='close' data-dismiss='alert'>&times;</a>Daftar Berhasil</div>";
                  }else{
                    echo "<center>Email anda sudah terdaftar</center>";
                    }
                  }

             ?>

    <div class="social-auth-links text-center">
      <p>- ATAU -</p>
    </div>
    <br>
    <a href="index.php" class="text-center">Sudah punya akun</a>
  </div>
  <!-- /.form-box -->
</div>

</body>
</html>