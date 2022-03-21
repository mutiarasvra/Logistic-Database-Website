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
<style type="text/css">
	body{
		width:100%;
		height:100%;
		margin:0;
		padding:0;
	}
	div.popup{
		position:fixed;
		top:0;
		bottom:0;
		left:0;
		right:0;
		width:100%;
		height:100%;
		background: rgba(0,0,0,.8);
	}
	
	div#box{
		margin:5% auto;
		background:#fff;
		width:50%;
		height:50%;
		-webkit-box-shadow:0 0 15px #000;
		-moz-box-shadow:0 0 15px #000;
		box-shadow:0 0 15px #000;
	}
	
	a.close{
		text-decoration:none;
		color:#000;
		margin:10px 15px 0 0;
		float:right;
		font-family:tahoma;
		font-size:20px;
	}
</style>
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
								
							<div class="clearfix"> </div>
						 </div>
						 <!--notification menu end -->
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
											<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
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
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="chit-chat-layer4">
	<div class="col-md-10 chit-chat-layer4-center">
               <div class="work-progres">
                            <div class="chit-chat-heading">
                                <br>  <H1><center> Resi </center> </H1><br>
                            </div>
                            <div class="table-responsive">
                                				  
					  <form method = "POST" enctype = "multipart/form-data">
							<div class = "form group">
								<label for = "no_resi"> No. Resi </label>
								<input type = "text" class = "form-control" name = "no_resi">
							</div>
							<br>
							<div class = "form group">
							<label for = "kode_penerima"> Kode Penerima </label>
								<input type = "text" class = "form-control" name = "kode_penerima">
							</div>
							<div class = "form group">
							<label for = "nama"> Nama Penerima </label>
								<input type = "text" class = "form-control" name = "nama">
							</div>
							<div class = "form group">
								<label for = "alamat_penerima"> Alamat Penerima </label>
								<input type = "text" class = "form-control" name = "alamat_penerima">
							</div>
