<?php
$db = mysqli_connect("localhost", "root", "", "db_phpdasar");

function get($query){
    global $db;
    $result = mysqli_query($db, $query);
    $row = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows [] = $row;
    }

    return $rows; 
}

function add($post){
    global $db;
    
    $name = $post["name_fruits"];
    $img = $post["img_fruits"];
    $latin = $post["latin_fruits"];
    $origin = $post["origin_fruits"];

    
    //query insert data
    $query = "INSERT INTO tb_fruits VALUES ( null, '$img', '$name', '$origin', '$latin')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function change($data){
    global $db;
    $id =  $data["id_fruits"];
    $name = $data["name_fruits"];
    $img = $data["img_fruits"];
    $latin = $data["latin_fruits"];
    $origin = $data["origin_fruits"];

    $query = "UPDATE tb_fruits SET
    name_fruits = '$name',
    img_fruits = '$img',
    latin_fruits = '$latin',
    origin_fruits = '$origin'

    WHERE id_fruits = $id";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function delete($id){
    global $db;
    mysqli_query($db, "DELETE FROM tb_fruits WHERE id_fruits = $id");
    return mysqli_affected_rows($db);
}
?>