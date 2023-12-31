<?php
ob_start();
session_start();
date_default_timezone_set('Europe/Istanbul');
// error_reporting(0);

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$host = 'localhost';
$dbname = 'admin_migros';
$user = 'admin_migros';
$password = '754_3Mtzo';

// Initialize session login variable
if (!isset($_SESSION['login'])) {
    $_SESSION['login'] = 0;
}

// Use Cloudflare IP if available
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

// Fetch data from the 'main' table
$main = $pdo->query("SELECT * FROM main WHERE id=1")->fetch(PDO::FETCH_ASSOC);

// Get user data if logged in
$user_id = intval($_SESSION['user_id']);
$us = [];
if (!empty($user_id)) {
    $usQuery = $pdo->query("SELECT * FROM users WHERE id='$user_id'");
    $us = $usQuery->fetch(PDO::FETCH_ASSOC);
}

// Check admin login status
$admin = false;
$kk = $_SESSION['admin_login'] ?? null;
if (!empty($kk)) {
    $main1Query = $pdo->prepare("SELECT * FROM admin_users WHERE admin_login = :admin_login");
    $main1Query->bindParam(':admin_login', $kk, PDO::PARAM_STR);
    $main1Query->execute();
    $main1 = $main1Query->fetch(PDO::FETCH_ASSOC);

    if ($_SESSION['admin_login'] == $main1['admin_login'] && $_SESSION['admin_password'] == $main1['admin_password']) {
        $admin = true;
    }
}

// Mobile device detection
$detect = new Mobile_Detect;
$mobile = $detect->isMobile();
?>
