<?php 

require_once "data/Detail.php";

/* 

    Visibility / Access Modifier adalah kemampuan properties,
    function, constants dapat diakses dari mana saja. 

    - di PHP secara default class yang kita buat adalah public
    - kata kunci var untuk properties adalah public

    Access Modifier |   Class   |   Subclass |  World(another class)
    PUBLIC          |   Y       |   Y        |  Y
    PROTECTED       |   Y       |   Y        |  N
    PRIVATE         |   Y       |   N        |  N 

*/

$pudge = new Detail("Pudge", 25, "Eject");
$pudge->getHero();

echo "\n";

$pudge->setSkill("Rot");
$pudge->getHero();

// $pudge->level = "asd";    --> Error, karena properties level bersifat private

echo "\n";

$dummy = new DetailDummy("Windranger", 10, "Powershot");
$dummy->info();
?>