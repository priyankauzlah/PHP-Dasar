<?php

require'function.php';
$movie = get("SELECT * FROM tb_movies");

if (isset($_POST["search"])){
    $movie = search($_POST["keyword"]);
}

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
    <a href = 'add.php'>Add a movie recomendation</a>
    <p>

    <form action="" method="post">
    <input type="text" name="keyword" size="20" autofocus placeholder="Search Here" autocomplete="off">
    <button type="Submit" name="search"> Search </button>
    </form>

    <p>
    <table border="1" cellpadding= "10" cellspacing= "0">
        <tr>
            <th>No</th>
            <th>Actions</th>
            <th>Movie</th>
            <th>Name</th>
            <th>Type</th>
            <th>Genre</th>
            <th>Rate</th>
        </tr>

        <?php $i = 1;?>
        <?php foreach($movie as $row):?>
            <tr>
                <th><?= $i ?></th>
                <td>
                <a href="change.php?id=<?= $row["no_movie"];?>">Update | </a>
                <a href="delete.php?id=<?= $row["no_movie"];?>">Delete</a>
                </td>
                <td><img src="img_assets/<?= $row ["img_movie"];?>" width="300"></td>
                <td><?= $row["name_movie"]?></td>
                <th><?= $row["type_movie"]?></th>
                <td><?= $row["genre_movie"]?></td>
                <th><?= $row["rate_movie"]?></th>
            </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>
    </p>
</body>
</html>