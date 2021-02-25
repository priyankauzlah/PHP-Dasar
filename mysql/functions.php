<?php
//koneksi ke database
// (host, user, password, database)
$db = mysqli_connect("localhost", "root", "", "db_phpdasar");

function query($query){
    global $db;
    $result = mysqli_query($db, $query);
    $row = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows [] = $row;
    }

    return $rows; 
}

?>