    <form action="" method="POST">
        <label for="nama">nama</label>
        <br>
        <input type="text" name="nama" id="nama">
        <br>
        <label for="jurusan">jurusan</label>
        <br>
        <select name="jurusan" id="jurusan">
            <option value="RPL">Rekayasa Perangkat Lunak</option>
            <option value="TPM">Teknik Permesinan</option>
            <option value="TITL">Teknik instalasi Tenaga Listrik</option>
        </select>
        <button type="submit">kirim</button>
    </form>


<?php

    if(isset ($_POST["nama"]) && isset($_POST["jurusan"])){
        $nama = $_POST["nama"];
        $jurusan = $_POST["jurusan"];
        echo 'nama : ' .$nama;
        echo '<br> jurusan : ' .$jurusan;
    }
?>