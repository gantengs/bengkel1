<?php
  require_once "../koneksi.php";
  $query1 = mysql_query("select * from tb_pembawa where id_pembawa = '".$_GET['id']."'")or die(mysql_error());
  $data1 = mysql_fetch_assoc($query1);
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
                  <label for="exampleInputEmail1">Nama Pembawa</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data1['nama_pembawa'];?>" name="nama" placeholder="Judul">
                </div>
                <div class="form-group">
                  <label>No.Urut</label>
                  <select class="form-control" name="id_motor">
                  <?php
                    $query = mysql_query("select * from tb_motor");
                    while ($data = mysql_fetch_assoc($query)) {
                    
                  ?>
                    <option value="<?php echo $data['id_motor']?>"><?php echo $data['no_urut']?></option>
                    <?php
                     } 
                     ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data1['alamat'];?>" name="alamat" placeholder="Deskripsi">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kecamatan</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $data1['kec'];?>" name="kec" placeholder="Sumber Foto">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Telp</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $data1['telp'];?>" name="telp" placeholder="Sumber Foto">
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

          $sql = "update tb_pembawa set
            id_motor = '".$_POST['id_motor']."',
            nama_pembawa = '".$_POST['nama']."',
            alamat = '".$_POST['alamat']."',
            kec = '".$_POST['kec']."',
            telp = '".$_POST['telp']."' where id_pembawa = '".$data1['id_pembawa']."'";

            $query_update = mysql_query($sql) or die (mysql_error());

            if ($query_update) {

                echo "<div class='alert alert-success'>
                <a href='?page=datapembawa' class='close' data-dismiss='alert'>&times;
                    </a>Berhasil Diubah
                    </div>";
                echo "<meta http-equiv='refresh'content='1; url=?page=datapembawa'>";
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