<?php
session_start();
if (!isset($_SESSION["nik"])) 
{
	header("Location:login.php");
}
else
{
	header("Location:home.php");
}
?>
