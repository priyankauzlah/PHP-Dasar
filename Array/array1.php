<?php

// array = variable yang dapat menyimpan banyak nilai

//cara lama 
$hari = array ("senin", "selasa", "rabu");

// cara baru
$bulan = ["januari", "februari", "maret"]; 
$random = [false, "februari", 1234];

// var dump = buat ngeliatin dia jennisnya tuh apa
var_dump ($bulan);

// array numerik = key-nya menggunakan index [index = 1, 2, 3, 4]
// array assosiative = key-nya menggunakan string yang kita definisikan sendiri

// cara pemanggilan array
echo $bulan[0];

// cara menambahkan array ke dalam array yang sudah ada
$bulan[] = "april";
$bulan[] = "may";

var_dump($bulan);
?>