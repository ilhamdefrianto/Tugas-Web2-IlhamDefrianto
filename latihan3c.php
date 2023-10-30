<!DOCTYPE html>
<html lang = "en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 3c</title>

<?php

function hitungPangkat($a, $p) {
    $hasil = 1;

    for ($i = 1; $i <= $p; $i++) {
        $hasil *= $a;

    }
    return $hasil;

}

$a = 5;

$p = 4;

$hasil = hitungPangkat($a, $p);

echo "$a pangkat $p = $hasil";

?>

</head>
</html>