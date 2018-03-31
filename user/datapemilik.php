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
        <div class="box-header">
        </div>
        <!-- /.box-header -->
        <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Pelanggan / Pembawa</th>
                <th>Pekerjaan</th>
                <th>Biaya</th>
                <th>Suku Cadang</th>
                <th>Harga</th>
                <th>Total</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $query = mysql_query("SELECT nama_pembawa, pekerjaan, biaya, sukucadang, harga, total from tb_nota, tb_pelanggan, tb_pekerjaan, tb_sukucadang group by nama_pembawa;")or die(mysql_error());
              $no = 1;
              while ($data = mysql_fetch_array($query)) 
              {
                ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $data['nama_pembawa'];?></td>
                  <td><?php echo $data['pekerjaan'];?></td>
                  <td><?php echo $data['biaya'];?></td>
                  <td><?php echo $data['sukucadang'];?></td>
                  <td><?php echo $data['harga'];?></td>
                  <td><?php echo $data['total'];?></td>
                  <td>
                  <a href="?page=ubah_pemilik&id=<?php echo $data['id_pekerjaan'];?>"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></a>
                  <a href="?page=hapus_pemilik&id=<?php echo $data['id_nota'];?>" onClick="return confirm('Yakin menghapus data ?');"> <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button></a>
                  <a href="?page=lihat_pemilik&id=<?php echo $data['id_pemilik'];?>"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></a>
                  </td>
                </tr>
                <?php
                $no ++;
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>