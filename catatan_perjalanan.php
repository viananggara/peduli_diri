<?php
ob_start();
session_start();
if (!isset($_SESSION["nik"])){ 
    die("<b>Oops!</b> Access Failed.
        <p>Sistem Logout. Anda harus melakukan Login kembali.</p>
        <button type='button' onclick=location.href='Login.php'>Back</button>");
}
    include "koneksi.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="copyright" content="MACode ID, https://macodeid.com">
  <title>Peduli-diri</title>
  <link rel="stylesheet" href="assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/maicons.css">
  <link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="assets/css/theme.css">
</head>
<body>
    
  <!-- Back to top button -->
  <div class="back-to-top"></div>
  
  <header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-float">
      <div class="container">
        <a href="index.html" class="navbar-brand">Peduli<span class="text-primary">Diri.</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-lg-4 pt-3 pt-lg-0">
            <li class="nav-item">
              <a href="home.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item active">
              <a href="catatan_perjalanan.php" class="nav-link">Catatan perjalanan</a>
            </li>
            <li class="nav-item">
              <a href="isi_data.php" class="nav-link">Isi data</a>
            </li>
			 <li class="nav-item">
              <a href="logout.php" class="nav-link">Logout</a>
            </li>
          </ul>
          <div class="ml-auto">
              <a href="catatan_print.php" class="btn btn-outline rounded-pill">Print PDF</a>
		 </div>
		</div>
		
	  <div class="ml-auto">
	  </div>
	 </div>
	</nav>
  </header>
		   
<main>	  
 <div class="page-section">
      <div class="container">
        <div class="text-center wow fadeInUp">
          <div class="subhead">
              <div class="container">
              <div class="card-body"> <!--Tabel-->
                 
         <table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>tgl</th>
										<th>waktu</th>
										<th>lokasi</th>
										<th>suhu_tubuh</th>
									</tr>
								</thead>
								<tbody>
									<?php
									   include('koneksi.php');
									  $sql = mysqli_query($koneksi, "SELECT * FROM tb_catatan WHERE nik='$_SESSION[nik]'") or die(mysqli_error($koneksi)); //GANTI
									  if(mysqli_num_rows($sql) > 0)
									  {
										$no = 1;
										while($data = mysqli_fetch_assoc($sql))
										{
										  echo '
										  <tr>
											<td>'.$no.'</td>
											<td>'.$data['tgl'].'</td>
											<td>'.$data['waktu'].'</td>
											<td>'.$data['lokasi'].'</td>
											<td>'.$data['suhu_tubuh'].'</td>
										  </tr>
										  ';
										  $no++;
										}
									  }
									  else
									  {
										echo '
										<tr>
										  <td colspan="6">Tidak ada data.</td>
										</tr>
										';
									  }
									?>
								</tbody>      
							</table>
							
							
				        </div>
				     </div>
				     
				</div>
			 </div>
      </div> <!-- .container -->
    </div> <!-- .page-section --> 
    </main>
    
</body>
</html>

<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/wow/wow.min.js"></script>
<script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoint.min.js"></script>
<script src="assets/vendor/animateNumber/jquery.animateNumber.min.js"></script>
<script src="assets/js/google-maps.js"></script>
<script src="assets/js/theme.js"></script>