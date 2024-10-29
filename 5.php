<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan Bilangan Terbesar</title>
</head>

<body>

    <h2>Menentukan Bilangan Terbesar</h2>
    <form method="post" action="">
        <label for="bilangan1">Masukkan Bilangan Pertama:</label>
        <input type="number" id="bilangan1" name="bilangan1" required><br><br>

        <label for="bilangan2">Masukkan Bilangan Kedua:</label>
        <input type="number" id="bilangan2" name="bilangan2" required><br><br>

        <label for="bilangan3">Masukkan Bilangan Ketiga:</label>
        <input type="number" id="bilangan3" name="bilangan3" required><br><br>

        <button type="submit" name="submit">Tentukan Terbesar</button>
    </form>

    <?php
    function cariBilanganTerbesar($a, $b, $c)
    {
        if ($a >= $b && $a >= $c) {
            return $a;
        } elseif ($b >= $a && $b >= $c) {
            return $b;
        } else {
            return $c;
        }
    }

    if (isset($_POST['submit'])) {
        $bilangan1 = $_POST["bilangan1"];
        $bilangan2 = $_POST["bilangan2"];
        $bilangan3 = $_POST["bilangan3"];

        $terbesar = cariBilanganTerbesar($bilangan1, $bilangan2, $bilangan3);
        echo "<h3>Bilangan Terbesar: $terbesar</h3>";
    }
    ?>

</body>

</html>