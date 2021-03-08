<?php 


// Cara Deklarasi dari Class Mahasiswa
require_once "data/Mahasiswa.php";

$mahasiswa1 = new Mahasiswa("Jenny", "Blotongan");

$mahasiswa1->name = "Dhandy";
$mahasiswa1->address = "Perum Kotabaru gg.IV";
$mahasiswa1->country = "Salatiga";
// $mahasiswa1->nim = 682018034;

echo "Nama : $mahasiswa1->name" . PHP_EOL;
echo "Alamat : $mahasiswa1->address" . PHP_EOL;
echo "Country : $mahasiswa1->country" . PHP_EOL;
echo "Age : $mahasiswa1->age" . PHP_EOL;
echo "NIM : $mahasiswa1->nim" . PHP_EOL;

// ================================================

echo "\n";
?>