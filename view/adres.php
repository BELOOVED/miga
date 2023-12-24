<style>
    .header{
        display: none;
    }
    <?php
      if ($detect->isMobile()) {?>
    .footer
    {
      display: none;
    }
    <?php }?>
</style>
<sm-header-lite _ngcontent-haa-c372="" _nghost-haa-c370="" class="ng-star-inserted"><div _ngcontent-haa-c370="" class="header-wrapper"><div _ngcontent-haa-c370="" class="desktop-only"><!----><!----></div><div _ngcontent-haa-c370="" class="logo-container elektronik" onclick="window.location.href= '/';"></div><div _ngcontent-haa-c370="" class="mobile-only"><!----><!----></div></div><!----></sm-header-lite>
<main _ngcontent-haa-c372="" class="elektronik">
   <router-outlet _ngcontent-haa-c372=""></router-outlet>
   <sm-checkout _nghost-haa-c465="" class="ng-star-inserted">
      <!----><!---->
      <fe-line-checkout-steps _ngcontent-haa-c465="" _nghost-haa-c248="" class="ng-star-inserted">
         <a _ngcontent-haa-c248="" routerlinkactive="active" class="checkout-step disabled ng-star-inserted active" id="checkout-steps_1" href="/elektronik/siparis/adres/358356324">
            <div _ngcontent-haa-c248="" class="checkout-step__number"><span _ngcontent-haa-c248="">1</span></div>
            <div _ngcontent-haa-c248="" class="checkout-step__title"><span _ngcontent-haa-c248="">ADRES</span></div>
            <div _ngcontent-haa-c248="" class="checkout-step__arrow ng-star-inserted">
               <fa-icon _ngcontent-haa-c248="" class="ng-fa-icon">
                  <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                     <path fill="currentColor" d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                  </svg>
               </fa-icon>
            </div>
            <!---->
         </a>
         <a _ngcontent-haa-c248="" routerlinkactive="active" class="checkout-step disabled ng-star-inserted" id="checkout-steps_2" href="/elektronik/siparis/teslimat-zamani/358356324">
            <div _ngcontent-haa-c248="" class="checkout-step__number"><span _ngcontent-haa-c248="">2</span></div>
            <div _ngcontent-haa-c248="" class="checkout-step__title"><span _ngcontent-haa-c248="">TESLİMAT</span></div>
            <div _ngcontent-haa-c248="" class="checkout-step__arrow ng-star-inserted">
               <fa-icon _ngcontent-haa-c248="" class="ng-fa-icon">
                  <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                     <path fill="currentColor" d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                  </svg>
               </fa-icon>
            </div>
            <!---->
         </a>
         <a _ngcontent-haa-c248="" routerlinkactive="active" class="checkout-step disabled ng-star-inserted" id="checkout-steps_3" href="/elektronik/siparis/odeme/358356324">
            <div _ngcontent-haa-c248="" class="checkout-step__number"><span _ngcontent-haa-c248="">3</span></div>
            <div _ngcontent-haa-c248="" class="checkout-step__title"><span _ngcontent-haa-c248="">ÖDEME</span></div>
            <!---->
         </a>
         <!----><!---->
      </fe-line-checkout-steps>
      <!----><!----><!---->
      <article _ngcontent-haa-c465="">
         <router-outlet _ngcontent-haa-c465=""></router-outlet>
         <sm-address-selector class="ng-star-inserted">
            <div class="wrapper ng-star-inserted">
               <div class="address-selector-wrapper">
                  <!----><!---->
                  <div class="delivery-addresses-wrapper ng-star-inserted">
                     <div class="instruction-same-as-delivery-checkbox-wrapper">
                        <div class="instruction subtitle-1">
                           Teslimat Adresi Seç 
                           <mat-checkbox class="mat-mdc-checkbox mat-primary ng-star-inserted" id="mat-mdc-checkbox-1">
                              <div class="mdc-form-field">
                                 <div class="mdc-checkbox">
                                    <div class="mat-mdc-checkbox-touch-target"></div>
                                    <input type="checkbox" checked class="mdc-checkbox__native-control" id="mat-mdc-checkbox-1-input" tabindex="0" aria-checked="false">
                                    <div class="mdc-checkbox__ripple"></div>
                                    <div class="mdc-checkbox__background">
                                       <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                          <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                       </svg>
                                       <div class="mdc-checkbox__mixedmark"></div>
                                    </div>
                                    <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                 </div>
                                 <label for="mat-mdc-checkbox-1-input"><span class="mat-caption">Fatura adresim aynı</span></label>
                              </div>
                           </mat-checkbox>
                           <!---->
                        </div>
                     </div>
                     <div class="delivery-addresses-inner-wrapper">
                        <?php
                        if(isset($_SESSION['adres_ismi'])){
                        ?>
                        <mat-radio-group role="radiogroup" class="mat-mdc-radio-group">
                           <div class="address selected ng-star-inserted" id="address-selector-0">
                              <mat-radio-button color="primary" class="mat-mdc-radio-button address-button mat-primary mat-mdc-radio-checked" id="mat-radio-3">
                                 <div class="mdc-form-field">
                                    <div class="mdc-radio">
                                       <div class="mat-mdc-radio-touch-target"></div>
                                       <input type="radio" class="mdc-radio__native-control" id="mat-radio-3-input" name="mat-radio-group-0" value="[object Object]" tabindex="0">
                                       <div class="mdc-radio__background">
                                          <div class="mdc-radio__outer-circle"></div>
                                          <div class="mdc-radio__inner-circle"></div>
                                       </div>
                                       <div mat-ripple="" class="mat-ripple mat-radio-ripple mat-mdc-focus-indicator">
                                          <div class="mat-ripple-element mat-radio-persistent-ripple"></div>
                                       </div>
                                    </div>
                                    <label for="mat-radio-3-input">
                                       <div class="title-delete-edit-address-detailed-wrapper">
                                          <div class="title-delete-edit-wrapper">
                                             <div class="title subtitle-2"> ev </div>
                                             <fe-icon-button aria-label="Adresi Düzenle" class="edit-button ng-star-inserted" _nghost-haa-c245="" id="address-selector-edit-button-0">
                                                <button _ngcontent-haa-c245="" mat-icon-button="" color="accent" onclick="closemodal()" class="mdc-icon-button mat-mdc-icon-button mat-accent mat-mdc-button-base">
                                                   <span class="mat-mdc-button-persistent-ripple mdc-icon-button__ripple"></span>
                                                   <fa-icon _ngcontent-haa-c245="" class="ng-fa-icon button-icon">
                                                      <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="pen" class="svg-inline--fa fa-pen" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                         <path fill="currentColor" d="M58.57 323.5L362.7 19.32C387.7-5.678 428.3-5.678 453.3 19.32L492.7 58.75C495.8 61.87 498.5 65.24 500.9 68.79C517.3 93.63 514.6 127.4 492.7 149.3L188.5 453.4C187.2 454.7 185.9 455.1 184.5 457.2C174.9 465.7 163.5 471.1 151.1 475.6L30.77 511C22.35 513.5 13.24 511.2 7.03 504.1C.8198 498.8-1.502 489.7 .976 481.2L36.37 360.9C40.53 346.8 48.16 333.9 58.57 323.5L58.57 323.5zM82.42 374.4L59.44 452.6L137.6 429.6C143.1 427.7 149.8 424.2 154.6 419.5L383 191L320.1 128.1L92.51 357.4C91.92 358 91.35 358.6 90.8 359.3C86.94 363.6 84.07 368.8 82.42 374.4L82.42 374.4z"></path>
                                                      </svg>
                                                   </fa-icon>
                                                   <span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span>
                                                </button>
                                             </fe-icon-button>
                                             <!---->
                                             <fe-icon-button aria-label="Adresi Sil" class="delete-button ng-star-inserted" _nghost-haa-c245="" id="address-selector-delete-button-0">
                                                <button _ngcontent-haa-c245="" mat-icon-button="" color="accent" class="mdc-icon-button mat-mdc-icon-button mat-accent mat-mdc-button-base">
                                                   <span class="mat-mdc-button-persistent-ripple mdc-icon-button__ripple"></span>
                                                   <fa-icon _ngcontent-haa-c245="" class="ng-fa-icon button-icon">
                                                      <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="trash-can" class="svg-inline--fa fa-trash-can" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                         <path fill="currentColor" d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z"></path>
                                                      </svg>
                                                   </fa-icon>
                                                   <span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span>
                                                </button>
                                             </fe-icon-button>
                                             <!---->
                                          </div>
                                          <div class="address-detailed mat-caption-normal text-color-grey"> <?=$_SESSION["mahalle"]?>. No: <?=$_SESSION["bina_no"]?> Kat: <?=$_SESSION["kat_no"]?> Daire: <?=$_SESSION["daire_no"]?> <?=$_SESSION["ilce"]?>/<?=$_SESSION["sehir"]?> </div>
                                       </div>
                                    </label>
                                 </div>
                              </mat-radio-button>
                           </div>
                           <!----><!---->
                        </mat-radio-group>
                        <?php }?>
                        <button onclick="openmodal('teslimat')" id="address-selector-add-delivery" class="add-address-wrapper ng-star-inserted">
                           <fa-icon class="ng-fa-icon text-color-orange add-plus-icon">
                              <svg role="img" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="plus" class="svg-inline--fa fa-plus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                 <path fill="currentColor" d="M432 256C432 264.8 424.8 272 416 272h-176V448c0 8.844-7.156 16.01-16 16.01S208 456.8 208 448V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99S240 55.16 240 64v176H416C424.8 240 432 247.2 432 256z"></path>
                              </svg>
                           </fa-icon>
                           <div class="text mat-caption text-color-orange">Teslimat Adresi Ekle</div>
                        </button>
                        <!----><!---->
                     </div>
                  </div>
                  <!---->
               </div>
               <div class="checkout-summary-delivery-note-wrapper">
               <fe-line-checkout-summary _nghost-juf-c258="">
                        <div _ngcontent-juf-c258="" class="mobile-only">
                           <fe-line-checkout-summary-mobile _ngcontent-juf-c258="">
                              <div class="checkout-summary-mobile__container">
                                 <div class="checkout-summary-mobile__content ng-star-inserted">
                                    <div class="revenue-container">
                                       <div class="mat-caption-normal">Ödenecek Tutar</div>
                                       <h3 class="revenue">6.038,90 TL</h3>
                                    </div>
                                    <button id="checkout-summary-mobile-confirm-button" feappclickthrottle="" mat-flat-button="" color="primary" class="mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-primary confirm-button mat-mdc-button-base"><span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span><span class="mdc-button__label"> Devam Et </span><span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span></button>
                                 </div>
                                 <!---->
                              </div>
                              <!----><!----><!---->
                           </fe-line-checkout-summary-mobile>
                        </div>
                        <div _ngcontent-juf-c258="" class="desktop-only">
                           <fe-line-checkout-summary-desktop _ngcontent-juf-c258="" _nghost-juf-c256="">
                              <fe-line-checkout-price-summary _ngcontent-juf-c256="" _nghost-juf-c255="">
                                 <mat-card _ngcontent-juf-c255="" class="mat-card mat-focus-indicator container">
                                    <div _ngcontent-juf-c255="" class="summary">
                                       <div _ngcontent-juf-c255="" class="subtitle-1">Sepet Özeti</div>
                                       <div _ngcontent-juf-c255="" class="mat-body-2 text-color-grey text-align-right">2 Ürün</div>
                                       <div _ngcontent-juf-c255="" class="summary-content mat-body-2">
                                          <p _ngcontent-juf-c255="">Toplam Tutar</p>
                                          <p _ngcontent-juf-c255="">6.668,90 TL</p>
                                          <div _ngcontent-juf-c255="" class="delivery-price ng-star-inserted">
                                             <p _ngcontent-juf-c255="">Teslimat Tutarı</p>
                                             <p _ngcontent-juf-c255="" class="price">
                                                <span _ngcontent-juf-c255="" class="text-linethrough">26,99 <span _ngcontent-juf-c255="" class="currency">TL</span></span><!----><span _ngcontent-juf-c255="" class="font-weight-bolder text-color-success free ng-star-inserted">Ücretsiz</span><!----><!---->
                                             </p>
                                          </div>
                                          <!---->
                                          <div _ngcontent-juf-c255="" class="discounts">
                                             <p _ngcontent-juf-c255="" class="ng-star-inserted">Migros İndirimi</p>
                                             <p _ngcontent-juf-c255="" class="ng-star-inserted">-630,00 TL</p>
                                             <!----><!----><!----><!----><!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <div _ngcontent-juf-c255="" class="subtitle-1">Ödenecek Tutar</div>
                                       <div _ngcontent-juf-c255="" class="subtitle-1 text-align-right">6.038,90 TL</div>
                                    </div>
                                    <mat-divider _ngcontent-juf-c255="" role="separator" class="mat-divider mat-divider-horizontal" aria-orientation="horizontal"></mat-divider>
                                    <!---->
                                    
                                    <!---->
                                    <mat-divider _ngcontent-juf-c256="" role="separator" class="mat-divider mat-divider-horizontal" aria-orientation="horizontal"></mat-divider>
                                    <button _ngcontent-juf-c256="" id="checkout-summary-desktop-confirm-button" mat-flat-button="" color="primary" feappclickthrottle="" class="confirm-button mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-primary mat-mdc-button-base"><span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span><span class="mdc-button__label"> Devam Et </span><span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span></button>
                                 </mat-card>
                              </fe-line-checkout-price-summary>
                           </fe-line-checkout-summary-desktop>
                        </div>
                     </fe-line-checkout-summary>
               </div>
            </div>
            <!---->
         </sm-address-selector>
         <!---->
      </article>
   </sm-checkout>
   <!---->
