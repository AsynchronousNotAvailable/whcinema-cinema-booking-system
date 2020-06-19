<!DOCTYPE html>
<html>

<head>
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="./register_style.css">
  <title>Laman Pendaftaran</title>
</head>

<body>
  <div class="main">
    <p class="Login" align="center">Pendaftaran</p>
    <form class="form" action="./reg_Validation.php" method="POST">
      <input class="password" type="text" align="center" placeholder="no.KP/Id" name= "id">  
      <input class="username " type="text" align="center" placeholder="Name" name= "name"> 
      <input class="password" type="password" align="center" placeholder="Password" name= "password">
      <input class="confirm" type="password" align="center" placeholder=" Confirm Password" name="con_password">
      <input class="password" type="text" align="center" placeholder="Telephone" name= "telefon">
      <select class="password" name="type">
          <option>Admin</option>
          <option>Pekerja</option>
        </select>
      <button onclick= "required()" class="submit" align="center"> Daftar</button>
    </form>
      <p class="admin" align="center"><a href="./login.php">Sudah daftar? Log Masuk di sini!</p>
            
                 
    </div>
     
</body>
    <div class="footer">
        <?php include'footer.php';?>
    </div>

</html>



