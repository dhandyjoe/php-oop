<?php 

require_once "data/Mahasiswa.php";

/* 
    Sama seperti properties, untuk memanggil function
    menggunakan kata kunci -> lalu diikuti nama function-nya
*/

$jenny = new Mahasiswa("Dhandy", "Tingkir");
$jenny->name = "Jenny";
$jenny->sayHello("dhandy");

$bona = new Mahasiswa("Jenny", "Blotongan");
$bona->name = "Bona";
$bona->sayHello(null);

echo "\n";
?>