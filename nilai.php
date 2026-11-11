<?php



if(isset($_POST["proses"])) { 
    if(empty($_POST["nama"])) {
        $errors[] = "nama wajib di isi <br>";
    }
    if(empty($_POST["kelas"])) {
    $errors[] = "kelas wajib di isi <br>";
    }
    if(empty($_POST["nilai_tugas"])) {
         $errors[] =" Nilai tugas Wajib Diisi<br>";
    }
    if(empty($_POST["nilai_uts"])) {
         $errors[] = "Nilai uts Wajib Diisi<br>";
    }
    if(empty($_POST["nilai_uas"])) {
         $errors[] = "Nilai uas Wajib Diisi";
    }
    if(empty($errors)) {
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $nilai_tugas =(float) $_POST["nilai_tugas"];
    $nilai_uts =(float) $_POST["nilai_uts"];
    $nilai_uas =(float) $_POST["nilai_uas"];  

    $nilai_akhir = ($nilai_tugas * 0.30)
                + ($nilai_uts *0.30)
                + ($nilai_uas *0.40);
    
    echo "nama = $nama <br>";
    echo "kelas = $kelas <br>";

    $grade ;
    if($nilai_akhir >= 90) {
        $grade = "A";
        echo"Grade A ";
    }else if($nilai_akhir >= 80) {
        $grade = "B";
        echo "Grade B ";
    }else if($nilai_akhir >= 70) {
        $grade = "C";
        echo "Grade C ";
    }else if($nilai_akhir >= 60) {
        $grade = "D";
        echo "Grade D ";
    }else{
        $grade = "E";
        echo "Grade E ";
    }

    if($nilai_akhir >= 75){
        $status = "LULUS";
        echo " | LULUS";
    }else{
        $status = "BELUM LULUS";
        echo " | BELUM LULUS";
    }
    }
    echo"<br> nilai akhir = $nilai_akhir <br>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Nilai</title>
</head>
<body>
    <?php
        if(!empty($errors)){
            foreach($errors as $e){
                echo "<p style ='color:red'>$e</p>";
            }
        }
    ?>
    <form action="" method="post">
        <label for="nama">nama :</label>
        <input type="text" name="nama" id="nama">
        <br>
        <label for="kelas">kelas :</label>
        <input type="text" name="kelas" id="kelas">
        <br>
        <label for="nilai_tugas">nilai tugas :</label>
        <input type="number" name="nilai_tugas" id="nilai_tugas" min="0" max="100">
        <br>
        <label for="nilai_uts">nilai uts :</label>
        <input type="number" name="nilai_uts" id="nilai_uts" min="0" max="100">
        <br>
        <label for="nilai_uas">nilai uas :</label>
        <input type="number" name="nilai_uas" id="nilai_uas" min="0" max="100">
        <br>
        <input type="submit" name="proses">

    </form>
</body>
</html>

