<?php
/*error_reporting(E_ALL);

ini_set('display_errors','i');

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/google-service-account.json');
$apiKey = "<AIzaSyBoeoKmLzj5TCdtc6HWK-Sligz3beZAmJI>";

$firebase = (new Factory)
    ->withServiceAccount($serviceAccount,$apiKey)
    ->withDatabaseUri("https://fivetakesbd.firebaseio.com/")
    ->create();*/
<<<<<<< HEAD
    $conexion = new mysqli('192.168.52.163:3306','SA','123','bd5takes');
=======
    $conexion = new mysqli('192.168.52.194:3306','SA','123','bd5takes');
    $conexion2=1111;
>>>>>>> eae8767dd913067f5ebbcfaae07113b2f8b1e60c
    $tildes = $conexion->query("SET NAMES 'utf8'");
?>