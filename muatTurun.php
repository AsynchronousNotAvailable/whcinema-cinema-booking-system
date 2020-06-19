<?php
//export.php
$connect = mysqli_connect("localhost", "root", "", "cinema");
$output = '';
if(isset($_POST["export"]))
{
    $query = "SELECT * FROM pengguna";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0)
    {
        $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Id Pengguna</th>  
                         <th>Nama Pengguna </th>  
                         <th>Kata Laluan</th>  
                         <th>Telefon Pengguna</th>
                         <th>Jenis Pengguna</th>
                    </tr>
  ';
        while($row = mysqli_fetch_array($result))
        {
            $output .= '
    <tr>  
                         <td>'.$row["idPengguna"].'</td>  
                         <td>'.$row["namaPengguna"].'</td>  
                         <td>'.$row["kataLaluan"].'</td>  
                         <td>'.$row["telefonPengguna"].'</td> 
                         <td>'.$row["jenisPengguna"].'</td> 
                    </tr>
   ';
        }
        $output .= '</table>';
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=SenaraiPekerja.xls');
        echo $output;
    }
}
?>