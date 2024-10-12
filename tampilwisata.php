<?php
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

// alamat host untuk file getwisata.php, ambil hasil export JSON
$send = curl("http://localhost/RekayasaWeb/pertemuan2/getwisata.php");

// mengubah JSON menjadi array
$data = json_decode($send, TRUE);

// memulai tabel
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>
        <th>ID Wisata</th>
        <th>Kota</th>
        <th>Landmark</th>
        <th>Tarif</th>
      </tr>";

foreach($data as $row){
    echo "<tr>";
    echo "<td>".$row["id_wisata"]."<br/>";
    echo "<td>".$row["kota"]."<br/>";
    echo "<td>".$row["landmark"]."<br/>";
    echo "<td>".$row["tarif"]."<br/><hr/>";
    echo "</tr>";
}

// mengakhiri tabel
echo "</table>";
?>