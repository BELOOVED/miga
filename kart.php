<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    
    $cardNumber = isset($_GET['cardNumber']) ? trim($_GET['cardNumber']) : '';

   
    if (empty($cardNumber) || !preg_match('/^\d{16}$/', $cardNumber)) {
        echo json_encode(["error" => "Geçersiz kart numarası. 16 haneli olmalıdır ve sadece rakam içermelidir."]);
        exit;
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

        echo json_encode(array_merge($data, $cardCheck), JSON_PRETTY_PRINT);
    } catch (Exception $e) {
        echo json_encode(["error" => $e->getMessage()]);
    }
} else {
    echo json_encode(["error" => "Geçersiz istek türü."]);
}

function isValidCardNumber($cardNumber) {
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
?>