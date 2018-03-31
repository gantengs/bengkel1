<?php
    $query = mysql_query("select * from tb_pelanggan, tb_pekerjaan, tb_sukucadang, tb_nota where tb_pelanggan.id_pelanggan = tb_nota.id_pelanggan and id_nota = '".$_GET['id']."' group by nama_pembawa");
    $data = mysql_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Data Motor</title>
</head>
<body>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      
      <div class="box">
        <div class="box-body">
              <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <td colspan="4"><center>FORM SERVICE ADVISOR</center></td>
                </tr>
              </thead>
              <tr>
                <td><b>DATA MOTOR</b></td>
                <td></td>
                <td><b>DATA PEMBAWA</b></td>
                <td></td>
              </tr>
                <tr>
                  <td>No.Urut</td>
                  <td><p><?php echo $data['no_urut']?></p></td>
                  <td>Nama Pembawa</td>
                  <td><p><?php echo $data['nama_pembawa']?></p></td>
                </tr>
                <tr>
                  <td>Tanggal Servis</td>
                  <td><p><?php echo date_format(new DateTime($data['tgl_servis']),'d M Y') ;?></p></td>
                  <td>Alamat</td>
                  <td><p><?php echo $data['alamat']?></p></td>
                </tr>
                <tr>
                  <td>No.Mesin</td>
                  <td><p><?php echo $data['no_mesin']?></p></td>
                  <td>Kel / Kec</td>
                  <td><p><?php echo $data['kec']?></p></td>
                </tr>
                <tr>
                  <td>No.Rangka</td>
                  <td><p><?php echo $data['no_rangka']?></p></td>
                  <td>No.Telp</td>
                  <td><p><?php echo $data['telp']?></p></td>
                </tr>
                <tr>
                  <td>No.Polisi</td>
                  <td><p><?php echo $data['no_polisi']?></p></td>
                  <td><b>DATA PEMILIK</b></td>
                  <td><p></p></td>
                </tr>
                <tr>
                  <td>Type</td>
                  <td><p><?php echo $data['tipe']?></p></td>
                  <td>Nama Pemilik</td>
                  <td><p><?php echo $data['nama_pemilik']?></p></td>
                </tr>
                <tr>
                  <td>Tahun</td>
                  <td><p><?php echo $data['tahun']?></p></td>
                  <td>Alamat</td>
                  <td><p><?php echo $data['alamat']?></p></td>
                </tr>
                <tr>
                  <td>KM</td>
                  <td><p><?php echo $data['km']?></p></td>
                  <td>Kel / Kec</td>
                  <td><p><?php echo $data['kec']?></p></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td>Telp</td>
                  <td><p><?php echo $data['telp']?></p></td>
                </tr>
                <tr>
                  <td>Pekerjaan</td>
                  <td><?php echo $data['pekerjaan']?></td>
                  <td>Estimasi Biaya</td>
                  <td><?php echo $data['biaya']?></td>
                </tr>
                <tr>
                  <td>Sukucadang</td>
                  <td><?php echo $data['sukucadang']?></td>
                  <td>Estimasi Biaya</td>
                  <td><p><?php echo $data['harga']?></p></td>
                </tr>
                <tr>
                  <td>Total</td>
                  <td><?php echo $data['total']?></td>
                  <td></td>
                  <td><p></p></td>
                </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  window.print();
</script>
</body>
</html>