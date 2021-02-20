<?php

$db = mysqli_connect("localhost", "root", "", "db_phpdasar");

$result = mysqli_query($db, "SELECT * FROM tb_movies");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Recomendation</title>
</head>
<body>
    <h1>Movie Recomendation<h1>
    <table border="1" cellpadding= "10" cellspacing= "0">
        <tr>
            <th>No</th>
            <th>Movie</th>
            <th>Name</th>
            <th>Type</th>
            <th>Genre</th>
            <th>Rate</th>
        </tr>

        <?php $i = 1;?>
        <?php while($row = mysqli_fetch_assoc($result)):?>
            <tr>
                <th><?= $i ?></th>
                <td><img src="img_assets/<?= $row ["img_movie"];?>" width="300"></td>
                <td><?= $row["name_movie"]?></td>
                <th><?= $row["type_movie"]?></th>
                <td><?= $row["genre_movie"]?></td>
                <th><?= $row["rate_movie"]?></th>
            </tr>
        <?php $i++; ?>
        <?php endwhile; ?>

    </table>
</body>
</html>