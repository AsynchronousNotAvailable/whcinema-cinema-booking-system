<!DOCTYPE html>
<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cinema";
$id = $_POST['id'];

// menghubungkan pangkalan data 
$conn = new mysqli($servername, $username, $password, $dbname);

// kenal pasti hubungan sama ada gagal atau tidak

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// mengambil data daripada pangkalan data
$sql = "SELECT * FROM pengguna WHERE idPengguna = '$id'";
$result = $conn->query($sql);

if ($conn->query($sql) == TRUE){
    $arrayResult = [];
    while ($row = $result->fetch_assoc()) {
        array_push($arrayResult, $row);
    }
} else {
    echo "Error" . $sql . "<br>" . $conn->error;
}

$conn->close();

// menyatakan syarat bahawa jika maklumat yang didapat bersamaan dengan pangkalan data, akses diberikan
if($_POST['password'] == $arrayResult[0]['kataLaluan']) {
    $_SESSION['penggunaid'] = $_POST['id'];
    $_SESSION['nama'] = $arrayResult[0]['namaPengguna'];
    $_SESSION['type'] = $arrayResult[0]['jenisPengguna'];
    
    //mengatakan bahawa jika jenis pengguna didapati ialah 'admin', maka masuk ke laman admin
    if ($arrayResult[0]['jenisPengguna'] == "Admin") {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Anda telah berjaya log masuk')
        window.location.href='./jualan.php';
        </SCRIPT>");
    //jika tidak masuk ke laman pengguna biasa
    } else {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Anda telah berjaya log masuk')
        window.location.href='./main_menu.php';
        </SCRIPT>");
    }
    
// balik ke laman utama jika tidak berpadanan
} else {
    $_SESSION['user'] = null;
    header("Location: login.php");
}



?>