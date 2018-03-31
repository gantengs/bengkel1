<?php
	if(isset($_GET['page'])) {

		switch ($_GET['page']) {

			case 'utama' :
				require_once "utama.php";
				break;
			case 'servis' :
				require_once "servis.php";
				break;
			case 'tambahdata' :
				require_once "tambahdata.php";
				break;
			case 'ubah_pelanggan' :
				require_once "ubah_pelanggan.php";
				break;
			case 'datapelanggan' :
				require_once "datapelanggan.php";
				break;
			case 'data' :
				require_once "data.php";
				break;
			case 'hapus_nota' :
				require_once "hapus_nota.php";
				break;
			case 'hapus_pelanggan' :
				require_once "hapus_pelanggan.php";
				break;
			case 'lihat_pembawa' :
				require_once "lihat_pembawa.php";
				break;
			case 'sukucadang' :
				require_once "sukucadang.php";
				break;
			case 'tambah_sukucadang' :
				require_once "tambah_sukucadang.php";
				break;
			case 'ubah_sukucadang' :
				require_once "ubah_sukucadang.php";
				break;
			case 'hapus_sukucadang' :
				require_once "hapus_sukucadang.php";
				break;
			case 'dataservis' :
				require_once "dataservis.php";
				break;
			case 'tambah_servis' :
				require_once "tambah_servis.php";
				break;
			case 'ubah_servis' :
				require_once "ubah_servis.php";
				break;
			case 'hapus_servis' :
				require_once "hapus_servis.php";
				break;
			case 'lihat_servis' :
				require_once "lihat_servis.php";
				break;
			case 'buat_nota' :
				require_once "buat_nota.php";
				break;
			}
	}else{ 
		require_once "utama.php";
	}
?> 
