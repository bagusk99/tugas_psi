<?php

function tinggi_pohon($sudut, $jarak, $tinggi_pengamat)
{
    $result = tan($sudut) * $jarak + $tinggi_pengamat;
    return $result;
}

if (@$_GET['tinggi_pengamat']) {
    $sudut = $_GET['sudut'];
    $jarak = $_GET['jarak'];
    $tinggi_pengamat = $_GET['tinggi_pengamat'];

    $hasil = tinggi_pohon($sudut, $jarak, $tinggi_pengamat);
    $hasil = number_format($hasil, 2);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tinggi Pohon</title>
</head>
<body>
    <form action="">
        <label for="">Sudut</label>
        <br>
        <input type="number" name="sudut">
        <br>
        <br>
        <label for="">Tinggi pengamat</label>
        <br>
        <input type="number" name="tinggi_pengamat" step="any">
        <br>
        <br>
        <label for="">Jarak</label>
        <br>
        <input type="number" name="jarak">
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