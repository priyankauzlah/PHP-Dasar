<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .kotak{
        width: 30px;
        height: 30px;
        background-color: pink;
        text-align: center;
        line-height: 30px;
        margin: 3px;
        float: left;
        transition: 0.5s;
    }

    .kotak:hover{
        transform: rotate(360deg);
        border-radius: 50%;
    }

    </style>
</head>
<body>

    <?php $angka = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; ?>
    <?php foreach($angka as $a): ?>
        <div class="kotak"> <?= $a ?> </div>
    <?php endforeach; ?>

</body>
</html>