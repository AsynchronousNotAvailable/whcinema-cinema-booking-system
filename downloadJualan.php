<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "cinema");
$output = '';
if(isset($_POST["export"]))
{
    $query = "SELECT Wayang, SUM(jumlahHarga) AS 'totalSales' FROM tiket GROUP BY Wayang";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0)
    {
        $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Wayang</th>  
                         <th>Jumlah Jualan</th>  
                         
                    </tr>
  ';
        while($row = mysqli_fetch_array($result))
        {
            $output .= '
    <tr>  
                         <td>'.$row["Wayang"].'</td>  
                         <td>'.$row["totalSales"].'</td>  
                    </tr>
   ';
        }
        $output .= '</table>';
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Jualan.xls');
        echo $output;
    }
}
?>