<?php
session_start();
if (!isset($_SESSION["nik"])) 
{
	echo "Anda harus login dulu <br><a href='login.php'>Klik disini</a>";
	exit;
}
$nik=$_SESSION["nik"];
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
        <a href="" class="navbar-brand">Peduli<span class="text-primary">Diri.</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-lg-4 pt-3 pt-lg-0">
            <li class="nav-item active">
              <a href="home.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="catatan_perjalanan.php" class="nav-link">Catatan perjalanan</a>
            </li>
            <li class="nav-item">
              <a href="isi_data.php" class="nav-link">Isi data</a>
            </li>
			<li class="nav-item">
              <a href="logout.php" class="nav-link">Logout</a>
            </li>
          </ul>
         </div>

          <div class="ml-auto">
          </div>
        </div>
      </div>
    </nav>
  </header>
  
 <main>
    <div class="page-section">
      <div class="container ">
        <div class="text-center wow fadeInUp">
          <div class="subhead">
             <div class="page-section border-top">
                <div class="container">     
                  
                
                    <h1 div class="mb-4"> Selamat Datang
                    <span class="text-primary">
                        <?php
                    require_once 'koneksi.php';
                        $query = "SELECT * FROM tb_user WHERE nik='$_SESSION[nik]'";
                        $result = mysqli_query($koneksi, $query);
                        while($data = mysqli_fetch_assoc($result))
                        {
                            ?>
                              <?php echo $data['nama']; ?>
                            <?php
                        }
                      ?>
                    </span>
                    </h1>
                    <h1 div class="mb-4"> di aplikasi PeduliDiri </h1>
                    </div>
                    
                    <a href="isi_data.php"button type"submit" class="btn btn-primary rounded-pill mt-4">Isi Data Perjalanan</button></a>
                    
              </div>
          </div>
       </div>
     </div>
    </div>
    
    
    
 </main>
</body>
</html>

<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/wow/wow.min.js"></script>
<script src="assets/vendor/ow1-carausel/js/ow1.min.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/animateNumber/jquery.animaterNumber.min.js"></script>
<script src="assets/js/google-maps.js"></script>
<script src="assets/js/theme.js"></script>