<?php

require 'functions.php';
$id = $_GET["id"];
$fruits = get("SELECT * FROM tb_fruits WHERE id_fruits = $id")[0];
 
if(isset($_POST["submit"])){

    if(change($_POST) > 0){
        echo "
            <script>
            alert('Data success changed!');
            document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo "
            <script>
            alert('Data failed changed!');
            document.location.href = 'index.php';
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
    <title>Change Fruit data</title>
</head>
<body>
    <h1>Change Fruit data</h1>

    <form action="" method="post">

        <input type="hidden" name="id_fruits" value="<?= $fruits["id_fruits"];?>"></input>
            
        <label for="img_fruits">Fruit Image :</label>
        <input type="text" name="img_fruits" id="img_fruits" required 
        value="<?= $fruits["img_fruits"];?>"></input>
        
        <p></p>

        <label for="name_fruits">Fruit Name :</label>
        <input type="text" name="name_fruits" id="name_fruits" required 
        value="<?= $fruits["name_fruits"];?>"></input>

        <p></p>

        <label for="latin_fruits">Latin Name :</label>
        <input type="text" name="latin_fruits" id="latin_fruits" required 
        value="<?= $fruits["latin_fruits"];?>"></input>

        <p></p>

        <label for="origin_fruits">Origin :</label>
        <input type="text" name="origin_fruits" id="origin_fruits" required 
        value="<?= $fruits["origin_fruits"];?>"></input>

        <p></p>

        <button type="submit" name="submit"> Submit </button>
    </form>
    
</body>
</html>