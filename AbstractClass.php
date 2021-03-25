<?php 

require_once "data/Food.php";

/* 
    Abstract class tidak bisa dijadikan objek
    $food2 = new Food() -> tidak bisa

    biasanya abstract class dibuat untuk turunannya
*/


$food1 = new Burger();
$food1->name = "Medium Burger";
echo $food1->price();

// Abstract Function
$food2 = new Pizza();
$food2->name = "Pizza Cheese";
$food2->price();


?>