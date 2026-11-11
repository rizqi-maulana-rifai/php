<?php
function persegi_panjang($panjang, $lebar){
    return $panjang * $lebar;

}

$hasil_persegi_panjang = persegi_panjang(10,10);
echo $hasil_persegi_panjang;

echo "<hr>";
function lingkaran($jari_jari){
    $luas = 3.14 * $jari_jari * $jari_jari;
    echo "luas lingkaran : " . $luas;

}
lingkaran(5);

echo "<hr>";

function jajar_genjang($alas, $tinggi){
    $luas = $alas * $tinggi;

    echo "luas jajar genjang : " . $luas;
}

jajar_genjang(8,4);
?>