<br>
<div class = "form group">
								<label for = "paket_barang"> Jenis Penerima </label>
								<select name="kode_jenis_penerima" id="kode_jenis_penerima" class="form-control">
								<option value="">-- Pilih Jenis Penerima -- </option>
								<?php 
								include 'config.php';
								$lo= mysqli_query ($koneksi, "SELECT * from jenis_penerima ") or die (mysqli_error($koneksi));
								$po= mysqli_fetch_array ($lo);
								 ?>
								 <?php do{ ?>
								 <option value="<?php echo $po['kode_jenis_penerima']?>"> <?php echo $po['nama_jenis_penerima'] ?></option>
								 <?php }while ($po= mysqli_fetch_array ($lo));?>
								</select>
							</div>
							<br>	
							<div class = "form group">
								<label for = "kota_B"> Kota Tujuan </label>
								<select name="kota_B" id="kota_B" class="form-control">
								<option value="">-- Pilih Kota Tujuan -- </option>
								<?php 
								include 'config.php';
								$lo= mysqli_query ($koneksi, "SELECT * from kabkota") or die (mysqli_error($koneksi));
								$po= mysqli_fetch_array ($lo);
								 ?>
								 <?php do{ ?>
								 <option value="<?php echo $po['kode_kabkota']?>"> <?php echo $po['kabkota'] ?></option>
								 <?php }while ($po= mysqli_fetch_array ($lo));?>
								</select>
							</div>
							<br>	
							<div class = "form group">
								<label for = "kode_kel"> Kelurahan Tujuan </label>
								<select name="kode_kel" id="kode_kel" class="form-control">
								<option value="">-- Pilih Kelurahan -- </option>
								<?php 
								include 'config.php';
								$lo= mysqli_query ($koneksi, "SELECT * from kelurahan") or die (mysqli_error($koneksi));
								$po= mysqli_fetch_array ($lo);
								 ?>
								 <?php do{ ?>
								 <option value="<?php echo $po['kode_kel']?>"> <?php echo $po['kelurahan'] ?></option>
								 <?php }while ($po= mysqli_fetch_array ($lo));?>
								</select>
							</div>
							<br>							
							<div class = "form group">
								<label for = "nama_pengirim"> Nama Pengirim </label>
								<input type = "text" class = "form-control" name = "nama_pengirim">
							</div>	
							<div class = "form group">
								<label for = "alamat_pengirim"> Alamat Pengirim </label>
								<input type = "text" class = "form-control" name = "alamat_pengirim">
							</div>
							<br>
							<div class = "form group">
								<label for = "kabkota"> Kota Pengirim </label>
								<select name="kabkota" id="kabkota" class="form-control">
								<option value="">-- Pilih Kota Pengirim -- </option>
								<?php 
								include 'config.php';
								$lo= mysqli_query ($koneksi, "SELECT * from kabkota") or die (mysqli_error($koneksi));
								$po= mysqli_fetch_array ($lo);
								 ?>
								 <?php do{ ?>
								 <option value="<?php echo $po['kode_kabkota']?>"> <?php echo $po['kabkota'] ?></option>
								 <?php }while ($po= mysqli_fetch_array ($lo));?>
								</select>
							</div>
							<br>								
							<div class = "form group">
								<label for = "paket_barang"> Paket Barang </label>
								<select name="kode_paket_barang" id="kode_paket_barang" class="form-control">
								<option value="">-- Pilih Paket Barang -- </option>
								<?php 
								include 'config.php';
								$lo= mysqli_query ($koneksi, "SELECT * from paket_barang ") or die (mysqli_error($koneksi));
								$po= mysqli_fetch_array ($lo);
								 ?>
								 <?php do{ ?>
								 <option value="<?php echo $po['kode_paket_barang']?>"> <?php echo $po['nama_jenis_paket'] ?></option>
								 <?php }while ($po= mysqli_fetch_array ($lo));?>
								</select>
							</div>
							<br>
							<div class = "form group">
								<label for = "deskripsi"> Deskripsi Barang </label>
								<input type = "text" class = "form-control" name = "deskripsi">
							</div>
							<div class = "form group">
								<label for = "tanggal_pengiriman"> Tanggal Pengiriman </label>
								<input type = "date" class = "form-control" name = "tanggal_pengiriman">
							</div>
							<div class = "form group">
								<label for = "tanggal_sampai"> Tanggal Sampai </label>
								<input type = "date" class = "form-control" name = "tanggal_sampai">
							</div>
							<br>
							<div class = "form group">
							<label for = "jenis_pengiriman"> Jenis Pengiriman </label>
								<select name="kode_jenis_pengiriman" id="kode_jenis_pengiriman" class="form-control">
								<option value="">-- Pilih Jenis Pengiriman -- </option>
								<?php 
								include 'config.php';
								$lo= mysqli_query ($koneksi, "SELECT * from jenis_pengiriman") or die (mysqli_error($koneksi));
								$po= mysqli_fetch_array ($lo);
								 ?>
								 <?php do{ ?>
								 <option value="<?php echo $po['kode_jenis_pengiriman']?>"><?php echo $po['nama_jenis_pengiriman'] ?></option>
								 <?php }while ($po= mysqli_fetch_array ($lo));?>
								</select>
							</div>
