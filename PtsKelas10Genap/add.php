<?php

require 'functions.php';
 
if(isset($_POST["submit"])){

    if(add($_POST) > 0){
        echo "
            <script>
            alert('Data success added!');
            document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo "
            <script>
            alert('Data failed added!');
            document.location.href = 'index.php';
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
    <title>Add a fruit data</title>
</head>
<body>
    <h1>Add A Fruit Data</h1>

    <form action="" method="post">
        <label for="img_fruits">Fruit Image :</label>
        <input type="text" name="img_fruits" id="img_fruits" required></input>
        
        <p></p>

        <label for="name_fruits">Fruit Name :</label>
        <input type="text" name="name_fruits" id="name_fruits" required></input>

        <p></p>

        <label for="latin_fruits">Latin Name :</label>
        <input type="text" name="latin_fruits" id="latin_fruits" required></input>

        <p></p>

        <label for="origin_fruits">Origin :</label>
        <input type="text" name="origin_fruits" id="origin_fruits" required></input>

        <p></p>

        <button type="submit" name="submit"> Submit </button>
    </form>
    
</body>
</html>