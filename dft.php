 <?php
            session_start();  //memulai session
          
            if (isset($_SESSION['ses_email'])=="") {
            } else {
              echo"<content='0;url=?page=beranda'>";  
            }
?>
<html><head>
<title>Motive Mag a Entertainment Category Flat Bootstrap Responsive Website Template | Fashion :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Motive Mag Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen">
<!-- Custom Theme files -->
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css">	
<script src="js/jquery.min.js"> </script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>

<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
</head>
<body>
	<!--start-header-->
	  <div class="header" id="home">
	 <div class="content white">
		<nav class="navbar navbar-default" role="navigation">
		   <div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
					<a class="navbar-brand" href="?page=beranda"><h1>Santri<span> Menulis</span></h1> </a>
			</div>
			<!--/.navbar-header-->
		
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					 
						
				    <li class="dropdown">
						<a href="index.php" class="dropdown-toggle" data-toggle="dropdown">Artikel<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="?page=opini">Opini</a></li>
							<li class="divider"></li>
							<li><a href="?page=sastra">Sastra</a></li>
							<li class="divider"></li>
							<li><a href="?page=esai">Esai</a></li>
							<li class="divider"></li>
							<li><a href="?page=feature">Feature</a></li>
							<li class="divider"></li>
							
						</ul>
					  </li>
					<li><a href="?page=berita">Berita</a></li>
					  <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Penulis<b class="caret"></b></a>
						<ul class="dropdown-menu multi-column columns-2">
							<div class="row">
								
								<div class="col-sm-6">
									<ul class="multi-column-dropdown">
									   <li><a href="?page=terfavorit">Terfavorit</a></li>	
										<li class="divider"></li>
										<li><a href="?page=terproduktif">Terproduktif</a></li>
									    <li class="divider"></li>
									</ul>
								</div>
							</div>
						</ul>
					</li>
					<li><a href="?page=contact">Contact</a></li>
				</ul>
			</div>
			<!--/.navbar-collapse-->
	 <!--/.navbar-->
     </div>
	</nav>
  </div>
 </div>
	      <div class="banner two">
       <div class="container">
	       <h2 class="inner-tittle">Akun Saya</h2>
        </div>
  </div>
<div class="account">
	<div class="container">
	       <div class="account-bottom">
				<div class="col-md-6 account-left">
					<form method="post">
					<div class="account-top heading">
						<h3>NEW CUSTOMERS</h3>
					</div>
					<div class="address">
						<span>Nama</span>
						<input type="text" class="form-control" name="nama_user" placeholder="Full name">
					</div>
					<div class="address">
						<span>Alamat</span>
						<input type="text" class="form-control" name="alamat" placeholder="Alamat">
					</div>
					<div class="address">
						<span>Jenis Kelamin</span>
				        <select name="jekel">
				          <option value="Laki-Laki">Laki-Laki</option>
				          <option value="Perempuan">Perempuan</option>
				        </select>
					</div>
					<div class="address">
						<span>Email</span>
        				<input type="email" class="form-control" name="email" placeholder="Email">
					</div>
					<div class="address">
						<span>Password</span>
        				<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
					<div class="address">
						<span>Pekerjaan</span>
        				<input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan">
					</div>
					
					<div class="address new">
						<input type="submit" value="Daftar" name="simpan">
					</div>
					</form>
						<?php
					      require_once "koneksi.php";
					      if (isset($_POST['simpan'])) {
					        $nama = $_POST['nama_user'];
					        $email = $_POST['email'];
					        $password = $_POST['password'];
					        $alamat = $_POST['alamat'];
					        $jekel = $_POST['jekel'];
					        $pekerjaan = $_POST['pekerjaan'];
					        $validasi = mysql_query("SELECT email from user where email = '".$_POST['email']."'");
					        $cek = mysql_num_rows($validasi);

					        if ($nama == "" || $email =="" || $password == "" || $pekerjaan == "") {
					          echo "<center>Kolom masih ada yang kosong</center>";
					        }elseif ($cek == 0) {
					          $query = mysql_query("INSERT INTO user (nama, email, password, alamat, jekel, pekerjaan) values ('".$nama."','".$email."', '".$password."', '".$alamat."', '".$jekel."', '".$pekerjaan."')")or die(mysql_error());
					          echo "<div class='alert alert-success'><a href='?page=beranda' class='close' data-dismiss='alert'>&times;</a>Daftar Berhasil</div>";
					        }else{
					          echo "<center>Email anda sudah terdaftar</center>";
					          }
					        }

					   ?>
				</div> 
				<div class="col-md-6 account-left second">
					<form  method="post">
						<div class="account-top heading">
							<h3>LOGIN</h3>
						</div>
						<div class="address">
							<span>Email</span>
       						<input type="email" class="form-control" name="email" placeholder="Email">
						</div>
						<div class="address">
							<span>Password</span>
        					<input type="password" class="form-control" name="password" placeholder="Password">
						</div>
						<div class="address">
							<a class="forgot" href="#">Forgot Your Password?</a>
							<input type="submit" value="Login" name="login">
						</div>
					 </form>
					 <?php

			          if (isset($_POST['login'])) {

			            $query = mysql_query("SELECT id_user, email, password from user where email = '".$_POST['email']."' and password='".$_POST['password']."'")or die(mysql_error());
			            $data = mysql_fetch_array($query);
			            $cek 	= mysql_num_rows($query);

			            if ($cek >= 1) {
			              echo"<meta http-equiv='refresh' content='0;url=user/index.php'>";
			              $_SESSION["ses_email"]=$data['email'];
			              $_SESSION["ses_user"]=$data['id_user'];
			            }else{
			              echo "<div align='center'>
			              <font color='red'> Login Gagal !!! </font>
			              </div>";
			            }
			          }

			      ?>
					  </div>
				 </div>
				<div class="clearfix"></div>
			</div>
