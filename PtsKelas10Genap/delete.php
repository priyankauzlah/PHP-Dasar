<?php 

require 'functions.php';
$id = $_GET["id"];

if(delete($id) > 0){
    echo"
    <script>
    alert('Data success deleted!');
    document.location.href = 'index.php';
    </script>
    ";
}else{
    echo"
    <script>
    alert('Data failed deleted!');
    document.location.href = 'index.php';
    </script>
    ";
}
?>