<?php 
  require_once "../koneksi.php";

  $query = mysql_query("select * from tb_user where email='".$_SESSION['ses_email']."'")or die(mysql_error());
  $data = mysql_fetch_array($query);
  if ($query) {
    
  
 ?>
<section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../user/imgFoto/<?php echo $data['foto'] ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $data['nama']; ?></h3>

              <p class="text-muted text-center"><?php echo $data['pekerjaan']; ?></p>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tentang</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>

              <p class="text-muted">
                <?php echo $data['alamat']; ?>
              </p>

              <hr>

              <strong><i class="fa fa-transgender margin-r-5"></i> Jenis Kelamin</strong>

              <p class="text-muted"><?php echo $data['jekel']; ?></p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Pekerjaan</strong>

              <p><?php echo $data['pekerjaan']; }?></p>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Setting</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
           
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama</label>

                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control" id="inputName" placeholder="Nama" value="<?php echo $data['nama']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputName" name="password" placeholder="Password" value="<?php echo $data['password']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Jekel</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="jekel" placeholder="jekel" value="<?php echo $data['jekel']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Alamat</label>

                     <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="alamat" placeholder="Alamat" value="<?php echo $data['alamat']; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                  <label for="foto" class="control-label col-sm-2">Foto</label>
                    <div class="col-sm-4">
                      <input name="Foto" type="file" size="37"/>
            <input name="FotoH" type="hidden" value="<?php echo $data['foto']; ?>">
                    </div>
                </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Pekerjaan</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="pekerjaan" placeholder="Pekerjaan" value="<?php echo $data['pekerjaan']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger" name="ubah">Ubah</button>
                    </div>
                  </div>
                </form>
                <?php
                    if(isset($_POST['ubah'])){

                          if(!isset($_FILES['Foto']['name'])==""){
                          $nama_foto=$_FILES["Foto"]["name"];
                          $file_foto=$_SESSION['ses_email'].".jpg";
                          copy($_FILES['Foto']['tmp_name'],"imgFoto/".$file_foto);
                          }
                          else {
                          $nama_foto = $_POST['FotoH'];
                          $file_foto = $nama_foto;
                          }

                        $sql_update ="update tb_user set
                        nama='".$_POST['nama']."',
                        password='".$_POST['password']."',
                        alamat='".$_POST['alamat']."',
                        jekel='".$_POST['jekel']."',
                        foto='".$file_foto."',
                        pekerjaan='".$_POST['pekerjaan']."',
                        Where id_user='".$data['id_user']."'";
                        $query_update = mysql_query($sql_update) or die (mysql_error());
                        
                      if ($query_update) {
                        move_uploaded_file($nama_foto, "imgFoto/".$file_foto);
                        echo "<center>Profil Berhasil Diubah</center>";
                        
                      }else{
                        echo "Gagal di ubah";
                      }
                    }

                ?>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>