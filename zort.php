<?php
include 'inc/pdo.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$veri = slider_update();

foreach ($variable as $veri["data"]) {
    echo($variable);
}

?>