<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"])) {
    if ($_POST["action"] == "destroyAdresIsmi") {
        unset($_SESSION['adres_ismi']);

        
        echo "Session başarıyla silindi.";
    } else {
        echo "Geçersiz istek.";
    }
} else {
    echo "Geçersiz istek.";
}
?>
