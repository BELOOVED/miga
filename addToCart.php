<?php
// addToCart.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // AJAX isteği üzerinden gelen verileri al
    $productId = $_POST["productId"];

    // Cookie oluştur (örnek: 1 saat süreyle geçerli)
    setcookie("cart_item_$productId", "1", time() + 3600, "/");

    // İşlem başarılı olduysa bir cevap gönder
    echo "Ürün sepete eklendi!";
} else {
    // Hatalı bir istek geldiyse hata mesajı gönder
    header("HTTP/1.1 400 Bad Request");
    echo "Hatalı istek!";
}
?>
