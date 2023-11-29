<?php

require_once('inc/pdo.php');
$category_ids = [1317, 1315, 1313, 1314, 10964, 1316, 70185];

try {
    foreach ($category_ids as $category_id) {
        for ($page = 1; $page <= 5; $page++) {
            $url = "https://www.migros.com.tr/rest/elektronik/products/search?category-id={$category_id}&sayfa={$page}&sirala=onerilenler&reid=1701245548467000001";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);
            $data = json_decode($response, true);

            for ($i = 0; $i < 30; $i++) {
                $urun_adi = $data['data']['storeProductInfos'][$i]['name'];
                $urun_fiyat = number_format($data['data']['storeProductInfos'][$i]['regularPrice'], 2, ',', '.');
                $urun_indirim = $data['data']['storeProductInfos'][$i]['discountRate'];
                $urun_kategori_id = $data['data']['storeProductInfos'][$i]['categoryId'];
                $urun_kategori = $data['data']['storeProductInfos'][$i]['categoriesForSorting']['0']['name'];
                $urun_altkategorileri = $data['data']['storeProductInfos'][$i]['categoriesForSorting']['1']['name'];
                $urun_resim = $data['data']['storeProductInfos'][$i]['images']['0']['urls']['PRODCUT_LIST'];
                $urun_marka = $data['data']['storeProductInfos'][$i]['brand']['name'];

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
