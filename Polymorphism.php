<?php 

require_once "data/App.php";

/* 
    Polymorphism adalah kemampuan objek untuk berubah bentuk.
    - Sangat erat hubungannya dengan inheritance

*/

// Contoh pada class
$project = new Project();

$project->app = new App("Calculator");
var_dump($project);

$project->app = new WebApp("Tokopedia");
var_dump($project);

$project->app = new MobileApp("Shopee");
var_dump($project);

echo "\n";



// Contoh pada function
sayHelloApp(new App("Kalkulator"));
sayHelloApp(new WebApp("Shopee"));
sayHelloApp(new MobileApp("Tokopedia"));


?>