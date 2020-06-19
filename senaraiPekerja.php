<?php

session_start();
include 'header.php';
$namaPengguna = $_SESSION['nama'];
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
    </head>
<body>
    

<div class="navigation-bar">
    <ul class="navigation">
        
        
        </ul>
    
    <div class="wrapper">
        <nav id="sidebar">
        <div class="sidebar-header">
            <h2><center><?php
            echo $_SESSION['nama'];
            ?></center></h2>
        </div>

    <ul class="list-unstyled components">
            
            <div>
                <li class="tambah"><a>Tambah Pekerja</a>
                    <ul>
                        <li class="selection">
                            <a href="tambahPekerja.php">pendaftaran</a></li>
                        <li><a href="muatnaikCSV.php">Muatnaik Fail CSV</a></li>
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
        
        <script>
        $(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

});
    </script>
    
    
        <div class="main" style="width: 80%;">
        <div class="reg-container">
            <div class="title">
                SENARAI PEKERJA
            </div>
            <div class="Pg">
                
            </div>
            <form action="kemaskini.php" method="post">
                <table>
                    <tr>
                        <th>Id Pekerja</th>
                        <th>Nama Pekerja</th>
                        <th>Kata Laluan</th>
                        <th>Telefon Pekerja</th>
                        <th>Jenis Pekerja</th>
                        <th> </th>
                    </tr>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "cinema");
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM pengguna";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()){ ?>
                            <tr>
                                    <td><?php echo $row["idPengguna"]; ?></td>
                                    <td><?php echo $row["namaPengguna"]; ?></td>
                                    <td><?php echo $row["kataLaluan"]; ?></td>
                                    <td><?php echo $row["telefonPengguna"]; ?></td>
                                    <td><?php echo $row["jenisPengguna"]; ?></td>
                                
                                    <td><button type="submit" name="edit" id="Kemaskini" 
                                               value="<?php echo $row["idPengguna"]; ?>"
                                                class="btn-2"/>
                                        KEMAS KINI
                                        </td>
                                    </tr>
                                    <?php 
                        } 
                    } 
                    ?>
                </table>
            </form>
            
            <form action="muatTurun.php" method="post">
                <div class="middle">
                    <input type="submit" name="export" class="btn" value="MUAT TURUN SENARAI PEKERJA" />
                </div>
            </form>
            </div>
    </div>
    
    
    
    
            

        </div>
    </div>
    
    <div class="footer">
        <?php include'footer.php';?>
    </div>

</body>
    
</html>