<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productId = $_POST["productId"];

    setcookie("cart_item_$productId", "1", time() + 86400, "/");

    echo "Ürün sepete eklendi!";
} else {
    header("HTTP/1.1 400 Bad Request");
    echo "Hatalı istek!";
}
?>