</main>
<div class="cdk-overlay-container elektronik hidden" id="teslimat">
   <div class="cdk-overlay-backdrop cdk-overlay-dark-backdrop cdk-overlay-backdrop-showing"></div>
   <div class="cdk-global-overlay-wrapper" dir="ltr" style="justify-content: center; align-items: center;">
      <div id="cdk-overlay-1" class="cdk-overlay-pane delivery-options-modal__container mobile-modal" style="max-width: 80vw; position: static;">
         <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
         <mat-dialog-container tabindex="-1" class="mat-mdc-dialog-container mdc-dialog cdk-dialog-container mdc-dialog--open" id="modal-component" role="dialog" aria-modal="true" aria-labelledby="mat-mdc-dialog-title-0">
            <div class="mdc-dialog__container">
               <div class="mat-mdc-dialog-surface mdc-dialog__surface">
                  <sm-delivery-options-modal class="ng-star-inserted">
                     <h3 mat-dialog-title="" class="mat-mdc-dialog-title mdc-dialog__title text-align-center" id="mat-mdc-dialog-title-0">Teslimat Adresi Belirle</h3>
                     <mat-dialog-content class="mat-mdc-dialog-content mdc-dialog__content options ng-star-inserted">
                        <!---->
                        <fe-icon-button id="delivery-options-modal-close-button" class="close-button ng-star-inserted" _nghost-haa-c245="">
                           <button _ngcontent-haa-c245="" mat-icon-button="" color="accent" class="mdc-icon-button mat-mdc-icon-button mat-accent mat-mdc-button-base" tabindex="0">
                              <span class="mat-mdc-button-persistent-ripple mdc-icon-button__ripple"></span>
                              <fa-icon _ngcontent-haa-c245="" class="ng-fa-icon button-icon">
                                 <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="xmark" class="svg-inline--fa fa-xmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path fill="currentColor" d="M312.1 375c9.369 9.369 9.369 24.57 0 33.94s-24.57 9.369-33.94 0L160 289.9l-119 119c-9.369 9.369-24.57 9.369-33.94 0s-9.369-24.57 0-33.94L126.1 256L7.027 136.1c-9.369-9.369-9.369-24.57 0-33.94s24.57-9.369 33.94 0L160 222.1l119-119c9.369-9.369 24.57-9.369 33.94 0s9.369 24.57 0 33.94L193.9 256L312.1 375z"></path>
                                 </svg>
                              </fa-icon>
                              <span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span>
                           </button>
                        </fe-icon-button>
                        <!----><!----><!----><!----><!---->
                     </mat-dialog-content>
                     <!----><!---->
                     <mat-dialog-content class="mat-mdc-dialog-content mdc-dialog__content map ng-star-inserted">
                        <sm-location-map-modal>
                           <fe-icon-button class="close-button ng-star-inserted" _nghost-haa-c245="">
                              <button _ngcontent-haa-c245="" mat-icon-button="" color="accent" class="mdc-icon-button mat-mdc-icon-button mat-accent mat-mdc-button-base">
                                 <span class="mat-mdc-button-persistent-ripple mdc-icon-button__ripple"></span>
                                 <fa-icon _ngcontent-haa-c245="" class="ng-fa-icon button-icon">
                                    <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="xmark" class="svg-inline--fa fa-xmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                       <path fill="currentColor" d="M312.1 375c9.369 9.369 9.369 24.57 0 33.94s-24.57 9.369-33.94 0L160 289.9l-119 119c-9.369 9.369-24.57 9.369-33.94 0s-9.369-24.57 0-33.94L126.1 256L7.027 136.1c-9.369-9.369-9.369-24.57 0-33.94s24.57-9.369 33.94 0L160 222.1l119-119c9.369-9.369 24.57-9.369 33.94 0s9.369 24.57 0 33.94L193.9 256L312.1 375z"></path>
                                    </svg>
                                 </fa-icon>
                                 <span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span>
                              </button>
                           </fe-icon-button>
                           <!----><!----><!---->
                           <div class="ng-star-inserted">
                              <sm-location-map-form _nghost-haa-c294="">
                                 <form _ngcontent-haa-c294="" novalidate="" feappsubmitthrottle="" class="delivery-zone-form ng-untouched ng-pristine ng-invalid" method="POST" action="javascript:;">
                                    <mat-form-field _ngcontent-haa-c294="" appearance="outline" class="mat-mdc-form-field ng-tns-c188-6 mat-mdc-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-hide-placeholder mat-primary ng-untouched ng-pristine ng-invalid ng-star-inserted">
                                       <!---->
                                       <div class="mat-mdc-text-field-wrapper mdc-text-field ng-tns-c188-6 mdc-text-field--outlined">
                                          <!---->
                                          <div class="mat-mdc-form-field-flex ng-tns-c188-6">
                                             <div matformfieldnotchedoutline="" class="mdc-notched-outline ng-tns-c188-6 mdc-notched-outline--upgraded ng-star-inserted">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                   <label matformfieldfloatinglabel="" class="mdc-floating-label mat-mdc-floating-label ng-tns-c188-6 ng-star-inserted" id="mat-mdc-form-field-label-0" for="location-name" aria-owns="location-name" style="">
                                                      <mat-label _ngcontent-haa-c294="" class="ng-tns-c188-6">Adres İsmi, Örn: Ev</mat-label>
                                                      <span aria-hidden="true" class="mat-mdc-form-field-required-marker mdc-floating-label--required ng-tns-c188-6 ng-star-inserted"></span><!---->
                                                   </label>
                                                   <!----><!----><!---->
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                             </div>
                                             <!----><!----><!---->
                                             <div class="mat-mdc-form-field-infix ng-tns-c188-6">
                                                <!----><input name="adres_ismi" _ngcontent-haa-c294="" id="location-name" fefontfamilycheck="" matinput="" required="" type="text" formcontrolname="name" class="mat-mdc-input-element ng-tns-c188-6 mat-mdc-form-field-input-control mdc-text-field__input ng-untouched ng-pristine ng-invalid cdk-text-field-autofill-monitored" aria-required="true">
                                             </div>
                                             <!----><!---->
                                          </div>
                                          <!---->
                                       </div>
                                       <div class="mat-mdc-form-field-subscript-wrapper mat-mdc-form-field-bottom-align ng-tns-c188-6">
                                          <!---->
                                          <div class="mat-mdc-form-field-hint-wrapper ng-tns-c188-6 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                             <!---->
                                             <div class="mat-mdc-form-field-hint-spacer ng-tns-c188-6"></div>
                                          </div>
                                          <!---->
                                       </div>
                                    </mat-form-field>
                                    <div _ngcontent-haa-c294="" class="address-row">
                                       <mat-form-field _ngcontent-haa-c294="" appearance="outline" class="mat-mdc-form-field ng-tns-c188-7 mat-mdc-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-hide-placeholder mat-primary ng-untouched ng-pristine ng-invalid ng-star-inserted">
                                          <!---->
                                          <div class="mat-mdc-text-field-wrapper mdc-text-field ng-tns-c188-7 mdc-text-field--outlined">
                                             <!---->
                                             <div class="mat-mdc-form-field-flex ng-tns-c188-9">
                                                <div matformfieldnotchedoutline="" class="mdc-notched-outline ng-tns-c188-9 mdc-notched-outline--notched mdc-notched-outline--upgraded ng-star-inserted">
                                                   <div class="mdc-notched-outline__leading"></div>
                                                   <div class="mdc-notched-outline__notch" style="width: calc(65px * var(--mat-mdc-form-field-floating-label-scale, 0.75) + 9px);">
                                                      <label matformfieldfloatinglabel="" class="mdc-floating-label mat-mdc-floating-label ng-tns-c188-9 mdc-floating-label--float-above ng-star-inserted" id="mat-mdc-form-field-label-6" for="phone-number" aria-owns="phone-number" style="">
                                                         <mat-label _ngcontent-haa-c294="" class="ng-tns-c188-9">Ad</mat-label>
                                                         <span aria-hidden="true" class="mat-mdc-form-field-required-marker mdc-floating-label--required ng-tns-c188-9 ng-star-inserted"></span><!---->
                                                      </label>
                                                      <!----><!----><!---->
                                                   </div>
                                                   <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                                <!----><!----><!---->
                                                <div class="mat-mdc-form-field-infix ng-tns-c188-9">
                                                   <!----><input name="adi" _ngcontent-haa-c294="" id="phone-number" matinput="" fefontfamilycheck="" required="" type="text" formcontrolname="phoneNumber" class="mat-mdc-input-element ng-tns-c188-9 mat-mdc-form-field-input-control mdc-text-field__input ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored" aria-invalid="false" aria-required="true">
                                                </div>
                                                <!----><!---->
                                             </div>
                                             <!---->
                                          </div>
                                          <div class="mat-mdc-form-field-subscript-wrapper mat-mdc-form-field-bottom-align ng-tns-c188-7">
                                             <!---->
                                             <div class="mat-mdc-form-field-hint-wrapper ng-tns-c188-7 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                                <!---->
                                                <div class="mat-mdc-form-field-hint-spacer ng-tns-c188-7"></div>
                                             </div>
                                             <!---->
                                          </div>
                                       </mat-form-field>
                                       <mat-form-field _ngcontent-haa-c294="" appearance="outline" class="mat-mdc-form-field ng-tns-c188-8 mat-mdc-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-hide-placeholder mat-primary ng-untouched ng-pristine ng-invalid ng-star-inserted">
                                          <!---->
                                          <div class="mat-mdc-text-field-wrapper mdc-text-field ng-tns-c188-8 mdc-text-field--outlined">
                                             <!---->
                                             <div class="mat-mdc-form-field-flex ng-tns-c188-9">
                                                <div matformfieldnotchedoutline="" class="mdc-notched-outline ng-tns-c188-9 mdc-notched-outline--notched mdc-notched-outline--upgraded ng-star-inserted">
                                                   <div class="mdc-notched-outline__leading"></div>
                                                   <div class="mdc-notched-outline__notch" style="width: calc(65px * var(--mat-mdc-form-field-floating-label-scale, 0.75) + 9px);">
                                                      <label matformfieldfloatinglabel="" class="mdc-floating-label mat-mdc-floating-label ng-tns-c188-9 mdc-floating-label--float-above ng-star-inserted" id="mat-mdc-form-field-label-6" for="phone-number" aria-owns="phone-number" style="">
                                                         <mat-label _ngcontent-haa-c294="" class="ng-tns-c188-9">Soyad</mat-label>
                                                         <span aria-hidden="true" class="mat-mdc-form-field-required-marker mdc-floating-label--required ng-tns-c188-9 ng-star-inserted"></span><!---->
                                                      </label>
                                                      <!----><!----><!---->
                                                   </div>
                                                   <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                                <!----><!----><!---->
                                                <div class="mat-mdc-form-field-infix ng-tns-c188-9">
                                                   <!----><input name="soyadi" _ngcontent-haa-c294="" id="phone-number" matinput="" fefontfamilycheck="" required="" type="text" formcontrolname="phoneNumber" class="mat-mdc-input-element ng-tns-c188-9 mat-mdc-form-field-input-control mdc-text-field__input ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored" aria-invalid="false" aria-required="true">
                                                </div>
                                                <!----><!---->
                                             </div>
                                             <!---->
                                          </div>
                                          <div class="mat-mdc-form-field-subscript-wrapper mat-mdc-form-field-bottom-align ng-tns-c188-8">
                                             <!---->
                                             <div class="mat-mdc-form-field-hint-wrapper ng-tns-c188-8 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                                <!---->
                                                <div class="mat-mdc-form-field-hint-spacer ng-tns-c188-8"></div>
                                             </div>
                                             <!---->
                                          </div>
                                       </mat-form-field>
                                    </div>
                                    <div _ngcontent-haa-c294="" class="info-box">
                                       <img _ngcontent-haa-c294="" src="/assets/images/solid-map-marker-smile.svg" alt="" class="tikla-gel-al-logo">
                                       <div _ngcontent-haa-c294="" class="info-title mat-caption"> İl,İlçe,Mahalle Seçimleriniz Sepetten Önce Seçmiş Olduğunuz Verilerle Eşleştirilmiştir, Değiştirilemez (Değiştirmek İçin Anasayfaya Giderek Yeni Bir Teslimat Yöntemi Belirleyiniz.) <a href="/" style="color: green;">ANASAYFAYA GİT.</a> </div>
                                    </div>
                                    <div _ngcontent-haa-c294="" class="address-row">
                                       <mat-form-field _ngcontent-haa-c294="" appearance="outline" class="mat-mdc-form-field ng-tns-c188-9 mat-mdc-form-field-type-mat-input mat-form-field-appearance-outline mat-primary ng-untouched ng-pristine ng-valid ng-star-inserted">
                                          <!---->
                                          <div class="mat-mdc-text-field-wrapper mdc-text-field ng-tns-c188-9 mdc-text-field--outlined">
                                             <!---->
                                             <div class="mat-mdc-form-field-flex ng-tns-c188-9">
                                                <div matformfieldnotchedoutline="" class="mdc-notched-outline ng-tns-c188-9 mdc-notched-outline--notched mdc-notched-outline--upgraded ng-star-inserted">
                                                   <div class="mdc-notched-outline__leading"></div>
                                                   <div class="mdc-notched-outline__notch" style="width: calc(65px * var(--mat-mdc-form-field-floating-label-scale, 0.75) + 9px);">
                                                      <label matformfieldfloatinglabel="" class="mdc-floating-label mat-mdc-floating-label ng-tns-c188-9 mdc-floating-label--float-above ng-star-inserted" id="mat-mdc-form-field-label-6" for="phone-number" aria-owns="phone-number" style="">
                                                         <mat-label _ngcontent-haa-c294="" class="ng-tns-c188-9">Gsm No</mat-label>
                                                         <span aria-hidden="true" class="mat-mdc-form-field-required-marker mdc-floating-label--required ng-tns-c188-9 ng-star-inserted"></span><!---->
                                                      </label>
                                                      <!----><!----><!---->
                                                   </div>
                                                   <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                                <!----><!----><!---->
                                                <div class="mat-mdc-form-field-infix ng-tns-c188-9">
                                                   <!----><input name="phone" value="<?=$_SESSION["telefon"]?>" _ngcontent-haa-c294="" id="phone-number" matinput="" fefontfamilycheck="" required="" type="text" formcontrolname="phoneNumber" class="mat-mdc-input-element ng-tns-c188-9 mat-mdc-form-field-input-control mdc-text-field__input ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored" aria-invalid="false" aria-required="true">
                                                </div>
                                                <!----><!---->
                                             </div>
                                             <!---->
                                          </div>
                                          <div class="mat-mdc-form-field-subscript-wrapper mat-mdc-form-field-bottom-align ng-tns-c188-9">
                                             <!---->
                                             <div class="mat-mdc-form-field-hint-wrapper ng-tns-c188-9 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                                <!---->
                                                <div class="mat-mdc-form-field-hint-spacer ng-tns-c188-9"></div>
                                             </div>
                                             <!---->
                                          </div>
                                       </mat-form-field>
                                       <mat-form-field _ngcontent-haa-c294="" color="accent" appearance="outline" floatlabel="always" class="mat-mdc-form-field address-form--city row-items ng-tns-c188-10 mat-mdc-form-field-type-mat-native-select mat-mdc-form-field-label-always-float mat-form-field-disabled mat-form-field-appearance-outline mat-accent ng-untouched ng-pristine ng-star-inserted">
                                          <!---->
                                          <div class="mat-mdc-text-field-wrapper mdc-text-field ng-tns-c188-10 mdc-text-field--outlined mdc-text-field--disabled">
                                             <!---->
                                             <div class="mat-mdc-form-field-flex ng-tns-c188-10">
                                                <div matformfieldnotchedoutline="" class="mdc-notched-outline ng-tns-c188-10 mdc-notched-outline--notched mdc-notched-outline--upgraded ng-star-inserted">
                                                   <div class="mdc-notched-outline__leading"></div>
                                                   <div class="mdc-notched-outline__notch" style="width: calc(16px * var(--mat-mdc-form-field-floating-label-scale, 0.75) + 9px);">
                                                      <label matformfieldfloatinglabel="" class="mdc-floating-label mat-mdc-floating-label ng-tns-c188-10 mdc-floating-label--float-above ng-star-inserted" id="mat-mdc-form-field-label-8" for="add-delivery-address-modal-city" aria-owns="add-delivery-address-modal-city" style="">
                                                         <mat-label _ngcontent-haa-c294="" class="ng-tns-c188-10">İl</mat-label>
                                                         <span aria-hidden="true" class="mat-mdc-form-field-required-marker mdc-floating-label--required ng-tns-c188-10 ng-star-inserted"></span><!---->
                                                      </label>
                                                      <!----><!----><!---->
                                                   </div>
                                                   <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                                <!----><!----><!---->
                                                <div class="mat-mdc-form-field-infix ng-tns-c188-10">
                                                   <!---->
                                                   <select name="sehir" _ngcontent-haa-c294="" required="" id="add-delivery-address-modal-city" matnativecontrol="" formcontrolname="cityId" autocomplete="shipping street-address" disabled class="mat-mdc-input-element ng-tns-c188-10 mat-mdc-form-field-input-control mdc-text-field__input ng-untouched ng-pristine cdk-text-field-autofill-monitored" aria-required="true" aria-invalid="false">
                                                      <option _ngcontent-haa-c294="" value="<?=$_SESSION['sehir']?>" class="ng-star-inserted"><?=$_SESSION['sehir']?></option>
                                                      <option _ngcontent-haa-c294="" value="34" class="ng-star-inserted">İstanbul</option>
                                                      <option _ngcontent-haa-c294="" value="6" class="ng-star-inserted">Ankara</option>
                                                      <option _ngcontent-haa-c294="" value="35" class="ng-star-inserted">İzmir</option>
                                                      <option _ngcontent-haa-c294="" value="1" class="ng-star-inserted">Adana</option>
                                                      <option _ngcontent-haa-c294="" value="3" class="ng-star-inserted">Afyonkarahisar</option>
                                                      <option _ngcontent-haa-c294="" value="4" class="ng-star-inserted">Ağrı</option>
                                                      <option _ngcontent-haa-c294="" value="68" class="ng-star-inserted">Aksaray</option>
                                                      <option _ngcontent-haa-c294="" value="5" class="ng-star-inserted">Amasya</option>
                                                      <option _ngcontent-haa-c294="" value="7" class="ng-star-inserted">Antalya</option>
                                                      <option _ngcontent-haa-c294="" value="75" class="ng-star-inserted">Ardahan</option>
                                                      <option _ngcontent-haa-c294="" value="8" class="ng-star-inserted">Artvin</option>
                                                      <option _ngcontent-haa-c294="" value="9" class="ng-star-inserted">Aydın</option>
                                                      <option _ngcontent-haa-c294="" value="10" class="ng-star-inserted">Balıkesir</option>
                                                      <option _ngcontent-haa-c294="" value="74" class="ng-star-inserted">Bartın</option>
                                                      <option _ngcontent-haa-c294="" value="72" class="ng-star-inserted">Batman</option>
                                                      <option _ngcontent-haa-c294="" value="69" class="ng-star-inserted">Bayburt</option>
                                                      <option _ngcontent-haa-c294="" value="11" class="ng-star-inserted">Bilecik</option>
                                                      <option _ngcontent-haa-c294="" value="12" class="ng-star-inserted">Bingöl</option>
                                                      <option _ngcontent-haa-c294="" value="13" class="ng-star-inserted">Bitlis</option>
                                                      <option _ngcontent-haa-c294="" value="14" class="ng-star-inserted">Bolu</option>
                                                      <option _ngcontent-haa-c294="" value="15" class="ng-star-inserted">Burdur</option>
                                                      <option _ngcontent-haa-c294="" value="16" class="ng-star-inserted">Bursa</option>
                                                      <option _ngcontent-haa-c294="" value="17" class="ng-star-inserted">Çanakkale</option>
                                                      <option _ngcontent-haa-c294="" value="18" class="ng-star-inserted">Çankırı</option>
                                                      <option _ngcontent-haa-c294="" value="19" class="ng-star-inserted">Çorum</option>
                                                      <option _ngcontent-haa-c294="" value="20" class="ng-star-inserted">Denizli</option>
                                                      <option _ngcontent-haa-c294="" value="21" class="ng-star-inserted">Diyarbakır</option>
                                                      <option _ngcontent-haa-c294="" value="81" class="ng-star-inserted">Düzce</option>
                                                      <option _ngcontent-haa-c294="" value="22" class="ng-star-inserted">Edirne</option>
                                                      <option _ngcontent-haa-c294="" value="23" class="ng-star-inserted">Elazığ</option>
                                                      <option _ngcontent-haa-c294="" value="24" class="ng-star-inserted">Erzincan</option>
                                                      <option _ngcontent-haa-c294="" value="25" class="ng-star-inserted">Erzurum</option>
                                                      <option _ngcontent-haa-c294="" value="26" class="ng-star-inserted">Eskişehir</option>
                                                      <option _ngcontent-haa-c294="" value="27" class="ng-star-inserted">Gaziantep</option>
                                                      <option _ngcontent-haa-c294="" value="28" class="ng-star-inserted">Giresun</option>
                                                      <option _ngcontent-haa-c294="" value="29" class="ng-star-inserted">Gümüşhane</option>
                                                      <option _ngcontent-haa-c294="" value="30" class="ng-star-inserted">Hakkari</option>
                                                      <option _ngcontent-haa-c294="" value="76" class="ng-star-inserted">Iğdır</option>
                                                      <option _ngcontent-haa-c294="" value="32" class="ng-star-inserted">Isparta</option>
                                                      <option _ngcontent-haa-c294="" value="46" class="ng-star-inserted">Kahramanmaraş</option>
                                                      <option _ngcontent-haa-c294="" value="78" class="ng-star-inserted">Karabük</option>
                                                      <option _ngcontent-haa-c294="" value="70" class="ng-star-inserted">Karaman</option>
                                                      <option _ngcontent-haa-c294="" value="36" class="ng-star-inserted">Kars</option>
                                                      <option _ngcontent-haa-c294="" value="37" class="ng-star-inserted">Kastamonu</option>
                                                      <option _ngcontent-haa-c294="" value="38" class="ng-star-inserted">Kayseri</option>
                                                      <option _ngcontent-haa-c294="" value="79" class="ng-star-inserted">Kilis</option>
                                                      <option _ngcontent-haa-c294="" value="41" class="ng-star-inserted">Kocaeli</option>
                                                      <option _ngcontent-haa-c294="" value="42" class="ng-star-inserted">Konya</option>
                                                      <option _ngcontent-haa-c294="" value="43" class="ng-star-inserted">Kütahya</option>
                                                      <option _ngcontent-haa-c294="" value="39" class="ng-star-inserted">Kırklareli</option>
                                                      <option _ngcontent-haa-c294="" value="40" class="ng-star-inserted">Kırşehir</option>
                                                      <option _ngcontent-haa-c294="" value="71" class="ng-star-inserted">Kırıkkale</option>
                                                      <option _ngcontent-haa-c294="" value="44" class="ng-star-inserted">Malatya</option>
                                                      <option _ngcontent-haa-c294="" value="45" class="ng-star-inserted">Manisa</option>
                                                      <option _ngcontent-haa-c294="" value="47" class="ng-star-inserted">Mardin</option>
                                                      <option _ngcontent-haa-c294="" value="33" class="ng-star-inserted">Mersin</option>
                                                      <option _ngcontent-haa-c294="" value="48" class="ng-star-inserted">Muğla</option>
                                                      <option _ngcontent-haa-c294="" value="49" class="ng-star-inserted">Muş</option>
                                                      <option _ngcontent-haa-c294="" value="50" class="ng-star-inserted">Nevşehir</option>
                                                      <option _ngcontent-haa-c294="" value="51" class="ng-star-inserted">Niğde</option>
                                                      <option _ngcontent-haa-c294="" value="52" class="ng-star-inserted">Ordu</option>
                                                      <option _ngcontent-haa-c294="" value="80" class="ng-star-inserted">Osmaniye</option>
                                                      <option _ngcontent-haa-c294="" value="53" class="ng-star-inserted">Rize</option>
                                                      <option _ngcontent-haa-c294="" value="54" class="ng-star-inserted">Sakarya</option>
                                                      <option _ngcontent-haa-c294="" value="55" class="ng-star-inserted">Samsun</option>
                                                      <option _ngcontent-haa-c294="" value="63" class="ng-star-inserted">Şanlıurfa</option>
                                                      <option _ngcontent-haa-c294="" value="56" class="ng-star-inserted">Siirt</option>
                                                      <option _ngcontent-haa-c294="" value="57" class="ng-star-inserted">Sinop</option>
                                                      <option _ngcontent-haa-c294="" value="58" class="ng-star-inserted">Sivas</option>
                                                      <option _ngcontent-haa-c294="" value="73" class="ng-star-inserted">Şırnak</option>
                                                      <option _ngcontent-haa-c294="" value="59" class="ng-star-inserted">Tekirdağ</option>
                                                      <option _ngcontent-haa-c294="" value="60" class="ng-star-inserted">Tokat</option>
                                                      <option _ngcontent-haa-c294="" value="61" class="ng-star-inserted">Trabzon</option>
                                                      <option _ngcontent-haa-c294="" value="62" class="ng-star-inserted">Tunceli</option>
                                                      <option _ngcontent-haa-c294="" value="64" class="ng-star-inserted">Uşak</option>
                                                      <option _ngcontent-haa-c294="" value="65" class="ng-star-inserted">Van</option>
                                                      <option _ngcontent-haa-c294="" value="77" class="ng-star-inserted">Yalova</option>
                                                      <option _ngcontent-haa-c294="" value="66" class="ng-star-inserted">Yozgat</option>
                                                      <option _ngcontent-haa-c294="" value="67" class="ng-star-inserted">Zonguldak</option>
                                                      <!----><!----><!---->
                                                   </select>
                                                </div>
                                                <!----><!---->
                                             </div>
                                             <!---->
                                          </div>
                                          <div class="mat-mdc-form-field-subscript-wrapper mat-mdc-form-field-bottom-align ng-tns-c188-10">
                                             <!---->
                                             <div class="mat-mdc-form-field-hint-wrapper ng-tns-c188-10 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                                <!---->
                                                <div class="mat-mdc-form-field-hint-spacer ng-tns-c188-10"></div>
                                             </div>
                                             <!---->
                                          </div>
                                       </mat-form-field>
                                    </div>
                                    <div _ngcontent-haa-c294="" class="address-row">
                                       <mat-form-field _ngcontent-haa-c294="" color="accent" appearance="outline" floatlabel="always" class="mat-mdc-form-field address-form--town row-items ng-tns-c188-11 mat-mdc-form-field-type-mat-native-select mat-mdc-form-field-label-always-float mat-form-field-appearance-outline mat-accent ng-untouched ng-pristine ng-star-inserted ng-valid">
                                          <!---->
                                          <div class="mat-mdc-text-field-wrapper mdc-text-field ng-tns-c188-11 mdc-text-field--outlined">
                                             <!---->
                                             <div class="mat-mdc-form-field-flex ng-tns-c188-11">
                                                <div matformfieldnotchedoutline="" class="mdc-notched-outline ng-tns-c188-11 mdc-notched-outline--notched mdc-notched-outline--upgraded ng-star-inserted">
                                                   <div class="mdc-notched-outline__leading"></div>
                                                   <div class="mdc-notched-outline__notch" style="width: calc(33px * var(--mat-mdc-form-field-floating-label-scale, 0.75) + 9px);">
                                                      <label matformfieldfloatinglabel="" class="mdc-floating-label mat-mdc-floating-label ng-tns-c188-11 mdc-floating-label--float-above ng-star-inserted" id="mat-mdc-form-field-label-10" for="add-delivery-address-modal-town" aria-owns="add-delivery-address-modal-town" style="">
                                                         <mat-label _ngcontent-haa-c294="" class="ng-tns-c188-11">İlçe</mat-label>
                                                         <span aria-hidden="true" class="mat-mdc-form-field-required-marker mdc-floating-label--required ng-tns-c188-11 ng-star-inserted"></span><!---->
                                                      </label>
                                                      <!----><!----><!---->
                                                   </div>
                                                   <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                                <!----><!----><!---->
                                                <div class="mat-mdc-form-field-infix ng-tns-c188-11">
                                                   <!---->
                                                   <select name="ilce" _ngcontent-haa-c294="" required="" id="add-delivery-address-modal-town" matnativecontrol="" disabled formcontrolname="townId" autocomplete="shipping street-address" class="mat-mdc-input-element ng-tns-c188-11 mat-mdc-form-field-input-control mdc-text-field__input ng-untouched ng-pristine cdk-text-field-autofill-monitored ng-valid" aria-required="true" aria-invalid="false">
                                                      <option _ngcontent-haa-c294=""  value="<?=$_SESSION['ilce']?>" class="ng-star-inserted"><?=$_SESSION['ilce']?></option>
                                                      <option _ngcontent-haa-c294="" value="34001" class="ng-star-inserted">Adalar</option>
                                                      <option _ngcontent-haa-c294="" value="34032" class="ng-star-inserted">Arnavutköy</option>
                                                      <option _ngcontent-haa-c294="" value="34033" class="ng-star-inserted">Ataşehir</option>
                                                      <option _ngcontent-haa-c294="" value="34024" class="ng-star-inserted">Avcılar</option>
                                                      <option _ngcontent-haa-c294="" value="34025" class="ng-star-inserted">Bağcılar</option>
                                                      <option _ngcontent-haa-c294="" value="34026" class="ng-star-inserted">Bahçelievler</option>
                                                      <option _ngcontent-haa-c294="" value="34002" class="ng-star-inserted">Bakırköy</option>
                                                      <option _ngcontent-haa-c294="" value="34034" class="ng-star-inserted">Başakşehir</option>
                                                      <option _ngcontent-haa-c294="" value="34023" class="ng-star-inserted">Bayrampaşa</option>
                                                      <option _ngcontent-haa-c294="" value="34003" class="ng-star-inserted">Beşiktaş</option>
                                                      <option _ngcontent-haa-c294="" value="34004" class="ng-star-inserted">Beykoz</option>
                                                      <option _ngcontent-haa-c294="" value="34035" class="ng-star-inserted">Beylikdüzü</option>
                                                      <option _ngcontent-haa-c294="" value="34005" class="ng-star-inserted">Beyoğlu</option>
                                                      <option _ngcontent-haa-c294="" value="34018" class="ng-star-inserted">Büyükçekmece</option>
                                                      <option _ngcontent-haa-c294="" value="34006" class="ng-star-inserted">Çatalca</option>
                                                      <option _ngcontent-haa-c294="" value="34036" class="ng-star-inserted">Çekmeköy</option>
                                                      <option _ngcontent-haa-c294="" value="34031" class="ng-star-inserted">Esenler</option>
                                                      <option _ngcontent-haa-c294="" value="34037" class="ng-star-inserted">Esenyurt</option>
                                                      <option _ngcontent-haa-c294="" value="34007" class="ng-star-inserted">Eyüpsultan</option>
                                                      <option _ngcontent-haa-c294="" value="34008" class="ng-star-inserted">Fatih</option>
                                                      <option _ngcontent-haa-c294="" value="34009" class="ng-star-inserted">Gaziosmanpaşa</option>
                                                      <option _ngcontent-haa-c294="" value="34027" class="ng-star-inserted">Güngören</option>
                                                      <option _ngcontent-haa-c294="" value="34010" class="ng-star-inserted">Kadıköy</option>
                                                      <option _ngcontent-haa-c294="" value="34019" class="ng-star-inserted">Kağıthane</option>
                                                      <option _ngcontent-haa-c294="" value="34011" class="ng-star-inserted">Kartal</option>
                                                      <option _ngcontent-haa-c294="" value="34020" class="ng-star-inserted">Küçükçekmece</option>
                                                      <option _ngcontent-haa-c294="" value="34028" class="ng-star-inserted">Maltepe</option>
                                                      <option _ngcontent-haa-c294="" value="34021" class="ng-star-inserted">Pendik</option>
                                                      <option _ngcontent-haa-c294="" value="34038" class="ng-star-inserted">Sancaktepe</option>
                                                      <option _ngcontent-haa-c294="" value="34012" class="ng-star-inserted">Sarıyer</option>
                                                      <option _ngcontent-haa-c294="" value="34013" class="ng-star-inserted">Silivri</option>
                                                      <option _ngcontent-haa-c294="" value="34029" class="ng-star-inserted">Sultanbeyli</option>
                                                      <option _ngcontent-haa-c294="" value="34039" class="ng-star-inserted">Sultangazi</option>
                                                      <option _ngcontent-haa-c294="" value="34014" class="ng-star-inserted">Şile</option>
                                                      <option _ngcontent-haa-c294="" value="34015" class="ng-star-inserted">Şişli</option>
                                                      <option _ngcontent-haa-c294="" value="34030" class="ng-star-inserted">Tuzla</option>
                                                      <option _ngcontent-haa-c294="" value="34022" class="ng-star-inserted">Ümraniye</option>
                                                      <option _ngcontent-haa-c294="" value="34016" class="ng-star-inserted">Üsküdar</option>
                                                      <option _ngcontent-haa-c294="" value="34017" class="ng-star-inserted">Zeytinburnu</option>
                                                      <!----><!----><!---->
                                                   </select>
                                                </div>
                                                <!----><!---->
                                             </div>
                                             <!---->
                                          </div>
                                          <div class="mat-mdc-form-field-subscript-wrapper mat-mdc-form-field-bottom-align ng-tns-c188-11">
                                             <!---->
                                             <div class="mat-mdc-form-field-hint-wrapper ng-tns-c188-11 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                                <!---->
                                                <div class="mat-mdc-form-field-hint-spacer ng-tns-c188-11"></div>
                                             </div>
                                             <!---->
                                          </div>
                                       </mat-form-field>
                                       <mat-form-field _ngcontent-haa-c294="" color="accent" appearance="outline" floatlabel="always" class="mat-mdc-form-field address-form--district row-items ng-tns-c188-12 mat-mdc-form-field-type-mat-native-select mat-mdc-form-field-label-always-float mat-form-field-appearance-outline mat-accent ng-untouched ng-pristine ng-invalid ng-star-inserted">
                                          <!---->
                                          <div class="mat-mdc-text-field-wrapper mdc-text-field ng-tns-c188-12 mdc-text-field--outlined">
                                             <!---->
                                             <div class="mat-mdc-form-field-flex ng-tns-c188-12">
                                                <div matformfieldnotchedoutline="" class="mdc-notched-outline ng-tns-c188-12 mdc-notched-outline--notched mdc-notched-outline--upgraded ng-star-inserted">
                                                   <div class="mdc-notched-outline__leading"></div>
                                                   <div class="mdc-notched-outline__notch" style="width: calc(63px * var(--mat-mdc-form-field-floating-label-scale, 0.75) + 9px);">
                                                      <label matformfieldfloatinglabel="" class="mdc-floating-label mat-mdc-floating-label ng-tns-c188-12 mdc-floating-label--float-above ng-star-inserted" id="mat-mdc-form-field-label-12" for="add-delivery-address-modal-district" aria-owns="add-delivery-address-modal-district" style="">
                                                         <mat-label _ngcontent-haa-c294="" class="ng-tns-c188-12">Mahalle</mat-label>
                                                         <span aria-hidden="true" class="mat-mdc-form-field-required-marker mdc-floating-label--required ng-tns-c188-12 ng-star-inserted"></span><!---->
                                                      </label>
                                                      <!----><!----><!---->
                                                   </div>
                                                   <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                                <!----><!----><!---->
                                                <div class="mat-mdc-form-field-infix ng-tns-c188-12">
                                                   <!---->
                                                   <select name="mahalle" disabled _ngcontent-haa-c294="" required="" id="add-delivery-address-modal-district" matnativecontrol="" formcontrolname="districtId" autocomplete="shipping street-address" class="mat-mdc-input-element ng-tns-c188-12 mat-mdc-form-field-input-control mdc-text-field__input ng-untouched ng-pristine ng-invalid cdk-text-field-autofill-monitored" aria-required="true">
                                                      <option _ngcontent-haa-c294="" value="<?=$_SESSION['mahalle']?>" class="ng-star-inserted"><?=$_SESSION['mahalle']?></option>
                                                      <option _ngcontent-haa-c294="" value="34016001" class="ng-star-inserted">Acıbadem Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016002" class="ng-star-inserted">Ahmediye Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016003" class="ng-star-inserted">Altunizade Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016004" class="ng-star-inserted">Aziz Mahmut Hüdayi Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016005" class="ng-star-inserted">Bahçelievler Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016006" class="ng-star-inserted">Barbaros Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016007" class="ng-star-inserted">Beylerbeyi Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016008" class="ng-star-inserted">Bulgurlu Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016009" class="ng-star-inserted">Burhaniye Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016011" class="ng-star-inserted">Cumhuriyet Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016010" class="ng-star-inserted">Çengelköy Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016012" class="ng-star-inserted">Ferah Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016013" class="ng-star-inserted">Güzeltepe Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016014" class="ng-star-inserted">İcadiye Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016015" class="ng-star-inserted">Kandilli Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016017" class="ng-star-inserted">Kısıklı Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016016" class="ng-star-inserted">Kirazlıtepe Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016020" class="ng-star-inserted">Kuleli Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016022" class="ng-star-inserted">Kuzguncuk Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016018" class="ng-star-inserted">Küçük Çamlıca Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016019" class="ng-star-inserted">Küçüksu Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016021" class="ng-star-inserted">Küplüce Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016023" class="ng-star-inserted">Mehmet Akif Ersoy Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016024" class="ng-star-inserted">Mimar Sinan Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016025" class="ng-star-inserted">Muratreis Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016026" class="ng-star-inserted">Salacak Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016027" class="ng-star-inserted">Selami Ali Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016028" class="ng-star-inserted">Selimiye Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016029" class="ng-star-inserted">Sultantepe Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016030" class="ng-star-inserted">Ünalan Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016031" class="ng-star-inserted">Valide-İ Atik Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016032" class="ng-star-inserted">Yavuztürk Mh.</option>
                                                      <option _ngcontent-haa-c294="" value="34016033" class="ng-star-inserted">Zeynep Kamil Mh.</option>
                                                      <!----><!----><!---->
                                                   </select>
                                                </div>
                                                <!----><!---->
                                             </div>
                                             <!---->
                                          </div>
                                          <div class="mat-mdc-form-field-subscript-wrapper mat-mdc-form-field-bottom-align ng-tns-c188-12">
                                             <!---->
                                             <div class="mat-mdc-form-field-hint-wrapper ng-tns-c188-12 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                                <!---->
                                                <div class="mat-mdc-form-field-hint-spacer ng-tns-c188-12"></div>
                                             </div>
                                             <!---->
                                          </div>
                                       </mat-form-field>
                                    </div>
                                    <div _ngcontent-haa-c294="" class="building-numbers">
                                       <mat-form-field _ngcontent-haa-c294="" appearance="outline" class="mat-mdc-form-field ng-tns-c188-13 mat-mdc-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-hide-placeholder mat-primary ng-untouched ng-pristine ng-invalid ng-star-inserted">
                                          <!---->
                                          <div class="mat-mdc-text-field-wrapper mdc-text-field ng-tns-c188-13 mdc-text-field--outlined">
                                             <!---->
                                             <div class="mat-mdc-form-field-flex ng-tns-c188-9">
                                                <div matformfieldnotchedoutline="" class="mdc-notched-outline ng-tns-c188-9 mdc-notched-outline--notched mdc-notched-outline--upgraded ng-star-inserted">
                                                   <div class="mdc-notched-outline__leading"></div>
                                                   <div class="mdc-notched-outline__notch" style="width: calc(65px * var(--mat-mdc-form-field-floating-label-scale, 0.75) + 9px);">
                                                      <label matformfieldfloatinglabel="" class="mdc-floating-label mat-mdc-floating-label ng-tns-c188-9 mdc-floating-label--float-above ng-star-inserted" id="mat-mdc-form-field-label-6" for="phone-number" aria-owns="phone-number" style="">
                                                         <mat-label _ngcontent-haa-c294="" class="ng-tns-c188-9">Bina No</mat-label>
                                                         <span aria-hidden="true" class="mat-mdc-form-field-required-marker mdc-floating-label--required ng-tns-c188-9 ng-star-inserted"></span><!---->
                                                      </label>
                                                      <!----><!----><!---->
                                                   </div>
                                                   <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                                <!----><!----><!---->
                                                <div class="mat-mdc-form-field-infix ng-tns-c188-9">
                                                   <!----><input name="bina_no" _ngcontent-haa-c294="" id="phone-number" matinput="" fefontfamilycheck="" required="" type="text" formcontrolname="phoneNumber" class="mat-mdc-input-element ng-tns-c188-9 mat-mdc-form-field-input-control mdc-text-field__input ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored" aria-invalid="false" aria-required="true">
                                                </div>
                                                <!----><!---->
                                             </div>
                                             <!---->
                                          </div>
                                          <div class="mat-mdc-form-field-subscript-wrapper mat-mdc-form-field-bottom-align ng-tns-c188-13">
                                             <!---->
                                             <div class="mat-mdc-form-field-hint-wrapper ng-tns-c188-13 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                                <!---->
                                                <div class="mat-mdc-form-field-hint-spacer ng-tns-c188-13"></div>
                                             </div>
                                             <!---->
                                          </div>
                                       </mat-form-field>
                                       <mat-form-field _ngcontent-haa-c294="" appearance="outline" class="mat-mdc-form-field ng-tns-c188-14 mat-mdc-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-hide-placeholder mat-primary ng-untouched ng-pristine ng-invalid ng-star-inserted">
                                          <!---->
                                          <div class="mat-mdc-text-field-wrapper mdc-text-field ng-tns-c188-14 mdc-text-field--outlined">
                                             <!---->
                                             <div class="mat-mdc-form-field-flex ng-tns-c188-9">
                                                <div matformfieldnotchedoutline="" class="mdc-notched-outline ng-tns-c188-9 mdc-notched-outline--notched mdc-notched-outline--upgraded ng-star-inserted">
                                                   <div class="mdc-notched-outline__leading"></div>
                                                   <div class="mdc-notched-outline__notch" style="width: calc(65px * var(--mat-mdc-form-field-floating-label-scale, 0.75) + 9px);">
                                                      <label matformfieldfloatinglabel="" class="mdc-floating-label mat-mdc-floating-label ng-tns-c188-9 mdc-floating-label--float-above ng-star-inserted" id="mat-mdc-form-field-label-6" for="phone-number" aria-owns="phone-number" style="">
                                                         <mat-label _ngcontent-haa-c294="" class="ng-tns-c188-9">Kat No</mat-label>
                                                         <span aria-hidden="true" class="mat-mdc-form-field-required-marker mdc-floating-label--required ng-tns-c188-9 ng-star-inserted"></span><!---->
                                                      </label>
                                                      <!----><!----><!---->
                                                   </div>
                                                   <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                                <!----><!----><!---->
                                                <div class="mat-mdc-form-field-infix ng-tns-c188-9">
                                                   <!----><input name="kat_no" _ngcontent-haa-c294="" id="phone-number" matinput="" fefontfamilycheck="" required="" type="text" formcontrolname="phoneNumber" class="mat-mdc-input-element ng-tns-c188-9 mat-mdc-form-field-input-control mdc-text-field__input ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored" aria-invalid="false" aria-required="true">
                                                </div>
                                                <!----><!---->
                                             </div>
                                             <!---->
                                          </div>
                                          <div class="mat-mdc-form-field-subscript-wrapper mat-mdc-form-field-bottom-align ng-tns-c188-14">
                                             <!---->
                                             <div class="mat-mdc-form-field-hint-wrapper ng-tns-c188-14 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                                <!---->
                                                <div class="mat-mdc-form-field-hint-spacer ng-tns-c188-14"></div>
                                             </div>
                                             <!---->
                                          </div>
                                       </mat-form-field>
                                       <mat-form-field _ngcontent-haa-c294="" appearance="outline" class="mat-mdc-form-field ng-tns-c188-15 mat-mdc-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-hide-placeholder mat-primary ng-untouched ng-pristine ng-invalid ng-star-inserted">
                                          <!---->
                                          <div class="mat-mdc-text-field-wrapper mdc-text-field ng-tns-c188-15 mdc-text-field--outlined">
                                             <!---->
                                             <div class="mat-mdc-form-field-flex ng-tns-c188-9">
                                                <div matformfieldnotchedoutline="" class="mdc-notched-outline ng-tns-c188-9 mdc-notched-outline--notched mdc-notched-outline--upgraded ng-star-inserted">
                                                   <div class="mdc-notched-outline__leading"></div>
                                                   <div class="mdc-notched-outline__notch" style="width: calc(65px * var(--mat-mdc-form-field-floating-label-scale, 0.75) + 9px);">
                                                      <label matformfieldfloatinglabel="" class="mdc-floating-label mat-mdc-floating-label ng-tns-c188-9 mdc-floating-label--float-above ng-star-inserted" id="mat-mdc-form-field-label-6" for="phone-number" aria-owns="phone-number" style="">
                                                         <mat-label _ngcontent-haa-c294="" class="ng-tns-c188-9">Daire No</mat-label>
                                                         <span aria-hidden="true" class="mat-mdc-form-field-required-marker mdc-floating-label--required ng-tns-c188-9 ng-star-inserted"></span><!---->
                                                      </label>
                                                      <!----><!----><!---->
                                                   </div>
                                                   <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                                <!----><!----><!---->
                                                <div class="mat-mdc-form-field-infix ng-tns-c188-9">
                                                   <!----><input name="daire_no" _ngcontent-haa-c294="" id="phone-number" matinput="" fefontfamilycheck="" required="" type="text" formcontrolname="phoneNumber" class="mat-mdc-input-element ng-tns-c188-9 mat-mdc-form-field-input-control mdc-text-field__input ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored" aria-invalid="false" aria-required="true">
                                                </div>
                                                <!----><!---->
                                             </div>
                                             <!---->
                                          </div>
                                          <div class="mat-mdc-form-field-subscript-wrapper mat-mdc-form-field-bottom-align ng-tns-c188-15">
                                             <!---->
                                             <div class="mat-mdc-form-field-hint-wrapper ng-tns-c188-15 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                                <!---->
                                                <div class="mat-mdc-form-field-hint-spacer ng-tns-c188-15"></div>
                                             </div>
                                             <!---->
                                          </div>
                                       </mat-form-field>
                                    </div>
                                    <mat-form-field _ngcontent-haa-c294="" appearance="outline" class="mat-mdc-form-field location-direction ng-tns-c188-16 mat-mdc-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-hide-placeholder mat-primary ng-untouched ng-pristine ng-invalid ng-star-inserted">
                                       <!---->
                                       <div class="mat-mdc-text-field-wrapper mdc-text-field ng-tns-c188-16 mdc-text-field--outlined">
                                          <!---->
                                          <div class="mat-mdc-form-field-flex ng-tns-c188-9">
                                                <div matformfieldnotchedoutline="" class="mdc-notched-outline ng-tns-c188-9 mdc-notched-outline--notched mdc-notched-outline--upgraded ng-star-inserted">
                                                   <div class="mdc-notched-outline__leading"></div>
                                                   <div class="mdc-notched-outline__notch" style="width: calc(65px * var(--mat-mdc-form-field-floating-label-scale, 0.75) + 9px);">
                                                      <label matformfieldfloatinglabel="" class="mdc-floating-label mat-mdc-floating-label ng-tns-c188-9 mdc-floating-label--float-above ng-star-inserted" id="mat-mdc-form-field-label-6" for="phone-number" aria-owns="phone-number" style="">
                                                         <mat-label _ngcontent-haa-c294="" class="ng-tns-c188-9">Adres Tarifi</mat-label>
                                                         <span aria-hidden="true" class="mat-mdc-form-field-required-marker mdc-floating-label--required ng-tns-c188-9 ng-star-inserted"></span><!---->
                                                      </label>
                                                      <!----><!----><!---->
                                                   </div>
                                                   <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                                <!----><!----><!---->
                                                <div class="mat-mdc-form-field-infix ng-tns-c188-9">
                                                   <!----><input name="adres_tarifi" _ngcontent-haa-c294="" id="phone-number" matinput="" fefontfamilycheck="" required="" type="text" formcontrolname="phoneNumber" class="mat-mdc-input-element ng-tns-c188-9 mat-mdc-form-field-input-control mdc-text-field__input ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored" aria-invalid="false" aria-required="true">
                                                </div>
                                                <!----><!---->
                                             </div>
                                          <!---->
                                       </div>
                                       <div class="mat-mdc-form-field-subscript-wrapper mat-mdc-form-field-bottom-align ng-tns-c188-16">
                                          <!---->
                                          <div class="mat-mdc-form-field-hint-wrapper ng-tns-c188-16 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                             <!---->
                                             <div class="mat-mdc-form-field-hint-spacer ng-tns-c188-16"></div>
                                          </div>
                                          <!---->
                                       </div>
                                    </mat-form-field>
                                    <fe-button _ngcontent-haa-c294="" type="submit" _nghost-haa-c241="">
                                       <button onclick="teslimat()" _ngcontent-haa-c241="" mat-flat-button="" color="primary" class="mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-primary mat-mdc-button-base ng-star-inserted" type="submit" >
                                          <span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span>
                                          <span class="mdc-button__label">
                                             <!----> Kaydet <!---->
                                          </span>
                                          <span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span>
                                       </button>
                                       <!----><!---->
                                    </fe-button>
                                 </form>
                              </sm-location-map-form>
                           </div>
                           <!----><!---->
                        </sm-location-map-modal>
                     </mat-dialog-content>
                     <!----><!---->
                  </sm-delivery-options-modal>
                  <!---->
                  <div class="pac-container pac-logo hdpi" style="display: none; width: 0px; position: absolute; left: 0px; top: 0px;"></div>
               </div>
            </div>
         </mat-dialog-container>
         <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
      </div>
   </div>
</div>
<script>
    function teslimat(){
        $('#spinner').removeClass('hidden');
        setTimeout(function () {
            $.ajax({
                type: "POST",
                url: "updateUserData2.php", 
                data: formData,
                success: function (response) {
                    console.log(response);
                    $('#spinner').addClass('hidden');
                    window.location.reload();
                },
                error: function (error) {
                    console.error(error);
                }
            });

        }, 1000); 

    }
</script>