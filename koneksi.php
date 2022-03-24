<?php
	$host="localhost";
	$user="id18507227_deden128";
	$password="yBn\-6Jc9Vdk!U*a";
	$db="id18507227_db_perjalanan";

	$koneksi = mysqli_connect($host,$user,$password,$db);
	if (!$koneksi)
	{
			die("Koneksi gagal:".mysqli_connect_error());
	}
?>