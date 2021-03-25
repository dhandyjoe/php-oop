<?php 

require_once "data/Vehicle.php";

$kendaraan1 = new Vehicle("Kendaraan", "Biasa");
echo "Ini adalah parent class = " . $kendaraan1->getPrice();

echo "\n";
echo $kendaraan1->model . PHP_EOL;


$kendaraan2 = new Ferrari("Ferrari");
echo "Ini adalah child class = " . $kendaraan2->getPrice() . PHP_EOL;
echo "Ini mengambil function dari parent class = " . $kendaraan2->getParentPrice();

echo "\n";
echo $kendaraan2->model;

echo "\n";
?>