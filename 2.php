<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penentuan Hari</title>
</head>

<body>
    <h2>Masukan angka (0-6) untuk Menampilkan Hari</h2>
    <form method="POST">
        <label for="angka">Nomer (0-6): </label>
        <input type="number" id="angka" name="angka" min="0" max="6" required>
        <button type="submit">Tampilkan Hari</button>
    </form>

    <?php
    if (isset($_POST['angka'])) {
        $hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        $angka = $_POST['angka'];
        if (is_numeric($angka) && $angka >= 0 && $angka <= 6) {
            echo "<p>Hari: " . $hari[$angka] . "</p>";
        } else {
            echo "<p>Masukkan angka antara 0 hingga 6.</p>";
        }
    }
    ?>
</body>

</html>
