<?php
	if(isset($_GET['page'])) { 
		switch ($_GET['page']) {
			
			case 'daftar' :
				require_once "daftar.php";
				break;
			case 'login' :
				require_once "login.php";
				break;
			}
	}else{  //jika page kosong
		require_once "login.php";
	}
?> 
