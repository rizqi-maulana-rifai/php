<?php
$angka1 = 10;
$angka2 = 20;
$perhitungan1 = $angka2 % $angka1;
$perhitungan2 = $angka2 - ($angka1 * 2);

$perbandingan = $perhitungan1 == $perhitungan2; 
if($perbandingan){

    echo"true";
    }else{
        echo"false";
    }

?>