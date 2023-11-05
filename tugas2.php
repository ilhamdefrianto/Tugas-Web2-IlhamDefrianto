<?php

$FloradanFauna= array(
    "Flora dan Fauna 1" => array(
        "Nama" => "Kantong semar (Nepenthes)",
        "Penjelasan" => "Kantong semar adalah salah satu tumbuhan langka yang perlu dilestarikan. Kantong semar punya bentuk yang unik karena akan membuka dan memangsa serangga di sekitarnya saat dewasa. ",
        "Berasal Dari" => "Kalimantan dan Sumatra",
        "Tahun Ditemukan" => "1689",
        "Gambar" => "Kantong semar.jpg"
    ),
    "Flora dan Fauna 2" => array(
        "Nama" => "Anggrek tebu (Grammatophyllum speciosum)",
        "Penjelasan" => "Anggrek ini juga disebut anggrek harimau karena punya corak belang layaknya harimau. Sering juga disebut anggrek raksasa dan anggrek ratu karena ukurannya yang sangat besar, jika dibandingkan dengan anggrek-anggrek lain.",
        "Berasal Dari" => "Wilayah hujan tropis dataran rendah seperti Sumatera,jawa,sulawesi",
        "Tahun Ditemukan" => "1893",
        "Gambar" => "anggrek.jpg"
    ),
    "Flora dan Fauna 3" => array(
        "Nama" => "Bunga padma raksasa (Rafflesia arnoldii)",
        "Penjelasan" => "Meski jadi bunga besar yang memesona saat mekar, padma raksasa ternyata mengeluarkan bau yang busuk loh. Meski begitu banyak orang yang penasaran ingin melihatnya.",
        "Berasal Dari" => "Hutan Bengkulu",
        "Tahun Ditemukan" => "1818",
        "Gambar" => "refresia.jpg"
    ),
    "Flora dan Fauna 4" => array(
        "Nama" => "Bunga edelweiss jawa (Anaphalis javanica) ",
        "Penjelasan" => "Bunga indah ini dulunya banyak bermekaran di pegunungan Jawa, seperti Gede, Pangrango dan Papandayan, Namun, sayangnya bunga ini banyak dipetik oleh para pendaki hingga kini langka.",
        "Berasal Dari" => "Lereng Gunung Gede, Jawa Barat",
        "Tahun Ditemukan" => "1819",
        "Gambar" => "edelwis.jpg"
    ),
    "Flora dan Fauna 5" => array(
        "Nama" => "Pohon damar (Agathis dammara)",
        "Penjelasan" => "Pohon ini banyak ditebang karena karakteristiknya yang panjang dan kuat untuk keperluan membangun rumah dan furnitur. ",
        "Berasal Dari" => "Hutan jawa,sulawesi,sulawesi",
        "Tahun Ditemukan" => "1829",
        "Gambar" => "Pohon Damar.jpg"
    ),
    "Flora dan Fauna 6" => array(
        "Nama" => "Harimau Sumatera",
        "Penjelasan" => "Memiliki kondisi yang sangat mengkhawatirkan, Harimau Sumatera disebut-sebut akan punah pada 2025,Oleh sebab itu, Harimau Sumatera menjadi bagian dari daftar hewan yang terancam punah di Indonesia.",
        "Berasal Dari" => "Pulau Sumatra",
        "Tahun Ditemukan" => "1926",
        "Gambar" => "Harimau.jpg"
    ),
    "Flora dan Fauna 7" => array(
        "Nama" => "Burung Cendrawasih",
        "Penjelasan" => "Burung yang juga memiliki sebutan Bird of Paradise ini, merupakan spesies endemik yang hanya bisa ditemui di pulau paling timur di Indonesia, yaitu Papua.",
        "Berasal Dari" => "Timur Indonesia",
        "Tahun Ditemukan" => "1520",
        "Gambar" => "Burung Cendrawasih.jpg"
    ),
    "Flora dan Fauna 8" => array(
        "Nama" => "Komodo",
        "Penjelasan" => "Sebagai spesies kadal terbesar yang ada di Indonesia, keberadaan Komodo saat ini hanya terletak di Pulau Komodo, Flores, Rinca, Gili Motang dan Gili Dasami Provinsi Nusa Tenggara Timur (NTT).",
        "Berasal Dari" => "Nusa Tenggara Timur",
        "Tahun Ditemukan" => "1910",
        "Gambar" => "Komodo.jpg"
    ),
    "Flora dan Fauna 9" => array(
        "Nama" => "Penyu",
        "Penjelasan" => "Meski hingga saat ini kamu masih bisa melihat banyak Penyu, namun ternyata ada satu spesies Penyu yang terancam punah, yaitu Penyu Kemp's Ridley..",
        "Berasal Dari" => "Ditemukan di semua samudra di dunia",
        "Tahun Ditemukan" => "1893",
        "Gambar" => "Penyu.jpg"
    ),
    "Flora dan Fauna 10" => array(
        "Nama" => "Burung Maleo",
        "Penjelasan" => "Sebagai salah satu jenis burung yang masuk ke dalam daftar hewan yang terancam punah di Indonesia, Burung Maleo saat ini memiliki populasi yang terbilang cukup sedikit, yaitu sekitar 10.000 ekor saja.",
        "Berasal Dari" => "Sulawesi",
        "Tahun Ditemukan" => "1846",
        "Gambar" => "Burung Maleo.jpg"       
    ),
);

echo "<table border='1'>";
echo "<tr><th>No</th><th>Nama</th><th>Penjelasan</th><th>Berasal Dari</th><th>Tahun Ditemukan</th><th>Gambar</th></tr>";
$nomor = 1;
foreach ($FloradanFauna as $FloraFauna) {
    echo "<tr>";
    echo "<td>$nomor</td>";
    echo "<td>" . $FloraFauna["Nama"] . "</td>";
    echo "<td>" . $FloraFauna["Penjelasan"] . "</td>";
    echo "<td>" . $FloraFauna["Berasal Dari"] . "</td>";
    echo "<td>" . $FloraFauna["Tahun Ditemukan"] . "</td>";
    echo "<td><img src='" . $FloraFauna["Gambar"] . "' alt='" . $FloraFauna["Gambar"] . "' width='100'></td>";
    echo "</tr>";
    $nomor++;
}
echo "</table>";

    ?>

