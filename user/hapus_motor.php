<!DOCTYPE html>
<html>
<head>
	<title>jajal</title>
</head>
<body>
		<form method="post">
			<input type="text" name="suku" placeholder="Sukucadang">
			<input type="text" name="peke" placeholder="peke">
			<input type="submit" name="total">
		</form>
<?php
		require_once "../koneksi.php";

		if (isset($_POST['total'])) {

			$sukucadang = mysql_query("select harga from tb_sukucadang where id_sukucadang = '".$_POST['suku']."'");
			$data = mysql_fetch_assoc($sukucadang);
			$pk = mysql_query("select biaya from tb_pekerjaan where id_pekerjaan = '".$_POST['peke']."'");
			$data2 = mysql_fetch_assoc($pk);
			$total = $data['harga'] + $data2['biaya'];

			echo $total;
		
		}
?>
</body>
</html>