<br>							
							<div class = "form group">
							<label for = "jenis_asuransi"> Jenis Asuransi </label>
								<select name="kode_jenis_asuransi" id="kode_jenis_asuransi" class="form-control">
								<option value="">-- Pilih Jenis Asuransi -- </option>
								<?php 
								include 'config.php';
								$lo= mysqli_query ($koneksi, "SELECT * from jenis_asuransi") or die (mysqli_error($koneksi));
								$po= mysqli_fetch_array ($lo);
								 ?>
								 <?php do{ ?>
								 <option value="<?php echo $po['kode_jenis_asuransi']?>"><?php echo $po['nama_jenis_asuransi'] ?></option>
								 <?php }while ($po= mysqli_fetch_array ($lo));?>
								</select>
							</div>
							<br>
							<div class = "form group">
								<label for = "jenis_packaging"> Jenis Packaging </label>							
								<select name="kode_jenis_packaging" id="kode_jenis_packaging" class="form-control">
								<option value="">-- Pilih Jenis Packaging -- </option>
								<?php 
								include 'config.php';
								$lo= mysqli_query ($koneksi, "SELECT * from jenis_packaging") or die (mysqli_error($koneksi));
								$po= mysqli_fetch_array ($lo);
								 ?>
								 <?php do{ ?>
								 <option value="<?php echo $po['kode_jenis_packaging']?>"><?php echo $po['nama_jenis_packaging'] ?></option>
								 <?php }while ($po= mysqli_fetch_array ($lo));?>
								</select>
							</div>
							<br>
							<div class = "form group">
							<label for = "jenis_dimensi"> Jenis Dimensi </label>							
								<select name="kode_jenis_dimensi" id="kode_jenis_dimensi" class="form-control">
								<option value="">-- Pilih Jenis Dimensi -- </option>
								<?php 
								include 'config.php';
								$lo= mysqli_query ($koneksi, "SELECT * from jenis_dimensi") or die (mysqli_error($koneksi));
								$po= mysqli_fetch_array ($lo);
								 ?>
								 <?php do{ ?>
								 <option value="<?php echo $po['kode_jenis_dimensi']?>"><?php echo $po['nama_jenis_dimensi'] ?></option>
								 <?php }while ($po= mysqli_fetch_array ($lo));?>
								</select>
							</div>
							<br>
							<div class = "form group">
							<label for = "kode_status"> Status Pengiriman </label>
								<select name="kode_status" id="kode_status" class="form-control">
								<option value="">-- Pilih Status Pengiriman -- </option>
								<?php 
								include 'config.php';
								$lo= mysqli_query ($koneksi, "SELECT * from status_pengiriman") or die (mysqli_error($koneksi));
								$po= mysqli_fetch_array ($lo);
								 ?>
								 <?php do{ ?>
								 <option value="<?php echo $po['kode_status']?>"><?php echo $po['nama_status'] ?></option>
								 <?php }while ($po= mysqli_fetch_array ($lo));?>
								</select>
							</div><br>
							<br>
							
							<br>
							<button class = "btn btn-primary" name = "save" > Simpan </button>
							<a href = "resi.php" class = "btn btn-warning"> Kembali </a>
					  </form>
					  
				<?php
				$db_host = "localhost"; $db_user = "root"; $db_pass = ""; $db_name = "ekspedisi_pengiriman_barang";
				if (isset ($_POST ['save'])) {
					$koneksi= mysqli_connect( $db_host, $db_user, $db_pass, $db_name); 
					$kode = $_POST ['no_resi'];
					$kode1  = $_POST ['nama_pengirim'];
					$kodee = $_POST ['alamat_pengirim'];
					$kode2  = $_POST ['tanggal_pengiriman'];
					$kode3  = $_POST ['tanggal_sampai'];
					$kode4  = $_POST ['kode_penerima'];
					$koden  = $_POST ['nama'];
					$kodea  = $_POST ['alamat_penerima'];
					$kodejp  = $_POST ['kode_jenis_penerima'];
					$kodek  = $_POST ['kode_kel'];
					$kode5  = $_POST ['kode_paket_barang'];
					$koded  = $_POST ['deskripsi'];
					$kode6  = $_POST ['kode_jenis_packaging'];
					$kode7  = $_POST ['kode_jenis_pengiriman'];	
                    $kode8  = $_POST ['kode_jenis_asuransi']; 
                    $kode10  = $_POST ['kode_jenis_dimensi'];
					$kodes = $_POST ['kode_status'];
					$k1 = $_POST ['kabkota'];
					$k2 = $_POST ['kota_B'];
					$ambila = mysqli_query($koneksi, "SELECT * from rute where kode_kabkota='$k1' AND kota_B = '$k2'") ;
					$isia = mysqli_fetch_array ($ambila);
					$ya = $isia ['kode_jenis_tarif_cakupan'];
					$simpan1 = mysqli_query ($koneksi, "INSERT INTO penerima (kode_penerima, kode_jenis_penerima, kode_kel, nama, alamat_lengkap) VALUES 
					('$kode4', '$kodejp', '$kodek' ,'$koden','$kodea' )");
					$simpan2 = mysqli_query ($koneksi, "UPDATE paket_barang SET deskripsi = '$koded' where kode_paket_barang = '$kode5'");
					$simpan = mysqli_query ($koneksi, "INSERT INTO resi (no_resi, nama_pengirim, alamat_pengirim, tanggal_pengiriman, 
					tanggal_sampai, kode_penerima, kode_paket_barang, kode_jenis_packaging, kode_jenis_pengiriman, kode_jenis_asuransi,
					kode_jenis_tarif_cakupan, kode_jenis_dimensi, kode_status)
					VALUES ('$kode','$kode1', '$kodee','$kode2','$kode3','$kode4','$kode5','$kode6','$kode7','$kode8','$ya','$kode10','$kodes' )");
					echo "<br> <div class = 'alert alert-success text-center'> Data berhasil disimpan! </div>";
					?>
					<div class="popup">
						<div id="box">
							
						<?php  
							 $db_host = "localhost";$db_user = "root";$db_pass = "";$db_name = "ekspedisi_pengiriman_barang";
							 $koneksi= mysqli_connect( $db_host, $db_user, $db_pass, $db_name);
							  $ambil = mysqli_query ($koneksi, "SELECT * from resi ");							  
							  $ambil1 = mysqli_query($koneksi, "SELECT * from resi, 
							  penerima where penerima.kode_penerima=resi.kode_penerima ") ;
							  $ambil2 = mysqli_query($koneksi, "SELECT * from resi, 
							  jenis_pengiriman where jenis_pengiriman.kode_jenis_pengiriman=resi.kode_jenis_pengiriman ") ;
							  $ambil3 = mysqli_query($koneksi, "SELECT * from resi, 
							  jenis_asuransi where jenis_asuransi.kode_jenis_asuransi=resi.kode_jenis_asuransi ") ;
							  $ambil4 = mysqli_query($koneksi, "SELECT * from resi, 
							  jenis_packaging where jenis_packaging.kode_jenis_packaging=resi.kode_jenis_packaging ") ;
							  $ambil5 = mysqli_query($koneksi, "SELECT * from resi, 
							  jenis_dimensi where jenis_dimensi.kode_jenis_dimensi=resi.kode_jenis_dimensi ") ;
							  $ambil6 = mysqli_query($koneksi, "SELECT * from resi, 
							  paket_barang where paket_barang.kode_paket_barang=resi.kode_paket_barang ") ;
							  $ambil7 = mysqli_query($koneksi, "SELECT *from resi,
							  jenis_tarif_cakupan where jenis_tarif_cakupan.kode_jenis_tarif_cakupan = resi.kode_jenis_tarif_cakupan");
							  $ambil8 = mysqli_query($koneksi, "SELECT * from resi, 
							  status_pengiriman where status_pengiriman.kode_status=resi.kode_status ") ;
								while ($isi = mysqli_fetch_array($ambil))
							  { 
							  $isi1 = mysqli_fetch_array($ambil1);
							  $isi2 = mysqli_fetch_array($ambil2);
							  $isi3 = mysqli_fetch_array($ambil3);
							  $isi4 = mysqli_fetch_array($ambil4);
							  $isi5 = mysqli_fetch_array($ambil5);
							  $isi6 = mysqli_fetch_array($ambil6);
							  $isi7 = mysqli_fetch_array($ambil7);
							  $isi8 = mysqli_fetch_array($ambil8);
							  $isitb = $isi2 ['tarif'] + $isi3 ['tarif'] + $isi4 ['tarif'] + $isi5 ['tarif'] + $isi7 ['tarif'];
							  $simpan = mysqli_query ($koneksi, "UPDATE resi set total_biaya='$isitb'");}  ?>
							   <br><br><br>
							   <center><?php echo "TOTAL BIAYA : "?> <?php echo $isitb;?></center>
							   <br>
							   <?php 
							   $isi = mysqli_fetch_array($ambil);
							   $aku = mysqli_query ($koneksi, "SELECT * from resi where no_resi = '$kode'");
							   $dia = mysqli_fetch_array ($aku);?>
							   <center> <a href = "tampilanresi.php?id= <?php $isi ['no_resi']?>" class = "btn btn-primary"> CETAK RESI </a></center>
					</div>
					
				  <div class="clearfix"> </div>
				  </div>
			</div>
		</div>
</div>
					
						</div>		
					</div>
					
			<?php	}?>
					
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