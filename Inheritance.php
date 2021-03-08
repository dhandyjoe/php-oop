<?php 

require_once "data/Person.php";

$person1 = new Person();

$person1->name = "Dhandy";
$person1->age = 12;
$person1->noKTP(12345566);

var_dump($person1);


$player1 = new FootballPlayer();

$player1->name = "Messi";
$player1->age = 20;
$player1->clubName = "Barcelona FC";
$player1->noKTP(123345);
$player1->skillSet("Super Dribbling");

var_dump($player1);
?>