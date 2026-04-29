<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tugas IF ELSE</title>
</head>
<body>
    <h1><?php echo $judul; ?></h1>
    <p>Nilai Ujian Kamu: <b><?php echo $nilai_ujian; ?></b></p>

    <?php 
    if ($nilai_ujian >= 70) {
        echo "<h2 style='color: green;'>Keterangan: LULUS</h2>";
    } else {
        echo "<h2 style='color: red;'>Keterangan: TIDAK LULUS</h2>";
    }
    ?>
</body>
</html>