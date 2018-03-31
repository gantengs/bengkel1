<section class="content">
<div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header">
              
              <form method="post" enctype="multipart/form-data">
                  <h3 class="box-title">TAMBAH DATA
                    <small>Bengkel Ahas</small>
                  </h3>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Pembawa</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="nama" placeholder="Nama Pembawa">
                </div>
                <div class="form-group">
                  <label>No.Urut</label>
                  <select class="form-control" name="id_motor">
                  <?php
                    $query = mysql_query("select * from tb_motor order by no_urut desc");
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
                  <input type="text" class="form-control" id="exampleInputEmail1" name="alamat" placeholder="Alamat">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kecamatan</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="kec" placeholder="Kecamatan">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Telp</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="telp" placeholder="Telp">
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

          $sql_insert = "Insert into tb_pembawa (id_motor, nama_pembawa, alamat, kec, telp) values(
            '".$_POST['id_motor']."',
            '".$_POST['nama']."',
            '".$_POST['alamat']."',
            '".$_POST['kec']."',
            '".$_POST['telp']."')";

            $query_insert = mysql_query($sql_insert) or die (mysql_error());

            if ($query_insert) {

                echo "<div class='alert alert-success'>
                    </a>Berhasil Disimpan, Silakan anda klik tab 3
                    </div>";
            }else{
                echo "<div class='alert alert-danger'>
                  <a href='' class='close' data-dismiss='alert'>&times;
                  </a>Gagal Simpan !
                  </div>";
                }
        }
      ?>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="callout callout-info">
                <h4>Tip!</h4>

                <p>Silakan anda menuliskan data tentang pembawa. dalam penulisan sem diisi atau tidak terkecuali untuk nomer urut karena sangat penting dalam menentukan antrian pelanggan</p>
              </div>
            </div>
          </div>
</div>
</section>