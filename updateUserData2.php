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
$sehir = isset($_POST['sehir']) ? $_POST['sehir'] : '';
$ilce = isset($_POST['ilce']) ? $_POST['ilce'] : '';
$mahalle = isset($_POST['mahalle']) ? $_POST['mahalle'] : '';
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
$_SESSION['sehir'] = $sehir;
$_SESSION['ilce'] = $ilce;
$_SESSION['mahalle'] = $mahalle;

$query = "UPDATE users SET adi = :adi, soyadi = :soyadi, phone = :phone, adres_ismi = :adres_ismi, bina_no = :bina_no, kat_no = :kat_no, daire_no = :daire_no, adres_tarifi = :adres_tarifi, sehir = :sehir, ilce = :ilce, mahalle = :mahalle WHERE ip = :userIP";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':adi', $sehir, PDO::PARAM_STR);
$stmt->bindParam(':soyadi', $ilce, PDO::PARAM_STR);
$stmt->bindParam(':phone', $mahalle, PDO::PARAM_STR);
$stmt->bindParam(':adres_ismi', $sehir, PDO::PARAM_STR);
$stmt->bindParam(':bina_no', $ilce, PDO::PARAM_STR);
$stmt->bindParam(':kat_no', $mahalle, PDO::PARAM_STR);
$stmt->bindParam(':daire_no', $sehir, PDO::PARAM_STR);
$stmt->bindParam(':adres_tarifi', $ilce, PDO::PARAM_STR);
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
