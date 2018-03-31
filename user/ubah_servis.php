<?php
    require_once "../koneksi.php";
    $query1 = mysql_query("SELECT * from tb_pekerjaan where id_pekerjaan = '".$_GET['id']."'")or die(mysql_error());
    $data1 = mysql_fetch_assoc($query1);
?>
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
                  <label for="exampleInputEmail1">Nama Servis</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="servis" placeholder="Servis" value="<?php echo $data1['pekerjaan']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Biaya</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="biaya" placeholder="Biaya" value="<?php echo $data1['biaya']; ?>">
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

        if (isset($_POST['ubah'])) {

          $sql = "update tb_pekerjaan set
            pekerjaan = '".$_POST['servis']."',
            biaya = '".$_POST['biaya']."' where id_pekerjaan = '".$data1['id_pekerjaan']."'";

            $query = mysql_query($sql) or die (mysql_error());

            if ($query) {

                echo "<div class='alert alert-success'>
                <a href='?page=dataservis' class='close' data-dismiss='alert'>&times;
                    </a>Berhasil DiUbah
                    </div>";
                echo "<meta http-equiv='refresh'content='1; url=?page=dataservis'>";
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