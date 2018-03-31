<!DOCTYPE html>
<html>
<head>
  <title>Data Suku Cadang</title>
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
                <th>Nama Suku Cadang</th>
                <th>Harga</th>
                <th>Kelola</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $query = mysql_query("SELECT * FROM tb_sukucadang")or die(mysql_error());
              $no = 1;
              while ($data = mysql_fetch_array($query)) 
              {
                ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $data['sukucadang'];?></td>
                  <td><?php echo "Rp.".$data['harga'].",00";?></td>
                  <td>
                  <a href="?page=ubah_sukucadang&id=<?php echo $data['id_sukucadang'];?>"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></a>
                  <a href="?page=hapus_sukucadang&id=<?php echo $data ['id_sukucadang'];?>" onClick="return confirm('Yakin menghapus data ?');"> <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button></a>
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