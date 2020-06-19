<?php

session_start();
include 'header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SENARAI PEKERJA</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/9387647be6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="play.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<body>
    <div class="navigation-bar">
        <ul class="navigation">
        
        
    </ul>
    
        <div class="wrapper">
            
            
            <nav id="sidebar">
                
                <div class="sidebar-header">
                    
                        <h2><center><?php echo $_SESSION['nama']; ?></center></h2>
                    
                </div>

                <ul class="list-unstyled components">
            
                    <div>
                        <li class="tambah"><a>Tambah Pekerja</a>
                            <ul>
                                <li class="selection">
                                    <a href="tambahPekerja.php">pendaftaran</a>
                                </li>
                                <li>
                                    <a href="muatnaikCSV.php">Muatnaik Fail CSV</a>
                                </li>
                            </ul>
                        </li>
                    </div>
            
        
                    <div><li><a href="jualan.php">Jualan</a></li></div>
            
                    <div><li><a href="senaraiPekerja.php">Senarai Pekerja</a></li></div>
                    
                    <div><li><a href="senaraiWayang.php">Senarai Wayang</a></li></div>
            
                </ul>
                
            </nav>
    
    
            <div id="content">
                
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                            
                            <i class="fas fa-align-left"></i>
                
                        </button>

                    </div>
                    
                </nav>
                
            </div>
            
            
            <div id="main-body" style="width:80%"> 
                
            <div class="container" id="pendaftaran">

                <div class="row" id="title">

                    <h3> Muat Naik Fail CSV </h3>

                </div>

                <form id="upload" action="muatnaikValidation.php" method="POST" enctype="multipart/form-data">

                <h5>Pilih Fail CSV untuk Dimuat Naik:</h5>

                <input class="upload" type="file" name="fileToUpload" id="fileToUpload">

                <input class="upload" type="submit" value="Muat Naik Fail" name="submit">
                            
            </form>
                    
                <div id="uploadFile">

                <?php if(isset($_SESSION['file'])){

                        $csv = "./muatnaik/" . $_SESSION['file'];

                        $csvArray = array_map('str_getcsv', file($csv));

                        array_shift($csvArray);

                        echo ("<h3 style='margin:30px;'>Fail CSV: ");
                        echo ($_SESSION['file']);
                        echo ("</h3>");

                        echo ('<table>
                                <tr style="font-weight:bold;">
                                    <td>Id Pengguna</td>
                                    <td>Nama Pengguna</td>
                                    <td>kataLaluan Pengguna</td>
                                    <td>Telefon Pengguna</td>
                                    <td>Jenis Pengguna</td>
                                </tr>
                        ');

                        for ($counter = 0; $counter < count($csvArray); $counter++){
                            echo ('<tr>');
                            for ($counter2 = 0; $counter2 < count($csvArray[0]); $counter2++){
                                echo ('<td>');
                                echo (strval($csvArray[$counter][$counter2]));
                                echo ('</td>');    
                            }
                            echo ('</tr>');
                            }
                            echo ('</table>');
                            } 
                            else{
                                echo ("<h3 style='margin:30px;'>Fail CSV: ");
                                echo ("</h3>");
                                echo ('
                                    <table>
                                    
                                        <tr style="font-weight:bold;">
                                            <td>Id Pengguna</td>
                                            <td>Nama Pengguna</td>
                                            <td>kataLaluan Pengguna</td>
                                            <td>Telefon Pengguna</td>
                                            <td>Jenis Pengguna</td>
                                        </tr>

                                        <tr>

                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        
                                        </tr>

                                    </table>

                                ');                                    
                            }?>

                            

                            <a role="button" id="CSVsubmit" href="  insertValidation.php" onclick="return confirm('Adakah anda ingin masukkan data fail CSV ke dalam pangkalan data?')">Masukkan Data Fail CSV ke dalam Pangkalan Data</a>
                        </div>
            
            </div>
        
        </div>
        
        </div>


        <script>
        $(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

});
    </script>
    
    
  
        
    </div>
    
    <div class="footer">
        <?php include'footer.php';?>
    </div>
    
</body>