<?php
include 'inc/pdo.php';

$sehir = $_POST['sehir'];
$ilce = $_POST['ilce'];
$mahalle = $_POST['mahalle'];

$userIP = $_SERVER['REMOTE_ADDR'];

$query = "UPDATE users SET sehir = :sehir, ilce = :ilce, mahalle = :mahalle WHERE ip = :userIP";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':sehir', $sehir, PDO::PARAM_STR);
$stmt->bindParam(':ilce', $ilce, PDO::PARAM_STR);
$stmt->bindParam(':mahalle', $mahalle, PDO::PARAM_STR);
$stmt->bindParam(':userIP', $userIP, PDO::PARAM_STR);

$result = $stmt->execute();

if ($result) {
    header('Location: /');
} else {
}
?>
