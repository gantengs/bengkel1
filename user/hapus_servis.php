<?php
	include "../koneksi.php";
	
	$sql_hapus = "delete from tb_pekerjaan where id_pekerjaan='".$_GET['id']."'";
	$query_hapus = mysql_query($sql_hapus) or die (mysql_error());
		
		if ($query_hapus) {
			echo "<div class='alert alert-success'>
				<a href='?page=dataservis' class='close' data-dismiss='alert'>&times;
				</a>Hapus Berhasil
				</div>";
			echo "<meta http-equiv='refresh'content='1; url=?page=dataservis'>";
		}else{
			echo"<script>alert('Hapus gagal !')</script>";
		}
?>