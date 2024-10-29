<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari Akar-Akar Persamaan Kuadrat</title>
</head>

<body>

    <h2>Mencari Akar-Akar Persamaan Kuadrat</h2>
    <form method="post" action="">
        <label for="a">Masukkan nilai A:</label>
        <input type="number" id="a" name="a" required><br><br>

        <label for="b">Masukkan nilai B:</label>
        <input type="number" id="b" name="b" required><br><br>

        <label for="c">Masukkan nilai C:</label>
        <input type="number" id="c" name="c" required><br><br>

        <button type="submit" name="cariAkar">Cari Akar</button>
    </form>

    <?php
    function hitungAkar($a, $b, $c)
    {
        $diskriminan = $b * $b - 4 * $a * $c;

        if ($diskriminan > 0) {
            // Dua akar real
            $x1 = (-$b + sqrt($diskriminan)) / (2 * $a);
            $x2 = (-$b - sqrt($diskriminan)) / (2 * $a);
            return "Dua akar real: x1 = $x1, x2 = $x2";
        } elseif ($diskriminan == 0) {

            $x = -$b / (2 * $a);
            return "Satu akar real: x = $x";
        } else {
            $realPart = -$b / (2 * $a);
            $imaginaryPart = sqrt(-$diskriminan) / (2 * $a);
            return "Akar imajiner: x1 = $realPart + {$imaginaryPart}i, x2 = $realPart - {$imaginaryPart}i";
        }
    }

    if (isset($_POST['cariAkar'])) {
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];

        if ($a != 0) {
            $hasil = hitungAkar($a, $b, $c);
            echo "<h3>Hasil: $hasil</h3>";
        } else {
            echo "<h3>Nilai A tidak boleh 0 dalam persamaan kuadrat.</h3>";
        }
    }
    ?>

</body>

</html>