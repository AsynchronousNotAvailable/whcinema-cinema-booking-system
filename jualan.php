<?php
    session_start();
    include 'header.php';

    $connect = mysqli_connect('localhost', 'root', '',  'cinema');

    $s = "SELECT idWayang, SUM(jumlahHarga) as 'totalSales' FROM tiket GROUP BY idWayang ";

    if (isset($_POST['query'])){
        $wayang = $_POST['query'];
        if($_POST['query'] == "all"){
            $s = "SELECT idWayang, SUM(jumlahHarga) as 'totalSales' FROM tiket GROUP BY idWayang ";
        }else{
            $s = "SELECT idWayang, SUM(jumlahHarga) as 'totalSales' FROM tiket WHERE idWayang = '{$wayang}'";
        }
    }


    $jumlah = 0;
    $movie = array();
    $result = mysqli_query($connect, $s);
    while ($data = mysqli_fetch_assoc($result)){
        $jumlah += $data['totalSales'];
        $_SESSION['jumlah'] = $jumlah;
        array_push($movie, $data['idWayang']);
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/9387647be6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="play.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <title>JUALAN</title>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                <?php
                    if (isset($_POST['query'])){
                        if ($_POST['query'] == "all"){
                            echo "['idWayang', 'totalSales'],";
                            $z = mysqli_query($connect, $s);
                            while($result = mysqli_fetch_assoc($z)){
                                echo"['".$result['idWayang']."', ".$result['totalSales']."],";
                            }
                        }else{
                            echo "['Bulan', 'Jumlah(RM)'],";
                            $s = "SELECT EXTRACT(MONTH FROM tarikhJualan) as 'Bulan', SUM(jumlahHarga) as 'totalSales' FROM tiket WHERE idWayang = '{$wayang}' GROUP BY EXTRACT(MONTH FROM tarikhJualan) ";
                            
                            $z = mysqli_query($connect, $s);
                            while($result = mysqli_fetch_assoc($z)){
                                switch($result['Bulan']){
                                    case 1: 
                                        $result['Bulan'] = "Januari";
                                        break;
                                    case 2:
                                        $result['Bulan'] = "Februari";
                                        break;
                                    case 3:
                                        $result['Bulan'] = "March";
                                        break;
                                    case 4: 
                                        $result['Bulan'] = "April";
                                        break;
                                    case 5:
                                        $result['Bulan'] = "May";
                                        break;
                                    case 6:
                                        $result['Bulan'] = "June";
                                        break;
                                    case 7:
                                        $result['Bulan'] = "July";
                                        break;
                                    case 8:
                                        $result['Bulan'] = "August";
                                        break;
                                    case 9:
                                        $result['Bulan'] = "September";
                                        break;
                                    case 10;
                                        $result['Bulan'] = "October";
                                        break;
                                    case 11:
                                        $result['Bulan'] = "November";
                                        break;
                                    case 12:
                                        $result['Bulan'] = "December";
                                          
                                }
                                echo"['".$result['Bulan']."', ".$result['totalSales']."],";
                            }
                        }
                    }else{
                        echo "['Wayang', 'Jumlah(RM)'],";
                        $z = mysqli_query($connect, $s);
                        while($result = mysqli_fetch_assoc($z)){
                            echo"['".$result['idWayang']."', ".$result['totalSales']."],";
                        }
                    }

                ?>
            ]);

            var options = {
                title: 'Jualan',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
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
                JUALAN WHCINEMA
            </div>
            <div class="query" style="margin-top: 1%;">
                <h5>Pilih bulan jualan :</h5>
                <form action="" method="post">
                    <select name="query" required>
                        <option>
                            <?php
                                if (isset($_POST['query'])){
                                    if ($_POST['query'] == "all"){
                                        echo "ALL";
                                    }else{
                                        echo $wayang;
                                    }
                                }else{
                                    echo "ALL";
                                }
                            ?>
                        </option>
                        <option value="all">ALL</option>
                        <option value="B01">Ip Man 4</option>
                        <option value="B02">Iron Man</option>
                        <option value="B03">Ghostbusters</option>
                        <option value="B04">Godzilla</option>
                    </select>
                    <button type="submit" class="btn-primary">TERUSKAN</button>
                    
               
                </form>
                <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
            </div>

            <center>
                <h5 style="margin-top: 2%">
                    <?php 
                        if(isset ($_POST['query'])){
                            if ($_POST['query'] == "all"){
                                echo "Jumlah Harga ialah RM :" . $jumlah;
                            }
                            else{
                                echo "Jumlah Harga bagi wayang " . $wayang . " ialah RM : " . $jumlah;
                            }

		                }
    
		                else{
                            echo "Jumlah Harga ialah RM :" . $jumlah;
			                 }
                        ?>
                </h5>
            </center>
            <form action="downloadJualan.php" method="post">
                <div class="middle">
                    <input type="submit" name="export" class="btn" value="MUAT TURUN REPORT JUALAN" />
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
