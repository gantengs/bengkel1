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
                <th>No.urut</th>
                <th>Tgl.Service</th>
                <th>No.Mesin</th>
                <th>No.Rangka</th>
                <th>No.Polisi</th>
                <th>Tipe</th>
                <th>Tahun</th>
                <th>Km</th>
                <th>Kelola</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $query = mysql_query("SELECT * FROM tb_motor")or die(mysql_error());
              $no = 1;
              while ($data = mysql_fetch_array($query)) 
              {
                ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $data['no_urut'];?></td>
                  <td><?php echo date_format(new DateTime($data['tglservis']),'d M Y') ;?></td>
                  <td><?php echo $data['no_mesin'];?></td><td><?php echo $data['no_rangka'];?></td><td><?php echo $data['no_polisi'];?></td>
                  <td><?php echo $data['tipe'];?></td>
                  <td><?php echo $data['tahun'];?></td>
                  <td><?php echo $data['km'];?></td>
                  <td>
                  <a href="?page=ubah_motor&id=<?php echo $data['id_motor'];?>"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></a>
                  <a href="?page=hapus_motor&id=<?php echo $data ['id_motor'];?>" onClick="return confirm('Yakin menghapus data ?');"> <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button></a>
                  <a href="?page=lihat_motor&id=<?php echo $data['id_motor'];?>"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></a>
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