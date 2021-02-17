<?php

// operator penggabung string = . (titik)

$nama_depan = "Priyanka";
$nama_belakang = "Uzlah";

echo $nama_depan . " " . $nama_belakang;
echo "<p>";

// operator aritmatika -> + - * / %

$x = 7;
$y = 2;

echo "pertambahan (+) = ";
echo $x+$y;

echo "<br>";

echo "pengurangan (-) = ";
echo $x-$y;

echo "<br>";

echo "perkalian (*) = ";
echo $x*$y;

echo "<br>";

echo "pembagian (/) = ";
echo $x/$y;

echo "<br>";

echo "Sisa (%) = ";
echo $x%$y;
echo "<p>";


//operator assignment -> =, +=, -=, /=, %=, .= (buat string )

$x = 10;
$x /= 5;
echo $x;
echo "<br>";

$nama = "uzlah";
$nama .= "UZLAH";
echo $nama;
echo "<p>";

// operator perbandingan -> <, >, <=, >=, ==, !=
// var_dump biar tau tipe datanya apa dan perbandingannya bener atau enggak (true/false)

var_dump (9 == "9");
echo "<br>";
var_dump ($nama);
echo "<p>";

//operator indetitas -> ===, !===
var_dump (1 === "1");
echo "<p>";

// perbedaan operator identitas & perbandingan :
// identitas itu lebih ke identitasnya itu boolean / string/ apa
// perbadingan itu boleh tulisannya boolean / string yang penting sama angkanya

// logika -> &&, || (atau), !
$x = 20;

// && (dan) = dua duanya harus bener
var_dump($x < 10 && $x % 2 == 0);

echo "<br>";

// || (atau) = salah satu harus bener
var_dump($x = 20 || $x / 0 == 0);


?>