<?php 

/*FUNCTION
Sekumpulan intruksi yang dibungkus dalam sebuah blok 
*/

function biodata(){
    echo "Uzlah <br>";
    echo "X RPL <br>";
    echo "7 Juli 2005 <br>";
}

biodata();
echo "<p>";

/* DATE 
MENAMPILKAN TANGGAL DENGAN FORMAT TERTENTU
l = nama hari (lengkap) = Wednesday
D = nama hari (singkat)= Wed
d = tanggal = 19
m = bulan (angka) = 07
M = bulan (text singkat) = Jul
F = bulan (text lengkap) = July
y = tahun (2 angka akhir) = 21
link :
https://www.php.net/manual/en/function.date.php
*/

date_default_timezone_set("Asia/Jakarta");

echo date ("d, m y");
echo "<p>";
echo date ("h : i : s");
echo "<p>";

/* 
TIME
detik yang berlalu sejak 1 Januari 1970
*/
echo time();
echo "<p>";
echo date("l, d M y", time()-60*60*24*100);
echo "<p>";

// buat cari hari apa
echo date ("l", strtotime("7 July 2005"))

?>