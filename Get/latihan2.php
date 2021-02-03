<?php 

// isset = untuk ngecek variablenya apakah udah ada apa belum
// nanti bakal di check di $_GET apakah ada data apa enggak ? kalo misalkan gak ada data bakal dipaksa dipindahin ke latihan1.php

if( !isset ($_GET["nama"]) ||
    !isset ($_GET["nim"]) ||
    !isset ($_GET["jurusan"]) ||
    !isset ($_GET["email"])
    ){
   //memindahkan ke halaman lain
    header("location: latihan1.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li> <?= $_GET["nama"]; ?> </li>
        <li> <?= $_GET["nim"];?> </li>
        <li> <?= $_GET["jurusan"]; ?> </li>
        <li> <?= $_GET["email"]; ?> </li>
    </ul>

    <a href="latihan1.php">back</a>
</body>
</html>