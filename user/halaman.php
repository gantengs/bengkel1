<?php
	if(isset($_GET['page'])) {  //jika page tidak kosong
	/* 
	membuat kondisi ketika ada pemanggilan file 
	menggunakan kata kunci page
	*/
		switch ($_GET['page']) {
			case 'profil' :
				require_once "profil.php";
				break;
			case 'utama' :
				require_once "utama.php";
				break;
			case 'datamotor' :
				require_once "datamotor.php";
				break;
			case 'tambah_motor' :
				require_once "tambah_motor.php";
				break;
			case 'tambahdata' :
				require_once "tambahdata.php";
				break;
			case 'ubah_motor' :
				require_once "ubah_motor.php";
				break;
			case 'datapembawa' :
				require_once "datapembawa.php";
				break;
			case 'datapemilik' :
				require_once "datapemilik.php";
				break;
			case 'hapus_motor' :
				require_once "hapus_motor.php";
				break;
			case 'datapembawa' :
				require_once "datapembawa.php";
				break;
			case 'tambah_pembawa' :
				require_once "tambah_pembawa.php";
				break;
			case 'ubah_pembawa' :
				require_once "ubah_pembawa.php";
				break;
			case 'hapus_pembawa' :
				require_once "hapus_pembawa.php";
				break;
			case 'lihat_pembawa' :
				require_once "lihat_pembawa.php";
				break;
			case 'datapemilik' :
				require_once "datapemilik.php";
				break;
			case 'tambah_pemilik' :
				require_once "tambah_pemilik.php";
				break;
			case 'ubah_pemilik' :
				require_once "ubah_pemilik.php";
				break;
			case 'hapus_pemilik' :
				require_once "hapus_pemilik.php";
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
			case 'lihat_sukucadang' :
				require_once "lihat_sukucadang.php";
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
			}
	}else{ 
		require_once "tambah_motor.php";
	}
?> 
