<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <h1>Form Pendaftaran Mahasiswa</h1>
    <form action="belajar_post.php" method="POST">
        <!-- tipe teks -->
        <label for="">Nama Mahasiswa</label><br>
        <input type="text" name="nama"><br><br>
        <!-- tipe radio -->
        <label for="">Jenis Kelamin</label><br>
        <input type="radio" name="jenis_kelamin" value="Laki-laki"><label for="">Laki-laki</label><br>
        <input type="radio" name="jenis_kelamin" value="Perempuan"><label for="">Perempuan</label><br><br>
        <!-- tipe chackbox -->
        <label for="">Mata Kuliah</label><br>
        <input type="checkbox" name="matkul" value="Matematika Komputer">
        <label for="">Matematika Komputer</label><br>
        <input type="checkbox" name="matkul" value="Pemrograman Web">
        <label for="">Pemrograman Web</label><br><br>
        <!-- tipe number -->
        <label for="">Nomor Telpon</label><br>
        <input type="number" name="nomor_telpon"><br><br>
        <!-- button -->
        <button type="submit" style="background: green; border-radius: 10px; border:0; color: white;">Kirim</button>
        <button type="reset" style="background: red; border-radius: 10px; border:0; color: white;">Reset</button>
    </form>
</body>
</html>