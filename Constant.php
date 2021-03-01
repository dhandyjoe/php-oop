<?php 

require_once "data/Mahasiswa.php";
$joko = new Mahasiswa();

// Constant merupakan data yang tidak bisa diubah
// Cara akses constant
echo Mahasiswa::AUTHOR . PHP_EOL;
echo $joko->infoAuthor();


echo "\n";

?>