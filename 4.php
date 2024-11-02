<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penghitung Bunga Tugas 4</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #fff;
        }

        h2 {
            font-size: 2em;
            margin-bottom: 20px;
            text-shadow: 2px 2px #000;
        }

        form {
            background: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            width: 80%;
            max-width: 400px;
            text-align: center;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
        }

        button {
            padding: 10px 20px;
            font-size: 1.1em;
            color: #fff;
            background-color: #ff6a00;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s ease;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
        }

        button:hover {
            background-color: #ff4500;
        }

        p {
            font-size: 1.1em;
            background-color: rgba(0, 0, 0, 0.4);
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <h2>Penghitung Bunga Tugas 4</h2>
    <form method="POST">
        <label for="tabungan">Masukkan Jumlah Tabungan (Rp):</label>
        <input type="number" id="tabungan" name="tabungan" required placeholder="Contoh: 2000000">
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
