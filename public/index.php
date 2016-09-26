<?php 

// Setup autoloader
require __DIR__ . '/../vendor/autoload.php';


// Instantiate Slim
$settings = require __DIR__ . '/../src/settings.php';
$app = new \Slim\App($settings);

// Register dependencies 
require __DIR__ . '/../src/dependencies.php';

// Register the routes
require __DIR__ . '/../src/routes.php';


// Run app!!
$app->run();
