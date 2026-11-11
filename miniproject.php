
<?php
$namaBarang = "Buku";
$harga      = 12000;
$jumlah     = 5;
$diskon     = 5/100;
$uang       = 100000;
$ppn        = 11/100;

$subtotal = $harga * $jumlah;
$hargadiskon = $subtotal * $diskon;
$totalsetelahdiskon = ($subtotal - $hargadiskon);
$hargappn = $totalsetelahdiskon * $ppn;
$totalsetelahppn = $totalsetelahdiskon + $hargappn;
$persendiskon = $diskon * 100;
$kembalian = $uang - $totalsetelahppn;


echo "Barang: " . $namaBarang . "<br>";
echo "Harga Barang: Rp. " . $harga . "<br>";
echo "Subtotal: Rp " . $subtotal . "<br>";
echo "Diskon: Rp {$persendiskon} % ({$hargadiskon})<br>";
echo "Total Diskon : Rp. {$subtotal} - Rp. {$hargadiskon} = Rp. {$totalsetelahdiskon}<br> ";
echo "Total Bayar (dengan ppn 11%) : Rp. {$totalsetelahdiskon} + Rp. {$hargappn} = Rp. {$totalsetelahppn} <br>";
echo "Uang : Rp. {$uang} <br>";
echo "Kembalian : Rp.{$uang} - Rp. {$totalsetelahppn} = Rp. {$kembalian}";
?>

