<?php
ob_start();
session_start();
// error_reporting(0);
date_default_timezone_set('Europe/Istanbul');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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

require_once 'mobile.class.php';
require_once 'api.php';
require_once 'functions.php';

$main = $db->query("SELECT * from main where id=1")->fetch_assoc();

// Get user data
$user_id = intval($_SESSION['user_id']);
if (!empty($user_id)) {
  $us = $db->query("SELECT * from users where id='$user_id'")->fetch_assoc();
}

// Admin logged status
$kk = $_SESSION['admin_login'];
$main1 = $db->query("SELECT * FROM admin_users WHERE admin_login = '$kk'")->fetch_assoc();

// Admin logged status
$admin = false;
if (!(empty($_SESSION['admin_login']))){
  if ($_SESSION['admin_login'] == $main1['admin_login'] && $_SESSION['admin_password'] == $main1['admin_password']) {
    $admin = true;
  }
}

// Mobile device detection
$detect = new Mobile_Detect;
$mobile = $detect->isMobile();
?>

