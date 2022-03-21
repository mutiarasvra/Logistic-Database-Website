<<?php
session_start();
?><!DOCTYPE html>
<html lang="en">
  <head>
    <title>SVRA EXPRESS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500|Gaegu:700" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">SVRA Express</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="../login/index.php" class="nav-link">Login Admin</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
  
  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 item" style="background-image: url('images/2018-06-25 04.01.36 1.jpg');" data-stellar-background-ratio="0.1">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7">
              <h2 class="heading"> Send Everything You Want! </h2>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  

  <div class="site-section">
    <div class="container">
      <div class="row">

        <div class="col-md-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-first-aid-kit"></span></div>
            <div class="media-body">
              <h3 class="heading">Kecepatan Pengiriman</h3>
              <p><a href="kecpengguna.php">See Details</a></p>
            </div>
          </div>     
        </div>

        <div class="col-md-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-donate"></span></div>
            <div class="media-body">
              <h3 class="heading">Asuransi Pengiriman</h3>
              <p><a href="aspengguna.php">See Details</a></p>
            </div>
          </div>  
        </div>

        <div class="col-md-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-people"></span></div>
            <div class="media-body">
              <h3 class="heading">Packaging Paket</h3>
              <p><a href="packpengguna.php">See Details</a></p>
            </div>
          </div> 
        </div>

      </div>
    </div>
  </div> <!-- .site-section -->



  <div class="featured-donate overlay-color" style="background-image: url('images/perusahaan-jasa-pengiriman-barang-5838dfed80afbd8b04cfbd1f.jpg');">
    
    <div class="container">
      <div class="row">
        <div class="col-lg-10 pr-lg-5">
          <h1>LACAK KIRIMAN ANDA</h1>
          <span class="donation-time mb-3">Masukkan no. resi :</span>
		  <form method = "POST" enctype = "multipart/form-data">
							<div class = "form group">
								<input type = "text" class = "form-control" name = "no_resi">
							</div>
						<button class = "btn btn-primary" name = "c" > TRACKING </button>
					  </form>
			<?php
				include ('../login/config.php');
				if (isset ($_POST ['c'])) {
					$koneksi= mysqli_connect( $db_host, $db_user, $db_pass, $db_name); 
					$re 	    = $_POST['no_resi'];
					$apaya = mysqli_query($koneksi, "SELECT * from resi where no_resi='$re'") ;
					$he = mysqli_fetch_array ($apaya);
					$st = $he ['kode_status'];
					$apaapa= mysqli_query($koneksi, "SELECT * from status_pengiriman where kode_status='$st' ") ;
					$yey = mysqli_fetch_array ($apaapa);
					?>
					<table width ="1000" >
					<tr bgcolor='white'>
					<td> <h4> <center><font color = "black"><?php echo $he ['no_resi'];?> </font> </center></td>
					<td> <h4> <center><font color = "black"><?php echo $yey ['nama_status'];?> </font> </center></td>
					<td> <h4> <center> <font color = "black"><?php echo $yey ['keterangan'];?> </font> </center></td>
					</tr>
					</table>
					<?php	}	?>
          <div class="progress custom-progress">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          
        </div>
        
      </div>
    </div>


  <div class="featured-donate overlay-color" style="background-image: url('images/perusahaan-jasa-pengiriman-barang-5838dfed80afbd8b04cfbd1f.jpg');">
    
    <div class="container">
      <div class="row">
        <div class="col-lg-10 pr-lg-5">
          <h1> CEK ONGKIR </h1>
		  <form method = "POST" >
              
              <div class = "form group">
							<label for = "kode_kabkota"> Provinsi Asal </label>
								<select name="provinsi" id="provinsi" class="form-control">
								<option value="">-- Pilih Provinsi Asal -- </option>
								<?php 
								include 'config.php';
								$lo= mysqli_query ($koneksi, "SELECT * from provinsi") or die (mysqli_error($koneksi));
								$po= mysqli_fetch_array ($lo);
								 ?>
								 <?php do{ ?>
								 <option value="<?php echo $po['kode_prov']?>"><?php echo $po['provinsi'] ?></option>
								 <?php }while ($po= mysqli_fetch_array ($lo));
                ?>
								</select>
							</div>
              
              <div class = "form group">
							<label for = "kode_kabkota"> Provinsi Tujuan </label>
								<select name="provinsitu" id="provinsitu" class="form-control">
								<option value="">-- Pilih Provinsi Tujuan -- </option>
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
              <button class = "btn btn-primary" name = "cekprov" > CEK </button>
             <?php if (isset ($_POST ['cekprov'])) {
					$koneksi= mysqli_connect( $db_host, $db_user, $db_pass, $db_name); 
					$prov 	    = $_POST['provinsi'];
					$prov2      = $_POST['provinsitu'];
			?>
					
					<?php	}	?>
              <div class = "form group">
							<label for = "kode_kabkota"> Kota Asal </label>
								<select name="kode_kabkota" id="kode_kabkota" class="form-control">
								<option value="">-- Pilih Kota Asal -- </option>
								<?php 
								include 'config.php';

								$lo= mysqli_query ($koneksi, "SELECT * from kabkota WHERE kode_prov='$prov'") or die (mysqli_error($koneksi));
								$po= mysqli_fetch_array ($lo);
								 ?>
								 <?php do{ ?>
								 <option value="<?php echo $po['kode_kabkota']?>"><?php echo $po['kabkota'] ?></option>
								 <?php }while ($po= mysqli_fetch_array ($lo));?>
								</select>
							</div>

				
							<div class = "form group">
							<label for = "kota_B">  Kota Tujuan </label>
								<select name="kota_B" id="kota_B" class="form-control">
								<option value="">-- Pilih Kota Tujuan -- </option>
								<?php 
								include 'config.php';
								$lo= mysqli_query ($koneksi, "SELECT * from kabkota WHERE kode_prov='$prov2'") or die (mysqli_error($koneksi));
								$po= mysqli_fetch_array ($lo);
								 ?>
								 <?php do{ ?>
								 <option value="<?php echo $po['kode_kabkota']?>"><?php echo $po['kabkota'] ?></option>
								 <?php }while ($po= mysqli_fetch_array ($lo));?>
								</select>
							</div>
						<br>

							<button class = "btn btn-primary" name = "cek" > CEK </button>
					  </form>
					  <?php
				include '../login/config.php';
				if (isset ($_POST ['cek'])) {
					$koneksi= mysqli_connect( $db_host, $db_user, $db_pass, $db_name); 
					$njp 	    = $_POST['kode_kabkota'];
					$ket        = $_POST['kota_B'];
					$ambil2 = mysqli_query($koneksi, "SELECT * from rute where kode_kabkota='$njp' AND kota_B = '$ket' ") ;
					$isi1 = mysqli_fetch_array ($ambil2);
					$kode = $isi1 ['kode_jenis_tarif_cakupan'];
					$ambil3 = mysqli_query($koneksi, "SELECT * from jenis_tarif_cakupan where kode_jenis_tarif_cakupan='$kode' ") ;
					$isin = mysqli_fetch_array ($ambil3);
					$ambil4 = mysqli_query($koneksi, "SELECT * from rute, kabkota where kabkota.kode_kabkota='$njp' ") ;
					$isi4 = mysqli_fetch_array ($ambil4);
					$ambil5 = mysqli_query($koneksi, "SELECT * from rute, kabkota where kabkota.kode_kabkota='$ket' ") ;
					$isi5 = mysqli_fetch_array ($ambil5);
          // var_dump($isi5);
          // die;
					?>
					<table width ="800" height = "80" >
					<tr bgcolor='white'>
					<td> <b> <font color = "white"><?php echo"1234" ;?> </font> </b></td>
					<td> <b> <font color = "black"><?php echo $isi4 ['kabkota'];?> </font> </b></td>
					<td> <b> <font color = "black"><?php echo $isi5 ['kabkota'];?> </font> </b> </td>
					<td> <align = "right"> <b> <font color = "red"><?php echo "Rp";?> </font></align> </b></td>
					<td> <align = "left"><b> <font color = "red"><?php echo $isin ['tarif'];?> </align> </font> </b></td>
					</tr>
					</tbody>
					</table>
					<?php	}	?>
          <div class="progress custom-progress">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          
        </div>
        
      </div>
    </div>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
