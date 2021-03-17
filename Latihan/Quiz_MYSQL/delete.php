<?php

require 'function.php';
$id = $_GET["id"];

if(delete($id) > 0){
    echo"
    <script>
    alert('Data succesfully deleted!');
    document.location.href = 'Quiz_5.php';
    </script>
    ";
}else{
    echo"
    <script>
    alert('Data failed deleted');
    document.location.href = 'Quiz_5.php';
    </script>
    ";
}
?>