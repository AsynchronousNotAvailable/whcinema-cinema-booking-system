<?php
session_start();

$connect = mysqli_connect('localhost', 'root', '');

mysqli_select_db($connect, 'cinema');

$idPengguna= $_POST['idPengguna'];
$namaPengguna = $_POST['namaPengguna'];
$kataLaluan = $_POST['kataLaluan'];
$tel = $_POST['telefonPengguna'];
$s = "UPDATE pengguna SET namaPengguna = '{$namaPengguna}', kataLaluan = '{$kataLaluan}', telefonPengguna = '{$tel}' WHERE idPengguna = '{$idPengguna}'";
$update = mysqli_query($connect, $s);

echo "<script type='text/javascript'>window.location='senaraiPekerja.php'; alert('Pengguna telah dikemaskinikan')</script>";

?>