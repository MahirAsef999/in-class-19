<?php

// Define the absolute path to the root folder
define('ROOT_DIR', dirname(__DIR__));

if ($_SERVER['REQUEST_URI'] == '/in_class_19/' || $_SERVER['REQUEST_URI'] == '/in_class_19') {
    // Redirect to the in_class_19.html page
    header('Location: /in_class_19/in_class_19.html');
    exit();  
}

require_once ROOT_DIR . "/app/models/Model.php"; 
require_once ROOT_DIR . "/app/models/Country.php"; 
require_once ROOT_DIR . "/app/controllers/CountryController.php"; 

$env = parse_ini_file('../.env');
define('DBNAME', $env['DBNAME']);
define('DBHOST', $env['DBHOST']);
define('DBUSER', $env['DBUSER']);
define('DBPASS', $env['DBPASS']);

use app\controllers\CountryController;

$uri = strtok($_SERVER["REQUEST_URI"], '?');
$uriArray = explode("/", $uri);

if ($uriArray[1] === 'api' && $uriArray[2] === 'countries' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $countryController = new CountryController();
    $countryController->getCountries();
}


exit();
