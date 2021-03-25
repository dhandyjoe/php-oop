<?php 

/* 
    Penggunaan interface hampir sama dengan abstract class.

    Namun untuk kontrak class, lebih tepat menggunakan Interface.
    karena interface support multiple inheritance / boleh lebih dari 1 interface.

    Bisa juga menggunakan polymorphism

*/

require_once "data/Computer.php";

$laptop = new Lenovo();
$laptop->shutDown();
echo "RAM : {$laptop->getRam()}gig" . PHP_EOL;

// Menggunakan polymorphism
$laptop = new Acer();
$laptop->shutDown();
echo "RAM : {$laptop->getRam()}gig" . PHP_EOL;

?>