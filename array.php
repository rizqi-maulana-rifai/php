<?php
//ciri ciri array pakai []
//$buah = ["apel","mangga","rambutan","semengka","jeruk","melon"];


//echo $buah[4];
//echo"<br>";
//echo "jumlah isi array buah : ".count($buah);

//foreach($buah as $nama){
 //   echo $nama ."<br>";
//}


//echo"<h1>menggunkan for </h1>";

//$jumlah_array = count($buah);
//for($i = 1;$i <= $jumlah_array;$i++){
 //   $urutan = $i - 1; 
   // echo $buah[$urutan] . "<br>"; 
//}

// $barang = [
//     "nama" => "leptop",
//     "berat"=> 100, 
//     "jumlah"=> 5 
// ];

// echo $barang["nama"];
// echo "<br>jumlah :" .$barang["jumlah"];

// $biodata =["gatuts",50,"bencong"];
// $biodata =[
//     "nama" => "gatuts",
//     "umur" => 50,
//     "kelamin" => "bencong"
// ];
// echo $biodata[1];
// echo $biodata["nama"];

// data dimensional array

// $biodata = [
//         [
//         "nama" => "rassel",
//         "umur" => 17, 
//         "kelamin" => "laki-laki",
//         "hobi" => "nongs",
//         ],
//         [
//         "nama" => "ripai",
//         "umur" => 25, 
//         "kelamin" => "laki-laki",
//         "hobi" => "main game",
//         ],
//         [
//         "nama" => "gatuts",
//         "umur" => 35, 
//         "kelamin" => "laki-laki",
//         "hobi" => "begal",
//         ]
//     ];

// $perulangan = 1;
// foreach ($biodata as $siswa){
//     echo "Perulangan ke - " . $perulangan ."dan siswa ke - " . $perulangan . "<br>";
//     echo "nama : " . $siswa["nama"] . "<br>";
//     echo "umur : " . $siswa["umur"] . "<br>";
//     echo "kelamin : " . $siswa["kelamin"] . "<br>";
//     echo "hobi : " . $siswa["hobi"] . "<br>";
//     echo "<hr>";
//     $perulangan ++;

//};


?>

<table border = 1>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Umur</th>
        <th>Kelamin</th>
        <th>Hobi</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Siswa 1</td>
        <td>17</td>
        <td>Laki Laki</td>
        <td>Mainin itu</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Siswa 2</td>
        <td>18</td>
        <td>Laki Laki</td>
        <td>Ibadah malam</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Siswa 3</td>
        <td>19</td>
        <td>Laki Laki</td>
        <td>Nonton itu</td>
    </tr>
</table>