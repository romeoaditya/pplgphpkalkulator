<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penghitung Bunga Tugas 4</title>
</head>

<body>
    <h2>Penghitung Bunga Tugas 4</h2>
    <form method="POST">
        <label for="tabungan">Masukkan Jumlah Tabungan (Rp):</label>
        <input type="number" id="tabungan" name="tabungan" required placeholder="Contoh: 2000000"><br><br>
        <button type="submit">Hitung Bunga</button>
    </form>

    <?php
    if (isset($_POST['tabungan'])) {
        $tabungan = (float)$_POST['tabungan'];
        $bunga_persen = 0;

        if ($tabungan < 1000000) {
            $bunga_persen = 0.15;
        } elseif ($tabungan == 1000000) {
            $bunga_persen = 0.56;
        } elseif ($tabungan >= 5000000 && $tabungan <= 10000000) {
            $bunga_persen = 12;
        } elseif ($tabungan > 10000000) {
            $bunga_persen = 20;
        }

        $bunga = ($bunga_persen / 100) * $tabungan;

        echo "<p>Jumlah Tabungan: Rp " . number_format($tabungan, 2, ',', '.') . "</p>";
        echo "<p>Bunga yang Diperoleh: $bunga_persen%</p>";
        echo "<p>Nilai Bunga dalam Rupiah: Rp " . number_format($bunga, 2, ',', '.') . "</p>";
    }
    ?>
</body>

</html>
