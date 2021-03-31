<?php

require 'function.php';

if(isset($_POST["submit"])){

    if(add($_POST) > 0){
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
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add movie rec</title>
</head>
<body>
    <h1>Add a Movie Recomendation </h1>

    <form action="" method="post">
        <label for="img_movie">Movie thumbnail :</label>
        <input type="text" name="img_movie" id="img_movie" required></input>
        
        <p></p>

        <label for="name_movie">Name :</label>
        <input type="text" name="name_movie" id="name_movie" required></input>

        <p></p>

        <label for="type_movie">Type :</label>
        <input type="text" name="type_movie" id="type_movie" required></input>

        <p></p>

        <label for="genre_movie">Genre :</label>
        <input type="text" name="genre_movie" id="genre_movie" required></input>

        <p></p>

        <label for="rate_movie">Rate :</label>
        <input type="text" name="rate_movie" id="rate_movie" required></input>

        <p></p>

        <button type="submit" name="submit"> Submit </button>
    </form>
    
</body>
</html>