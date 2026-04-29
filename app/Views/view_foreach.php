<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tugas FOREACH</title>
</head>
<body>
    <h1><?php echo $judul; ?></h1>
    <p>Menampilkan isi Array menggunakan Foreach:</p>

    <ol>
        <?php 
        foreach($daftar_mahasiswa as $nama) { 
        ?>
            <li>Nama Anggota Kelompok: <b><?php echo $nama; ?></b></li>
        <?php 
        } 
        ?>
    </ol>
</body>
</html>