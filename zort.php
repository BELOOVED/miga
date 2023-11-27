<?php
include 'inc/pdo.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$veri = slider_update()["data"];
foreach ($veri as $key) {
    $sql = "INSERT INTO `slider` (`id`, `image`, `url`) VALUES (NULL, '$key[imageUrl]', '$key[callToActionUrl]')";
    $pdo->exec($sql);
}

?>