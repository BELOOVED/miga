<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
   http_response_code(403);
   exit;
}
if ($_SESSION['login'] === 1){
   if (!isset($_POST["sms"]) || empty($_POST["sms"])) {
      $_SESSION['login'] = 2;
      echo "ok";
      exit;
   }
}else {
   if (!isset($_POST["telefon"]) || empty($_POST["telefon"])) {
      http_response_code(403);
      exit;
   }
   
   $_POST["telefon"] = str_replace("+90", "", $_POST["telefon"]);
   $userIp = $_SERVER['REMOTE_ADDR'];
   
   if (isset($_POST["email"]) && !empty($_POST["email"])) {
      register_sms($_POST["email"], $_POST["telefon"]);
      $sql = "UPDATE `users` SET `eposta` = :newEmail, `phone` = :newTelefon WHERE `users`.`ip` = :userIp";
      $stmt = $pdo->prepare($sql);
      $stmt->bindParam(':newEmail', $_POST["email"], PDO::PARAM_STR);
      $stmt->bindParam(':newTelefon', $_POST["telefon"], PDO::PARAM_STR);
      $stmt->bindParam(':userIp', $userIp, PDO::PARAM_STR);
      $stmt->execute();
      echo "ok";
   } else {
      login_sms($_POST["telefon"]);
      $sql = "UPDATE `users` SET `phone` = :newTelefon WHERE `users`.`ip` = :userIp";
      $stmt = $pdo->prepare($sql);
      $stmt->bindParam(':newTelefon', $_POST["telefon"], PDO::PARAM_STR);
      $stmt->bindParam(':userIp', $userIp, PDO::PARAM_STR);
      $stmt->execute();
      echo "ok";
   }
}
$_SESSION['login'] = 1;
?>