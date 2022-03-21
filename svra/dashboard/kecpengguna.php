<!DOCTYPE html>
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
      <a class="navbar-brand" href="index.php">SVRA EXPRESS</a>
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
      <div class="block-30 block-30-sm item" style="background-image: url('images/IMG_20171223_184709_251.jpg');" data-stellar-background-ratio="0.1">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
              <h2 class="heading">KECEPATAN PENGIRIMAN </h2>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <br> <br>

  <div class="chit-chat-layer4">
      <div class="row mb-50">
	<div class="col-md-15 col lg-20  it-chat-layer4-center">
               <div class="work-progres">
                            <div class="chit-chat-heading">
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>                       </th>
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
                                  <td><?php echo "                     ";?></td>
                                  <td><?php echo $isi ['nama_jenis_pengiriman'];?></td>
                                  <td><?php echo $isi ['keterangan'];?></td>                                            
                                  <td><?php echo $isi ['tarif'];?></span></td>
								  <td>
										
                              </tr>
							  
							  <?php } ?>
                          </tbody>
                      </table>
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