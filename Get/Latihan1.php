<?php 

/*
variable super global (dari php) :
tipe data variable global adalah array asosiatif 

$_GET
$_POST
$_REQUEST
$_COOKIE
$_SESSION
$_SERVER
$_ENV
$_GLOBALS
*/

/* 
GET ($_GET)
-> mengirim data lewat url
-> datanya tidak rahasia (bisa dilihat orang lain)

POST ($_POST)
-> mengirim data lewat FORM
-> datanya rahasia (biasanya buat data login)
*/

/* 
di dalam ($_GET) bisa masukkin secara langsung
di urlnya itu dengan ? (buat nambahin yang pertama) 
dan = (buat masukkin apa yg mau ditambahin)
dan & (buat nambahin yang kedua, ketiga, seterusnya)

*/

// echo $_GET ["nama"] = "firyal";
// echo "<br>";
// var_dump($_GET);

$siswa = [
    ["nama" => "firyal",
    "nim" => "6389876098",
    "jurusan" => "Teknik Informatika",
    "email" => "iyal@gmail.com"],

    ["nama" => "Kirei", 
    "nim" => "7585835447", 
    "jurusan" => "RPL", 
    "email" => "kirei@gmail.com"],

    ["nama" => "Uzlah", 
    "nim" => "9765443456", 
    "jurusan" => "IPA", 
    "email" => "uzlah@gmail.com"],

    ["nama" => "Keisha", 
    "nim" => "3456780897", 
    "jurusan" => "TKJ", 
    "email" => "keisha@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <?php foreach($siswa as $s): ?>

    <li>
        <a href= "latihan2.php?
        nama=<?= $s["nama"];?>
        &nim=<?= $s["nim"];?>
        &jurusan=<?= $s["jurusan"];?>
        &email=<?= $s["email"];?>
        ">

        <?= $s ["nama"]; ?>
        </a>
    </li>

    <?php endforeach; ?>
</body>
</html>