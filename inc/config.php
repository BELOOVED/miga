<?php

require_once 'mobile.class.php';

ob_start();
session_start();
error_reporting(0);
date_default_timezone_set('Europe/Istanbul');

const DB_HOST = "localhost";
const DB_LOGIN = "admin_migros";
const DB_PASS = "754_3Mtzo";
const DB_NAME = "admin_migros";


$db = new Mysqli(DB_HOST, DB_LOGIN, DB_PASS, DB_NAME);
if ($db->connect_errno) {
  die('Mysql connection is incorrect');
}
$db->set_charset("utf8");

$main = $db->query("SELECT * from main where id=1")->fetch_assoc();

$user_id = intval($_SESSION['user_id']);
if (!empty($user_id)) {
  $us = $db->query("SELECT * from users where id='$user_id'")->fetch_assoc();
}

$kk = $_SESSION['admin_login'];
$main1 = $db->query("SELECT * FROM admin_users WHERE admin_login = '$kk'")->fetch_assoc();

$admin = false;
if (!(empty($_SESSION['admin_login']))){
  if ($_SESSION['admin_login'] == $main1['admin_login'] && $_SESSION['admin_password'] == $main1['admin_password']) {
    $admin = true;
  }
}

$detect = new Mobile_Detect;
$mobile = $detect->isMobile();

