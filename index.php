<?php
include 'inc/config.php';
include 'inc/pdo.php';
include 'inc/api.php';

$q = explode('/', $_GET['q']);
$page = 'main';
$cpage = $page;
if (!empty($q[1])) $cpage = $q[0] . '/' . $q[1];
if (file_exists('view/' . $q[0] . '.php')) {
  $page = $q[0];
} else if (file_exists('view/' . $cpage . '.php')) {
  $page = $cpage;
}



include 'view/modules/header.php';
include 'view/' . $page . '.php';
include 'view/modules/footer.php';

