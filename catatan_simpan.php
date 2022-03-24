<?php
				include('koneksi.php'); 
				//nama db 		//nama di web
				$nik    =$_POST['nik'];
				$tgl			= $_POST['tgl']; 
				$waktu		= $_POST['waktu'];
				$lokasi		= $_POST['lokasi'];
				$suhu_tubuh		    = $_POST['suhu_tubuh'];
				
					$sql = mysqli_query($koneksi, "INSERT INTO tb_catatan(nik, tgl, waktu, lokasi, suhu_tubuh) VALUES('$nik', '$tgl', '$waktu', '$lokasi', '$suhu_tubuh')") or die(mysqli_error($koneksi)); //GANTI
					
					if($sql)
					{
						echo '<script>alert("Berhasil menambahkan data."); document.location="catatan_perjalanan.php";</script>'; //GANTI
					}
					else
					{
						echo '<script>alert("Gagal melakukan proses tambah data"); document.location="home.php";</script>'; //GANTI
					}
	?>