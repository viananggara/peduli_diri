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
            <li class="nav-item ">
              <a href="home.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="catatan_perjalanan.php" class="nav-link">Catatan perjalanan</a>
            </li>
            <li class="nav-item active">
              <a href="Isi_data.php" class="nav-link">Isi data</a>
            </li>
			 <li class="nav-item">
              <a href="logout.php" class="nav-link">Logout</a>
            </li>
          </ul>
          </div>

          <div class="ml-auto">
          </div>
        </div>
      </nav>
    </header>
    <div class="page-section">
      <div class="container">
        <div class="text-center wow fadeInUp">
          <div class="subhead">
		    <div class="page-section border-top">
      <div class="container">
			<form role="form" method="POST" action="catatan_simpan.php">
			    <div class="py-2" name="nik">
			    <select class="form-control" name="nik" readonly="readonly">
			        <?php
			        require_once 'koneksi.php';
			        $query ="SELECT * FROM tb_user WHERE nik='$_SESSION[nik]'";
			        $result =mysqli_query($koneksi, $query);
			        while($data = mysqli_fetch_assoc($result) )
			        {
			            ?>
			            <option value="<?php echo $data['nik']; ?>"><?php echo $data['nik']; ?></option>
			            <?php
			        }
			        ?>
			        </select>
			        </div>
			    
              <div class="py-2">
                <input type="date" class="form-control" name="tgl" placeholder="Tanggal" required>
              </div>
              <div class="py-2">
                <input type="time" class="form-control" name="waktu" placeholder="Waktu" required>
              </div>
			   <div class="py-2">
                <input type="text" class="form-control" name="lokasi" placeholder="Lokasi yang dikunjungi" required>
              </div>
			   <div class="py-2">
                <input type="float" class="form-control" name="suhu_tubuh" placeholder="Suhu tubuh" required>
              </div>
              <button type="submit" class="btn btn-primary rounded-pill mt-4">Simpan</button>
            </form>
            </div>
             </div>
              </div>
               </div>
                </div>
                 </div>
                 </main>

</body>
</html>

<script src="assets/js/jquery/-3.5.2.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/wow/wow.min.js"></script>
<script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/animateNumber/jquery.animateNumber.min.js"></script>
<script src="assets/js/google-maps.js"></script>
<script src="assets/js/theme.js"></script>
<script src="