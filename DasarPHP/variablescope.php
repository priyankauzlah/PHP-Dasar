<?php 

// LINGKUP VARIBLE 

$u = 10;

function showU(){
    global $u;
    echo $u;
}

showU();
?>