<?php
    session_start();
    //menyimpan maklumat yang didaftar ke dalam $_SESSION
    $adult = (int)$_POST['adult'];
    $children = (int)$_POST['children'];
    $student = (int)$_POST['student'];
    
    $_SESSION['adult'] = $adult;
    $_SESSION['children'] = $children;
    $_SESSION['student'] = $student;

    $_SESSION['adultPrice'] = 15;
    $_SESSION['studentPrice'] =  10;
    $_SESSION['childrenPrice'] = 9;
    
    //mengira jumlah harga yang perlu dibayar
    $total = $adult + $children + $student;
    
    $_SESSION['jumlahTiket'] = $total;
    
    //jika jumlah kedudukan yang dipilih bersamaan dengan jumlah tiket yang ditempah, proses diteruskan
    if(count($_SESSION['idDuduk']) == $total){
        $_SESSION['totalPrice'] = ((int)$adult * $_SESSION['adultPrice']) + ((int)$children * $_SESSION['childrenPrice']) + ((int)$student * $_SESSION['studentPrice']);
        header("location:payment.php");
        
    //balik ke laman sebelumnya jika jumlah tiket tidak berpadanan dengan jumlah kedudukan yang dipilih
    }else{
        echo "<script type='text/javascript'>window.location='price.php'; alert('Please check number of tickets selected')</script>";
    }
