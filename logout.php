<?php
	session_start();	//memulai session
	
	//bersihkan variable ses_email dari session
	unset($_SESSION['ses_email']);
	
	//merefresh halaman ke index.php
	echo "<meta http-equiv='refresh' content='0;url=index.php'>";
?>