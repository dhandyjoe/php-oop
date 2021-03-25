<?php 

require_once "data/Player.php";

$hero1 = new Player();
$hero1->setName("Pudge");
$hero1->setLevel(10);

$hero1->detailHero();

echo "\n";

$hero1->setName("Mirana");
$hero1->setLevel(20);

$hero1->detailHero();

echo "===========" . PHP_EOL;

echo "Level : {$hero1->getLevel()}" . PHP_EOL;

?>