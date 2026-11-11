<?php
require"koneksi.php";
$id;
$siswa;
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "SELECT * FROM siswa WHERE id ='$id'";
    $siswa = mysqli_query($conn,$query);
    $siswa = mysqli_fetch_assoc($siswa);
    if (!$siswa) {
        die("data tidak ditemukan");
    }else{
        $query="DELETE FROM siswa WHERE id = $id";
        $hapus = mysqli_query($conn,$query);
        if(!$hapus){
            echo("gagal menghapus data");
            sleep(5);
            header("location:read.php");
        }else{
             header("location:read.php");
             exit;
        }
    }
}else{
    die ("halaman tidak ditemukan");
}
?>