<?php
session_start(); 

include 'inc/pdo.php';

$sehir = isset($_POST['sehir']) ? $_POST['sehir'] : '';
$ilce = isset($_POST['ilce']) ? $_POST['ilce'] : '';
$mahalle = isset($_POST['mahalle']) ? $_POST['mahalle'] : '';
if (empty($sehir) && empty($ilce) && empty($mahalle)) {
    echo 'Hata olustu';
    die();
}
$userIP = $_SERVER['REMOTE_ADDR'];
$sql = "SELECT * FROM `users` WHERE `ip` = :ip";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':ip', $userIP, PDO::PARAM_STR);





$_SESSION['sehir'] = $sehir;
$_SESSION['ilce'] = $ilce;
$_SESSION['mahalle'] = $mahalle;

$query = "UPDATE users SET sehir = :sehir, ilce = :ilce, mahalle = :mahalle WHERE ip = :userIP";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':sehir', $sehir, PDO::PARAM_STR);
$stmt->bindParam(':ilce', $ilce, PDO::PARAM_STR);
$stmt->bindParam(':mahalle', $mahalle, PDO::PARAM_STR);
$stmt->bindParam(':userIP', $userIP, PDO::PARAM_STR);

$result = $stmt->execute();

if ($result) {
    echo 'Basarili';
} else {
    echo 'Hata olustu';
}
?>
