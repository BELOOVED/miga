<?php

require_once('inc/pdo.php');

try {
    $url = "https://www.migros.com.tr/rest/elektronik/products/search?category-id=1317&sayfa=2&sirala=onerilenler&reid=1701245548467000001";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);

    for ($i = 0; $i < 30; $i++) {
        $brand = $data['data']['storeProductInfos'][$i]['brand']['name'];
        
        $query = "INSERT INTO urunler (urun_marka) VALUES (:urun_marka)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':urun_marka', $brand);
        $stmt->execute();
    }

    echo "Veriler başarıyla eklendi.";

} catch (PDOException $e) {
    echo "Hata: " . $e->getMessage();
}

?>
