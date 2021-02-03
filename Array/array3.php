<?php 

// ARRAY DI DALAM ARRAY (ARRAY NUMERIK MULTI DIMENSI)

$siswa = [
     ["firyal", "6389876098", "Teknik Informatika", "iyal@gmail.com"],
     ["Kirei", "7585835447", "RPL", "kirei@gmail.com"],
     ["Uzlah", "9765443456", "IPA", "uzlah@gmail.com"],
     ["Keisha", "3456780897", "TKJ", "keisha@gmail.com"],
];

echo $siswa[2][3];
echo "<br>";
echo $siswa[0][2];
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
    <ul>
    <?php foreach($siswa as $s): ?>
        <li> Nama : <?= $s[0]; ?> </li>
        <li> NIM : <?= $s[1]; ?> </li>
        <li> Jurusan : <?= $s[2]; ?> </li>
        <li> Email : <?= $s[3]; ?> </li>
        <br>
    <?php endforeach; ?>
    </ul>

    <?php foreach($siswa as $sw): ?>
        <br>
        <?php foreach($sw as $s): ?>
            <div> <?= $s?></div>
        <?php endforeach; ?>
    
    <?php endforeach; ?>

    <!-- CONCLUSION  -->
    <!-- kalo numerik ini dia nurut banget sama perintah kita, dan kalo kita gak ngurut nanti bakal hancur -->

</body>
</html>