<?php
include 'inc/pdo.php';

$sehirlkey = $_POST['city']; 

$query = "SELECT * FROM ilce WHERE ilce_sehirkey = :sehirlkey";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':sehirlkey', $sehirlkey, PDO::PARAM_STR);
$stmt->execute();
$sehirler = $stmt->fetchAll(PDO::FETCH_ASSOC);

$options = '';
foreach ($sehirler as $sehir) {
    $options .= '
        <mat-option role="option" class="mat-mdc-option mat-mdc-focus-indicator mdc-list-item mat-body-2 ng-star-inserted mat-mdc-option-active town-option" tabindex="0" aria-disabled="false" data-ilan="' . $sehir['ilce_title'] . '">
        <span class="mdc-list-item__primary-text" style="text-transform: uppercase" id="' . $sehir['ilce_key'] . '">
        ' . $sehir['ilce_title'] . '
        </span>
        <div mat-ripple="" class="mat-ripple mat-mdc-option-ripple"></div>
        </mat-option>
        ';
}

echo $options;
?>
