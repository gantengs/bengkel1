<?php
  require_once "../koneksi.php";
  $query1 = mysql_query("SELECT * from tb_sukucadang where id_sukucadang = '".$_GET['id']."'")or die(mysql_error());
  $data1 = mysql_fetch_array($query1);
?>
<section class="content">
<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              
              <form method="post" enctype="multipart/form-data">
                  <h3 class="box-title">UBAH DATA
                    <small>Bengkel Ahas</small>
                  </h3>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Suku Cadang</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="sukucadang" placeholder="Suku Cadang" value="<?php echo $data1['sukucadang']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="harga" placeholder="Harga" value="<?php echo $data1['harga']; ?>">
                </div>
                 </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="ubah">Ubah</button>
              </div>
              </form>
            </div>
          </div>
      <?php
        error_reporting(0);
        require_once "../koneksi.php";
        if (isset($_POST['ubah'])) {

          $sql = "update tb_sukucadang set
            sukucadang = '".$_POST['sukucadang']."',
            harga = '".$_POST['harga']."' where id_sukucadang = '".$data1['id_sukucadang']."'";

            $query = mysql_query($sql) or die (mysql_error());

            if ($query) {

                echo "<div class='alert alert-success'>
                <a href='?page=sukucadang' class='close' data-dismiss='alert'>&times;
                    </a>Berhasil DiUbah
                    </div>";
                echo "<meta http-equiv='refresh'content='1; url=?page=sukucadang'>";
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