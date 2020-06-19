<?php
    session_start();
    include 'header.php';
    if(!isset($_SESSION['nama'])) {
        header("Location: login.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SENARAI WAYANG</title>
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
        
        <script>
        $(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

});
    </script>
    
    </div>
            
        
            
        <div class="main" style="width: 80%;">
        <div class="reg-container">
            <div class="title">
                Senarai Wayang
            </div>
            <table style="margin-top: 5%">
                <tr>
                    <th>Id Wayang</th>
                    <th>Nama Wayang</th>
                    <th>Tempoh Wayang</th>
                    <th>Masa Tontonan</th>
                </tr>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "cinema");
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM wayang";
            
                $result = $conn->query($sql);

                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["idWayang"]. "</td><td>" . $row["namaWayang"] . "</td><td>"
                            . $row["tempohWayang"] . "</td><td>" . $row["masaTontonan"];
                    }
                    echo "</table >";
                
                $conn->close();
                ?>
            </table>

</div>
    </div>    
    </div>
    
         
    
         
</div>
        
   
    

 <div class="footer">
        <?php include'footer.php';?>
    </div>
    
</body>
    
</html>
