<?php
session_start();
$_SESSION['nik']='';
unset($_SESSION['nik']);
session_unset();
session_destroy();
header('Location:login.php');
?>
