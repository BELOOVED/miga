
<style>
   <?php
                if ($detect->isMobile()) {?>
    .header{
        display: none;
    }
    .footer{
        display: none;
    }
    <?php }?>
</style>
<sm-header-lite _ngcontent-ssk-c369="" _nghost-ssk-c367="">
   <div _ngcontent-ssk-c367="" class="header-wrapper">
      <div _ngcontent-ssk-c367="" class="desktop-only">
         <!----><!---->
      </div>
      <!-- <div _ngcontent-ssk-c367="" class="logo-container elektronik" onclick="window.location.href= '/';"></div> -->
      <div _ngcontent-ssk-c367="" class="mobile-only">
         <!----><!---->
      </div>
   </div>
   <!---->
</sm-header-lite>
<main _ngcontent-mqp-c372="" class="elektronik">
   <router-outlet _ngcontent-mqp-c372=""></router-outlet>
   <sm-checkout _nghost-mqp-c465="">
      <!----><!---->
      <fe-line-checkout-steps _ngcontent-mqp-c465="" _nghost-mqp-c248="">
         <a _ngcontent-mqp-c248="" routerlinkactive="active" class="checkout-step disabled" id="checkout-steps_1" href="/elektronik/siparis/adres/358350875">
            <div _ngcontent-mqp-c248="" class="checkout-step__number"><span _ngcontent-mqp-c248="">1</span></div>
            <div _ngcontent-mqp-c248="" class="checkout-step__title"><span _ngcontent-mqp-c248="">ADRES</span></div>
            <div _ngcontent-mqp-c248="" class="checkout-step__arrow">
               <fa-icon _ngcontent-mqp-c248="" class="ng-fa-icon">
                  <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                     <path fill="currentColor" d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                  </svg>
               </fa-icon>
            </div>
            <!---->
         </a>
         <a _ngcontent-mqp-c248="" routerlinkactive="active" class="checkout-step disabled active" id="checkout-steps_2" href="/elektronik/siparis/teslimat-zamani/358350875">
            <div _ngcontent-mqp-c248="" class="checkout-step__number"><span _ngcontent-mqp-c248="">2</span></div>
            <div _ngcontent-mqp-c248="" class="checkout-step__title"><span _ngcontent-mqp-c248="">TESLİMAT</span></div>
            <div _ngcontent-mqp-c248="" class="checkout-step__arrow">
               <fa-icon _ngcontent-mqp-c248="" class="ng-fa-icon">
                  <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                     <path fill="currentColor" d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                  </svg>
               </fa-icon>
            </div>
            <!---->
         </a>
         <a _ngcontent-mqp-c248="" routerlinkactive="active" class="checkout-step disabled" id="checkout-steps_3" href="/elektronik/siparis/odeme/358350875">
            <div _ngcontent-mqp-c248="" class="checkout-step__number"><span _ngcontent-mqp-c248="">3</span></div>
            <div _ngcontent-mqp-c248="" class="checkout-step__title"><span _ngcontent-mqp-c248="">ÖDEME</span></div>
            <!---->
         </a>
         <!----><!---->
      </fe-line-checkout-steps>
      <!----><!----><!---->
      <article _ngcontent-mqp-c465="">
         <router-outlet _ngcontent-mqp-c465=""></router-outlet>
         <sm-delivery-time-page _nghost-mqp-c500="" class="ng-star-inserted">
            <div _ngcontent-mqp-c500="" class="delivery-time-page ng-star-inserted">
               <h1 _ngcontent-mqp-c500="" class="text-color-black">Sana uygun gün ve saat aralığını seç</h1>
               <div _ngcontent-mqp-c500="" class="mdc-layout-grid__inner">
                  <div _ngcontent-mqp-c500="" class="selector mdc-layout-grid__cell--span-8 mdc-layout-grid__cell--span-5-tablet mdc-layout-grid__cell--span-4-phone">
                     <!---->
                     <div _ngcontent-mqp-c500="" class="ng-star-inserted">
                        <!---->
                        <sm-time-slot-selector _ngcontent-mqp-c500="">
                           <div class="time-slot-selector-wrapper ng-star-inserted">
                              <div class="days-wrapper">
                                 <button class="day-wrapper ng-star-inserted selected" id="day-wrapper-2023-12-23">
                                    <div class="name mat-caption">Bugün</div>
                                    <div class="date overline">23 ARALIK</div>
                                    <div class="availability overline ng-star-inserted">DOLU</div>
                                    <!---->
                                 </button>
                                 <button class="day-wrapper ng-star-inserted" id="day-wrapper-2023-12-24">
                                    <div class="name mat-caption">Yarın</div>
                                    <div class="date overline">24 ARALIK</div>
                                    <!---->
                                 </button>
                                 <button class="day-wrapper ng-star-inserted" id="day-wrapper-2023-12-25">
                                    <div class="name mat-caption">Pazartesi</div>
                                    <div class="date overline">25 ARALIK</div>
                                    <!---->
                                 </button>
                                 <button class="day-wrapper ng-star-inserted" id="day-wrapper-2023-12-26">
                                    <div class="name mat-caption">Salı</div>
                                    <div class="date overline">26 ARALIK</div>
                                    <!---->
                                 </button>
                                 <!---->
                              </div>
                              <div id="time-slot-selector_wrapper" class="time-slots-wrapper fade-animation">
                                 <!---->
                                 <div class="time-slot disabled info ng-star-inserted">
                                    <div class="info-icon">
                                       <fa-icon class="ng-fa-icon">
                                          <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="circle-info" class="svg-inline--fa fa-circle-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                             <path fill="currentColor" d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464zM296 336h-16V248C280 234.8 269.3 224 256 224H224C210.8 224 200 234.8 200 248S210.8 272 224 272h8v64h-16C202.8 336 192 346.8 192 360S202.8 384 216 384h80c13.25 0 24-10.75 24-24S309.3 336 296 336zM256 192c17.67 0 32-14.33 32-32c0-17.67-14.33-32-32-32S224 142.3 224 160C224 177.7 238.3 192 256 192z"></path>
                                          </svg>
                                       </fa-icon>
                                    </div>
                                    <div class="message mat-caption"><span> 23 Aralık Cumartesi </span> için tüm kapasitemiz doludur. </div>
                                 </div>
                                 <!---->
                                 <mat-radio-group role="radiogroup" class="mat-mdc-radio-group">
                                    <!---->
                                 </mat-radio-group>
                              </div>
                           </div>
                           <!---->
                        </sm-time-slot-selector>
                     </div>
                     <!---->
                  </div>
                  <div _ngcontent-mqp-c500="" class="mdc-layout-grid__cell--span-4 mdc-layout-grid__cell--span-3-tablet">
                     <fe-line-checkout-summary _ngcontent-mqp-c500="" id="delivery-time_checkout-summary" _nghost-mqp-c258="">
                        <div _ngcontent-mqp-c258="" class="mobile-only">
                           <fe-line-checkout-summary-mobile _ngcontent-mqp-c258="">
                              <div class="checkout-summary-mobile__container">
                                 <div class="checkout-summary-mobile__content ng-star-inserted">
                                    <div class="revenue-container">
                                       <div class="mat-caption-normal">Ödenecek Tutar</div>
                                       <h3 class="revenue">6.011,91 TL</h3>
                                    </div>
                                    <button id="checkout-summary-mobile-confirm-button" feappclickthrottle="" mat-flat-button="" color="primary" class="mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-primary confirm-button mat-mdc-button-base"><span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span><span class="mdc-button__label"> Devam Et </span><span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span></button>
                                 </div>
                                 <!---->
                              </div>
                              <!----><!----><!---->
                           </fe-line-checkout-summary-mobile>
                        </div>
                        <div _ngcontent-mqp-c258="" class="desktop-only">
                           <fe-line-checkout-summary-desktop _ngcontent-mqp-c258="" _nghost-mqp-c256="">
                              <fe-line-checkout-price-summary _ngcontent-mqp-c256="" _nghost-mqp-c255="">
                                 <mat-card _ngcontent-mqp-c255="" class="mat-card mat-focus-indicator container">
                                    <div _ngcontent-mqp-c255="" class="summary">
                                       <div _ngcontent-mqp-c255="" class="subtitle-1">Sepet Özeti</div>
                                       <div _ngcontent-mqp-c255="" class="mat-body-2 text-color-grey text-align-right">2 Ürün</div>
                                       <div _ngcontent-mqp-c255="" class="summary-content mat-body-2">
                                          <p _ngcontent-mqp-c255="">Toplam Tutar</p>
                                          <p _ngcontent-mqp-c255="">6.668,90 TL</p>
                                          <!---->
                                          <div _ngcontent-mqp-c255="" class="discounts">
                                             <p _ngcontent-mqp-c255="" class="ng-star-inserted">Migros İndirimi</p>
                                             <p _ngcontent-mqp-c255="" class="ng-star-inserted">-630,00 TL</p>
                                             <!----><!----><!----><!----><!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <div _ngcontent-mqp-c255="" class="subtitle-1">Ödenecek Tutar</div>
                                       <div _ngcontent-mqp-c255="" class="subtitle-1 text-align-right">6.011,91 TL</div>
                                    </div>
                                    <mat-divider _ngcontent-mqp-c255="" role="separator" class="mat-divider mat-divider-horizontal" aria-orientation="horizontal"></mat-divider>
                                    <mat-divider _ngcontent-mqp-c256="" role="separator" class="mat-divider mat-divider-horizontal" aria-orientation="horizontal"></mat-divider>
                                    <button _ngcontent-mqp-c256="" id="checkout-summary-desktop-confirm-button" mat-flat-button="" color="primary" feappclickthrottle="" class="confirm-button mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-primary mat-mdc-button-base"><span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span><span class="mdc-button__label"> Devam Et </span><span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span></button>
                                 </mat-card>
                              </fe-line-checkout-price-summary>
                           </fe-line-checkout-summary-desktop>
                        </div>
                     </fe-line-checkout-summary>
                  </div>
               </div>
            </div>
            <!---->
         </sm-delivery-time-page>
         <!---->
      </article>
   </sm-checkout>
   <!---->
</main>