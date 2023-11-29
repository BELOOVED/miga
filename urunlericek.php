<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('inc/pdo.php');
$category_ids = [1317, 1315, 1313, 1314, 10964, 1316, 70185];
try {
    foreach ($category_ids as $category_id) {
        for ($page = 1; $page <= 5; $page++) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://www.migros.com.tr/rest/elektronik/products/search?category-id=".strval($category_id)."&sayfa=".strval($page) ."&sirala=onerilenler");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Host: www.migros.com.tr',
                'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0',
                'Accept: application/json',
                'Accept-Language: tr-TR,tr;q=0.8,en-US;q=0.5,en;q=0.3',
                'Upgrade-Insecure-Requests: 1',
                'Sec-Fetch-Dest: empty',
                'Sec-Fetch-Mode: same-origin',
                'Sec-Fetch-Site: same-origin',
                'Cache-Control: max-age=0',
                'Te: trailers',
            ]);
            curl_setopt($ch, CURLOPT_ENCODING , '');
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($ch);
            curl_close($ch);
            $dataa = json_decode($response, true)['data']['storeProductInfos'];
            foreach ($dataa as $data) {
                if (isset($data['name'])) {
                    $urun_adi = $data['name'];
                    // $urun_fiyat = number_format($data['regularPrice'], 2, ',', '.');
                    $urun_fiyat = number_format(intval($data['regularPrice']) / 100, 2, ',', '');
                    $urun_indirim = $data['discountRate'];
                    $urun_kategori_id = $category_id;
                    $urun_kategori = $data['categoryAscendants']['0']['name'];
                    $urun_altkategorileri = $data['categoriesForSorting']['0']['name'];
                    $urun_resim = $data['images'][0]['urls']['PRODUCT_HD'];
                    $urun_aciklama = $data['shortDescription'];
                    $urun_marka = $data['brand']['name'];
                    $sku = "0";

                    $query = "INSERT INTO urunler 
                                (urun_adi, urun_fiyat, urun_indirim, urun_kategori_id, urun_kategori, urun_altkategorileri, urun_resim, urun_resim1, urun_resim2, urun_resim3, urun_marka, urun_aciklama) 
                            VALUES 
                                (:urun_adi, :urun_fiyat, :urun_indirim, :urun_kategori_id, :urun_kategori, :urun_altkategorileri, :urun_resim, :urun_resim1, :urun_resim2, :urun_resim3, :urun_marka, :urun_aciklama)";

                    $stmt = $pdo->prepare($query);
                    $stmt->bindParam(':urun_adi', $urun_adi);
                    $stmt->bindParam(':urun_fiyat', $urun_fiyat);
                    $stmt->bindParam(':urun_indirim', $urun_indirim);
                    $stmt->bindParam(':urun_kategori_id', $urun_kategori_id);
                    $stmt->bindParam(':urun_kategori', $urun_kategori);
                    $stmt->bindParam(':urun_altkategorileri', $urun_altkategorileri);
                    $stmt->bindParam(':urun_resim', $urun_resim);
                    
                    $stmt->bindParam(':urun_resim1', "/urunresim.php?id=".strval($sku)."&number=1");
                    $stmt->bindParam(':urun_resim2', "/urunresim.php?id=".strval($sku)."&number=2");
                    $stmt->bindParam(':urun_resim3', "/urunresim.php?id=".strval($sku)."&number=3");

                    $stmt->bindParam(':urun_marka', $urun_marka);
                    $stmt->bindParam(':urun_aciklama', $urun_aciklama);

                   

                    $stmt->execute();
                }
            }

        }
    }

    echo "Veriler başarıyla eklendi.";

} catch (PDOException $e) {
    echo "Hata: " . $e->getMessage();
}

?>
