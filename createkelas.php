<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah kelas</title>
</head>
<body>
    <h1>tambah kelas</h1>
    <form action="kelas.php?aksi=create" method="POST">
        <label for="nama_kelas">nama kelas</label>
        <input type="text" name="nama_kelas" id="nama_kelas">
        <br>
        <label for="tingkat">tingkat</label>
        <input type="number" name="tingkat" id="tingkat" max="12">
        <br>
        <label for="jurusan">jurusan</label>
        <input type="text" name="jurusan" id="jurusan">
        <br>
        <label for="wali_kelas">wali kelas</label>
        <input type="text" name="wali_kelas" id="wali_kelas">
        <br>
        <button type="submit">submit</button>
        <button type="reset">reset</button>
    </form>
</body>
</html>