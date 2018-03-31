	<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" name="alamat"  class="form-control" id="exampleInputEmail1" placeholder="Alamat">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tempat Lahir</label>
                  <input type="text" name="tempat" class="form-control" id="exampleInputEmail1" placeholder="Tempat Lahir">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Lahir</label>
                  <input type="date" name="lahir" class="form-control" id="datepicker" placeholder="Tanggal Lahir">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jenis Kelamin</label>
                  <input type="radio" name="jekel" value="laki-laki">
                  <input type="radio" name="jekel" value="Perempuan">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Pekerjaan</label>
                  <input type="text" name="pekerjaan" class="form-control" id="exampleInputPassword1" placeholder="Pekerjaan">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Status</label>
                  <input type="text" name="status" class="form-control" id="exampleInputPassword1" placeholder="Status">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" name="foto" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
              </div>
            </form>
            
              <?php
                require_once "../koneksi.php";

                $query2= mysql_query("SELECT * FROM user where email ='".$_SESSION['ses_email']."'")or die(mysql_error());
                $data = mysql_fetch_array($query2);

                if (isset($_POST['simpan'])) {
                  
                  
                  $nama = $_POST['nama'];
                  $alamat = $_POST['alamat'];
                  $tempat = $_POST['tempat'];
                  $Tanggal = $_POST['lahir'];
                  $jekel = $_POST['jekel'];
                  $pekerjaan = $_POST['pekerjaan'];
                  $status = $_POST['status'];
                  $foto = $_POST['foto'];
                  $id = $data['id_user'];

                  $query = mysql_query("INSERT INTO biodata (id_user, tempat_lahir, tgl_lahir, jenis_kelamin, pekerjaan, status, alamat, foto, nama) values ('".$id."','".$tempat."','".$Tanggal."','".$jekel."','".$pekerjaan."','".$status."','".$alamat."','".$foto."', '".$nama."')")or die(mysql_error());

                  if ($query) {
                    echo "Simpan Berhasil";
                            echo"<meta http-equiv='refresh' content='0;url=?page=profil'>"; 
                  }else{
                    echo "Gagal simpan";
                  }
                }

              ?>
          </div>
