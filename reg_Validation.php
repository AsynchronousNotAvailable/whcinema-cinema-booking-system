<?php
session_start();

$connect = mysqli_connect('localhost', 'root', '');

mysqli_select_db($connect, 'cinema');

//menyimpan maklumat yang didaftar ke dalam $_SESSION
$password = $_POST["password"];
$name = $_POST["name"];
$telefon = $_POST["telefon"];
$con_password = $_POST["con_password"];
$id = $_POST['id'];
$type = $_POST['type']; 


//mengambil data pengguna daripada pangkalan data
$s = "select * from pengguna where idPengguna = '$id'";

//melakukan query
$result = mysqli_query($connect, $s);

//mendapatkan laporan 
$num = mysqli_num_rows($result);

//jika idPengguna didapati wujud dalam pangkalan data, pengguna diminta pergi ke log masuk.
if ($num == 1){
    echo "<script type='text/javascript'>window.location='Login.php'; alert('Error: User aldready exist, Please proceed to login.')</script>";
}

//kenalpasti katalaluan yang didaftar
else if ($con_password != $password){
    echo "<script type='text/javascript'>window.location='Register.php'; alert('Error: Password do not match.')</script>";
    
    
}

//mengisi maklumat yang didaftar ke dalam pangkalan data
else{
    $s = "INSERT INTO pengguna (idPengguna, kataLaluan, namaPengguna, telefonPengguna, jenisPengguna) VALUES ('$id', '$password', '$name', '$telefon', '$type')";
    $s2 = "INSERT INTO telefon (telefonPengguna , namaPengguna) VALUES ('$telefon' , '$name')";
    $insert = mysqli_query($connect, $s);
    $insert = mysqli_query($connect, $s2);
    echo "<script type='text/javascript'>window.location='Login.php'; alert('Registration success. Please proceed to Login')</script>";
}

