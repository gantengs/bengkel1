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
                  <label for="exampleInputEmail1">Nama Pemilik</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="nama" placeholder="Nama Pemilik">
                </div>

                <div class="form-group">
                  <label>Nama Pembawa</label>
                  <select class="form-control" name="pembawa">
                  <?php
                  
                    $query = mysql_query("select * from tb_pembawa order by nama_pembawa desc limit 0, 1");
                    while ($data = mysql_fetch_assoc($query)) {
                    
                  ?>
                    <option value="<?php echo $data['id_pembawa']?>"><?php echo $data['nama_pembawa']?></option>
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

          $sql_insert = "Insert into tb_pemilik (id_pembawa, nama_pemilik, alamat, kec, telp) values(
            '".$_POST['pembawa']."',
            '".$_POST['nama']."',
            '".$_POST['alamat']."',
            '".$_POST['kec']."',
            '".$_POST['telp']."')";

            $query_insert = mysql_query($sql_insert) or die (mysql_error());

            if ($query_insert) {

                echo "<div class='alert alert-success'>
                    </a>Berhasil Disimpan, Silakan anda klik tab 4
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

                <p>Silakan anda menuliskan data yang pembawa motor. dalam penulisan semua data harus diisi atau tidak terkecuali untuk nomer urut karena sangat penting dalam menentukan antrian pelanggan</p>
              </div>
            </div>
          </div>
</div>
</section>