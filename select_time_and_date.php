<?php 
session_start();

//menyimpan maklumat yang didaftarkan ke dalam $_SESSION[]
$_SESSION['time'] = $_POST['time'];
$_SESSION['date'] = $_POST['date'];

//membuat pilihan ke fail yang berlainan berdasarkan maklumat yang didaftarkan
if($_SESSION['movie'] == "ipman" && $_SESSION['image'] == 'ipman'){
    $_SESSION['movie'] = "Ip Man 4";
    $showing = "2 hrs";
    $hall = "1";
    $_SESSION['idWayang'] = 'B01';
    $_SESSION['image'] = "./ipman.JPEG";
    
}elseif($_SESSION['movie'] == "ghostbusters"){
    $movie_name = "Ghostbusters";
    $showing = "2hrs";
    $hall = "3";
    $_SESSION['idWayang'] = 'B03';
    $_SESSION['image'] = "./ghostbusters.jpg";
    
}elseif($_SESSION['movie'] == "ironman"){
    $showing = "2hrs";
    $hall = "2";
    $_SESSION['idWayang'] = 'B02';
    $_SESSION['image'] = "./ironman.jpg";
    
}elseif($_SESSION['movie'] == "godzilla"){
    $showing = "3hrs";
    $hall = "4";
    $_SESSION['idWayang'] = 'B04';
    $_SESSION['image'] = "./godzilla.jpg";
}

$_SESSION['showing'] = $showing;
$_SESSION['hall'] = $hall;
header('location:./seat.php');


?>