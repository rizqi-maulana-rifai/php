
<?php

$nama = "ripai";
$nilai = 70;

if($nilai >= 90){
    $grade = "A";
    $status = "Lulus";

}elseif($nilai >= 80){
    $grade = "B";
    $status = "Lulus";

}elseif($nilai >= 70){
    $grade = "C";
    $status = "Lulus";

}elseif($nilai >= 60){
    $grade = "D";
    $status = "Tidak Lulus";

}else{
    $grade = "E";
    $status = "Tidak Lulus";
}

echo "Nama : ".$nama."<br>";
echo "Nilai : ".$nilai."<br>";
echo "Grade : ".$grade."<br>";
echo "Status : ".$status."<br>";
?>