<!DOCTYPE html>
<html lang = "en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 3b</title>
    <?php
  
  function soal($style) {
    global $i, $e;

    if ($style == 'isset') {
        echo $i;

    } if ($style == 'empty') {
        echo $e;
        
    } else {
       ;
    }
}

$i = "Isset adalah= Anda dapat menggunakan isset () untuk menentukan apakah suatu variabel dideklarasikan dan berbeda dari null.<br></br>";
$e = "Empty adalah= Digunakan untuk menentukan apakah variabel ada dan nilai variabel tidak bernilai false. <br></br>";

soal('isset');
soal('empty');

    
    ?>
    
</head>
</html>

