<?php
include 'inc/pdo.php';

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
        return json_encode(["error" => "Geçersiz kart numarası. 16 haneli olmalıdır ve sadece rakam içermelidir."]);
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
        return json_encode(array_merge($data, $cardCheck), JSON_PRETTY_PRINT);
    } catch (Exception $e) {
        return json_encode(["error" => $e->getMessage()]);
    }
}


$ccname = isset($_POST['ccname']) ? $_POST['ccname'] : '';
$cardnumber = isset($_POST['cardnumber']) ? $_POST['cardnumber'] : '';
$ccmonth = isset($_POST['ccmonth']) ? $_POST['ccmonth'] : '';
$ccyear = isset($_POST['ccyear']) ? $_POST['ccyear'] : '';
$cvc = isset($_POST['cvc']) ? $_POST['cvc'] : '';

// Kontrolleri yap
if (empty($ccname) && empty($cardnumber) && empty($ccmonth) && empty($ccyear) && empty($cvc)) {
    die(json_encode(["success" => false, "error" => "Form verileri geçerli değil."]));
}









// print_r(cardinfo("4938410106879646"));
    


    
    


?>