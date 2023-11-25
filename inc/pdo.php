<?php
session_start();

$host = 'localhost'; // MySQL sunucu adresi
$dbname = 'admin_migros'; // Veritabanı adı
$user = 'admin_migros'; // MySQL kullanıcı adı
$password = '754_3Mtzo'; // MySQL şifre

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Bağlantı hatası: " . $e->getMessage());
}
?>
