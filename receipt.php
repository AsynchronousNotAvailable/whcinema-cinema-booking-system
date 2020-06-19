<?php
 session_start();
    $connect = mysqli_connect('localhost', 'root', '');

    mysqli_select_db($connect, 'cinema');

    //menyimpan maklumat yang didaftar ke dalam $_SESSION 
    $tarikh = $_SESSION['date'];
    $idwayang = $_SESSION['idWayang'];
    $masa = $_SESSION['time'];
    $harga = $_SESSION['totalPrice'] / $_SESSION['jumlahTiket'];
    $bilik = $_SESSION['hall'];
    $penggunaid = $_SESSION['penggunaid'];

    
    
        
    
   foreach($_SESSION['idkedudukan'] as $results){
      $idTiket = "T" . strval(rand(100, 999));
      $s = "INSERT INTO tiket (idTiket, tarikhJualan, jumlahHarga, idWayang, idKedudukan, idPengguna ) VALUES ('$idTiket', '$tarikh', '$harga' , '$idwayang',  '$results', '$penggunaid')";

      $insert = mysqli_query($connect, $s);
   }
    //mengisi data tiket yang ditempah ke dalam pangkalan data


    
    
    //memberitahu kepada pengguna bahawa bayaran telah berjaya dilakukan
    echo "<script type='text/javascript'>window.location='print.php'; alert('PAYMENT SUCCESS')</script>"; 
?>
