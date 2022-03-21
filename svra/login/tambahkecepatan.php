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
<div class="chit-chat-layer4">
	<div class="col-md-10 chit-chat-layer4-center">
               <div class="work-progres">
                            <div class="chit-chat-heading">
                                <br>  <H1><center> Kecepatan Pengiriman</center> </H1><br>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>Kode Pengiriman</th>
                                      <th>Jenis Pengiriman</th>                                                          
                                      <th>Keterangan</th>
                                      <th>Tarif</th>
                                  </tr>
                              </thead>
                              <tbody>
							 <?php  
							 $db_host = "localhost";$db_user = "root";$db_pass = "";$db_name = "ekspedisi_pengiriman_barang";
							 $koneksi= mysqli_connect( $db_host, $db_user, $db_pass, $db_name); 
							  $ambil = mysqli_query ($koneksi, "SELECT * from jenis_pengiriman") ;?> 
							  <?php
							  while ($isi = mysqli_fetch_array($ambil))
							  { ?>
                                <tr>
                                  <td><?php echo $isi ['kode_jenis_pengiriman'];?></td>
                                  <td><?php echo $isi ['nama_jenis_pengiriman'];?></td>
                                  <td><?php echo $isi ['keterangan'];?></td>                                            
                                  <td><?php echo $isi ['tarif'];?></span></td>
								  <td>
										<a href = " " class="btn btn-primary"> Ubah </a>
										<a href = "hapuskecepatan.php" class="btn btn-danger"
										onclick="return confirm ('Apakah Anda yakin ingin menghapus data ini?')"> Hapus </a>
                              </tr>
							  
							  <?php } ?>
                          </tbody>
                      </table>
					  <form method = "POST" enctype = "multipart/form-data">
							<div class = "form group">
								<label for = "kode_jenis_pengiriman"> Kode Jenis Pengiriman </label>
								<input type = "text" class = "form-control" name = "kode_jenis_pengiriman">
							</div>
							<div class = "form group">
								<label for = "nama_jenis_pengiriman"> Jenis Pengiriman </label>
								<input type = "text" class = "form-control" name = "nama_jenis_pengiriman">
							</div>
							<div class = "form group">
								<label for = "keterangan"> Keterangan </label>
								<input type = "text" class = "form-control" name = "keterangan">
							</div>
							<div class = "form group">
								<label for = "tarif"> Tarif </label>
								<input type = "number" class = "form-control" name = "tarif">
							</div>
							<br>
							<button class = "btn btn-primary" name = "save" > Simpan </button>
							<a href = "kecepatan.php" class = "btn btn-warning"> Kembali </a>
					  </form>
					  
				<?php
				if (isset ($_POST ['save'])) {
					$koneksi= mysqli_connect( $db_host, $db_user, $db_pass, $db_name); 
					$kode = $_POST ['kode_jenis_pengiriman'];
					$njp = $_POST ['nama_jenis_pengiriman'];
					$ket = $_POST ['keterangan'];
					$tar = $_POST ['tarif'];
					$simpan = mysqli_query ($koneksi, "INSERT INTO jenis_pengiriman VALUES ('$kode','$njp', '$ket','$tar')");
					echo "<br> <div class = 'alert alert-success text-center'> Data berhasil disimpan! </div>";
					echo "<meta http-equiv= 'refresh' content ='1;url=kecepatan.php'>";
				}
				?>
					
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