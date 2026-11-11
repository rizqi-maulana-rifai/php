<?php
$harga_barang_1 = 300000;
$harga_barang_2 = 190000;
$total = $harga_barang_1 +$harga_barang_2;
$uang = 800000;
$kembalian =$uang - $total;
$modulus_total =$total %30000;

echo "harga barang 1: {$harga_barang_1}";
echo"</br>";
echo "harga barang 2: {$harga_barang_2}";
echo"</br>";
echo "total harga barang : {$total}";
echo"</br>";
echo"uang :{$uang}";
echo"</br>";
echo"kembalian:{$kembalian}";
echo"</br>";
echo"modulus:{$modulus_total}";
?>