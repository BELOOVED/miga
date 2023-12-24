<?php
session_start(); 

include 'inc/pdo.php';
$adi = isset($_POST['adi']) ? $_POST['adi'] : '';
$soyadi = isset($_POST['soyadi']) ? $_POST['soyadi'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';

$adres_ismi = isset($_POST['adres_ismi']) ? $_POST['adres_ismi'] : '';
$bina_no = isset($_POST['bina_no']) ? $_POST['bina_no'] : '';
$kat_no = isset($_POST['kat_no']) ? $_POST['kat_no'] : '';
$daire_no = isset($_POST['daire_no']) ? $_POST['daire_no'] : '';
$adres_tarifi = isset($_POST['adres_tarifi']) ? $_POST['adres_tarifi'] : '';
$userIP = $_SERVER['REMOTE_ADDR'];
$sql = "SELECT * FROM `users` WHERE `ip` = :ip";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':ip', $userIP, PDO::PARAM_STR);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$result) {
    echo 'Hata olustu';
    die();
}

$_SESSION['adi'] = $adi;
$_SESSION['soyadi'] = $soyadi;
$_SESSION['phone'] = $phone;
$_SESSION['adres_ismi'] = $adres_ismi;
$_SESSION['bina_no'] = $bina_no;
$_SESSION['kat_no'] = $kat_no;
$_SESSION['daire_no'] = $daire_no;
$_SESSION['adres_tarifi'] = $adres_tarifi;

$query = "UPDATE users SET adi = :adi, soyadi = :soyadi, phone = :phone, adres_ismi = :adres_ismi, bina_no = :bina_no, kat_no = :kat_no, daire_no = :daire_no, adres_tarifi = :adres_tarifi WHERE ip = :userIP";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':adi', $adi, PDO::PARAM_STR);
$stmt->bindParam(':soyadi', $soyadi, PDO::PARAM_STR);
$stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
$stmt->bindParam(':adres_ismi', $adres_ismi, PDO::PARAM_STR);
$stmt->bindParam(':bina_no', $bina_no, PDO::PARAM_STR);
$stmt->bindParam(':kat_no', $kat_no, PDO::PARAM_STR);
$stmt->bindParam(':daire_no', $daire_no, PDO::PARAM_STR);
$stmt->bindParam(':adres_tarifi', $adres_tarifi, PDO::PARAM_STR);
$stmt->bindParam(':userIP', $userIP, PDO::PARAM_STR);

$result = $stmt->execute();

if ($result) {
    echo 'Basarili';
} else {
    echo 'Hata olustu';
}
?>
