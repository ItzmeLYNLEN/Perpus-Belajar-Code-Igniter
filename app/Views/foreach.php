<table border="1" cellpadding="8">
    <tr>
        <th>Nama</th>
        <th>Nilai</th>
        <th>Grade</th>
        <th>Status</th>
    </tr>

    <?php foreach ($mhs as $row) : ?>
        <?php
        if ($row['nilai'] >= 80) {
            $grade = 'A';
        } elseif ($row['nilai'] >= 70) {
            $grade = 'B';
        } elseif ($row['nilai'] >= 60) {
            $grade = 'C';
        } else {
            $grade = 'D';
        }

        if ($row['nilai'] >= 70) {
            $status = 'Lulus';
        } else {
            $status = 'Tidak Lulus';
        }
        ?>
        <tr>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['nilai'] ?></td>
            <td><?= $grade ?></td>
            <td><?= $status ?></td>
        </tr>
    <?php endforeach; ?>
</table>