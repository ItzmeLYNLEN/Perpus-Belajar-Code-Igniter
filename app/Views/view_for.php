<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tugas FOR</title>
</head>
<body>
    <h1><?php echo $judul; ?></h1>
    <p>Mencetak urutan nomor antrian dari 1 sampai 10:</p>

    <ul>
        <?php 
        for($antrian = 1; $antrian <= 10; $antrian++) { 
        ?>
            <li>Nomor Antrian Ke-<?php echo $antrian; ?></li>
        <?php 
        } 
        ?>
    </ul>
</body>
</html>