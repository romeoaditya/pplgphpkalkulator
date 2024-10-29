<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator adit</title>
</head>

<body>
    <h2>Kalkulator adit</h2>
    <form method="POST">
        <label for="bilangan1">Masukkan Bilangan Pertama:</label>
        <input type="number" step="0.01" id="bilangan1" name="bilangan1" required><br><br>

        <label for="bilangan2">Masukkan Bilangan Kedua:</label>
        <input type="number" step="0.01" id="bilangan2" name="bilangan2" required><br><br>

        <label for="operasi">Pilih Operasi:</label>
        <select name="operasi" id="operasi">
            <option value="tambah">Penjumlahan</option>
            <option value="kurang">Pengurangan</option>
            <option value="kali">Perkalian</option>
            <option value="bagi">Pembagian</option>
        </select><br><br>

        <button type="submit">Hitung</button>
    </form>

    <?php
    if (isset($_POST['operasi'])) {
        $bilangan1 = (float)$_POST['bilangan1'];
        $bilangan2 = (float)$_POST['bilangan2'];
        $operasi = $_POST['operasi'];
        switch ($operasi) {
            case "tambah":
                $hasil = $bilangan1 + $bilangan2;
                echo "<p>Hasil Penjumlahan: $hasil</p>";
                break;
            case "kurang":
                $hasil = $bilangan1 - $bilangan2;
                echo "<p>Hasil Pengurangan: $hasil</p>";
                break;
            case "kali":
                $hasil = $bilangan1 * $bilangan2;
                echo "<p>Hasil Perkalian: $hasil</p>";
                break;
            case "bagi":
                if ($bilangan2 != 0) {
                    $hasil = $bilangan1 / $bilangan2;
                    echo "<p>Hasil Pembagian: $hasil</p>";
                } else {
                    echo "<p>Pembagian tidak bisa dilakukan karena pembagi adalah nol.</p>";
                }
                break;
            default:
                echo "<p>Operasi tidak valid.</p>";
        }
    }
    ?>
</body>

</html>