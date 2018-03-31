<section class="content">
<div class="row">
        <div class="col-md-4">
          <div class="box">
            <div class="box-header">
              
              <form method="post" enctype="multipart/form-data">
                  <h3 class="box-title">DATA MOTOR
                    <small>bengkel Ahas</small>
                  </h3>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">No.Urut</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="nourut" placeholder="No.Urut">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No.Mesin</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="nomesin" placeholder="No.Mesin">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No.Rangka</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="norangka" placeholder="No.Rangka">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No.Polisi</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="nopolisi" placeholder="No.Polisi">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tipe</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="tipe" placeholder="Tipe">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tahun</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="tahun" placeholder="Tahun">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Km</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="km" placeholder="km">
                </div>
                 </div>
            </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="box">
            <div class="box-header">
                  <h3 class="box-title">DATA PEMBAWA
                    <small>Bengkel Ahas</small>
                  </h3>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Pembawa</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="nama_pembawa" placeholder="Nama Pembawa">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="alamat_pembawa" placeholder="Alamat">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kecamatan</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="kec_pembawa" placeholder="Kecamatan">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Telp</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="telp_pembawa" placeholder="Telp">
                </div>
                 </div>
            </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="box">
            <div class="box-header">
                  <h3 class="box-title">DATA PEMILIK
                    <small>Bengkel Ahas</small>
                  </h3>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Pemilik</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="nama_pemilik" placeholder="Nama Pemilik">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="alamat_pemilik" placeholder="Alamat">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kecamatan</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="kec_pemilik" placeholder="Kecamatan">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Telp</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="telp_pemilik" placeholder="Telp">
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

          $sql_insert = "Insert into tb_pelanggan (no_urut, no_mesin, no_rangka, no_polisi, tipe, tahun, km, nama_pembawa, alamat, kec, telpp, nama_pemilik, alamatp, kecp, telp) values(
            '".$_POST['nourut']."',
            '".$_POST['nomesin']."',
            '".$_POST['norangka']."',
            '".$_POST['nopolisi']."',
            '".$_POST['tipe']."',
            '".$_POST['tahun']."',
            '".$_POST['km']."',
            '".$_POST['nama_pembawa']."',
            '".$_POST['alamat_pembawa']."',
            '".$_POST['kec_pembawa']."',
            '".$_POST['telp_pembawa']."',
            '".$_POST['nama_pemilik']."',
            '".$_POST['alamat_pemilik']."',
            '".$_POST['kec_pemilik']."',
            '".$_POST['telp_pemilik']."')";

            $query_insert = mysql_query($sql_insert) or die (mysql_error());

            if ($query_insert) {

                echo "<div class='alert alert-success'>
                    </a>Berhasil Disimpan
                    </div>";
                echo "<meta http-equiv='refresh'content='1; url=?page=datapelanggan'>";
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