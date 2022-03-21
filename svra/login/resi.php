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
									 <a href="home.php"> <h1>SVRA EXPRESS</h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
							<!--search-box-->
								<div class="search-box">
									<form>
										<input type="text" placeholder="Search..." required="">	
										<input type="submit" value="">					
									</form>
								</div><!--//end-search-box-->
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
<!--slider menu-->
<div class="chit-chat-layer5">
	<div class="col-md-20 chit-chat-layer5-center">
               <div class="work-progres">
                            <div class="chit-chat-heading">
                                <br>  <H1><center> Resi </center> </H1><br>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>No. Resi</th>
									  <th>Nama Penerima</th>
									  <th>Alamat Penerima </th>
									  <th>Nama Pengirim </th>
									  <th>Alamat Pengirim </th>
									  <th>Paket Barang </th>
                                      <th>Tanggal Pengiriman</th>                                                          
                                      <th>Tanggal Sampai</th>
									  <th>Jenis Pengiriman </th>
									  <th>Jenis Asuransi </th>
                                      <th>Jenis Packaging </th>                                                          
                                      <th>Jenis Dimensi </th>
									  <th>Tarif Rute </th>
									  <th>Ongkos Kirim </th>
									  <th> Status </th>
                                  </tr>
                              </thead>
                              <tbody>
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
							   $simpan = mysqli_query ($koneksi, "UPDATE resi set total_biaya='$isitb'");	
							   ?>
                                <tr>
                                  <td><?php echo $isi ['no_resi'];?></td>
								  <td><?php echo $isi1 ['nama'];?></td>
									<td><?php echo $isi1 ['alamat_lengkap'];?></td>	
                                  <td><?php echo $isi ['nama_pengirim'];?></td>
								  <td><?php echo $isi ['alamat_pengirim'];?></td>
								  <td><?php echo $isi6 ['kode_paket_barang'];?></td>
									<td><?php echo $isi ['tanggal_pengiriman'];?></td>	
                                  <td><?php echo $isi ['tanggal_sampai'];?></td>
								  <td><?php echo $isi2 ['nama_jenis_pengiriman'];?></td>
									<td><?php echo $isi3 ['nama_jenis_asuransi'];?></td>	
                                  <td><?php echo $isi4 ['nama_jenis_packaging'];?></td>
								  <td><?php echo $isi5 ['nama_jenis_dimensi'];?></td>
                                  <td><?php echo $isi7 ['kode_jenis_tarif_cakupan'];?></td>
								  <td><?php echo $isitb ;?></td>
								  <td><?php echo $isi8 ['nama_status'];?></td>									
									<td>
										<a href = "ubahresi.php?id=<?php echo $isi ['no_resi'];?> " class="btn btn-primary"> Ubah </a>
										<a href = "hapusresi.php?id=<?php echo $isi ['no_resi']; ?> " class="btn btn-danger"
										onclick="return confirm ('Apakah Anda yakin ingin menghapus data ini?')"> Hapus </a></td>
									<td>
										<a href = "ubahtanggalresi.php?id=<?php echo $isi ['no_resi'];?> " class="btn btn-primary"> Update Tanggal </a>
										<a href = "ubahstatusresi.php?id=<?php echo $isi ['no_resi'];?> " class="btn btn-primary"> Update Status </a></td>
								</tr>	
								<?php }?>
                          </tbody>
                      </table>
							<a href = "tambahresi.php" class = "btn btn-primary">[+] Tambah </a>
                  </div>
             </div>
      </div>

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
