<?php 

// ARRAY DI DALAM ARRAY (ARRAY ASOSIATIF MULTI DIMENSI)

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

echo $siswa [1]["email"];
echo "<br>"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>DAFTAR SISWA</h1>

    <?php foreach($siswa as $j): ?>

        <ul>
        <li> <?= $j["nama"] ?> </li>
        <li> <?= $j["nim"] ?> </li>
        <li> <?= $j["jurusan"] ?> </li>
        <li> <?= $j["email"] ?> </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>