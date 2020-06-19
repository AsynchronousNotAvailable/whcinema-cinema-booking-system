<html>

<head>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="Style.css">
  <title>Laman Log Masuk </title>
  
</head>

<body>

  

<p class="Login" align="center" style="color: white; margin-bottom:0;">Selamat Datang ke WhCinema!!!</p>
  <div class="main">
      
    <p class="Login" align="center">Log Masuk</p>
    <form class="form" action="./validation_Login.php" method="POST">
        
      <input class="username" type="text" align="center" placeholder="Username" name="id" required>
      <input class="password" type="password" align="center" placeholder="Password" name="password" required>
      <button onclick= "required()" class="submit" align="center"> Masuk</button>
    </form>
    

      <p class="admin" align="center"><a href="./register.php">Baharu? Daftar Sini!</a></p>
      
    </div>
   <div class="footer">
        <?php include'footer.php';?>
    </div>
</body>

</html>



