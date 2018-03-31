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
                <th>No.Urut</th>
                <th>Nama Pembawa / Pelanggan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $query = mysql_query("SELECT * FROM tb_pelanggan")or die(mysql_error());
              $no = 1;
              while ($data = mysql_fetch_array($query)) 
              {
                ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $data['no_urut'];?></td>
                  <td><?php echo $data['nama_pembawa'];?></td>
                  <td>
                  <a href="?page=servis&id=<?php echo $data['id_pelanggan'];?>"><button type="button" class="btn btn-default btn-sm"><img src="imgFoto/10.png" height="15"></button></a>
                  <a href="?page=hapus_pelanggan&id=<?php echo $data ['id_pelanggan'];?>" onClick="return confirm('Yakin menghapus data ?');"> <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button></a>
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