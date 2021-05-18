<?php
// controller for the diner project

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require vendor/autoload.php
require_once ('vendor/autoload.php');
// require pet class
require ('pet.php');
session_start();


// instantiate Fat-Free
$f3 = Base::instance();

// define routes
$f3->route('GET /', function (){
    // instantiate a view object
    $view = new Template();
    // echo $view->render('views/home.html');
    echo "<h1>Hello Pets!</h1>";

    // instanciate a pet object
    $pet = new Pet();

    // invoke the eat method
    $pet->eat();

});


// run Fat-Free
$f3->run();