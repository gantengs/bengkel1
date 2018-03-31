<?php
  $query = mysql_query("SELECT * from tb_pelanggan where id_pelanggan = '".$_GET['id']."'");
  $data = mysql_fetch_assoc($query);

?>
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
                  <input type="text" class="form-control" id="exampleInputEmail1" name="nourut" placeholder="No.Urut" value="<?php echo $data['no_urut']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No.Mesin</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="nomesin" placeholder="No.Mesin" value="<?php echo $data['no_mesin']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No.Rangka</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="norangka" placeholder="No.Rangka" value="<?php echo $data['no_rangka']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No.Polisi</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="nopolisi" placeholder="No.Polisi" value="<?php echo $data['no_polisi']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tipe</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="tipe" placeholder="Tipe" value="<?php echo $data['tipe']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tahun</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="tahun" placeholder="Tahun" value="<?php echo $data['tahun']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Km</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="km" placeholder="km" value="<?php echo $data['km']; ?>">
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
                  <input type="text" class="form-control" id="exampleInputEmail1" name="nama_pembawa" placeholder="Nama Pembawa" value="<?php echo $data['nama_pembawa']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="alamat_pembawa" placeholder="Alamat" value="<?php echo $data['alamat']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kecamatan</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="kec_pembawa" placeholder="Kecamatan" value="<?php echo $data['kec']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Telp</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="telp_pembawa" placeholder="Telp" value="<?php echo $data['telpp']; ?>">
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
                  <input type="text" class="form-control" id="exampleInputEmail1" name="nama_pemilik" placeholder="Nama Pemilik" value="<?php echo $data['nama_pemilik']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="alamat_pemilik" placeholder="Alamat" value="<?php echo $data['alamatp']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kecamatan</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="kec_pemilik" placeholder="Kecamatan" value="<?php echo $data['kecp']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Telp</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="telp_pemilik" placeholder="Telp" value="<?php echo $data['telp']; ?>">
                </div>
                 </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="simpan">Ubah</button>
              </div>
              </form>
            </div>
          </div>
      <?php
        error_reporting(0);
        require_once "../koneksi.php";
        if (isset($_POST['simpan'])) {

          $sql_insert = "UPDATE tb_pelanggan set(
            no_urut = '".$_POST['nourut']."',
            no_mesin = '".$_POST['nomesin']."',
            no_rangka = '".$_POST['norangka']."',
            no_polisi = '".$_POST['nopolisi']."',
            tipe = '".$_POST['tipe']."',
            tahun = '".$_POST['tahun']."',
            km = '".$_POST['km']."',
            nama_pembawa = '".$_POST['nama_pembawa']."',
            alamatp = '".$_POST['alamat_pembawa']."',
            kec = '".$_POST['kec_pembawa']."',
            telpp ='".$_POST['telp_pembawa']."',
            nama_pemilik = '".$_POST['nama_pemilik']."',
            alamatp ='".$_POST['alamat_pemilik']."',
            kecp = '".$_POST['kec_pemilik']."',
            telp ='".$_POST['telp_pemilik']."') where id_pelanggan = '".$data['id_pelanggan']."'";

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
