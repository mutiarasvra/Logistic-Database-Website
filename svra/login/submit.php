<<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>SVRA EXPRESS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<script src="js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="js/chartinator.js" ></script>
    
    

<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="../dashboardddd/index.php"> <h1>SVRA EXPRESS</h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
							<!--search-box-->
								
<a href = "cektanggal.php" class = "btn btn-primary"> Cek Pengiriman </a>
<a href = "cekasuransi.php" class = "btn btn-warning"> Jenis Asuransi </a>
<a href = "cekpengiriman.php" class = "btn btn-primary"> Jenis Pengiriman </a>
							<div class="clearfix"> </div>
						 </div>
<a href = "cekpackaging.php" class = "btn btn-warning"> Jenis Packaging </a>
<a href = "cekpenerima.php" class = "btn btn-primary"> Penerima </a>
<a href = "cektujuan.php" class = "btn btn-warning"> Tempat Tujuan </a>

							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/p1.png" alt=""> </span> 
												<div class="user-name">
													<p>Admin</p>
													<span>Administrator</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script><br>
<!--inner block start here-->
<div class="inner-block">
<!--market updates updates-->
	 <div class="market-updates">
			<div class="col-md-8 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-8 market-update-left">
						<h3> TOTAL BIAYA </h3><br>
						<button class = "btn btn-primary" name = "c" > TRACKING </button>
					
					  <?php
				include 'config.php';
				if (isset ($_POST ['c'])) {
					$koneksi= mysqli_connect( $db_host, $db_user, $db_pass, $db_name); 
					$re 	    = $_POST['no_resi'];
					$apaya = mysqli_query($koneksi, "SELECT * from resi where no_resi='$re'") ;
					$he = mysqli_fetch_array ($apaya);
					$st = $he ['kode_status'];
					$apaapa= mysqli_query($koneksi, "SELECT * from status_pengiriman where kode_status='$st' ") ;
					$yey = mysqli_fetch_array ($apaapa);
					?>
					<table width ="500" >
					<tr bgcolor='lightblue'>
					<td> <h4> <center><font color = "black"><?php echo $he ['no_resi'];?> </font> </center></td>
					<td> <h4> <center><font color = "black"><?php echo $yey ['nama_status'];?> </font> </center></td>
					<td> <h4> <center> <font color = "black"><?php echo $yey ['keterangan'];?> </font> </center></td>
					</tr>
					</table>
					<?php	}	?>
					</div>
					
				  <div class="clearfix"> </div>
				  </div>
			</div>
		</div>
</div>
<br>
<br>						
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="send.php"><i class="fa fa-tachometer"></i><span>SEND</span></a></li>
		        <li id="menu-home" ><a href="home.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
				<li id="menu-home" ><a href="resi.php"><i class="fa fa-tachometer"></i><span> Resi </span></a></li>
				<li id="menu-home" ><a href="paket.php"><i class="fa fa-tachometer"></i><span>Paket Barang</span></a></li>
				<li><a href="#"><i class="fa fa-cogs"></i><span>Pengiriman</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul>
		            <li><a href="kecepatan.php">Kecepatan</a></li>
		            <li><a href="dimensi.php">Dimensi</a></li>	
					<li><a href="asuransi.php">Asuransi</a></li>
		            <li><a href="pack.php">Packaging</a></li>	
					<li><a href="status.php">Status</a></li>
		          </ul>
		        </li>
		        <li id="menu-comunicacao" ><a href="#"><i class="fa fa-book nav_icon"></i><span>Penerima</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-comunicacao-sub" >
		            <li id="menu-arquivos" ><a href="penerima.php">Data Penerima</a></li>
		            <li id="menu-arquivos" ><a href="jenispenerima.php">Jenis Penerima</a></li>
		          </ul>
		        </li>
		        <li><a href="#"><i class="fa fa-envelope"></i><span>Rute dan Cakupan</span><span class="fa fa-angle-right" style="float: right"></span></a>
		        	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-boletim" ><a href="cakupan.php">Cakupan</a></li>
						<li id="menu-academico-boletim" ><a href="tarifjarakcak.php">Tarif Jarak Cakupan</a></li>
						<li id="menu-academico-boletim" ><a href="rute.php">Rute</a></li>
						<li id="menu-academico-avaliacoes" ><a href="kel.php">Kelurahan</a></li>
						<li id="menu-academico-avaliacoes" ><a href="kec.php">Kecamatan</a></li>
						<li id="menu-academico-avaliacoes" ><a href="kabkot.php">Kabupaten/Kota</a></li>
						<li id="menu-academico-avaliacoes" ><a href="prov.php">Provinsi</a></li>
						<li id="menu-academico-avaliacoes" ><a href="negara.php">Negara</a></li>						
		             </ul>
		        </li>
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     