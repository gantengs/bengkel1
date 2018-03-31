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
                <th>Suku Cadang</th>
                <th>Total</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $query = mysql_query("select tb_nota.id_nota, tb_nota.total, tb_pelanggan.nama_pembawa, tb_pekerjaan.pekerjaan, tb_sukucadang.sukucadang from tb_nota inner join tb_pelanggan on tb_pelanggan.id_pelanggan=tb_nota.id_pelanggan inner join tb_pekerjaan on tb_pekerjaan.id_pekerjaan=tb_nota.id_pekerjaan inner join tb_sukucadang on tb_sukucadang.id_sukucadang=tb_nota.id_sukucadang")or die(mysql_error());
              $no = 1;
              while ($data = mysql_fetch_array($query)) 
              {
                ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $data['nama_pembawa'];?></td>
                  <td><?php echo $data['pekerjaan'];?></td>
                  <td><?php echo $data['sukucadang'];?></td>
                  <td><?php echo $data['total'];?></td>
                  <td>
                  <a href="?page=buat_nota&id=<?php echo $data['id_nota'];?>"><button type="button" class="btn btn-default btn-sm"><img src="imgFoto/10.png" height="15"></button></a>
                  <a href="?page=hapus_nota&id=<?php echo $data ['id_nota'];?>" onClick="return confirm('Yakin menghapus data ?');"> <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button></a>
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