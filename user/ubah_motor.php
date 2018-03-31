<?php
  require_once "../koneksi.php";
  $query = mysql_query("select * from tb_motor where id_motor = '".$_GET['id']."'")or die(mysql_error());
  $data = mysql_fetch_assoc($query);

?>
<section class="content">
<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              
              <form method="post" enctype="multipart/form-data">
                  <h3 class="box-title">TAMBAH DATA
                    <small>bengkel Ahas</small>
                  </h3>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">No.Urut</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="nourut" placeholder="Judul" value="<?php echo $data['no_urut']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Servis</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="tanggal" placeholder="Deskripsi" value="<?php echo $data['tglservis']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No.Mesin</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="nomesin" placeholder="Sumber Foto" value="<?php echo $data['no_mesin']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No.Rangka</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="norangka" placeholder="Sumber Foto" value="<?php echo $data['no_rangka']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No.Polisi</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="nopolisi" placeholder="Sumber Foto" value="<?php echo $data['no_polisi']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tipe</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="tipe" placeholder="Sumber Foto" value="<?php echo $data['tipe']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tahun</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="tahun" placeholder="Sumber Foto" value="<?php echo $data['tahun']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Km</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="km" placeholder="Sumber Foto" value="<?php echo $data['km']; ?>">
                </div>
                 </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="ubah">ubah</button>
              </div>
              </form>
            </div>
          </div>
      <?php
        error_reporting(0);
        require_once "../koneksi.php";
        if (isset($_POST['ubah'])) {

          $nourut = $_POST['nourut'];
          $tanggal = $_POST['tanggal'];
          $mesin = $_POST['nomesin'];
          $rangka = $_POST['norangka'];
          $polisi = $_POST['nopolisi'];
          $tipe = $_POST['tipe'];
          $tahun = $_POST['tahun'];
          $km = $_POST['km'];

          $sql = "UPDATE tb_motor set
           no_urut = '".$_POST['nourut']."',
           tglservis = '".$_POST['tanggal']."',
           no_mesin = '".$_POST['nomesin']."',
           no_rangka = '".$_POST['norangka']."',
           no_polisi = '".$_POST['nopolisi']."',
           tipe = '".$_POST['tipe']."',
           tahun = '".$_POST['tahun']."',
           km = '".$_POST['km']."' Where id_motor='".$data['id_motor']."'";
           
            $query_insert = mysql_query($sql) or die (mysql_error());

            if ($query_insert) {

                echo "<div class='alert alert-success'>
                <a href='?page=datamotor' class='close' data-dismiss='alert'>&times;
                    </a>Data Berhasil Diubah
                    </div>";
                echo "<meta http-equiv='refresh'content='1; url=?page=datamotor'>";
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