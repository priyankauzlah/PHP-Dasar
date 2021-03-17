<?php
$db = mysqli_connect("localhost", "root", "", "db_phpdasar");

if(isset($_POST["submit"])){

    $movie = $_POST["img_movie"];
    $name = $_POST["name_movie"];
    $type = $_POST["type_movie"];
    $genre = $_POST["genre_movie"];
    $rate = $_POST["rate_movie"];

    $query = "INSERT INTO tb_movies VALUES ( null, '$movie', '$name', '$type', '$genre', '$rate')";
    mysqli_query($db, $query);

    var_dump(mysqli_affected_rows($db));
    echo mysqli_error($db);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add a Movie Recomendatiom</h1>

    <form action="" method="post">
        <label for="img_movie">Movie Thumbnail :</label>
        <input type="text" name="img_movie" id="img_movie"></input>
        
        <p></p>

        <label for="name_movie">Name :</label>
        <input type="text" name="name_movie" id="name_movie"></input>

        <p></p>

        <label for="type_movie">Type :</label>
        <input type="text" name="type_movie" id="type_movie"></input>

        <p></p>

        <label for="genre_movie">Genre :</label>
        <input type="text" name="genre_movie" id="genre_movie"></input>

        <p></p>

        <label for="rate_movie">Rate :</label>
        <input type="text" name="rate_movie" id="rate_movie"></input>

        <p></p>

        <button type="submit" name="submit"> Submit </button>
    </form>
    
</body>
</html>