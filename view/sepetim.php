<sm-header-lite _ngcontent-ssk-c369="" _nghost-ssk-c367="">
   <div _ngcontent-ssk-c367="" class="header-wrapper">
      <div _ngcontent-ssk-c367="" class="desktop-only">
         <!----><!---->
      </div>
      <div _ngcontent-ssk-c367="" class="logo-container elektronik"></div>
      <div _ngcontent-ssk-c367="" class="mobile-only">
         <!----><!---->
      </div>
   </div>
   <!---->
</sm-header-lite>
<main _ngcontent-ssk-c369="" class="elektronik">
   <router-outlet _ngcontent-ssk-c369=""></router-outlet>
   <?php
    foreach ($_COOKIE as $cookieName => $cookieValue) {
    if (strpos($cookieName, 'cart_item_') !== false) {
    $id = substr($cookieName, strlen('cart_item_'));
    if (!empty($id)) {
    ?>
   <sm-product>
   <article>
      <router-outlet></router-outlet>
      <sm-cart-page class="ng-star-inserted">
         <div class="cart-page ng-star-inserted">
            <sm-special-discount id="sepetinize-ozel-firsatlar">
               <!---->
            </sm-special-discount>
            <div class="cart-container">
               <div class="mdc-layout-grid__inner ng-star-inserted">
                  <div class="selector mdc-layout-grid__cell--span-8 mdc-layout-grid__cell--span-5-tablet mdc-layout-grid__cell--span-4-phone">
                     <!---->
                     <div class="cart-container__header">
                        <h2 id="cart-header" class="text-color-black mat-headline"> Sepetim <span class="mat-body-2 text-color-grey">1 Ürün</span></h2>
                        <span id="update-cart" class="subtitle-2 update-cart text-color-orange ng-star-inserted"> Sepeti Düzenle </span><!---->
                     </div>
                     <!---->
                     <div class="product-list list ng-star-inserted">
                        <sm-cart-page-item class="ng-star-inserted">
                           <div class="cart-page-item" id="21000032030036">
                              <fe-product-image _nghost-ssk-c159="" class="ng-star-inserted">
                                 <a _ngcontent-ssk-c159="" id="product-image-link" href="/elektronik/goldstar-aile-boy-celik-caydanlik-304-p-1e8bd54">
                                    <img _ngcontent-ssk-c159="" felazyload="" alt="Goldstar Aile Boy Çelik Çaydanlık 304" src="https://images.migrosone.com/elektronik/product/32030036/32030036-7ad0f6-105x105.jpg" class="ng-star-inserted"><!----><!---->
                                 </a>
                              </fe-product-image>
                              <!---->
                              <div class="product-name">
                                 <fe-product-name customclass="subtitle-2 text-color-black" _nghost-ssk-c160="">
                                    <h1 _ngcontent-ssk-c160="">
                                       <a _ngcontent-ssk-c160="" class="subtitle-2 text-color-black ng-star-inserted" href="/goldstar-aile-boy-celik-caydanlik-304-p-1e8bd54"> Goldstar Aile Boy Çelik Çaydanlık 304 </a><!----><!---->
                                    </h1>
                                 </fe-product-name>
                                 <fe-product-labels _nghost-ssk-c295="" class="ng-star-inserted">
                                    <div _ngcontent-ssk-c295="" class="product-labels ng-star-inserted">
                                       <div _ngcontent-ssk-c295="" class="price product-label ng-star-inserted"><span _ngcontent-ssk-c295="">İndirimli Ürün</span></div>
                                       <!----><!---->
                                       <fe-crm-discount-badge _ngcontent-ssk-c295="" _nghost-ssk-c293="">
                                          <!---->
                                       </fe-crm-discount-badge>
                                    </div>
                                    <!---->
                                 </fe-product-labels>
                                 <!----><!---->
                                 <div class="product-price mobile-only">
                                    <sm-product-actions _nghost-ssk-c292="" class="ng-star-inserted">
                                       <div _ngcontent-ssk-c292="" class="product-actions ng-star-inserted">
                                          <button _ngcontent-ssk-c292="" class="product-decrease" id="product-actions-product-decrease--goldstar-aile-boy-celik-caydanlik-304-p-1e8bd54" no-pointer-event="true">
                                             <fa-icon _ngcontent-ssk-c292="" class="ng-fa-icon ng-star-inserted">
                                                <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="trash-can" class="svg-inline--fa fa-trash-can" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                   <path fill="currentColor" d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z"></path>
                                                </svg>
                                             </fa-icon>
                                             <!----><!---->
                                          </button>
                                          <div _ngcontent-ssk-c292="" id="product-amount" class="product-amount"><span _ngcontent-ssk-c292="" class="amount mat-caption">1</span><span _ngcontent-ssk-c292="" class="unit text-color-grey">adet</span></div>
                                          <button _ngcontent-ssk-c292="" aria-label="Sepetteki ürün sayısını arttır" class="product-increase" id="product-actions-product-increase--goldstar-aile-boy-celik-caydanlik-304-p-1e8bd54">
                                             <fa-icon _ngcontent-ssk-c292="" class="ng-fa-icon">
                                                <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="plus" class="svg-inline--fa fa-plus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                   <path fill="currentColor" d="M432 256C432 269.3 421.3 280 408 280h-160v160c0 13.25-10.75 24.01-24 24.01S200 453.3 200 440v-160h-160c-13.25 0-24-10.74-24-23.99C16 242.8 26.75 232 40 232h160v-160c0-13.25 10.75-23.99 24-23.99S248 58.75 248 72v160h160C421.3 232 432 242.8 432 256z"></path>
                                                </svg>
                                             </fa-icon>
                                          </button>
                                       </div>
                                       <!----><!----><!---->
                                    </sm-product-actions>
                                    <!---->
                                    <fe-product-price _nghost-ssk-c271="" class="ng-star-inserted">
                                       <div _ngcontent-ssk-c271="" class="promotion-wrapper">
                                          <div _ngcontent-ssk-c271="" id="price-old" class="price-old ng-star-inserted"><span _ngcontent-ssk-c271="" id="old-amount" class="amount">849,95 <span _ngcontent-ssk-c271="" class="currency">TL</span></span></div>
                                          <!---->
                                          <div _ngcontent-ssk-c271="" id="price-new" class="price-new subtitle-1"><span _ngcontent-ssk-c271="" id="new-amount" class="amount"> 649,95 <span _ngcontent-ssk-c271="" class="currency">TL</span></span></div>
                                       </div>
                                       <!---->
                                    </fe-product-price>
                                    <!---->
                                 </div>
                                 <div class="actions">
                                    <sm-product-note-popover _nghost-ssk-c373="">
                                       <div _ngcontent-ssk-c373="" class="popover-wrapper" id="add-note-21000032030036">
                                          <div _ngcontent-ssk-c373="" class="note text-color-grey mat-caption-normal popover-trigger">
                                             <span>
                                                <fa-icon class="ng-fa-icon">
                                                   <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="pen-to-square" class="svg-inline--fa fa-pen-to-square" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                      <path fill="currentColor" d="M373.1 24.97C401.2-3.147 446.8-3.147 474.9 24.97L487 37.09C515.1 65.21 515.1 110.8 487 138.9L289.8 336.2C281.1 344.8 270.4 351.1 258.6 354.5L158.6 383.1C150.2 385.5 141.2 383.1 135 376.1C128.9 370.8 126.5 361.8 128.9 353.4L157.5 253.4C160.9 241.6 167.2 230.9 175.8 222.2L373.1 24.97zM440.1 58.91C431.6 49.54 416.4 49.54 407 58.91L377.9 88L424 134.1L453.1 104.1C462.5 95.6 462.5 80.4 453.1 71.03L440.1 58.91zM203.7 266.6L186.9 325.1L245.4 308.3C249.4 307.2 252.9 305.1 255.8 302.2L390.1 168L344 121.9L209.8 256.2C206.9 259.1 204.8 262.6 203.7 266.6zM200 64C213.3 64 224 74.75 224 88C224 101.3 213.3 112 200 112H88C65.91 112 48 129.9 48 152V424C48 446.1 65.91 464 88 464H360C382.1 464 400 446.1 400 424V312C400 298.7 410.7 288 424 288C437.3 288 448 298.7 448 312V424C448 472.6 408.6 512 360 512H88C39.4 512 0 472.6 0 424V152C0 103.4 39.4 64 88 64H200z"></path>
                                                   </svg>
                                                </fa-icon>
                                                Ürün Notu Ekle
                                             </span>
                                             <!---->
                                          </div>
                                          <!---->
                                       </div>
                                    </sm-product-note-popover>
                                    <div id="cart-page-item-remove" class="remove text-color-grey mat-caption-normal">
                                       <fa-icon class="ng-fa-icon">
                                          <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="trash-can" class="svg-inline--fa fa-trash-can" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                             <path fill="currentColor" d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z"></path>
                                          </svg>
                                       </fa-icon>
                                       Sil 
                                    </div>
                                 </div>
                              </div>
                              <div class="product-price desktop-only">
                                 <fe-product-price _nghost-ssk-c271="" class="ng-star-inserted">
                                    <div _ngcontent-ssk-c271="" class="promotion-wrapper">
                                       <div _ngcontent-ssk-c271="" id="price-old" class="price-old ng-star-inserted"><span _ngcontent-ssk-c271="" id="old-amount" class="amount">849,95 <span _ngcontent-ssk-c271="" class="currency">TL</span></span></div>
                                       <!---->
                                       <div _ngcontent-ssk-c271="" id="price-new" class="price-new subtitle-1"><span _ngcontent-ssk-c271="" id="new-amount" class="amount"> 649,95 <span _ngcontent-ssk-c271="" class="currency">TL</span></span></div>
                                    </div>
                                    <!---->
                                 </fe-product-price>
                                 <!---->
                                 <sm-product-actions _nghost-ssk-c292="" class="ng-star-inserted">
                                    <div _ngcontent-ssk-c292="" class="product-actions ng-star-inserted">
                                       <button _ngcontent-ssk-c292="" class="product-decrease" id="product-actions-product-decrease--goldstar-aile-boy-celik-caydanlik-304-p-1e8bd54" no-pointer-event="true">
                                          <fa-icon _ngcontent-ssk-c292="" class="ng-fa-icon ng-star-inserted">
                                             <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="trash-can" class="svg-inline--fa fa-trash-can" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="currentColor" d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z"></path>
                                             </svg>
                                          </fa-icon>
                                          <!----><!---->
                                       </button>
                                       <div _ngcontent-ssk-c292="" id="product-amount" class="product-amount"><span _ngcontent-ssk-c292="" class="amount mat-caption">1</span><span _ngcontent-ssk-c292="" class="unit text-color-grey">adet</span></div>
                                       <button _ngcontent-ssk-c292="" aria-label="Sepetteki ürün sayısını arttır" class="product-increase" id="product-actions-product-increase--goldstar-aile-boy-celik-caydanlik-304-p-1e8bd54">
                                          <fa-icon _ngcontent-ssk-c292="" class="ng-fa-icon">
                                             <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="plus" class="svg-inline--fa fa-plus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="currentColor" d="M432 256C432 269.3 421.3 280 408 280h-160v160c0 13.25-10.75 24.01-24 24.01S200 453.3 200 440v-160h-160c-13.25 0-24-10.74-24-23.99C16 242.8 26.75 232 40 232h160v-160c0-13.25 10.75-23.99 24-23.99S248 58.75 248 72v160h160C421.3 232 432 242.8 432 256z"></path>
                                             </svg>
                                          </fa-icon>
                                       </button>
                                    </div>
                                    <!----><!----><!---->
                                 </sm-product-actions>
                                 <!---->
                              </div>
                           </div>
                           <!----><!---->
                        </sm-cart-page-item>
                        <!----><!----><!---->
                     </div>
                     <!----><!----><!----><!---->
                     <div class="segmentify-wrapper">
                        <!---->
                     </div>
                  </div>
                  <div class="mdc-layout-grid__cell--span-4 mdc-layout-grid__cell--span-3-tablet">
                     <!---->
                     <sm-free-delivery class="desktop-only" _nghost-ssk-c388="">
                        <div _ngcontent-ssk-c388="" class="card ng-star-inserted">
                           <div _ngcontent-ssk-c388="" class="container sm-free-delivery">
                              <!---->
                              <div _ngcontent-ssk-c388="" class="description ng-star-inserted"><b _ngcontent-ssk-c388="">100,05 TL</b>’lik daha ürün ekle, <b _ngcontent-ssk-c388="">teslimatın ücretsiz olsun!</b></div>
                              <!----><!---->
                           </div>
                        </div>
                        <!---->
                     </sm-free-delivery>
                     <fe-line-checkout-summary _nghost-ssk-c256="">
                        <div _ngcontent-ssk-c256="" class="mobile-only">
                           <fe-line-checkout-summary-mobile _ngcontent-ssk-c256="">
                              <div class="checkout-summary-mobile__container with-details">
                                 <div class="free-delivery-info ng-star-inserted">
                                    <b class="ng-star-inserted">100,05 TL</b> ve üzeri alışverişlerde <b class="ng-star-inserted">ücretsiz teslimat</b><!----><!---->
                                 </div>
                                 <!----><!---->
                                 <mat-expansion-panel toggleposition="before" class="mat-expansion-panel ng-tns-c97-0 ng-star-inserted">
                                    <mat-expansion-panel-header role="button" class="mat-expansion-panel-header mat-focus-indicator ng-tns-c98-1 ng-tns-c97-0 mat-expansion-toggle-indicator-before ng-star-inserted" id="mat-expansion-panel-header-0" tabindex="0" aria-controls="cdk-accordion-child-0" aria-expanded="false" aria-disabled="false">
                                       <span class="mat-content ng-tns-c98-1">
                                          <div class="checkout-summary-mobile__content ng-star-inserted">
                                             <div class="revenue-container">
                                                <div class="mat-caption-normal">Ödenecek Tutar</div>
                                                <h3 class="revenue">676,94 TL</h3>
                                             </div>
                                             <button id="checkout-summary-mobile-confirm-button" feappclickthrottle="" mat-flat-button="" color="primary" class="mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-primary confirm-button mat-mdc-button-base"><span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span><span class="mdc-button__label"> Devam Et </span><span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span></button>
                                          </div>
                                          <!---->
                                       </span>
                                       <span class="mat-expansion-indicator ng-tns-c98-1 ng-trigger ng-trigger-indicatorRotate ng-star-inserted" style="transform: rotate(0deg);"></span><!---->
                                    </mat-expansion-panel-header>
                                    <div role="region" class="mat-expansion-panel-content ng-tns-c97-0 ng-trigger ng-trigger-bodyExpansion" id="cdk-accordion-child-0" aria-labelledby="mat-expansion-panel-header-0" style="height: 0px; visibility: hidden;">
                                       <div class="mat-expansion-panel-body ng-tns-c97-0">
                                          <div class="summary-content mat-body-2 ng-star-inserted" style="">
                                             <p>Sipariş Tutarı</p>
                                             <p>849,95 TL</p>
                                             <p class="ng-star-inserted" style="">Teslimat Tutarı</p>
                                             <p class="ng-star-inserted" style="">26,99 TL</p>
                                             <!----><!---->
                                             <div class="discounts text-color-success">
                                                <p class="ng-star-inserted">Migros İndirimi</p>
                                                <p class="ng-star-inserted">-200,00 TL</p>
                                                <!----><!----><!----><!---->
                                             </div>
                                          </div>
                                          <mat-divider role="separator" class="mat-divider mat-divider-horizontal ng-star-inserted" aria-orientation="horizontal" style=""></mat-divider>
                                          <!----><!---->
                                       </div>
                                    </div>
                                 </mat-expansion-panel>
                                 <!----><!---->
                              </div>
                              <!----><!----><!---->
                           </fe-line-checkout-summary-mobile>
                        </div>
                        <div _ngcontent-ssk-c256="" class="desktop-only">
                           <fe-line-checkout-summary-desktop _ngcontent-ssk-c256="" _nghost-ssk-c254="">
                              <fe-line-checkout-price-summary _ngcontent-ssk-c254="" _nghost-ssk-c253="">
                                 <mat-card _ngcontent-ssk-c253="" class="mat-card mat-focus-indicator container">
                                    <div _ngcontent-ssk-c253="" class="summary">
                                       <div _ngcontent-ssk-c253="" class="subtitle-1">Sepet Özeti</div>
                                       <div _ngcontent-ssk-c253="" class="mat-body-2 text-color-grey text-align-right">1 Ürün</div>
                                       <div _ngcontent-ssk-c253="" class="summary-content mat-body-2">
                                          <p _ngcontent-ssk-c253="">Toplam Tutar</p>
                                          <p _ngcontent-ssk-c253="">849,95 TL</p>
                                          <div _ngcontent-ssk-c253="" class="delivery-price ng-star-inserted">
                                             <p _ngcontent-ssk-c253="">Teslimat Tutarı</p>
                                             <p _ngcontent-ssk-c253="" class="price">
                                                <span _ngcontent-ssk-c253="">26,99 <span _ngcontent-ssk-c253="" class="currency">TL</span></span><!----><!---->
                                             </p>
                                          </div>
                                          <!---->
                                          <div _ngcontent-ssk-c253="" class="discounts">
                                             <p _ngcontent-ssk-c253="" class="ng-star-inserted">Migros İndirimi</p>
                                             <p _ngcontent-ssk-c253="" class="ng-star-inserted">-200,00 TL</p>
                                             <!----><!----><!----><!----><!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <div _ngcontent-ssk-c253="" class="subtitle-1">Ödenecek Tutar</div>
                                       <div _ngcontent-ssk-c253="" class="subtitle-1 text-align-right">676,94 TL</div>
                                    </div>
                                    <mat-divider _ngcontent-ssk-c253="" role="separator" class="mat-divider mat-divider-horizontal" aria-orientation="horizontal"></mat-divider>
                                    <!---->
                                    <mat-divider _ngcontent-ssk-c254="" role="separator" class="mat-divider mat-divider-horizontal" aria-orientation="horizontal"></mat-divider>
                                    <button _ngcontent-ssk-c254="" id="checkout-summary-desktop-confirm-button" mat-flat-button="" color="primary" feappclickthrottle="" class="confirm-button mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-primary mat-mdc-button-base"><span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span><span class="mdc-button__label"> Devam Et </span><span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span></button>
                                 </mat-card>
                              </fe-line-checkout-price-summary>
                           </fe-line-checkout-summary-desktop>
                        </div>
                     </fe-line-checkout-summary>
                     <!----><!----><!---->
                  </div>
                  <!---->
               </div>
               <!---->
            </div>
            <sm-popup-banner>
               <!---->
            </sm-popup-banner>
         </div>
         <!----><!----><!---->
      </sm-cart-page>
      <!---->
   </article>
   </sm-product>  
   <?php }else{?>
   <!----NOTCOOKIE!---->
   <sm-product>
      <article>
         <router-outlet></router-outlet>
         <sm-cart-page>
            <div class="cart-page">
               <sm-special-discount id="sepetinize-ozel-firsatlar">
                  <!---->
               </sm-special-discount>
               <div class="cart-container">
                  <div class="cart-empty">
                     <mat-card class="mat-mdc-card mdc-card">
                        <img srcset="
                           /assets/images/cart-empty/cart-empty.webp,
                           /assets/images/cart-empty/cart-empty@2x.webp,
                           /assets/images/cart-empty/cart-empty@3x.webp
                           ">
                        <div class="info">
                           <p class="subtitle-1 text-color-black">Sepetinde hiç ürün bulunmuyor!</p>
                        </div>
                        <button id="start-shopping-btn" color="primary" mat-flat-button="" class="mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-primary mat-mdc-button-base"><span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span><span class="mdc-button__label"> Alışverişe Başla </span><span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span></button>
                     </mat-card>
                  </div>
                  <!---->
               </div>
               <sm-popup-banner>
                  <!---->
               </sm-popup-banner>
            </div>
            <!----><!----><!---->
         </sm-cart-page>
         <!---->
      </article>
   </sm-product>
   <?php }}}?>
</main>