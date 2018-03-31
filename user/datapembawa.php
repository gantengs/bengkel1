<!DOCTYPE html>
<html>
<head>
  <title>Data Pembawa</title>
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
                <th>Nama Pembawa</th>
                <th>Alamat</th>
                <th>Kecamatan</th>
                <th>Telp</th>
                <th>Kelola</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $query = mysql_query("SELECT * FROM tb_pembawa")or die(mysql_error());
              $no = 1;
              while ($data = mysql_fetch_array($query)) 
              {
                ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $data['nama_pembawa'];?></td>
                  <td><?php echo $data['alamat'];?></td>
                  <td><?php echo $data['kec'];?></td>
                  <td><?php echo $data['telp'];?></td>
                  <td>
                  <a href="?page=ubah_pembawa&id=<?php echo $data['id_pembawa'];?>"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></a>
                  <a href="?page=hapus_pembawa&id=<?php echo $data ['id_pembawa'];?>" onClick="return confirm('Yakin menghapus data ?');"> <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button></a>
                  <a href="?page=lihat_pembawa&id=<?php echo $data['id_pembawa'];?>"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></a>
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