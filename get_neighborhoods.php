<?php
include 'inc/pdo.php';
$selectedDistrict = $_POST['district'];

// Örnek veritabanı sorgusu
// Bu kısmı kendi veritabanınıza uygun şekilde güncellemelisiniz
$query = "SELECT mahalle_title FROM mahalle WHERE mahalle_ilcekey = :district";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':district', $selectedDistrict);
$stmt->execute();
$neighborhoods = $stmt->fetchAll(PDO::FETCH_ASSOC);

// mahalleleri dropdown için HTML olarak oluştur
$options = '';
foreach ($neighborhoods as $neighborhood) {
    $options .= '<mat-option>' . $neighborhood['mahalle_title'] . '</mat-option>';
}

echo $options;
?>
