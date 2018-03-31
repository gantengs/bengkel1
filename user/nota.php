<?php

  require_once "../koneksi.php";
  $query1 = mysql_query("SELECT * from tb_pelanggan where id_pelanggan = '".$_GET['id']."'")or die(mysql_error());
  $data1 = mysql_fetch_assoc($query1);
?>
<section class="content">
<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              
              <form method="post" enctype="multipart/form-data">
                  <h3 class="box-title">DATA NOTA PELANGGAN
                    <small>Bengkel Ahas</small>
                  </h3>
              <div class="box-body">
                
                <div class="form-group">
                  <label>Nama Pelanggan / Pembawa</label>
                  <select class="form-control" name="nama_pelanggan">
                    <option value="<?php echo $data1['id_pelanggan']?>"><?php echo $data1['nama_pembawa']?></option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Jenis Servis Motor</label>
                  <select class="form-control" name="pekerjaan">
                  <?php
                    $query = mysql_query("select * from tb_pekerjaan");
                    while ($data = mysql_fetch_assoc($query)) {
                    
                  ?>
                    <option value="<?php echo $data['id_pekerjaan']?>"><?php echo $data['pekerjaan']?></option>
                    <?php
                     } 
                     ?>
                  </select>
                </div>

                <div class="form-group">
                  <label>Jenis Sperpark Motor</label>
                  <select class="form-control" name="sukucadang">
                  <?php
                    $query = mysql_query("select * from tb_sukucadang");
                    while ($data = mysql_fetch_assoc($query)) {
                    
                  ?>
                    <option value="<?php echo $data['id_sukucadang']?>"><?php echo $data['sukucadang']?></option>
                    <?php
                     } 
                     ?>
                  </select>
                </div>

                 </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="clear">Clear</button>
              </div>
              </form>
            </div>
          </div>
      <?php
        error_reporting(0);
        require_once "../koneksi.php";
        if (isset($_POST['clear'])) {

          $user = mysql_query("select id_user from tb_user where email = '".$_SESSION['ses_email']."'");
          $datauser = mysql_fetch_assoc($user);
          $i = $datauser['id_user'];

        $sukucadang = mysql_query("select harga from tb_sukucadang where id_sukucadang = '".$_POST['sukucadang']."'");
        $data = mysql_fetch_assoc($sukucadang);
        $pk = mysql_query("select biaya from tb_pekerjaan where id_pekerjaan = '".$_POST['pekerjaan']."'");
        $data2 = mysql_fetch_assoc($pk);
        $total = $data['harga'] + $data2['biaya'];

          $sql = "INSERT into tb_nota ( id_user, id_pelanggan, id_pekerjaan, id_sukucadang, total) values(
            '".$i."',
            '".$_POST['nama_pelanggan']."',
            '".$_POST['pekerjaan']."',
            '".$_POST['sukucadang']."',
            '".$total."')";

            $query = mysql_query($sql) or die (mysql_error());

            if ($query) {

                echo "<div class='alert alert-success'>
                <a href='?page=datapemilik' class='close' data-dismiss='alert'>&times;
                    </a>Berhasil Diubah
                    </div>";
                echo "<meta http-equiv='refresh'content='1; url=?page=datapemilik'>";
            }else{
                echo "<div class='alert alert-danger'>
                  <a href='' class='close' data-dismiss='alert'>&times;
                  </a>Gagal Ubah !
                  </div>";
                }
        }
      ?>
          </div>
</div>
</section>