</div>
			<div class="footer-section">
			   <div class="container">
					<div class="footer-grids">
						<div class="col-md-4 footer-grid">
						<h4>EDITOR PICKS</h4>
						  <div class="editor-pics">
							 <div class="col-md-3 item-pic">
							   <img src="images/f1.jpg" class="img-responsive" alt="">

							   </div>
					   	        <div class="col-md-9 item-details">
							    	<h5 class="inner"><a href="#">More Than 120 ER Visits Linked To Synthetic WordPress In NYC...</a></h5>
								      <div class="td-post-date">Feb 22, 2015</div>
							     </div>
								<div class="clearfix"></div>
							</div>
							 <div class="editor-pics">
							 <div class="col-md-3 item-pic">
							   <img src="images/f2.jpg" class="img-responsive" alt="">

							   </div>
					   	        <div class="col-md-9 item-details">
							    	<h5 class="inner"><a href="#">More Than 120 ER Visits Linked To Synthetic WordPress In NYC...</a></h5>
								      <div class="td-post-date">Feb 22, 2015</div>
							     </div>
								<div class="clearfix"></div>
							</div>
							 <div class="editor-pics">
							 <div class="col-md-3 item-pic">
							   <img src="images/f3.jpg" class="img-responsive" alt="">

							   </div>
					   	        <div class="col-md-9 item-details">
							    	<h5 class="inner"><a href="#">More Than 120 ER Visits Linked To Synthetic WordPress In NYC...</a></h5>
								      <div class="td-post-date">Feb 22, 2015</div>
							     </div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-md-4 footer-grid">
							<h4>POPULAR POSTS</h4>
								<div class="editor-pics">
										 <div class="col-md-3 item-pic">
										   <img src="images/f4.jpg" class="img-responsive" alt="">

										   </div>
											<div class="col-md-9 item-details">
												<h5 class="inner"><a href="#">More Than 120 ER Visits Linked To Synthetic WordPress In NYC...</a></h5>
												  <div class="td-post-date">Feb 22, 2015</div>
											 </div>
											<div class="clearfix"></div>
										</div>
										<div class="editor-pics">
							 <div class="col-md-3 item-pic">
							   <img src="images/f3.jpg" class="img-responsive" alt="">

							   </div>
					   	        <div class="col-md-9 item-details">
							    	<h5 class="inner"><a href="#">More Than 120 ER Visits Linked To Synthetic WordPress In NYC...</a></h5>
								      <div class="td-post-date">Feb 22, 2015</div>
							     </div>
								<div class="clearfix"></div>
							</div>
							<div class="editor-pics">
							 <div class="col-md-3 item-pic">
							   <img src="images/f2.jpg" class="img-responsive" alt="">

							   </div>
					   	        <div class="col-md-9 item-details">
							    	<h5 class="inner"><a href="#">More Than 120 ER Visits Linked To Synthetic WordPress In NYC...</a></h5>
								      <div class="td-post-date">Feb 22, 2015</div>
							     </div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-md-4 footer-grid">
								<h4>POPULAR CATEGORY</h4>
								<ul class="td-pb-padding-side">
									<li><a href="#">Architecture<span class="td-cat-no">15</span></a></li>
									<li><a href="#">New look 2015<span class="td-cat-no">14</span></a></li>
									<li><a href="#">Gadgets<span class="td-cat-no">14</span></a></li>
									<li><a href="#">Mobile and Phones<span class="td-cat-no">14</span></a></li>
									<li><a href="#">Recipes<span class="td-cat-no">14</span></a></li>
									<li><a href="#">Decorating<span class="td-cat-no">14</span></a></li>
									<li><a href="#">Interiors<span class="td-cat-no">14</span></a></li>
									<li><a href="#">Street fashion<span class="td-cat-no">13</span></a></li>
									<li><a href="#">Vogue<span class="td-cat-no">13</span></a></li>
								</ul>
								<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
	<!--//end-footer-section-->
			<!--/start-copyright-section-->
				<div class="copyright">
						  <p>© 2015 Motive Mag. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a> </p>
					</div>


				<!--start-smoth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: none;"><span id="toTopHover"></span> <span id="toTopHover" style="opacity: 1;"> </span></a>


<!--JS-->
  <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

<!--//JS-->


<a href="#" id="toTop">To Top</a></body></html>