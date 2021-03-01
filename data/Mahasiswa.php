<?php 

class Mahasiswa{
    // Class merupakan blueprint untuk membuat object

    // PROPERTIES adalah data yang bisa disisipkan di class
    // Type Declaration -> sistem akan cek benar tidaknya

    var $name; // -> properties
    var string $address; // -> type declaration
    var string $country;

    // Default Value Properties
    var $age = 13;

    // Nullable Properties
    var ?int $nim = null;

    // Constant Properties
    const AUTHOR = "Dhandy Joenathan Kurnia Putra";



    // FUNCTION
    function sayHello(?string $name) {
        // this keyword menunjuk pada properties di object tersebut.
        // Contoh bisa diliat di file Function.php

        if(is_null($name)) {
            echo "Hi, my name is $name" . PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }

    function infoAuthor() {
        // self keyword digunakan saat ingin memanggil constant di kelas yang sama.
        echo "Author : " . self::AUTHOR;
    }

}

?>