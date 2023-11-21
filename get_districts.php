<?php
// Seçilen şehre ait ilçeleri getir
$selectedCity = $_POST['city'];

// Örnek veritabanı sorgusu
// Bu kısmı kendi veritabanınıza uygun şekilde güncellemelisiniz
$query = "SELECT ilce_title FROM ilce WHERE ilce_sehirkey = :city";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':city', $selectedCity);
$stmt->execute();
$districts = $stmt->fetchAll(PDO::FETCH_ASSOC);

// ilçeleri dropdown için HTML olarak oluştur
$options = '';
foreach ($districts as $district) {
    $options .= '<mat-option>' . $district['ilce_title'] . '</mat-option>';
}

echo $options;
?>
