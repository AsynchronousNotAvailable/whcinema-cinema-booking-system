<?php
session_start();
$_SESSION['movie'] = "ghostbusters";
$_SESSION['image'] = "ghostbusters";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./booking.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


</head>
<body>
    <?php include 'header.php';?>


<div class="container-fluid">
    <div class="img-container">
        <img src="ghostbusters.jpg">
        <h4>Ghostbusters</h4>
    </div>
    
<form method="post" action="select_time_and_date.php">
    <div class="date"><h3>Pilih tarikh</h3>
        <input type="date" name="date" required>
    </div>
    <div class="time"><h3>Pilih Masa</h3>
    <select id="time" name="time">
  <option value="8.15a.m.">8.15A.M.</option>
  <option value="10.15a.m.">10.15A.M.</option>
        <option value="1.15p.m.">1.15P.M.</option>
        <option value="4.45p.m.">4.45A.M.</option>

</select></div>
    <div class = "book-container">
        <div class="book">
            <button a="" type="submit">Tempah</button>
        </div>
    </div>
    </form>
</div>
    
    <div class="footer">
        <?php include'footer.php';?>
    </div>
    
</body>
</html>