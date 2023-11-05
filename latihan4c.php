<?php
$asean =[
    "indonesia" => "D.K.I jakarta",
    "Singapura" => "Singapura",
    "Malaysia"  => "Kuala Lumpur",
    "Brunei"    => "BandarSeriBegawan",
    "Thailand"  => "Bangkok",
    "Laos"      => "Vientiane",
    "Filipina"  => "Manila",
    "Myanmar"   => "Naypyiadaw"]
?>
 <?php foreach ($asean as $negara => $ibukota ) : ?>
          <li><?php echo "$negara : $ibukota" ?></li>
          <?php endforeach ?> 