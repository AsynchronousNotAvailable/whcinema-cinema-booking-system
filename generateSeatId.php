<?php

$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "cinema";

$array = [];

$conn = new mysqli($serverName, $username, $password, $dbName);

if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}

for ($x = 1; $x < 43; $x ++) {

    $seatID = "A" . $x;
    array_push($array, $seatID);

}

for ($n = 1; $n < 5; $n ++){

    for($x = 0; $x < count($array); $x ++){

        $seatID = $array[$x];

        $sql = "INSERT INTO kedudukan(idDuduk, bilik) VALUES ('$seatID','$n')";

        $result = $conn->query($sql);
    }

}

?>