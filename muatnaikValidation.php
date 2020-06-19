<?php

    session_start();

    $target_dir = "muatnaik/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $uploadOk = 1;
    }

    if (file_exists($target_file)) {
        unlink($target_file);
    }

    if ($uploadOk == 0) {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Anda Gagal Memuat Naik Fail CSV. Sila Cuba Sekali Lagi.')
        window.location.href='./muatnaikCSV.php';
        </SCRIPT>");
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $_SESSION['file'] = basename($_FILES["fileToUpload"]["name"]);
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Anda telah berjaya muat naik fail CSV.')
            window.location.href='./muatnaikCSV.php';   
            </SCRIPT>");
        } else {
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert(''Anda Gagal Memuat Naik Fail CSV. Sila Cuba Sekali Lagi.')
            window.location.href='./muatnaikCSV.php';
            </SCRIPT>");
        }
    }

?>