<?php
session_start();
include "koneksi.php";
$nik = $_POST["nik"];
$nama = $_POST["nama"];
$sql = "select * from tb_user where nik='".$nik."' and nama='".$nama."' limit 1";
$hasil = mysqli_query ($koneksi,$sql);
$jumlah = mysqli_num_rows($hasil);
?>
<?php
	if ($jumlah>0) 
	{
		$row = mysqli_fetch_assoc($hasil);
		$_SESSION["nik"]=$row["nik"];
		header("Location:home.php");
	}
	else 
	{
?>
			<script type='text/javascript'>
				toastr.error('Invalid, Data Akun Tidak sesuai !');
				function pindah(url)
				{
					window.location = url;
				}
				setInterval('pindah("login.php")',3000);
			</script>

<?php
}
?>