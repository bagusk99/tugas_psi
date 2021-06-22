<?php

function volume_kerucut($r, $t)
{
    $result = 1/3 * 22/7 * pow($r, 2) * $t;

    return $result;
}

if (@$_GET['tinggi']) {
    $tinggi = $_GET['tinggi'];
    $jari_jari = $_GET['jari_jari'];

    $hasil = volume_kerucut($jari_jari, $tinggi);
    $hasil = number_format($hasil, 2);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volume Kerucut</title>
</head>
<body>
    <form action="">
        <label for="">Jari-jari</label>
        <br>
        <input type="number" name="jari_jari">
        <br>
        <br>
        <label for="">Tinggi</label>
        <br>
        <input type="number" name="tinggi">
        <br>
        <br>
        <button>Hitung</button>
    </form>

    <br>
    <br>

    <?php
        if (isset($hasil)) {
            echo "Hasil = {$hasil}";
        }
    ?>


</body>
</html>