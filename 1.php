<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan Bilangan Terbesar</title>
</head>

<body>
    <form action="" method="POST">
        <label for="bil1">frist angka:</label>
        <input type="number" name="bil1" id="bil1" required>
        <br>
        <label for="bil2">second angka:</label>
        <input type="number" name="bil2" id="bil2" required>
        <br>
        <button type="submit" name="submit">Tentukan Bilangan Terbesar</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $bil1 = intval($_POST['bil1']);
        $bil2 = intval($_POST['bil2']);

        if ($bil1 > $bil2) {
            echo "<p>Bilangan terbesar adalah: $bil1</p>";
        } elseif ($bil2 > $bil1) {
            echo "<p>Bilangan terbesar adalah: $bil2</p>";
        } else {
            echo "<p>Kedua bilangan sama besar: $bil1</p>";
        }
    }
    ?>
</body>

</html>
