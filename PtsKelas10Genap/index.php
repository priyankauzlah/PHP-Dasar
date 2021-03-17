<?php

require'functions.php';
$fruits = get("SELECT * FROM tb_fruits");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits</title>
</head>
<body>
    <h1>Table of Fruits</h1>
    <a href='add.php'>Add a fruit data</a>
    <p>
    <table border="1" cellpadding= "10" cellspacing= "0">
        <tr>
            <th>No</th>
            <th>Action</th>
            <th>Fruit Image</th>
            <th>Fruit Name</th>
            <th>Latin Name</th>
            <th>Origin</th>
        </tr>

        <?php $i = 1;?>
        <?php foreach($fruits as $row): ?>
            <tr>
                <td><?= $i ?></td>
                <td>
                <a href="change.php?id=<?= $row["id_fruits"];?>">Update | </a>
                <a href="delete.php?id=<?= $row["id_fruits"];?>">Delete</a>
                </td>
                <td><img src="imgFruits/<?= $row ["img_fruits"];?>" width="100"></td>
                <td><?= $row["name_fruits"]?></td>
                <td><?= $row["latin_fruits"]?></td>
                <td><?= $row["origin_fruits"]?></td>
            </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>
    </p>
</body>
</html>