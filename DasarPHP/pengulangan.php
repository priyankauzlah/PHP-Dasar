<?php 

/* 
FOR 
didalam kurung ada 3 :
1. inisialisasi = variamble awal
2. kondisi terminasi = memberhentikan pengulangan
3. increment dicrement = menentukan pengulangannya maju atau mundur
*/ 

// ++
for($i = 0; $i < 10; $i++){
    echo "Uzlah Priambodo <br>";
}

// --
for($i = 10; $i > 5; $i--){
    echo "Priyanka Uzlah <br>";
}

/* wHILE 
kalo kondisinya true lakukan yang di dalam {}
cek kondisinya dulu baru di jalankan programnya 
*/

$f = 0;
while($f < 5){
    echo "Welcome <br>";
    $f++;
};

/*
DO WHILE 
lakukan pengulangan selama kondisinya true 
jalankan programnya dulu baru cek kondisi
*/

$y = 0;
do{
    echo "Hello Uzlah :)";
    echo "<br/>";
    $y++;
}while ($y < 5);
?>