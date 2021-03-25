<?php 

class Vehicle {

    var string $name;
    var string $model;

    function __construct($name, $model)
    {
        $this->name = $name;
        $this->model = $model;
    }

    function getPrice(): int {
        return 0;
    }
}

class Ferrari extends Vehicle {


    // Constructor Overriding
    function __construct($name)
    {
        parent::__construct($name, "SPORT");
    }
    
    function getPrice(): int {
        return 4;
    }

    function getParentPrice(): int {
        return parent::getPrice();
    }
}

?>