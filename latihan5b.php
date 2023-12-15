<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Display</title>
</head>
<body>
 
<?php
$dataArray = [
    [
        'nama' => 'Ilham',
        'umur' => 19,
        'alamat' => 'Sungai Duren, Kota Jambi',
        'gambar' => 'WhatsApp Image 2023-11-30 at 15.17.06.jpeg',
    ],
    [
      'nama' => 'Ilham',
      'umur' => 19,
      'alamat' => 'Sungai Duren, Kota Jambi',
      'gambar' => 'WhatsApp Image 2023-11-30 at 15.14.00.jpeg',
  ],

];

echo '<table border="1">';
echo '<tr><th>Nama</th><th>Umur</th><th>Alamat</th><th>Gambar</th></tr>';
foreach ($dataArray as $data) {
    echo '<tr>';
    echo '<td><a href="latihan5c.php?' . http_build_query($data) . '">' . $data['nama'] . '</a></td>';
    echo '<td>' . $data['umur'] . '</td>';
    echo '<td>' . $data['alamat'] . '</td>';
    echo '<td><img src="' . $data['gambar'] . '" alt="Gambar">
    <style>
    img {
        width: 350px;
        height: 350px;
        border-radius: 50%;
        margin:10px;
     }
     </style>
     </td>';
    echo '</tr>';
}

echo '</table>';
?>

</body>
</html>