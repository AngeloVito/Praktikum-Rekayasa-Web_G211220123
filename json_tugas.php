<?php
$jsonData = '{
    "nama": "Andi",
    "umur": 25,
    "hobi": ["membaca", "bersepeda", "menulis"]}';

// Decode ke PHP Object
$phpObject = json_decode($jsonData);

// Decode ke PHP Array
$phpArray = json_decode($jsonData, true);

// Akses nilai dari PHP Object
echo "Nama dari PHP Object: " . $phpObject->nama . "\n";
echo "Umur dari PHP Object: " . $phpObject->umur . "\n";
echo "Hobi pertama dari PHP Object: " . $phpObject->hobi[0] . "\n";

// Akses nilai dari PHP Array
echo "Nama dari PHP Array: " . $phpArray['nama'] . "\n";
echo "Umur dari PHP Array: " . $phpArray['umur'] . "\n";
echo "Hobi pertama dari PHP Array: " . $phpArray['hobi'][0] . "\n";

?>