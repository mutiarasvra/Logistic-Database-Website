k<<?php
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
									 <a href="home.php"> <h1>SVRA EXPRESS</h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
							<!--search-box-->
								
<a href = "cektujuan.php" class = "btn btn-primary"> Kelurahan </a>
<a href = "cektujuankec.php" class = "btn btn-warning"> Kecamatan </a>
<a href = "cektujuankabkot.php" class = "btn btn-primary"> Kabupaten/Kota </a>
							<div class="clearfix"> </div>
						 </div>
<a href = "cektujuanprov.php" class = "btn btn-warning"> Provinsi </a>
<a href = "cektujuannegara.php" class = "btn btn-primary"> Negara </a>
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

<div class="inner-block">
<!--market updates updates-->
	 <div class="market-updates">
			<div class="col-md-8 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-8 market-update-left">
					              <br> <font face = "lucida sans" <b><H1><center> JUMLAH PENERIMA DARI PROVINSI </font></center> </b></H1><br>
                            </div>
                            <div class="table-responsive">
                            <form method = "POST" enctype = "multipart/form-data">
							<div class = "form group">
							<label for = "provinsi"> Provinsi </label>
								<select name="kode_prov" id="kode_prov" class="form-control">
								<option value="">-- Pilih Provinsi -- </option>
								<?php 
								include 'config.php';
								$lo= mysqli_query ($koneksi, "SELECT * from provinsi") or die (mysqli_error($koneksi));
								$po= mysqli_fetch_array ($lo);
								 ?>
								 <?php do{ ?>
								 <option value="<?php echo $po['kode_prov']?>"><?php echo $po['provinsi'] ?></option>
								 <?php }while ($po= mysqli_fetch_array ($lo));?>
								</select>
							</div>
							
							<button class = "btn btn-primary" name = "check" > CHECK </button>
					  </form>
					  
					  
			
				</div>
									  <?php
				include 'config.php';
				if (isset ($_POST ['check'])) {
					$koneksi= mysqli_connect( $db_host, $db_user, $db_pass, $db_name); 
					$kja 	    = $_POST['kode_prov'];
					$ambil2 = mysqli_query($koneksi, "SELECT * from provinsi where kode_prov='$kja'") ;
					?><table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th><h2>KODE</h2></th>
									  <th><h2>PENERIMA </h2></th>
                                  </tr>
                              </thead>
					<?php
					$isi1 = mysqli_fetch_array ($ambil2);
					$re = $isi1 ['kode_prov'];
					$ambil3 = mysqli_query($koneksi, "SELECT * from provinsi,kabkota where '$re'=kabkota.kode_prov ") ;
					$isi3 = mysqli_fetch_array ($ambil3);
					$ambily = mysqli_query($koneksi, "SELECT * from provinsi where kode_prov ='$re'") ;
					$isiy = mysqli_fetch_array ($ambily);
					$ree = $isi3 ['kode_kabkota'];
					$ambil4 = mysqli_query($koneksi, "SELECT * from kabkota,kecamatan where '$ree'=kecamatan.kode_kabkota ") ;
					$isi4 = mysqli_fetch_array ($ambil4);
					$reee = $isi4 ['kode_kec'];	
					$ambil6 = mysqli_query($koneksi, "SELECT * from kelurahan,kecamatan where '$reee'=kelurahan.kode_kec ") ;
					$isi6 = mysqli_fetch_array ($ambil6);
					$ree1 = $isi6 ['kode_kel'];	
					$ambil5 = mysqli_query($koneksi, "SELECT * from penerima where kode_kel ='$ree1' ") ;
					while($isi5 = mysqli_fetch_array ($ambil5)){
					$jum = mysqli_num_rows ($ambil5);
					
					?>
								<tbody>
					<tr>
                                <td><h2><?php echo $isi5 ['kode_penerima'];?></h2></td>
                                <td><h2><?php echo $isi5 ['nama'];?></h2></td>					
						</tr>
						<?php	}	?>
					</table>
					<?php $jum = mysqli_num_rows ($ambil5);?>
					<h2><?php echo $isiy ['kode_prov'];?><?php echo " - "?> <?php echo $isiy ['provinsi'];?></h2>
					
					<h2><?php echo "Jumlah : "?> <?php echo $jum ;?></h2>
					<?php	}	?>

				  <div class="clearfix"> </div>
				  </div>
			</div>
		</div>

</div>
						
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
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