<?php

session_start();


$connect = mysqli_connect('localhost', 'root', '', 'cinema');
$s = "SELECT * FROM pengguna WHERE idPengguna = '{$_POST['edit']}'";
$result = mysqli_query($connect, $s);
while($data = mysqli_fetch_assoc($result)){
    $nama = $data['namaPengguna'];
    $katalaluan = $data['kataLaluan'];
    $tel = $data['telefonPengguna'];
    $jenis = $data['jenisPengguna'];
}



?>


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UAA-Compatible" content="ie=edge">
    <title>Kemas Kini</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class='main' style="width: 40%; height:100%;">
        <form class="form" action="kemaskini_validation.php" method="post">
            <p class="Login" style="align-content: center;">Id Pengguna </p>
            <input class="password" name="idPengguna" value="<?php echo $_POST['edit'] ?>" required>
            
            <p class="Login">Nama Pengguna </p>
            <input class="password" name="namaPengguna" placeholder="namaPengguna" value="<?php echo $nama; ?>" required>
            
            <p class="Login">kata laluan </p>
            <input class="password" name="kataLaluan" placeholder="kataLaluan" value="<?php echo $katalaluan; ?>" required>
            
            <p class="Login">Telefon Pengguna </p>
            <input class="password" name="telefonPengguna" placeholder="telefon" value="<?php echo $tel; ?>" required>
            
            <p class="Login">jenis Pengguna </p>
           <select class="password" name="type" value="<?php echo $jenis; ?>">
          <option>Admin</option>
          <option>Pekerja</option>
              
        </select>
            
            <button class="submit">UBAH</button>
        </form>
        
        
        
        
    </div>
</body>
</html>