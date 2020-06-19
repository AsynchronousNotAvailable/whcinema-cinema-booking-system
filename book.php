<?php
    session_start();

    $connect = mysqli_connect('localhost', 'root', '');

    mysqli_select_db($connect, 'cinema');
    
   
        //menghantar kedudukan yang dipilih ke dalam $_SESSION

    
        if($_POST['seat'] != null){
            $seat[] = $_POST['seat'];
            
            
          $_SESSION['idDuduk'] = [];
          $_SESSION['idkedudukan'] = [];

            for ($x = 0; $x < count($seat[0]); $x ++){
                $id = $seat[0][$x];
                $sql = "SELECT idDuduk FROM kedudukan WHERE idKedudukan = '$id'";
                $result = $connect->query($sql);
                while ($row = $result->fetch_assoc()){
                    array_push($_SESSION['idDuduk'], $row['idDuduk']);
                    array_push($_SESSION['idkedudukan'], $id );

                    
                    
                }
            }

            header('location: price.php');
            
        
        //balik ke seat.php jika tiada kedudukan telah dipilih 
        }else{
            echo "<script type='text/javascript'>window.location='seat.php';alert('Sila Tempah Sekurang-kurangnya satu kedudukan.')</script>";
        }
    
?>

