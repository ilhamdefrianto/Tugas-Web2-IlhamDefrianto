<?php
function hitungFaktorial($n) {
    if ($n < 0) {
        return "Faktorial tidak terdefinisi untuk bilangan negatif";

    } elseif ($n == 0) {
        return 1;

    } else {

        $faktorial = 1;

        for ($i = 1; $i <= $n; $i++) {

            $faktorial *= $i;

        }

        return $faktorial;
    }
}

$n = 5;

$hasil = hitungFaktorial($n);

echo "$n = $hasil";

?>
