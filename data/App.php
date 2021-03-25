<?php 

class App {
    var string $name;

    public function __construct($name) 
    {
        $this->name = $name;
    }
}

class WebApp extends App {}

class MobileApp extends App {}

class Project {
    public App $app;
}

function sayHelloApp(App $app) {

    // Instanceof digunakan untuk pengeceken object
    // kalau is_string dll digunakan untuk pengecekan variable

    if($app instanceof WebApp) {
        echo "Halo Web Aplikasi $app->name" . PHP_EOL;
    } else if($app instanceof MobileApp) {
        echo "Halo Mobile Aplikasi $app->name" . PHP_EOL;
    } else if($app instanceof App) {
        echo "Halo Aplikasi $app->name" . PHP_EOL;
    }
}

?>