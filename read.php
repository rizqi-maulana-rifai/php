<?php
require "koneksi.php";
$query ="SELECT * FROM siswa";
$result = mysqli_query($conn, $query);
?>

<a href="create. php">
    <button> Tambah siswa</button>
</a>

    <table border="1">
        <tr>
            <th>id</th>
            <th>nis</th>
            <th>nama</th>
            <th>kelas</th>
            <th>nomer hp</th>
        </tr>
<?php
while ($siswa = mysqli_fetch_array($result)) {
?>
    <tr>
        <td><?=$siswa["id"]?></td>
        <td><?=$siswa["nis"]?></td>
        <td><?=$siswa["nama"]?></td>
        <td><?=$siswa["kelas"]?></td>
        <td><?=$siswa["no_hp"]?></td>
        <td>
        <a href='update.php?id=<?=$siswa["id"]?>'>
            <button> edit</button>
        </a>
        <a href='delate.php?id=<?=$siswa["id"]?>' onclick="return confirm('apakah ingin menghapus data?')">
            <button> delete</button>
        </a>
    </td>
    </tr>
<?php
}
?>
</table>