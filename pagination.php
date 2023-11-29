<?php
include 'db.php';

$urunlerPerPage = 30;

$page = isset($_POST['page']) ? $_POST['page'] : 1;

$start = ($page - 1) * $urunlerPerPage;

$sql = "SELECT * FROM urunler LIMIT $start, $urunlerPerPage";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$urunler = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($urunler as $urun) {
    echo '<div class="mdc-layout-grid__cell--span-2-desktop mdc-layout-grid__cell--span-4-tablet mdc-layout-grid__cell--span-2-phone ng-star-inserted">';
    echo '<mat-card class="mat-mdc-card mdc-card">';

    echo '<fa-icon id="fav-add-button-' . $urun['urun_id'] . '" class="ng-fa-icon favourite favourite--empty ng-star-inserted">';
    echo '<svg role="img" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="heart" class="svg-inline--fa fa-heart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">';
    echo '<path fill="currentColor" d="M255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L255.1 96zM255.1 141.3L221.4 106.6C196.1 81.31 160 69.77 124.7 75.66C71.21 84.58 31.1 130.9 31.1 185.1V190.9C31.1 223.6 45.55 254.7 69.42 277L250.1 445.7C251.7 447.2 253.8 448 255.1 448C258.2 448 260.3 447.2 261.9 445.7L442.6 277C466.4 254.7 480 223.6 480 190.9V185.1C480 130.9 440.8 84.58 387.3 75.66C351.1 69.77 315.9 81.31 290.6 106.6L255.1 141.3z"></path>';
    echo '</svg>';
    echo '</fa-icon>';

    if ($urun['urun_indirim'] != 0) {
        echo '<div id="discount-badge" class="discount-badge ng-star-inserted">';
        echo '<div><span id="discount-badge--percent" class="discount-badge--percent">%</span><span id="discount-badge--unit" class="discount-badge--unit">' . $urun['urun_indirim'] . '</span></div>';
        echo '<div id="discount-badge--label" class="discount-badge--label">İNDİRİM</div>';
        echo '</div>';
    }

    echo '<div>';
    echo '<fe-product-image id="product-image" class="image" _nghost-nyw-c159="">';
    echo '<a _ngcontent-nyw-c159="" id="product-image-link" href="/urun/' . seo($urun['urun_adi']) . '/' . seo($urun['id']) . '">';
    echo '<img _ngcontent-nyw-c159="" felazyload="" alt="/urun/' . $urun['urun_adi'] . '" src="' . $urun['urun_resim'] . '" class="ng-star-inserted">';
    echo '</a>';
    echo '</fe-product-image>';
    echo '<a id="product-name" class="mat-caption text-color-black product-name" ngx-ql="" href="/urun/' . seo($urun['urun_adi']) . '/' . seo($urun['id']) . '"> ' . $urun['urun_adi'] . ' </a>';
    echo '</div>';

    echo '<div class="bottom-row">';
    
    if ($urun['urun_indirim'] != 0) {
        echo '<fe-product-price id="price" class="price" _nghost-nyw-c271="">';
        echo '<div _ngcontent-nyw-c271="" class="promotion-wrapper">';
        echo '<div _ngcontent-nyw-c271="" id="price-old" class="price-old ng-star-inserted"><span _ngcontent-nyw-c271="" id="old-amount" class="amount">' . $urun['urun_fiyat'] . ' <span _ngcontent-nyw-c271="" class="currency">TL</span></span></div>';
        echo '<div _ngcontent-nyw-c271="" id="price-new" class="price-new subtitle-1"><span _ngcontent-nyw-c271="" id="new-amount" class="amount">';

        $orijinal_fiyat = $urun['urun_fiyat'];
        $indirim_orani = $urun['urun_indirim'];
        $indirimli_fiyat = $orijinal_fiyat - ($orijinal_fiyat * ($indirim_orani / 100));
        echo $indirimli_fiyat;

        echo ' <span _ngcontent-nyw-c271="" class="currency">TL</span></span></div>';
        echo '</div>';
        echo '</fe-product-price>';
    } else {
        echo '<fe-product-price id="price" class="price" _nghost-nyw-c271="">';
        echo '<div _ngcontent-nyw-c271="">';
        echo '<div _ngcontent-nyw-c271="" id="price-new" class="price-new subtitle-1 price-new-only"><span _ngcontent-nyw-c271="" id="new-amount" class="amount">' . $urun['urun_fiyat'] . ' <span _ngcontent-nyw-c271="" class="currency">TL</span></span></div>';
        echo '</div>';
        echo '</fe-product-price>';
    }

    echo '<sm-product-actions id="actions" class="actions" _nghost-nyw-c292="">';
    echo '<fa-icon _ngcontent-nyw-c292="" class="ng-fa-icon add-to-cart-button ng-star-inserted" id="product-actions-add-to-cart-button--' . seo($urun['urun_adi']) . '-p-' . $urun['urun_id'] . '">';
    echo '<svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="plus" class="svg-inline--fa fa-plus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">';
    echo '<path fill="currentColor" d="M432 256C432 269.3 421.3 280 408 280h-160v160c0 13.25-10.75 24.01-24 24.01S200 453.3 200 440v-160h-160c-13.25 0-24-10.74-24-23.99C16 242.8 26.75 232 40 232h160v-160c0-13.25 10.75-23.99 24-23.99S248 58.75 248 72v160h160C421.3 232 432 242.8 432 256z"></path>';
    echo '</svg>';
    echo '</fa-icon>';
    echo '</sm-product-actions>';

    echo '</div>';
    echo '</mat-card>';
 
    echo '</div>';
}

echo '<sm-pagination _nghost-nyw-c392="">';
echo '<div _ngcontent-nyw-c392="" class="page-row ng-star-inserted">';

echo '<button _ngcontent-nyw-c392="" mat-flat-button="" color="accent" id="pagination-button-first" class="button button--icon button--nonselected mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-accent mat-mdc-button-base" disabled="true">';
echo '<span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span>';
echo '<span class="mdc-button__label">İlk</span>';
echo '</button>';

echo '<button _ngcontent-nyw-c392="" mat-flat-button="" color="accent" id="pagination-button-previous" class="button button--icon button--nonselected mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-accent mat-mdc-button-base" disabled="true">';
echo '<span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span>';
echo '<span class="mdc-button__label">Önceki</span>';
echo '</button>';

for ($i = 1; $i <= $totalPages; $i++) {
    echo '<button _ngcontent-nyw-c392="" mat-flat-button="" class="button mdc-button mdc-button--unelevated mat-mdc-unelevated-button' . ($i == $page ? ' mat-primary' : ' button--nonselected mat-accent') . ' mat-mdc-button-base ng-star-inserted" id="pagination-button-' . $i . '">';
    echo '<span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span>';
    echo '<span class="mdc-button__label">' . $i . '</span>';
    echo '</button>';
}

echo '<button _ngcontent-nyw-c392="" mat-flat-button="" color="accent" id="pagination-button-next" class="button button--icon button--nonselected mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-accent mat-mdc-button-base">';
echo '<span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span>';
echo '<span class="mdc-button__label">Sonraki</span>';
echo '</button>';

echo '<button _ngcontent-nyw-c392="" mat-flat-button="" color="accent" id="pagination-button-last" class="button button--icon button--nonselected mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-accent mat-mdc-button-base">';
echo '<span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span>';
echo '<span class="mdc-button__label">Son</span>';
echo '</button>';

echo '</div>';
echo '</sm-pagination>';
?>
