<?php 

// abstract class
abstract class Food {
    var string $name;

    abstract function price();
}

class Burger extends Food {
    function price()
    {
        echo "$this->name menu is 10k" . PHP_EOL;
    }
}


// Abstract Function

/* 
    kelas turunan wajib impelemntasi abstrak functionnya ..

    class pizza wajib override function price , karena
    parent class memiliki abstract function price
*/

class Pizza extends Food {
    function price()
    {
        echo "$this->name menu is 20k" . PHP_EOL;
    }
}

?>