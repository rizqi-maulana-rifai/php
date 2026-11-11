<?php
require "koneksi.php";

function ambilSemuakelas(){
    global $conn;

    $query = "SELECT * FROM Kelas"; 
    $result = mysqli_query($conn,$query);

    $data =[];
    
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    return $data;
}
function tambahkelas($data){
    global $conn;
    
    $nama_kelas = $_POST["nama_kelas"];
    $tingkat = $_POST["tingkat"];
    $jurusan = $_POST["jurusan"];
    $wali_kelas = $_POST["wali_kelas"];

    $query = "INSERT INTO Kelas (nama_kelas,tingkat,jurusan,wali_kelas)
    VALUES ('$nama_kelas','$tingkat','$jurusan','$wali_kelas');";

    $result = mysqli_query($conn,$query);
    return $result;
}
function hapusKelas($id){
     global $conn;
    
    $query = "SELECT * FROM Kelas WHERE id ='$id'";
    $kelas = mysqli_query($conn,$query);
    $kelas = mysqli_fetch_assoc($kelas);
    if(!$kelas) {
        die("data tidak ditemukan");
    }else{
        $query="DELETE FROM Kelas WHERE id = $id";
        $hapus = mysqli_query($conn,$query);
        if(!$hapus){
            echo("gagal menghapus data");
            sleep(5);
            header("location:readkelaas.php");
        }else{
             header("location:readkelaas.php");
             exit;
        }
    }
}

if(isset($_GET['aksi'])){
    if($_GET['aksi'] == "create"){
    if(tambahkelas($_POST)){
        header("location: readkelaas.php");
    }else{
        echo"gagal menambah data :" .mysqli_error($conn);                                                            
    }
    exit;
    }else if($_GET['aksi'] == 'delete'){
        if(isset($_GET["id"])){
            hapusKelas($_GET["id"]);
        }else{
            die("halaman tidak ditemukan");
        }
    }
}
?>
