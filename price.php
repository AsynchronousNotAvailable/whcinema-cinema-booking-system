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
    <title>Document</title>
    <link rel="stylesheet" href="./price.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
        
        <div class="price-container">
            <img id="poster" src="<?php echo ($_SESSION['image']);?>">
            <div class="price">
                <?php echo "MOVIE : "  . $_SESSION['movie'] ?><br>
                <?php echo "TIME : " . $_SESSION['time']?><br>
                <?php echo "DATE : " . $_SESSION['date']?><br>
                <?php echo "SEAT : ";
                for($x=0;$x<count($_SESSION['idDuduk']);$x++){
                    echo $_SESSION['idDuduk'][$x]. " ";
                    
                    
                }?>
            
                <br>
                <br>
                <h3>SILA PILIH : </h3>
                <form action="validation_checkout.php" method="post">
                    <div class="adult">
                        <h3>DEWASA :</h3>
                        <select name="adult">
                            <option name="adult" value=""></option>
                            <option name="adult" value="1">1</option>
                            <option name="adult" value="2">2</option>
                            <option name="adult" value="3">3</option>
                            <option name="adult" value="4">4</option>
                            <option name="adult" value="5">5</option>
                        </select></div>

                    <div class="children"><h3>KANAK-KANAK :</h3>
                    <select name="children">
                        <option name="children" value=""></option>
                        <option name="children" value="1">1</option>
                        <option name="children" value="2">2</option>
                        <option name="children" value="3">3</option>
                        <option name="children" value="4">4</option>
                        <option name="children" value="5">5</option>
                        </select></div>
                    
                    <div class="student"><h3>MURID :</h3>
                    <select name="student">
                        <option name="student" value=""></option>
                        <option name="student" value="1">1</option>
                        <option name="student" value="2">2</option>
                        <option name="student" value="3">3</option>
                        <option name="student" value="4">4</option>
                        <option name="student" value="5">5</option>
                        </select></div>
                    
                
                    <div class="btn-container">
                        <button type="submit">Tempah</button>
                    </div>  
                </form>
            </div>
        </div>
    <div class="footer">
        <?php include'footer.php';?>
    </div>

    </body>
</html>