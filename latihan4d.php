<?php

$negara_asean = [
    ["Negara" => "Indonesia", "Ibu Kota" => "Jakarta","kode Telepon" => "+62"],
    ["Negara" => "Malaysia", "Ibu Kota" => "Kuala Lumpur" ,"kode Telepon" => "+60"],
    ["Negara" => "Filipina", "Ibu Kota" => "Manila","kode Telepon" => "+63"],
    ["Negara" => "Brunei", "Ibu Kota" => "Bandar Seri Begawan","kode Telepon" => "+673"],
    ["Negara" => "Myanmar", "Ibu Kota" => "Naypyitaw","kode Telepon" => "+95"],
    ["Negara" => "Singapura", "Ibu Kota" => "Singapura","kode Telepon" => "+65"],
    ["Negara" => "Laos", "Ibu Kota" => "vientiniha","kode Telepon" => "+856"],
    ["Negara" => "Thailand", "Ibu Kota" => "Bangkok","kode Telepon" => "+66"]
];

echo "<table border='1'>";
echo "<tr><th>Negara</th><th>Ibu Kota</th><th>kode telpon</th></tr>";

foreach ($negara_asean as $negara) {
    echo "<tr>";
    echo "<td>" . $negara["Negara"] . "</td>";
    echo "<td>" . $negara["Ibu Kota"] . "</td>";
    echo "<td>" . $negara["kode Telepon"] . "</td>";
    echo "</tr>";
}

echo "</table>";

?>