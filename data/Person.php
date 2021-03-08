<?php 

class Person {

    var $name;
    var $age;

    function noKTP(int $nomor) {
        echo "Nomor : $nomor" . PHP_EOL;
    }
}

class FootballPlayer extends Person{
    var $clubName;

    function skillSet($name) {
        echo "Skill : $name" . PHP_EOL;
    }
}


// contoh membuat namespace
namespace Data {
    class Person {
        function nama(string $nama) {
            echo "Hai, namaku adalah $nama" . PHP_EOL;
        }
    }

    const VERSION = 1;
}

?>