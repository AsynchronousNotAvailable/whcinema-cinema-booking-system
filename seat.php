<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="seat.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/9387647be6.js" crossorigin="anonymous"></script>


</head>
<body>
    <?php 
    
      include 'header.php';
    
      $serverName = "localhost";
      $username = "root";
      $password = "";
      $dbName = "cinema";

      $conn = new mysqli($serverName, $username, $password, $dbName);
    
      $bilik = $_SESSION['hall'];

      $sql = "SELECT idKedudukan, idDuduk FROM kedudukan WHERE bilik = '$bilik'";

      $result = $conn->query($sql);

      $array = [];

      while ($row = $result->fetch_assoc()) {

          array_push($array, $row);

      }

    ?>

    <div class="container">
       <img id="poster" src="<?php echo ($_SESSION['image']);?>">
        <h4 style="text-align:center;"><?php echo ($_SESSION['movie']);?> </h4>
        <h5><h5>P13 | <?php echo $_SESSION['showing'] ?> | <?php echo $_SESSION['date'] ?>   
            | <?php echo $_SESSION['time'] ?> | <?php echo $_SESSION['hall'] ?></h5></h5>
    </div>
    
    <div class="screen-container">
        <div class="screen"><h1>Skrin</h1></div>
    </div>
        
    
    <form method="post" action="book.php">
      <div class="container-theatre">
          <div class="theatre">
            <div class="container-left">
              <div class="cinema-seats-left">
                A1 --> A7
                <div class="cinema-row row-1">

                  <?php

                    for ($x = 0; $x < 7; $x ++) {
                      echo '<input type="checkbox" id="';
                      echo $array[$x]['idKedudukan'];
                      echo '" name="seat[]" value="';
                      echo $array[$x]['idKedudukan'];
                      echo '"><label for="';
                      echo $array[$x]['idKedudukan'];
                      echo '"><i class="fas fa-couch fa-2x"></i></label>';
                    }
                    
                  ?>
                    
                </div>
                A15 --> A21
                <div class="cinema-row row-2">
                  <?php

                    for ($x = 14; $x < 21; $x ++) {
                      echo '<input type="checkbox" id="';
                      echo $array[$x]['idKedudukan'];
                      echo '" name="seat[]" value="';
                      echo $array[$x]['idKedudukan'];
                      echo '"><label for="';
                      echo $array[$x]['idKedudukan'];
                      echo '"><i class="fas fa-couch fa-2x"></i></label>';
                    }
                    
                  ?>
                </div>
                A29 --> A35
                <div class="cinema-row row-3">
                  <?php

                    for ($x = 28; $x < 35; $x ++) {
                      echo '<input type="checkbox" id="';
                      echo $array[$x]['idKedudukan'];
                      echo '" name="seat[]" value="';
                      echo $array[$x]['idKedudukan'];
                      echo '"><label for="';
                      echo $array[$x]['idKedudukan'];
                      echo '"><i class="fas fa-couch fa-2x"></i></label>';
                    }
                    
                  ?>
                </div>
              </div>
            </div>


            <div class="container-right">
              <div class="cinema-seats-right">
                A8 --> 14
                <div class="cinema-row row-1">
                  <?php

                    for ($x = 7; $x < 14; $x ++) {
                      echo '<input type="checkbox" id="';
                      echo $array[$x]['idKedudukan'];
                      echo '" name="seat[]" value="';
                      echo $array[$x]['idKedudukan'];
                      echo '"><label for="';
                      echo $array[$x]['idKedudukan'];
                      echo '"><i class="fas fa-couch fa-2x"></i></label>';
                    }
                    
                  ?>
                </div>
                A22 --> A28
                <div class="cinema-row row-2">
                  <?php

                    for ($x = 21; $x < 28; $x ++) {
                      echo '<input type="checkbox" id="';
                      echo $array[$x]['idKedudukan'];
                      echo '" name="seat[]" value="';
                      echo $array[$x]['idKedudukan'];
                      echo '"><label for="';
                      echo $array[$x]['idKedudukan'];
                      echo '"><i class="fas fa-couch fa-2x"></i></label>';
                    }
                    
                  ?>
                </div>
                A36 --> A42
                <div class="cinema-row row-3">
                  <?php

                    for ($x = 35; $x < 42; $x ++) {
                      echo '<input type="checkbox" id="';
                      echo $array[$x]['idKedudukan'];
                      echo '" name="seat[]" value="';
                      echo $array[$x]['idKedudukan'];
                      echo '"><label for="';
                      echo $array[$x]['idKedudukan'];
                      echo '"><i class="fas fa-couch fa-2x"></i></label>';
                    }
                    
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-container">
            <button type="submit">Tempah</button>
          </div>  
        </div>
      </form>

      <script>
          $('.cinema-seats .seat').on('click', function() {
        $(this).toggleClass('active');
      });
    
      </script>
    
      <div class="footer">
          <?php include'footer.php';?>
      </div>
  </body>
</html>