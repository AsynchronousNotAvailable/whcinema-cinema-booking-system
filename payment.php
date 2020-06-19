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
        <div class="img-container">
            <img id="poster" src="<?php echo ($_SESSION['image']);?>"></div>
        <div class="price">
            <?php echo "ID WAYANG : "  . $_SESSION['idWayang'] ?><br>
            <?php echo "NAMA WAYANG : "  . $_SESSION['movie'] ?><br>
            <?php echo "MASA : " . $_SESSION['time']?><br>
            <?php echo "TARIKH : " . $_SESSION['date']?><br>
            <?php echo "KEDUDUKAN: ";
                    for($x=0;$x<count($_SESSION['idDuduk']);$x++){
                    echo $_SESSION['idDuduk'][$x]. " ";
                    
            }?>
            <br>
            <br>
            <?php echo "Dewasa : " . $_SESSION['adult']?> X RM<?php echo $_SESSION['adultPrice']?>
            <br>
            <?php echo "Murid : " . $_SESSION['student']?> X RM<?php echo $_SESSION['studentPrice']?>
            <br>
            <?php echo "Kanak-kanak : " . $_SESSION['children']?> X RM<?php echo $_SESSION['childrenPrice']?>
            <br>
            <br>
            <?php echo "Jumlah Harga : RM" . $_SESSION['totalPrice'] ?>
            <br>
            <br>
            <form action="receipt.php" method="post">
                <div class="middle">
                    <button class="btn btn1">BAYAR</button>
                </div>
            </form>
        </div>
    </div>
    <div class="footer">
        <?php include'footer.php';?>
    </div>
</body>
</html>