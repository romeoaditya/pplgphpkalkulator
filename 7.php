<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Nilai Angka ke Nilai Huruf</title>
</head>

<body>

    <h2>Konversi Nilai Angka ke Nilai Huruf</h2>
    <form method="post">
        <label for="nilai">Masukkan Nilai Angka (0-100):</label>
        <input type="number" id="nilai" name="nilai" min="0" max="100" required>
        <button type="submit" name="konversiNilai">Konversi</button>
    </form>

    <?php
    function konversiNilai($nilai)
    {
        if ($nilai >= 0 && $nilai <= 20) {
            return 'E';
        } elseif ($nilai >= 21 && $nilai <= 40) {
            return 'D';
        } elseif ($nilai >= 41 && $nilai <= 60) {
            return 'C';
        } elseif ($nilai >= 61 && $nilai <= 80) {
            return 'B';
        } elseif ($nilai >= 81 && $nilai <= 100) {
            return 'A';
        } else {
            return 'Nilai tidak valid';
        }
    }

    if (isset($_POST['konversiNilai'])) {
        $nilai = $_POST["nilai"];
        $nilaiHuruf = konversiNilai($nilai);
        echo "<h3>Nilai Angka: $nilai</h3>";
        echo "<h3>Nilai Huruf: $nilaiHuruf</h3>";
    }
    ?>

</body>

</html>