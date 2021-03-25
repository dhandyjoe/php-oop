<?php 

interface Computer{

    function shutDown();

    function getRam(): int;
}

class Lenovo implements Computer {

    public function shutDown()
    {
        echo "Shutdown Lenovo" . PHP_EOL;
    }

    public function getRam(): int
    {
        return 4;
    }
}

class Acer implements Computer {

    public function shutDown()
    {
        echo "Shutdown Acer" . PHP_EOL;
    }

    public function getRam(): int
    {
        return 8;
    }
}

?>