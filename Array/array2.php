<?php
//PENGULANAN PADA ARRAY (ARRAY NUMERIK)

$angka = [1, 2, 3, 4, 5, 6, 7, 5, 4, 8, 6, 7, 6, 6, 8, 8,7 ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: lightgreen;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear{clear: both;}
    </style>
</head>
<body>
    <!-- PENGULANGAN FOR PADA ARRAY -->
    <?php for($i = 0; $i < 7; $i++){ ?>
        <div class = "kotak"> <?php echo $angka[$i]?></div>
    <?php } ?>

    <!-- kasih space -->
    <div class = "clear"></div>

    <!-- pengulangan for pada array tanpa menghitung ada berapa arraynya menggunakan "count" -->
    <?php for($i = 0; $i < count($angka); $i++){ ?>
        <div class = "kotak"> <?php echo $angka[$i]?></div>
    <?php } ?>

    <!-- kasih space -->
    <div class = "clear"></div>

    <!-- pengulangan for pada array menggunakan tanda alternatif -->
    <?php for($i = 0; $i < count($angka); $i++): ?>
        <div class = "kotak"> <?= $angka[$i]?></div>
    <?php endfor; ?>
    
    <!-- kasih space -->
    <div class = "clear"></div>

        <!-- PENGULANGAN FOR EACH PADA ARRAY -->
        <?php foreach($angka as $a) {?>
            <div class="kotak"> <?php echo $a ?></div>
        <?php } ?>

        <!-- kasih space -->
        <div class = "clear"></div>

        <!-- PENGULANGAN FOR EACH PADA ARRAY menggunakan tanda alternatif -->
        <?php foreach($angka as $a) : ?>
            <div class="kotak"> <?= $a ?> </div>
        <?php endforeach; ?>
</body>
</html>