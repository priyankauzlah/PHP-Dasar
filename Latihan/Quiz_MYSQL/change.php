<?php

require 'function.php';
$id = $_GET["id"];
$movie = get("SELECT * FROM tb_movies WHERE no_movie = $id")[0];


if(isset($_POST["submit"])){

    if(change($_POST) > 0){
        echo "
            <script>
            alert('Data succesfully added!');
            document.location.href = 'Quiz_5.php';
            </script>
        ";
    }else{
        echo "
            <script>
            alert('Data failed added!');
            document.location.href = 'Quiz_5.php';
            </script>
        ";
    }

    $db = mysqli_connect("localhost", "root", "", "db_phpdasar");
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
    <h1> Change Movie Data </h1>

    <form action="" method="post">

        <input type="hidden" name="no_movie" value="<?= $movie["no_movie"];?>"></input>
            
        <label for="img_movie">Movie Thumbnail :</label>
        <input type="text" name="img_movie" id="img_movie" required 
        value="<?= $movie["img_movie"];?>"></input>
        
        <p></p>

        <label for="name_movie">Name :</label>
        <input type="text" name="name_movie" id="name_movie" required 
        value="<?= $movie["name_movie"];?>"></input>

        <p></p>

        <label for="type_movie">Type :</label>
        <input type="text" name="type_movie" id="type_movie" required 
        value="<?= $movie["type_movie"];?>"></input>

        <p></p>

        <label for="genre_movie">Genre :</label>
        <input type="text" name="genre_movie" id="genre_movie" required 
        value="<?= $movie["genre_movie"];?>"></input>

        <p></p>

        <label for="rate_movie">Rate :</label>
        <input type="text" name="rate_movie" id="rate_movie" required 
        value="<?= $movie["rate_movie"];?>"></input>

        <p></p>

        <button type="submit" name="submit"> Submit </button>
    </form>
    
</body>
</html>