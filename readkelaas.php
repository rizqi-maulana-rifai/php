<?php
require "kelas.php";

$data =ambilSemuaKelas(); 

?>
<h1>
    Daftar Kelas
</h1>
<a href="createkelas.php">
    <button> Tambah kelas</button>
</a>

    <table border="1">
        <tr>
            <th>id</th>
            <th>namakelas</th>
            <th>tingkat</th>
            <th>jurusan</th>
            <th>walikelas</th>
            <th>aksi</th>
        </tr>
<?php
foreach($data as $kelas){


?>
    <tr>
        <td><?=$kelas["id"]?></td>
        <td><?=$kelas["nama_kelas"]?></td>
        <td><?=$kelas["tingkat"]?></td>
        <td><?=$kelas["jurusan"]?></td>
        <td><?=$kelas["wali_kelas"]?></td>
        <td>
        <a href='update.php?id=<?=$kelas["id"]?>'>
            <button> edit</button>
        </a>
        <a href='Kelas.php?id=<?=$kelas["id"]?>&aksi=delete' onclick="return confirm('apakah ingin menghapus data?')">
            <button> delete</button>
        </a>
    </td>
    </tr>
<?php
}
?>
</table>