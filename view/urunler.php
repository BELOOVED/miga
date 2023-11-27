<?php

$currentPageURL = $_SERVER['REQUEST_URI'];
$segments = explode('/', $currentPageURL);
$segments = array_filter($segments);
array_shift($segments);
array_shift($segments);
$id = end($segments);
try {
    $sql = "SELECT * FROM kategoriler";
    if ($id !== null) {
        $sql .= " WHERE id = :kategori_id";
    }
    $stmt = $pdo->prepare($sql);
    if ($id !== null) {
        $stmt->bindParam(':kategori_id', $id, PDO::PARAM_INT);
    }

    $stmt->execute();
    $kategoriler = $stmt->fetchAll(PDO::FETCH_ASSOC);


} catch (PDOException $e) {
    echo "Hata: " . $e->getMessage();
}

?>


<?php
                if ($detect->isMobile()) {?>
<style>
    .header{
        display: none;
    }
</style>
<?php }?>
<main _ngcontent-nyw-c368="" class="elektronik">
   <router-outlet _ngcontent-nyw-c368=""></router-outlet>
   <sm-product class="ng-star-inserted">
      <article>
         <router-outlet></router-outlet>
         <sm-list class="ng-star-inserted">
            <fe-mobile-breadcrumb class="mobile-header mobile-only" _nghost-nyw-c391="">
               <div _ngcontent-nyw-c391="" class="breadcrumb mobile-only">
                  <a _ngcontent-nyw-c391="">
                     <fa-icon _ngcontent-nyw-c391="" class="ng-fa-icon">
                        <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="arrow-left" class="svg-inline--fa fa-arrow-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                           <path fill="currentColor" d="M447.1 256c0 13.25-10.76 24.01-24.01 24.01H83.9l132.7 126.6c9.625 9.156 9.969 24.41 .8125 33.94c-9.156 9.594-24.34 9.938-33.94 .8125l-176-168C2.695 268.9 .0078 262.6 .0078 256S2.695 243.2 7.445 238.6l176-168C193 61.51 208.2 61.85 217.4 71.45c9.156 9.5 8.812 24.75-.8125 33.94l-132.7 126.6h340.1C437.2 232 447.1 242.8 447.1 256z"></path>
                        </svg>
                     </fa-icon>
                  </a>
                  <div _ngcontent-nyw-c391="" class="content">
                     <h3 _ngcontent-nyw-c391="">
                        <?=$kategoriler['kategori_adi']?>
                     </h3>
                     <div _ngcontent-nyw-c391="" class="mat-caption-normal text-color-white ng-star-inserted">264 sonuç bulundu</div>
                     <!---->
                  </div>
               </div>
            </fe-mobile-breadcrumb>
            <!---->
            <div class="container ng-star-inserted">
               <div class="mat-caption-normal mobile-only mobile-filter-sort-row">
                  <div>
                     <fa-icon class="ng-fa-icon">
                        <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="sliders" class="svg-inline--fa fa-sliders" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                           <path fill="currentColor" d="M0 416C0 402.7 10.75 392 24 392H83.66C93.86 359.5 124.2 336 160 336C195.8 336 226.1 359.5 236.3 392H488C501.3 392 512 402.7 512 416C512 429.3 501.3 440 488 440H236.3C226.1 472.5 195.8 496 160 496C124.2 496 93.86 472.5 83.66 440H24C10.75 440 0 429.3 0 416zM192 416C192 398.3 177.7 384 160 384C142.3 384 128 398.3 128 416C128 433.7 142.3 448 160 448C177.7 448 192 433.7 192 416zM352 176C387.8 176 418.1 199.5 428.3 232H488C501.3 232 512 242.7 512 256C512 269.3 501.3 280 488 280H428.3C418.1 312.5 387.8 336 352 336C316.2 336 285.9 312.5 275.7 280H24C10.75 280 0 269.3 0 256C0 242.7 10.75 232 24 232H275.7C285.9 199.5 316.2 176 352 176zM384 256C384 238.3 369.7 224 352 224C334.3 224 320 238.3 320 256C320 273.7 334.3 288 352 288C369.7 288 384 273.7 384 256zM488 72C501.3 72 512 82.75 512 96C512 109.3 501.3 120 488 120H268.3C258.1 152.5 227.8 176 192 176C156.2 176 125.9 152.5 115.7 120H24C10.75 120 0 109.3 0 96C0 82.75 10.75 72 24 72H115.7C125.9 39.54 156.2 16 192 16C227.8 16 258.1 39.54 268.3 72H488zM160 96C160 113.7 174.3 128 192 128C209.7 128 224 113.7 224 96C224 78.33 209.7 64 192 64C174.3 64 160 78.33 160 96z"></path>
                        </svg>
                     </fa-icon>
                     Filtrele <!----><!---->
                  </div>
                  <div>
                     <fa-icon class="ng-fa-icon">
                        <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-down-arrow-up" class="svg-inline--fa fa-arrow-down-arrow-up" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                           <path fill="currentColor" d="M150.6 470.6l96-96c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 370.7V64c0-17.7-14.3-32-32-32s-32 14.3-32 32V370.7L54.6 329.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l96 96c12.5 12.5 32.8 12.5 45.3 0zm352-333.3l-96-96c-12.5-12.5-32.8-12.5-45.3 0l-96 96c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L352 141.3V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.3l41.4 41.4c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3z"></path>
                        </svg>
                     </fa-icon>
                     Sırala
                  </div>
               </div>
               <div class="mobile-only">
                  <sm-legal-description _nghost-nyw-c394="">
                     <!---->
                  </sm-legal-description>
               </div>
               <div class="mobile-sub-header mobile-only">
                  <fe-breadcrumb class="mobile-breadcrumb" _nghost-nyw-c389="">
                     <ul _ngcontent-nyw-c389="" class="breadcrumbs">
                        <li _ngcontent-nyw-c389="" class="breadcrumbs__item"><a _ngcontent-nyw-c389="" title="Anasayfa" class="breadcrumbs__link" href="/">Anasayfa</a></li>
                        <!---->
                        <li _ngcontent-nyw-c389="" class="breadcrumbs__item ng-star-inserted"><a _ngcontent-nyw-c389="" class="breadcrumbs__link" title="Telefon ve Aksesuarları" href="/undefined"> <?=$kategoriler['kategori_adi']?> </a></li>
                        <!----><!----><!---->
                     </ul>
                  </fe-breadcrumb>
                  <a class="mobile-sub-category mat-caption text-color-black ng-star-inserted" ngx-ql="" href="/telefon-c-2add?sayfa=1"> Telefon <span class="overline text-color-grey">(71)</span></a>
               </div>
               <fe-breadcrumb class="breadcrumb desktop-only" _nghost-nyw-c389="">
                  <ul _ngcontent-nyw-c389="" class="breadcrumbs">
                     <li _ngcontent-nyw-c389="" class="breadcrumbs__item"><a _ngcontent-nyw-c389="" title="Anasayfa" class="breadcrumbs__link" href="/">Anasayfa</a></li>
                     <!---->
                     <li _ngcontent-nyw-c389="" class="breadcrumbs__item ng-star-inserted"><a _ngcontent-nyw-c389="" class="breadcrumbs__link" title="Telefon ve Aksesuarları" href="/undefined"> Telefon ve Aksesuarları </a></li>
                     <!----><!----><!---->
                  </ul>
               </fe-breadcrumb>
               <div class="content mdc-layout-grid__inner">
                  <div class="mdc-layout-grid__cell--span-3 desktop-only">
                     <sm-product-filters-desktop>
                        <div class="filter">
                           <div class="filter__header">
                              <h2> <?=$kategoriler['kategori_adi']?></h2>
                              <div class="mat-caption-normal text-color-grey">264 ürün</div>
                           </div>
                           <mat-divider role="separator" class="mat-divider mat-divider-horizontal" aria-orientation="horizontal"></mat-divider>
                           <div class="filter__subcategories ng-star-inserted">
                              <div class="subtitle-1">Alt Kategoriler</div>
                              <div class="items">
                                <?php 
                                
                                foreach ($kategoriler as $kategori) {
                                    $alt_kategoriler = explode(',', $kategori['altkategoriler']);
                                    foreach ($alt_kategoriler as $alt_kategori) {
                                        $alt_kategori = trim($alt_kategori); 
                                        ?>
                                        <div class="item extra-margin ng-star-inserted">
                                            <a class="text-color-black mat-body-2 ng-star-inserted" ngx-ql="" href="/urunler/<?=seo($alt_kategori)?>/<?=$kategori['id']?>"> <?=$alt_kategori?> <span class="text-color-grey">(71)</span></a>
                                        </div>
                                        <?php }?>

                                 <div class="item extra-margin ng-star-inserted">
                                    <a class="text-color-black mat-body-2 ng-star-inserted" ngx-ql="" href="/telefon-c-2add?sayfa=1"> Telefon <span class="text-color-grey">(71)</span></a><!----><!---->
                                 </div>
                                <?php  }?>
                              </div>
                           </div>
                           <!---->
                           <mat-divider role="separator" class="mat-divider mat-divider-horizontal" aria-orientation="horizontal"></mat-divider>
                           <div class="filter__brands ng-star-inserted">
                              <div class="subtitle-1">Markalar</div>
                              <mat-form-field color="accent" appearance="outline" class="mat-mdc-form-field form-field ng-tns-c186-7 mat-mdc-form-field-type-mat-input mat-form-field-appearance-outline mat-accent ng-star-inserted">
                                 <!---->
                                 <div class="mat-mdc-text-field-wrapper mdc-text-field ng-tns-c186-7 mdc-text-field--outlined mdc-text-field--no-label">
                                    <!---->
                                    <div class="mat-mdc-form-field-flex ng-tns-c186-7">
                                       <div matformfieldnotchedoutline="" class="mdc-notched-outline ng-tns-c186-7 mdc-notched-outline--no-label ng-star-inserted">
                                          <div class="mdc-notched-outline__leading"></div>
                                          <div class="mdc-notched-outline__notch">
                                             <!----><!----><!---->
                                          </div>
                                          <div class="mdc-notched-outline__trailing"></div>
                                       </div>
                                       <!----><!----><!---->
                                       <div class="mat-mdc-form-field-infix ng-tns-c186-7">
                                          <!----><input matinput="" placeholder="Marka Ara" class="mat-mdc-input-element ng-tns-c186-7 mat-mdc-form-field-input-control mdc-text-field__input cdk-text-field-autofill-monitored" id="mat-input-2" data-placeholder="Marka Ara" aria-invalid="false" aria-required="false">
                                       </div>
                                       <!----><!---->
                                    </div>
                                    <!---->
                                 </div>
                                 <div class="mat-mdc-form-field-subscript-wrapper mat-mdc-form-field-bottom-align ng-tns-c186-7">
                                    <!---->
                                    <div class="mat-mdc-form-field-hint-wrapper ng-tns-c186-7 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                       <!---->
                                       <div class="mat-mdc-form-field-hint-spacer ng-tns-c186-7"></div>
                                    </div>
                                    <!---->
                                 </div>
                              </mat-form-field>
                              <div class="items extra-margin">
                                 <div class="item ng-star-inserted">
                                    <mat-checkbox color="primary" class="mat-mdc-checkbox mat-primary" id="mat-mdc-checkbox-27">
                                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                             <div class="mat-mdc-checkbox-touch-target"></div>
                                             <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-27-input" tabindex="0" aria-checked="false">
                                             <div class="mdc-checkbox__ripple"></div>
                                             <div class="mdc-checkbox__background">
                                                <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                   <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                </svg>
                                                <div class="mdc-checkbox__mixedmark"></div>
                                             </div>
                                             <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                          </div>
                                          <label for="mat-mdc-checkbox-27-input"><span class="mat-body-2">i'think </span><span class="mat-body-2 text-color-grey">(68)</span></label>
                                       </div>
                                    </mat-checkbox>
                                 </div>
                                 <div class="item ng-star-inserted">
                                    <mat-checkbox color="primary" class="mat-mdc-checkbox mat-primary" id="mat-mdc-checkbox-28">
                                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                             <div class="mat-mdc-checkbox-touch-target"></div>
                                             <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-28-input" tabindex="0" aria-checked="false">
                                             <div class="mdc-checkbox__ripple"></div>
                                             <div class="mdc-checkbox__background">
                                                <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                   <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                </svg>
                                                <div class="mdc-checkbox__mixedmark"></div>
                                             </div>
                                             <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                          </div>
                                          <label for="mat-mdc-checkbox-28-input"><span class="mat-body-2">Upfull </span><span class="mat-body-2 text-color-grey">(35)</span></label>
                                       </div>
                                    </mat-checkbox>
                                 </div>
                                 <div class="item ng-star-inserted">
                                    <mat-checkbox color="primary" class="mat-mdc-checkbox mat-primary" id="mat-mdc-checkbox-29">
                                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                             <div class="mat-mdc-checkbox-touch-target"></div>
                                             <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-29-input" tabindex="0" aria-checked="false">
                                             <div class="mdc-checkbox__ripple"></div>
                                             <div class="mdc-checkbox__background">
                                                <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                   <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                </svg>
                                                <div class="mdc-checkbox__mixedmark"></div>
                                             </div>
                                             <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                          </div>
                                          <label for="mat-mdc-checkbox-29-input"><span class="mat-body-2">Xiaomi </span><span class="mat-body-2 text-color-grey">(32)</span></label>
                                       </div>
                                    </mat-checkbox>
                                 </div>
                                 <div class="item ng-star-inserted">
                                    <mat-checkbox color="primary" class="mat-mdc-checkbox mat-primary" id="mat-mdc-checkbox-30">
                                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                             <div class="mat-mdc-checkbox-touch-target"></div>
                                             <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-30-input" tabindex="0" aria-checked="false">
                                             <div class="mdc-checkbox__ripple"></div>
                                             <div class="mdc-checkbox__background">
                                                <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                   <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                </svg>
                                                <div class="mdc-checkbox__mixedmark"></div>
                                             </div>
                                             <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                          </div>
                                          <label for="mat-mdc-checkbox-30-input"><span class="mat-body-2">Samsung </span><span class="mat-body-2 text-color-grey">(24)</span></label>
                                       </div>
                                    </mat-checkbox>
                                 </div>
                                 <div class="item ng-star-inserted">
                                    <mat-checkbox color="primary" class="mat-mdc-checkbox mat-primary" id="mat-mdc-checkbox-31">
                                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                             <div class="mat-mdc-checkbox-touch-target"></div>
                                             <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-31-input" tabindex="0" aria-checked="false">
                                             <div class="mdc-checkbox__ripple"></div>
                                             <div class="mdc-checkbox__background">
                                                <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                   <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                </svg>
                                                <div class="mdc-checkbox__mixedmark"></div>
                                             </div>
                                             <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                          </div>
                                          <label for="mat-mdc-checkbox-31-input"><span class="mat-body-2">Ldnio </span><span class="mat-body-2 text-color-grey">(19)</span></label>
                                       </div>
                                    </mat-checkbox>
                                 </div>
                                 <div class="item ng-star-inserted">
                                    <mat-checkbox color="primary" class="mat-mdc-checkbox mat-primary" id="mat-mdc-checkbox-32">
                                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                             <div class="mat-mdc-checkbox-touch-target"></div>
                                             <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-32-input" tabindex="0" aria-checked="false">
                                             <div class="mdc-checkbox__ripple"></div>
                                             <div class="mdc-checkbox__background">
                                                <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                   <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                </svg>
                                                <div class="mdc-checkbox__mixedmark"></div>
                                             </div>
                                             <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                          </div>
                                          <label for="mat-mdc-checkbox-32-input"><span class="mat-body-2">Apple </span><span class="mat-body-2 text-color-grey">(17)</span></label>
                                       </div>
                                    </mat-checkbox>
                                 </div>
                                 <div class="item ng-star-inserted">
                                    <mat-checkbox color="primary" class="mat-mdc-checkbox mat-primary" id="mat-mdc-checkbox-33">
                                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                             <div class="mat-mdc-checkbox-touch-target"></div>
                                             <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-33-input" tabindex="0" aria-checked="false">
                                             <div class="mdc-checkbox__ripple"></div>
                                             <div class="mdc-checkbox__background">
                                                <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                   <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                </svg>
                                                <div class="mdc-checkbox__mixedmark"></div>
                                             </div>
                                             <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                          </div>
                                          <label for="mat-mdc-checkbox-33-input"><span class="mat-body-2">Panzerglass </span><span class="mat-body-2 text-color-grey">(16)</span></label>
                                       </div>
                                    </mat-checkbox>
                                 </div>
                                 <div class="item ng-star-inserted">
                                    <mat-checkbox color="primary" class="mat-mdc-checkbox mat-primary" id="mat-mdc-checkbox-34">
                                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                             <div class="mat-mdc-checkbox-touch-target"></div>
                                             <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-34-input" tabindex="0" aria-checked="false">
                                             <div class="mdc-checkbox__ripple"></div>
                                             <div class="mdc-checkbox__background">
                                                <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                   <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                </svg>
                                                <div class="mdc-checkbox__mixedmark"></div>
                                             </div>
                                             <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                          </div>
                                          <label for="mat-mdc-checkbox-34-input"><span class="mat-body-2">Tecno </span><span class="mat-body-2 text-color-grey">(14)</span></label>
                                       </div>
                                    </mat-checkbox>
                                 </div>
                                 <div class="item ng-star-inserted">
                                    <mat-checkbox color="primary" class="mat-mdc-checkbox mat-primary" id="mat-mdc-checkbox-35">
                                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                             <div class="mat-mdc-checkbox-touch-target"></div>
                                             <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-35-input" tabindex="0" aria-checked="false">
                                             <div class="mdc-checkbox__ripple"></div>
                                             <div class="mdc-checkbox__background">
                                                <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                   <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                </svg>
                                                <div class="mdc-checkbox__mixedmark"></div>
                                             </div>
                                             <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                          </div>
                                          <label for="mat-mdc-checkbox-35-input"><span class="mat-body-2">Hytech </span><span class="mat-body-2 text-color-grey">(14)</span></label>
                                       </div>
                                    </mat-checkbox>
                                 </div>
                                 <div class="item ng-star-inserted">
                                    <mat-checkbox color="primary" class="mat-mdc-checkbox mat-primary" id="mat-mdc-checkbox-36">
                                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                             <div class="mat-mdc-checkbox-touch-target"></div>
                                             <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-36-input" tabindex="0" aria-checked="false">
                                             <div class="mdc-checkbox__ripple"></div>
                                             <div class="mdc-checkbox__background">
                                                <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                   <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                </svg>
                                                <div class="mdc-checkbox__mixedmark"></div>
                                             </div>
                                             <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                          </div>
                                          <label for="mat-mdc-checkbox-36-input"><span class="mat-body-2">Reeder </span><span class="mat-body-2 text-color-grey">(4)</span></label>
                                       </div>
                                    </mat-checkbox>
                                 </div>
                                 <div class="item ng-star-inserted">
                                    <mat-checkbox color="primary" class="mat-mdc-checkbox mat-primary" id="mat-mdc-checkbox-37">
                                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                             <div class="mat-mdc-checkbox-touch-target"></div>
                                             <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-37-input" tabindex="0" aria-checked="false">
                                             <div class="mdc-checkbox__ripple"></div>
                                             <div class="mdc-checkbox__background">
                                                <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                   <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                </svg>
                                                <div class="mdc-checkbox__mixedmark"></div>
                                             </div>
                                             <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                          </div>
                                          <label for="mat-mdc-checkbox-37-input"><span class="mat-body-2">Omix </span><span class="mat-body-2 text-color-grey">(2)</span></label>
                                       </div>
                                    </mat-checkbox>
                                 </div>
                                 <div class="item ng-star-inserted">
                                    <mat-checkbox color="primary" class="mat-mdc-checkbox mat-primary" id="mat-mdc-checkbox-38">
                                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                             <div class="mat-mdc-checkbox-touch-target"></div>
                                             <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-38-input" tabindex="0" aria-checked="false">
                                             <div class="mdc-checkbox__ripple"></div>
                                             <div class="mdc-checkbox__background">
                                                <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                   <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                </svg>
                                                <div class="mdc-checkbox__mixedmark"></div>
                                             </div>
                                             <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                          </div>
                                          <label for="mat-mdc-checkbox-38-input"><span class="mat-body-2">Ttec </span><span class="mat-body-2 text-color-grey">(2)</span></label>
                                       </div>
                                    </mat-checkbox>
                                 </div>
                                 <div class="item ng-star-inserted">
                                    <mat-checkbox color="primary" class="mat-mdc-checkbox mat-primary" id="mat-mdc-checkbox-39">
                                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                             <div class="mat-mdc-checkbox-touch-target"></div>
                                             <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-39-input" tabindex="0" aria-checked="false">
                                             <div class="mdc-checkbox__ripple"></div>
                                             <div class="mdc-checkbox__background">
                                                <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                   <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                </svg>
                                                <div class="mdc-checkbox__mixedmark"></div>
                                             </div>
                                             <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                          </div>
                                          <label for="mat-mdc-checkbox-39-input"><span class="mat-body-2">Wiky </span><span class="mat-body-2 text-color-grey">(2)</span></label>
                                       </div>
                                    </mat-checkbox>
                                 </div>
                                 <div class="item ng-star-inserted">
                                    <mat-checkbox color="primary" class="mat-mdc-checkbox mat-primary" id="mat-mdc-checkbox-40">
                                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                             <div class="mat-mdc-checkbox-touch-target"></div>
                                             <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-40-input" tabindex="0" aria-checked="false">
                                             <div class="mdc-checkbox__ripple"></div>
                                             <div class="mdc-checkbox__background">
                                                <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                   <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                </svg>
                                                <div class="mdc-checkbox__mixedmark"></div>
                                             </div>
                                             <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                          </div>
                                          <label for="mat-mdc-checkbox-40-input"><span class="mat-body-2">Philips </span><span class="mat-body-2 text-color-grey">(2)</span></label>
                                       </div>
                                    </mat-checkbox>
                                 </div>
                                 <div class="item ng-star-inserted">
                                    <mat-checkbox color="primary" class="mat-mdc-checkbox mat-primary" id="mat-mdc-checkbox-41">
                                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                             <div class="mat-mdc-checkbox-touch-target"></div>
                                             <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-41-input" tabindex="0" aria-checked="false">
                                             <div class="mdc-checkbox__ripple"></div>
                                             <div class="mdc-checkbox__background">
                                                <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                   <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                </svg>
                                                <div class="mdc-checkbox__mixedmark"></div>
                                             </div>
                                             <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                          </div>
                                          <label for="mat-mdc-checkbox-41-input"><span class="mat-body-2">Trident </span><span class="mat-body-2 text-color-grey">(2)</span></label>
                                       </div>
                                    </mat-checkbox>
                                 </div>
                                 <div class="item ng-star-inserted">
                                    <mat-checkbox color="primary" class="mat-mdc-checkbox mat-primary" id="mat-mdc-checkbox-42">
                                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                             <div class="mat-mdc-checkbox-touch-target"></div>
                                             <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-42-input" tabindex="0" aria-checked="false">
                                             <div class="mdc-checkbox__ripple"></div>
                                             <div class="mdc-checkbox__background">
                                                <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                   <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                </svg>
                                                <div class="mdc-checkbox__mixedmark"></div>
                                             </div>
                                             <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                          </div>
                                          <label for="mat-mdc-checkbox-42-input"><span class="mat-body-2">Hiking </span><span class="mat-body-2 text-color-grey">(2)</span></label>
                                       </div>
                                    </mat-checkbox>
                                 </div>
                                 <div class="item ng-star-inserted">
                                    <mat-checkbox color="primary" class="mat-mdc-checkbox mat-primary" id="mat-mdc-checkbox-43">
                                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                             <div class="mat-mdc-checkbox-touch-target"></div>
                                             <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-43-input" tabindex="0" aria-checked="false">
                                             <div class="mdc-checkbox__ripple"></div>
                                             <div class="mdc-checkbox__background">
                                                <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                   <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                </svg>
                                                <div class="mdc-checkbox__mixedmark"></div>
                                             </div>
                                             <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                          </div>
                                          <label for="mat-mdc-checkbox-43-input"><span class="mat-body-2">General Home </span><span class="mat-body-2 text-color-grey">(1)</span></label>
                                       </div>
                                    </mat-checkbox>
                                 </div>
                                 <div class="item ng-star-inserted">
                                    <mat-checkbox color="primary" class="mat-mdc-checkbox mat-primary" id="mat-mdc-checkbox-44">
                                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                             <div class="mat-mdc-checkbox-touch-target"></div>
                                             <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-44-input" tabindex="0" aria-checked="false">
                                             <div class="mdc-checkbox__ripple"></div>
                                             <div class="mdc-checkbox__background">
                                                <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                   <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                </svg>
                                                <div class="mdc-checkbox__mixedmark"></div>
                                             </div>
                                             <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                          </div>
                                          <label for="mat-mdc-checkbox-44-input"><span class="mat-body-2">Bilicra </span><span class="mat-body-2 text-color-grey">(1)</span></label>
                                       </div>
                                    </mat-checkbox>
                                 </div>
                                 <div class="item ng-star-inserted">
                                    <mat-checkbox color="primary" class="mat-mdc-checkbox mat-primary" id="mat-mdc-checkbox-45">
                                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                             <div class="mat-mdc-checkbox-touch-target"></div>
                                             <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-45-input" tabindex="0" aria-checked="false">
                                             <div class="mdc-checkbox__ripple"></div>
                                             <div class="mdc-checkbox__background">
                                                <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                   <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                </svg>
                                                <div class="mdc-checkbox__mixedmark"></div>
                                             </div>
                                             <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                          </div>
                                          <label for="mat-mdc-checkbox-45-input"><span class="mat-body-2">Microcell </span><span class="mat-body-2 text-color-grey">(1)</span></label>
                                       </div>
                                    </mat-checkbox>
                                 </div>
                                 <div class="item ng-star-inserted">
                                    <mat-checkbox color="primary" class="mat-mdc-checkbox mat-primary" id="mat-mdc-checkbox-46">
                                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                             <div class="mat-mdc-checkbox-touch-target"></div>
                                             <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-46-input" tabindex="0" aria-checked="false">
                                             <div class="mdc-checkbox__ripple"></div>
                                             <div class="mdc-checkbox__background">
                                                <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                   <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                </svg>
                                                <div class="mdc-checkbox__mixedmark"></div>
                                             </div>
                                             <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                          </div>
                                          <label for="mat-mdc-checkbox-46-input"><span class="mat-body-2">Realme </span><span class="mat-body-2 text-color-grey">(1)</span></label>
                                       </div>
                                    </mat-checkbox>
                                 </div>
                                 <div class="item ng-star-inserted">
                                    <mat-checkbox color="primary" class="mat-mdc-checkbox mat-primary" id="mat-mdc-checkbox-47">
                                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                             <div class="mat-mdc-checkbox-touch-target"></div>
                                             <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-47-input" tabindex="0" aria-checked="false">
                                             <div class="mdc-checkbox__ripple"></div>
                                             <div class="mdc-checkbox__background">
                                                <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                   <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                </svg>
                                                <div class="mdc-checkbox__mixedmark"></div>
                                             </div>
                                             <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                          </div>
                                          <label for="mat-mdc-checkbox-47-input"><span class="mat-body-2">Swiss </span><span class="mat-body-2 text-color-grey">(1)</span></label>
                                       </div>
                                    </mat-checkbox>
                                 </div>
                                 <div class="item ng-star-inserted">
                                    <mat-checkbox color="primary" class="mat-mdc-checkbox mat-primary" id="mat-mdc-checkbox-48">
                                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                             <div class="mat-mdc-checkbox-touch-target"></div>
                                             <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-48-input" tabindex="0" aria-checked="false">
                                             <div class="mdc-checkbox__ripple"></div>
                                             <div class="mdc-checkbox__background">
                                                <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                   <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                </svg>
                                                <div class="mdc-checkbox__mixedmark"></div>
                                             </div>
                                             <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                          </div>
                                          <label for="mat-mdc-checkbox-48-input"><span class="mat-body-2">General Mobile </span><span class="mat-body-2 text-color-grey">(1)</span></label>
                                       </div>
                                    </mat-checkbox>
                                 </div>
                                 <div class="item ng-star-inserted">
                                    <mat-checkbox color="primary" class="mat-mdc-checkbox mat-primary" id="mat-mdc-checkbox-49">
                                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                             <div class="mat-mdc-checkbox-touch-target"></div>
                                             <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-49-input" tabindex="0" aria-checked="false">
                                             <div class="mdc-checkbox__ripple"></div>
                                             <div class="mdc-checkbox__background">
                                                <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                   <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                </svg>
                                                <div class="mdc-checkbox__mixedmark"></div>
                                             </div>
                                             <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                          </div>
                                          <label for="mat-mdc-checkbox-49-input"><span class="mat-body-2">Reyondan </span><span class="mat-body-2 text-color-grey">(1)</span></label>
                                       </div>
                                    </mat-checkbox>
                                 </div>
                                 <div class="item ng-star-inserted">
                                    <mat-checkbox color="primary" class="mat-mdc-checkbox mat-primary" id="mat-mdc-checkbox-50">
                                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                             <div class="mat-mdc-checkbox-touch-target"></div>
                                             <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-50-input" tabindex="0" aria-checked="false">
                                             <div class="mdc-checkbox__ripple"></div>
                                             <div class="mdc-checkbox__background">
                                                <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                   <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                </svg>
                                                <div class="mdc-checkbox__mixedmark"></div>
                                             </div>
                                             <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                          </div>
                                          <label for="mat-mdc-checkbox-50-input"><span class="mat-body-2">Bood </span><span class="mat-body-2 text-color-grey">(1)</span></label>
                                       </div>
                                    </mat-checkbox>
                                 </div>
                                 <div class="item ng-star-inserted">
                                    <mat-checkbox color="primary" class="mat-mdc-checkbox mat-primary" id="mat-mdc-checkbox-51">
                                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                             <div class="mat-mdc-checkbox-touch-target"></div>
                                             <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-51-input" tabindex="0" aria-checked="false">
                                             <div class="mdc-checkbox__ripple"></div>
                                             <div class="mdc-checkbox__background">
                                                <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                   <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                </svg>
                                                <div class="mdc-checkbox__mixedmark"></div>
                                             </div>
                                             <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                          </div>
                                          <label for="mat-mdc-checkbox-51-input"><span class="mat-body-2">Casper </span><span class="mat-body-2 text-color-grey">(1)</span></label>
                                       </div>
                                    </mat-checkbox>
                                 </div>
                                 <!---->
                              </div>
                           </div>
                           <!---->
                           <mat-divider role="separator" class="mat-divider mat-divider-horizontal" aria-orientation="horizontal"></mat-divider>
                           <div class="filter__discounts ng-star-inserted">
                              <div class="subtitle-1">İndirimler</div>
                              <div class="items">
                                 <div class="item ng-star-inserted">
                                    <mat-checkbox color="primary" class="mat-mdc-checkbox mat-primary" id="mat-mdc-checkbox-52">
                                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                             <div class="mat-mdc-checkbox-touch-target"></div>
                                             <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-52-input" tabindex="0" aria-checked="false">
                                             <div class="mdc-checkbox__ripple"></div>
                                             <div class="mdc-checkbox__background">
                                                <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                   <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                </svg>
                                                <div class="mdc-checkbox__mixedmark"></div>
                                             </div>
                                             <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                          </div>
                                          <label for="mat-mdc-checkbox-52-input"><span class="mat-body-2">Money İndirimli Market Ürünleri </span><span class="mat-body-2 text-color-grey">(96)</span></label>
                                       </div>
                                    </mat-checkbox>
                                 </div>
                                 <!---->
                              </div>
                           </div>
                           <!----><!---->
                        </div>
                     </sm-product-filters-desktop>
                     <!---->
                  </div>
                  <div class="products mdc-layout-grid__cell--span-10-phone mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-9-desktop">
                     <div class="banner-container">
                        <div class="banner-wrapper">
                           <!---->
                           <div>
                              <div fedeferload="" class="list-page-banner ng-star-inserted" id="div-gpt-ad-1666697140406-0" hidden="" style="transform: scale(1); width: auto; height: auto;"></div>
                              <!---->
                           </div>
                           <!----><!----><!---->
                        </div>
                     </div>
                     <div class="chip-sort-row desktop-only">
                        <div class="chip-list">
                           <mat-chip-list aria-label="Selected search filters" class="mat-chip-list" id="mat-chip-list-1" tabindex="-1" aria-disabled="false" aria-invalid="false" aria-multiselectable="false" aria-orientation="horizontal">
                              <div class="mat-chip-list-wrapper">
                                 <!---->
                              </div>
                           </mat-chip-list>
                           <!---->
                        </div>
                        <fe-dropdown class="sort-dropdown">
                           <mat-form-field appearance="outline" color="accent" class="mat-mdc-form-field ng-tns-c186-5 mat-mdc-form-field-type-mat-select mat-mdc-form-field-has-icon-prefix mat-form-field-appearance-outline mat-accent ng-untouched ng-pristine ng-valid ng-star-inserted">
                              <!---->
                              <div class="mat-mdc-text-field-wrapper mdc-text-field ng-tns-c186-5 mdc-text-field--outlined">
                                 <!---->
                                 <div class="mat-mdc-form-field-flex ng-tns-c186-5">
                                    <div matformfieldnotchedoutline="" class="mdc-notched-outline ng-tns-c186-5 mdc-notched-outline--upgraded ng-star-inserted mdc-notched-outline--notched">
                                       <div class="mdc-notched-outline__leading"></div>
                                       <div class="mdc-notched-outline__notch" style="width: 0px;">
                                          <label matformfieldfloatinglabel="" class="mdc-floating-label mat-mdc-floating-label ng-tns-c186-5 ng-star-inserted mdc-floating-label--float-above" id="mat-mdc-form-field-label-6" for="mat-select-2" aria-owns="mat-select-2" style="transform: var(
                                             --mat-mdc-form-field-label-transform,
                                             translateY(-50%) translateX(-16px
                                             );">
                                             <mat-label class="subtitle-2 text-color-black ng-tns-c186-5"></mat-label>
                                             <!---->
                                          </label>
                                          <!----><!----><!---->
                                       </div>
                                       <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                    <!---->
                                    <div class="mat-mdc-form-field-icon-prefix ng-tns-c186-5 ng-star-inserted">
                                       <fa-icon matprefix="" class="ng-fa-icon icon-prefix ng-tns-c186-5 ng-star-inserted">
                                          <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-down-arrow-up" class="svg-inline--fa fa-arrow-down-arrow-up" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                             <path fill="currentColor" d="M150.6 470.6l96-96c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 370.7V64c0-17.7-14.3-32-32-32s-32 14.3-32 32V370.7L54.6 329.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l96 96c12.5 12.5 32.8 12.5 45.3 0zm352-333.3l-96-96c-12.5-12.5-32.8-12.5-45.3 0l-96 96c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L352 141.3V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.3l41.4 41.4c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3z"></path>
                                          </svg>
                                       </fa-icon>
                                       <!---->
                                    </div>
                                    <!----><!---->
                                    <div class="mat-mdc-form-field-infix ng-tns-c186-5">
                                       <!---->
                                       <mat-select role="combobox" aria-autocomplete="none" aria-haspopup="listbox" class="mat-mdc-select ng-tns-c190-6 ng-tns-c186-5 ng-untouched ng-pristine ng-valid ng-star-inserted" aria-labelledby="mat-mdc-form-field-label-6 mat-select-value-3" id="mat-select-2" tabindex="0" aria-expanded="false" aria-required="false" aria-disabled="false" aria-invalid="false">
                                          <div cdk-overlay-origin="" class="mat-mdc-select-trigger ng-tns-c190-6">
                                             <div class="mat-mdc-select-value ng-tns-c190-6" id="mat-select-value-3">
                                                <!---->
                                                <span class="mat-mdc-select-value-text ng-tns-c190-6 ng-star-inserted">
                                                   <span class="mat-mdc-select-min-line ng-tns-c190-6 ng-star-inserted">Önerilenler</span><!----><!---->
                                                </span>
                                                <!---->
                                             </div>
                                             <div class="mat-mdc-select-arrow-wrapper ng-tns-c190-6">
                                                <div class="mat-mdc-select-arrow ng-tns-c190-6">
                                                   <svg viewBox="0 0 24 24" width="24px" height="24px" focusable="false" class="ng-tns-c190-6">
                                                      <path d="M7 10l5 5 5-5z" class="ng-tns-c190-6"></path>
                                                   </svg>
                                                </div>
                                             </div>
                                          </div>
                                          <!---->
                                       </mat-select>
                                    </div>
                                    <!----><!---->
                                 </div>
                                 <!---->
                              </div>
                              <div class="mat-mdc-form-field-subscript-wrapper mat-mdc-form-field-bottom-align ng-tns-c186-5">
                                 <!---->
                                 <div class="mat-mdc-form-field-hint-wrapper ng-tns-c186-5 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                    <!---->
                                    <div class="mat-mdc-form-field-hint-spacer ng-tns-c186-5"></div>
                                 </div>
                                 <!---->
                              </div>
                           </mat-form-field>
                        </fe-dropdown>
                     </div>
                     <div class="legal-row desktop-only">
                        <sm-legal-description _nghost-nyw-c394="">
                           <!---->
                        </sm-legal-description>
                     </div>
                     <!---->
                     <div class="mdc-layout-grid__inner product-cards list ng-star-inserted">
                     <?php
                            $sql = "SELECT * FROM urunler";

                            $stmt = $pdo->prepare($sql);
                            $stmt->execute();

                            $urunler = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($urunler as $urun) {?>
                                <sm-list-page-item fegtm="" class="mdc-layout-grid__cell--span-2-desktop mdc-layout-grid__cell--span-4-tablet mdc-layout-grid__cell--span-2-phone ng-star-inserted">
                                <mat-card class="mat-mdc-card mdc-card">
                                    <fa-icon id="fav-add-button-21000039182643" class="ng-fa-icon favourite favourite--empty ng-star-inserted">
                                        <svg role="img" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="heart" class="svg-inline--fa fa-heart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor" d="M255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L255.1 96zM255.1 141.3L221.4 106.6C196.1 81.31 160 69.77 124.7 75.66C71.21 84.58 31.1 130.9 31.1 185.1V190.9C31.1 223.6 45.55 254.7 69.42 277L250.1 445.7C251.7 447.2 253.8 448 255.1 448C258.2 448 260.3 447.2 261.9 445.7L442.6 277C466.4 254.7 480 223.6 480 190.9V185.1C480 130.9 440.8 84.58 387.3 75.66C351.1 69.77 315.9 81.31 290.6 106.6L255.1 141.3z"></path>
                                        </svg>
                                    </fa-icon>
                                    <?php 
                                    if($urun['urun_indirim_status'] == 0){?>
                                    
                                    <div id="discount-badge" class="discount-badge ng-star-inserted">
                                        <div><span id="discount-badge--percent" class="discount-badge--percent">%</span><span id="discount-badge--unit" class="discount-badge--unit"><?=$urun['urun_indirim']?></span></div>
                                        <div id="discount-badge--label" class="discount-badge--label">İNDİRİM</div>
                                    </div>
                                    <?php } ?>
                                    <!----><!----><!----><!---->
                                    <div>
                                        <fe-product-image id="product-image" class="image" _nghost-nyw-c159="">
                                            <a _ngcontent-nyw-c159="" id="product-image-link" href="<?=seo($urun['urun_adi'])?>/<?=seo($urun['id'])?>">
                                            <img _ngcontent-nyw-c159="" felazyload="" alt="/urun/<?=$urun['urun_adi']?>" src="<?=$urun['urun_resim']?>" class="ng-star-inserted"><!----><!----><!---->
                                            </a>
                                        </fe-product-image>
                                        <a id="product-name" class="mat-caption text-color-black product-name" ngx-ql="" href="/urun/<?=seo($urun['urun_adi'])?>/<?=seo($urun['id'])?>"> <?=$urun['urun_adi']?> </a>
                                    </div>
                                    <div class="bottom-row">
                                        <fe-crm-discount-badge _nghost-nyw-c293="">
                                            <!---->
                                        </fe-crm-discount-badge>
                                        <?php 
                                    if($urun['urun_indirim_status'] == 0){?>
                                        <fe-product-price id="price" class="price" _nghost-nyw-c271="">
                                            <div _ngcontent-nyw-c271="" class="promotion-wrapper">
                                            <div _ngcontent-nyw-c271="" id="price-old" class="price-old ng-star-inserted"><span _ngcontent-nyw-c271="" id="old-amount" class="amount"><?=$urun['urun_fiyat']?> <span _ngcontent-nyw-c271="" class="currency">TL</span></span></div>
                                            <!---->
                                            <div _ngcontent-nyw-c271="" id="price-new" class="price-new subtitle-1"><span _ngcontent-nyw-c271="" id="new-amount" class="amount"> 
                                            <?php
                                             $orijinal_fiyat = $urun['urun_fiyat'];
                                             $indirim_orani = $urun['urun_indirim'];
                                             $indirimli_fiyat = $orijinal_fiyat - ($orijinal_fiyat * ($indirim_orani / 100));
                                             echo $indirimli_fiyat;
                                            ?>    
                                             <span _ngcontent-nyw-c271="" class="currency">TL</span></span></div>
                                            </div>
                                            <!---->
                                        </fe-product-price>
                                     <?php }else{?>
                                 <fe-product-price id="price" class="price" _nghost-nyw-c271="">
                                    <div _ngcontent-nyw-c271="">
                                       <!---->
                                       <div _ngcontent-nyw-c271="" id="price-new" class="price-new subtitle-1 price-new-only"><span _ngcontent-nyw-c271="" id="new-amount" class="amount"> <?=$urun['urun_fiyat']?> <span _ngcontent-nyw-c271="" class="currency">TL</span></span></div>
                                    </div>
                                    <!---->
                                 </fe-product-price>
                                      <?php }?>  
                                        <!---->
                                        <sm-product-actions id="actions" class="actions" _nghost-nyw-c292="">
                                            <!---->
                                            <fa-icon _ngcontent-nyw-c292="" class="ng-fa-icon add-to-cart-button ng-star-inserted" id="product-actions-add-to-cart-button--xiaomi-redmi-buds-3-bluetooth-kulaklik-beyaz-p-255e133">
                                            <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="plus" class="svg-inline--fa fa-plus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="currentColor" d="M432 256C432 269.3 421.3 280 408 280h-160v160c0 13.25-10.75 24.01-24 24.01S200 453.3 200 440v-160h-160c-13.25 0-24-10.74-24-23.99C16 242.8 26.75 232 40 232h160v-160c0-13.25 10.75-23.99 24-23.99S248 58.75 248 72v160h160C421.3 232 432 242.8 432 256z"></path>
                                            </svg>
                                            </fa-icon>
                                            <!----><!---->
                                        </sm-product-actions>
                                    </div>
                                </mat-card>
                                <!----><!---->
                                </sm-list-page-item>
                            <?php }?>

                        
                     </div>
                     <!---->
                     <sm-pagination _nghost-nyw-c392="">
                        <div _ngcontent-nyw-c392="" class="page-row ng-star-inserted">
                           <button _ngcontent-nyw-c392="" mat-flat-button="" color="accent" id="pagination-button-first" class="button button--icon button--nonselected mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-accent mat-mdc-button-base" disabled="true">
                              <span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span>
                              <span class="mdc-button__label">
                                 <fa-icon _ngcontent-nyw-c392="" class="ng-fa-icon">
                                    <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevrons-left" class="svg-inline--fa fa-chevrons-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                       <path fill="currentColor" d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192zm384-192l-192 192c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L301.3 256 470.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0z"></path>
                                    </svg>
                                 </fa-icon>
                              </span>
                              <span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span>
                           </button>
                           <button _ngcontent-nyw-c392="" mat-flat-button="" color="accent" id="pagination-button-previous" class="button button--icon button--nonselected mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-accent mat-mdc-button-base" disabled="true">
                              <span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span>
                              <span class="mdc-button__label">
                                 <fa-icon _ngcontent-nyw-c392="" class="ng-fa-icon">
                                    <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                       <path fill="currentColor" d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"></path>
                                    </svg>
                                 </fa-icon>
                              </span>
                              <span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span>
                           </button>
                           <button _ngcontent-nyw-c392="" mat-flat-button="" class="button mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-primary mat-mdc-button-base ng-star-inserted" id="pagination-button-1"><span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span><span class="mdc-button__label"> 1 </span><span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span></button><button _ngcontent-nyw-c392="" mat-flat-button="" class="button mdc-button mdc-button--unelevated mat-mdc-unelevated-button button--nonselected mat-accent mat-mdc-button-base ng-star-inserted" id="pagination-button-2"><span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span><span class="mdc-button__label"> 2 </span><span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span></button><button _ngcontent-nyw-c392="" mat-flat-button="" class="button mdc-button mdc-button--unelevated mat-mdc-unelevated-button button--nonselected mat-accent mat-mdc-button-base ng-star-inserted" id="pagination-button-3"><span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span><span class="mdc-button__label"> 3 </span><span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span></button><!---->
                           <button _ngcontent-nyw-c392="" mat-flat-button="" color="accent" id="pagination-button-next" class="button button--icon button--nonselected mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-accent mat-mdc-button-base">
                              <span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span>
                              <span class="mdc-button__label">
                                 <fa-icon _ngcontent-nyw-c392="" class="ng-fa-icon">
                                    <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                       <path fill="currentColor" d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                    </svg>
                                 </fa-icon>
                              </span>
                              <span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span>
                           </button>
                           <button _ngcontent-nyw-c392="" mat-flat-button="" color="accent" id="pagination-button-last" class="button button--icon button--nonselected mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-accent mat-mdc-button-base">
                              <span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span>
                              <span class="mdc-button__label">
                                 <fa-icon _ngcontent-nyw-c392="" class="ng-fa-icon">
                                    <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevrons-right" class="svg-inline--fa fa-chevrons-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                       <path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-192-192c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 233.4 425.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l192-192zm-384 192l192-192c12.5-12.5 12.5-32.8 0-45.3l-192-192c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 41.4 425.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"></path>
                                    </svg>
                                 </fa-icon>
                              </span>
                              <span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span>
                           </button>
                        </div>
                        <!---->
                     </sm-pagination>
                     <!----><!---->
                     <div class="free-banner-wrapper mobile-only ng-star-inserted">
                        <div fedeferload="" id="div-gpt-ad-1664180136950-0" style="transform: scale(1); height: auto; width: auto;"></div>
                     </div>
                     <!---->
                  </div>
               </div>
               <sm-popup-banner>
                  <!---->
               </sm-popup-banner>
            </div>
            <!---->
         </sm-list>
         <!---->
      </article>
   </sm-product>
   <!---->
</main>