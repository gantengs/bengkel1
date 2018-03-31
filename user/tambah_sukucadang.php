<section class="content">
<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              
              <form method="post" enctype="multipart/form-data">
                  <h3 class="box-title">TAMBAH DATA
                    <small>Bengkel Ahas</small>
                  </h3>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Suku Cadang</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="sukucadang" placeholder="Suku Cadang">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="harga" placeholder="Harga">
                </div>
                 </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
              </div>
              </form>
            </div>
          </div>
      <?php
        error_reporting(0);
        require_once "../koneksi.php";
        if (isset($_POST['simpan'])) {

          $sql_insert = "Insert into tb_sukucadang (sukucadang, harga) values(
            '".$_POST['sukucadang']."',
            '".$_POST['harga']."')";

            $query_insert = mysql_query($sql_insert) or die (mysql_error());

            if ($query_insert) {

                echo "<div class='alert alert-success'>
                <a href='?page=sukucadang' class='close' data-dismiss='alert'>&times;
                    </a>Berhasil Disimpan
                    </div>";
                echo "<meta http-equiv='refresh'content='1; url=?page=sukucadang'>";
            }else{
                echo "<div class='alert alert-danger'>
                  <a href='' class='close' data-dismiss='alert'>&times;
                  </a>Gagal Simpan !
                  </div>";
                }
        }
      ?>
          </div>
</div>
</section>