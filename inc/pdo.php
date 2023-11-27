<?php
ob_start();
session_start();
// error_reporting(0);
date_default_timezone_set('Europe/Istanbul');
ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);


require_once 'mobile.class.php';
include 'api.php';
include 'functions.php';



$host = 'localhost'; // MySQL sunucu adresi
$dbname = 'admin_migros'; // Veritabanı adı
$user = 'admin_migros'; // MySQL kullanıcı adı
$password = '754_3Mtzo'; // MySQL şifre

if (!isset($_SESSION['login'])){
    $_SESSION['login'] = 0;
}

if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
    $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
}


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Bağlantı hatası: " . $e->getMessage());
}
$detect = new Mobile_Detect;
$mobile = $detect->isMobile();
?>

