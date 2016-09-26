<?php 

// Setup autoloader
require __DIR__ . '/vendor/autoload.php';


// Instantiate Slim
$app = new \Slim\App($settings);


// Register the routes

// Run app
$app->run();
