<form action="" method="post">
    Nilai: <input type="number" name="nilai" required>
    <button type="submit">Cek</button>
</form>

<?php if ($nilai !== null) : ?>
    <br>
    <table border="1" cellpadding="8">
        <tr>
            <th>Nilai</th>
            <th>Grade</th>
            <th>Status</th>
        </tr>
        <tr>
            <td><?= $nilai ?></td>
            <td><?= $grade ?></td>
            <td><?= $status ?></td>
        </tr>
    </table>
<?php endif; ?>