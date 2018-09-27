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
    $conexion = new mysqli('localhost','root','','bd5takes');
    $tildes = $conexion->query("SET NAMES 'utf8'");
?>