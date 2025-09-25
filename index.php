<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form method="POST" action="index.php" class="calculator">
        <div class="jdl">
            <h2>Kalkulator</h2>
        </div>
        <div>
            <!-- <label for="">Bilangan Pertama </label> -->
            <input type="text" name="bil1" id="" autocomplete="off" placeholder="Masukan bilangan pertama.." class="bill">
        </div>

        <div>
            <!-- <label for="">Bilangan Kedua </label> -->
            <input type="text" name="bil2" id="" autocomplete="off" placeholder="Masukan bilangan kedua.." class="bill">
        </div>

        <div>
            <select name="operasi" id="" class="option">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">x</option>
                <option value="bagi">/</option>
            </select>

            <input type="submit" name="hitung" value="Hitung" class="button-res">
        </div>

        <?php
        if (isset($_POST['hitung'])) {
            $bil1 = $_POST['bil1'];
            $bil2 = $_POST['bil2'];
            $opr = $_POST['operasi'];

            switch ($opr) {
                case 'tambah':
                    $hasil = $bil1 + $bil2;
                    break;
                case 'kurang':
                    $hasil = $bil1 - $bil2;
                    break;

                case 'kali':
                    $hasil = $bil1 * $bil2;
                    break;

                case 'bagi':
                    $hasil = $bil1 / $bil2;
                    break;
            } ?>

            <input type="text" value="<?php echo $hasil ?>" class="bill">
        <?php } else { ?>
            <input type="text" value="0" class="bill">
        <?php } ?>

    </form>



</body>

</html>