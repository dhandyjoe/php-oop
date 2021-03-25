<?php 

/* 
    Static berfungsi untuk membuat properties / function
    tanpa perlu object.

    saat menggunakan static properties atau function, hal itu
    tidak akan berhubungan lagi dengan class instance yang kita buat.

*/

class Helper {
    static public string $name = "CodingHelper";
}

// jika membuat objek , akan eror
// $helper = new Helper();
// $helper->name;

echo Helper::$name . PHP_EOL;
Helper::$name = "PHPHelper";

echo Helper::$name . PHP_EOL;
?>