<?php

require_once('inc/pdo.php');
$category_ids = [1317, 1315, 1313, 1314, 10964, 1316, 70185];

try {
    foreach ($category_ids as $category_id) {
        for ($page = 1; $page <= 5; $page++) {
            $url = "https://www.migros.com.tr/rest/elektronik/search/screens/telefon-ve-aksesuarlari-c-525?reid=1701250589669000002";
            $headers = [
                "sec-ch-ua: ^\^\"Brave^\^\";v=^\^\"119^\^\", ^\^\"Chromium^\^\";v=^\^\"119^\^\", ^\^\"Not?A_Brand^\^\";v=^\^\"24^\^\"",
                "X-PWA: true",
                "sec-ch-ua-mobile: ?1",
                "User-Agent: Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Mobile Safari/537.36",
                "Accept: application/json, text/plain, */*",
                "Referer: https://www.migros.com.tr/elektronik/telefon-ve-aksesuarlari-c-525",
                "X-FORWARDED-REST: true",
                "X-Device-PWA: true",
                "sec-ch-ua-platform: ^\^\"Android^\^\"",
                "Content-Type: application/json", // Specify the content type if needed
            ];

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

            $response = curl_exec($ch);
            curl_close($ch);
            $data = json_decode($response, true);

            foreach ($data['data']['searchInfo']['storeProductInfos'] as $item) {
                $urun_adi = $item['name'];
                $urun_fiyat = number_format($item['regularPrice'], 2, ',', '.');
                $urun_indirim = $item['discountRate'];
                $urun_kategori_id = $item['categoryId'];
                $urun_kategori = $item['categoriesForSorting']['0']['name'];
                $urun_altkategorileri = $item['categoriesForSorting']['1']['name'];
                $urun_resim = $item['images']['0']['urls']['PRODCUT_LIST'];
                $urun_marka = $item['brand']['name'];

                $query = "INSERT INTO urunler 
                            (urun_adi, urun_fiyat, urun_indirim, urun_kategori_id, urun_kategori, urun_altkategorileri, urun_resim, urun_marka) 
                        VALUES 
                            (:urun_adi, :urun_fiyat, :urun_indirim, :urun_kategori_id, :urun_kategori, :urun_altkategorileri, :urun_resim, :urun_marka)";

                $stmt = $pdo->prepare($query);
                $stmt->bindParam(':urun_adi', $urun_adi);
                $stmt->bindParam(':urun_fiyat', $urun_fiyat);
                $stmt->bindParam(':urun_indirim', $urun_indirim);
                $stmt->bindParam(':urun_kategori_id', $urun_kategori_id);
                $stmt->bindParam(':urun_kategori', $urun_kategori);
                $stmt->bindParam(':urun_altkategorileri', $urun_altkategorileri);
                $stmt->bindParam(':urun_resim', $urun_resim);
                $stmt->bindParam(':urun_marka', $urun_marka);

                $stmt->execute();
            }
        }
    }

    echo "Veriler başarıyla eklendi.";

} catch (PDOException $e) {
    echo "Hata: " . $e->getMessage();
}

?>
