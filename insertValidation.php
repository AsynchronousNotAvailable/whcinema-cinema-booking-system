<?php

    session_start();
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cinema";
    
    //menghubungkan localhost dengan pangkalan data
    $conn = new mysqli($servername, $username, $password, $dbname);

    // mengenal pasti hubungan antara localhost dengan pangkalan data
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    //mengubah jenis data daripada 'string' ke 'array
    if(isset($_SESSION['file']))
        $csv = "./muatnaik/" . $_SESSION['file'];

        $csvArray = array_map('str_getcsv', file($csv));

        //menghapuskan nama medan
        array_shift($csvArray);

        $counter = count($csvArray);

        $x = 1;
        
        for ($i = 0; $i < (count($csvArray)); $i++) {
            
            if ($x <= $counter) {                                    
                $id = $csvArray[$i][0];
                $nama = $csvArray[$i][1];
                $password = $csvArray[$i][2];
                $telefon = $csvArray[$i][3];
                $jenis = $csvArray[$i][4];
                
                //mengisi data ke dalam pangkalan data
                $sql = "INSERT INTO pengguna(idPengguna, namaPengguna, kataLaluan, telefonPengguna, jenisPengguna) VALUES ('$id', '$nama', '$password','$telefon','$jenis');";

                $result = $conn->query($sql);

                $x = $x + 1;

            }

        }
        
        //memberitahu kepada pengguna bahawa fail telah berjaya dimuat naik 
        if ($x == $counter + 1){
            
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Anda berjaya memuat naik fail CSV.')
            window.location.href='./muatnaikCSV.php';
            </SCRIPT>");

            unset($_SESSION['file']);

            $conn->close();         

        } else {
            //memberitahu kepada pengguna bahawa fail gagal dimuat naik
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Anda gagal memuat naik fail CSV anda. Sila cuba sekali lagi.')
            window.location.href='./muatnaikCSV.php';
            </SCRIPT>");
            
            unset($_SESSION['file']);

            $conn->close(); 

        }      
    }

?>