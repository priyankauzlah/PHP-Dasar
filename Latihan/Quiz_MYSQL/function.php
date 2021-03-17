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

    $movie = $post["img_movie"];
    $name = $post["name_movie"];
    $type = $post["type_movie"];
    $genre = $post["genre_movie"];
    $rate = $post["rate_movie"];

    $query = "INSERT INTO tb_movies VALUES ( null, '$movie', '$name', '$type', '$genre', '$rate')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function delete($id){
    global $db;
    mysqli_query($db, "DELETE FROM tb_movies WHERE no_movies = $id");
    return mysqli_affected_rows($db);
}

function change($data){
    global $db;

    $id = $data["no_movie"];
    $movie = $data["img_movie"];
    $name = $data["name_movie"];
    $type = $data["type_movie"];
    $genre = $data["genre_movie"];
    $rate = $data["rate_movie"];

    $query = "UPDATE tb_movies SET
    img_movie = '$movie'
    name_movie = '$name'
    type_movie = '$type'
    genre_movie = '$genre'
    rate_movie = '$rate'

    WHERE no_movie = $id";
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
?>