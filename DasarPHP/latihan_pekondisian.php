<?php 

date_default_timezone_set("Asia/Jakarta");
$jam = date("H:i");

if ($jam > "06.00" && $jam < "10.00"){
    $waktu = "Pagi";
}elseif ($jam >="10.00" && $jam < "14.00"){
    $waktu = "Siang";
}elseif ($jam >="14.00" && $jam < "18.00"){
    $waktu = "Sore";
}elseif($jam >= "18.00" && $jam < "00.00"){
    $waktu = "Malem";
}else{
    $waktu = "Fajar";
}

echo "Selamat $waktu"
?>

date_default_timezone_set("Asia/Jakarta");
$jam = date("H:i");

if ($jam > "04.28" && $jam < "05.51"){
    $waktu = "Subuh";
}elseif ($jam >="12.04" && $jam < "15.27"){
    $waktu = "Dzuhur";
}elseif ($jam >="15.27" && $jam < "18.17"){
    $waktu = "Ashar";
}elseif($jam >= "18.17" && $jam < "19.32"){
    $waktu = "Maghrib";
}else{
    $waktu = "Isya";
}

echo "Waktu shalat $waktu telah tiba"