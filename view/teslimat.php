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
         <a _ngcontent-haa-c248="" routerlinkactive="active" class="checkout-step disabled ng-star-inserted" id="checkout-steps_1" href="/elektronik/siparis/adres/358515623">
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
         <a _ngcontent-haa-c248="" routerlinkactive="active" class="checkout-step disabled ng-star-inserted active" id="checkout-steps_2" href="/elektronik/siparis/teslimat-zamani/358515623">
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
         <a _ngcontent-haa-c248="" routerlinkactive="active" class="checkout-step disabled ng-star-inserted" id="checkout-steps_3" href="/elektronik/siparis/odeme/358515623">
            <div _ngcontent-haa-c248="" class="checkout-step__number"><span _ngcontent-haa-c248="">3</span></div>
            <div _ngcontent-haa-c248="" class="checkout-step__title"><span _ngcontent-haa-c248="">ÖDEME</span></div>
            <!---->
         </a>
         <!----><!---->
      </fe-line-checkout-steps>
      <!----><!----><!---->
      <article _ngcontent-haa-c465="">
         <router-outlet _ngcontent-haa-c465=""></router-outlet>
         <sm-delivery-time-page _nghost-haa-c500="" class="ng-star-inserted">
            <div _ngcontent-haa-c500="" class="delivery-time-page ng-star-inserted">
               <h1 _ngcontent-haa-c500="" class="text-color-black">Sana uygun gün ve saat aralığını seç</h1>
               <div _ngcontent-haa-c500="" class="mdc-layout-grid__inner">
                  <div _ngcontent-haa-c500="" class="selector mdc-layout-grid__cell--span-8 mdc-layout-grid__cell--span-5-tablet mdc-layout-grid__cell--span-4-phone">
                     <!---->
                     <div _ngcontent-haa-c500="" class="ng-star-inserted">
                        <!---->
                        <sm-time-slot-selector _ngcontent-haa-c500="">
                           <div class="time-slot-selector-wrapper ng-star-inserted">
                              <div class="days-wrapper">
                                 <button class="day-wrapper ng-star-inserted" id="day-wrapper-2023-12-23">
                                    <div class="name mat-caption">Bugün</div>
                                    <div class="date overline"><?php
                                                header('Content-Type: text/html; charset=utf-8');

                                                setlocale(LC_TIME, 'tr_TR.UTF-8', 'tr_TR', 'tr', 'turkish');
                                                $bugun = new DateTime('now');
                                                $sonrakiGun = clone $bugun;
                                                $sonrakiGun->modify('+0 day');
                                                $sonrakiGunAyAdi = strftime('%B', $sonrakiGun->getTimestamp());
                                                $sonrakiGunAdi = strftime('%e', $sonrakiGun->getTimestamp());
                                                echo $sonrakiGunAdi . ' ';
                                                echo $sonrakiGunAyAdi;
                                                ?></div>
                                    <div class="availability overline ng-star-inserted">DOLU</div>
                                    <!---->
                                 </button>
                                 <button class="day-wrapper ng-star-inserted selected" id="day-wrapper-2023-12-24">
                                    <div class="name mat-caption">Yarın</div>
                                    <div class="date overline">
                                    <?php
                                                header('Content-Type: text/html; charset=utf-8');

                                                setlocale(LC_TIME, 'tr_TR.UTF-8', 'tr_TR', 'tr', 'turkish');
                                                $bugun = new DateTime('now');
                                                $sonrakiGun = clone $bugun;
                                                $sonrakiGun->modify('+1 day');
                                                $sonrakiGunAyAdi = strftime('%B', $sonrakiGun->getTimestamp());
                                                $sonrakiGunAdi = strftime('%e', $sonrakiGun->getTimestamp());
                                                echo $sonrakiGunAdi . ' ';
                                                echo $sonrakiGunAyAdi;
                                                ?>

                                    </div>
                                    <!---->
                                 </button>
                                 <button class="day-wrapper ng-star-inserted" id="day-wrapper-2023-12-25">
                                    <div class="name mat-caption"><?php
                                         header('Content-Type: text/html; charset=utf-8');

                                         setlocale(LC_TIME, 'tr_TR.UTF-8', 'tr_TR', 'tr', 'turkish');
                                          $bugun = new DateTime('now');
                                          $sonrakiGun = clone $bugun;
                                          $sonrakiGun->modify('+2 day');
                                          $sonrakiGunAdi = strftime('%A', $sonrakiGun->getTimestamp());
                                          echo $sonrakiGunAdi;
                                          ?></div>
                                    <div class="date overline"><?php
                                                header('Content-Type: text/html; charset=utf-8');

                                                setlocale(LC_TIME, 'tr_TR.UTF-8', 'tr_TR', 'tr', 'turkish');
                                                $bugun = new DateTime('now');
                                                $sonrakiGun = clone $bugun;
                                                $sonrakiGun->modify('+2 day');
                                                $sonrakiGunAyAdi = strftime('%B', $sonrakiGun->getTimestamp());
                                                $sonrakiGunAdi = strftime('%e', $sonrakiGun->getTimestamp());
                                                echo $sonrakiGunAdi . ' ';
                                                echo $sonrakiGunAyAdi;
                                                ?></div>
                                    <!---->
                                 </button>
                                 <button class="day-wrapper ng-star-inserted" id="day-wrapper-2023-12-26">
                                    <div class="name mat-caption"><?php
                                         header('Content-Type: text/html; charset=utf-8');

                                         setlocale(LC_TIME, 'tr_TR.UTF-8', 'tr_TR', 'tr', 'turkish');
                                          $bugun = new DateTime('now');
                                          $sonrakiGun = clone $bugun;
                                          $sonrakiGun->modify('+3 day');
                                          $sonrakiGunAdi = strftime('%A', $sonrakiGun->getTimestamp());
                                          
                                          echo $sonrakiGunAdi;
                                          ?></div>
                                    <div class="date overline"><?php
                                                header('Content-Type: text/html; charset=utf-8');

                                                setlocale(LC_TIME, 'tr_TR.UTF-8', 'tr_TR', 'tr', 'turkish');
                                                $bugun = new DateTime('now');
                                                $sonrakiGun = clone $bugun;
                                                $sonrakiGun->modify('+3 day');
                                                $sonrakiGunAyAdi = strftime('%B', $sonrakiGun->getTimestamp());
                                                $sonrakiGunAdi = strftime('%e', $sonrakiGun->getTimestamp());
                                                echo $sonrakiGunAdi . ' ';
                                                echo $sonrakiGunAyAdi;
                                                ?></div>
                                    <!---->
                                 </button>
                                 <!---->
                              </div>
                              <div id="time-slot-selector_wrapper" class="time-slots-wrapper fade-animation">
                                 <!----><!---->
                                 <mat-radio-group role="radiogroup" class="mat-mdc-radio-group">
                                    <div class="time-slot ng-star-inserted" id="time-slot-wrapper_slot-0">
                                       <mat-radio-button color="primary" class="mat-mdc-radio-button time-slot-button mat-primary" id="mat-radio-27">
                                          <div class="mdc-form-field">
                                             <div class="mdc-radio">
                                                <div class="mat-mdc-radio-touch-target"></div>
                                                <input type="radio" class="mdc-radio__native-control" id="mat-radio-27-input" name="mat-radio-group-13" value="[object Object]" tabindex="0">
                                                <div class="mdc-radio__background">
                                                   <div class="mdc-radio__outer-circle"></div>
                                                   <div class="mdc-radio__inner-circle"></div>
                                                </div>
                                                <div mat-ripple="" class="mat-ripple mat-radio-ripple mat-mdc-focus-indicator">
                                                   <div class="mat-ripple-element mat-radio-persistent-ripple"></div>
                                                </div>
                                             </div>
                                             <label for="mat-radio-27-input">
                                                <div class="time-message-wrapper mat-caption">
                                                   <div class="time">14:00 - 22:00</div>
                                                   <div class="message">Ücretsiz</div>
                                                </div>
                                             </label>
                                          </div>
                                       </mat-radio-button>
                                    </div>
                                    <!----><!---->
                                 </mat-radio-group>
                              </div>
                           </div>
                           <!---->
                        </sm-time-slot-selector>
                     </div>
                     <!---->
                  </div>
                  <div _ngcontent-haa-c500="" class="mdc-layout-grid__cell--span-4 mdc-layout-grid__cell--span-3-tablet">
                     <fe-line-checkout-summary _ngcontent-haa-c500="" id="delivery-time_checkout-summary" _nghost-haa-c258="">
                        <div _ngcontent-haa-c258="" class="mobile-only">
                           <fe-line-checkout-summary-mobile _ngcontent-haa-c258="">
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
                        <div _ngcontent-haa-c258="" class="desktop-only">
                           <fe-line-checkout-summary-desktop _ngcontent-haa-c258="" _nghost-haa-c256="">
                              <fe-line-checkout-price-summary _ngcontent-haa-c256="" _nghost-haa-c255="">
                                 <mat-card _ngcontent-haa-c255="" class="mat-card mat-focus-indicator container">
                                    <div _ngcontent-haa-c255="" class="summary">
                                       <div _ngcontent-haa-c255="" class="subtitle-1">Sepet Özeti</div>
                                       <div _ngcontent-haa-c255="" class="mat-body-2 text-color-grey text-align-right">2 Ürün</div>
                                       <div _ngcontent-haa-c255="" class="summary-content mat-body-2">
                                          <p _ngcontent-haa-c255="">Toplam Tutar</p>
                                          <p _ngcontent-haa-c255="">6.668,90 TL</p>
                                          <!---->
                                          <div _ngcontent-haa-c255="" class="discounts">
                                             <p _ngcontent-haa-c255="" class="ng-star-inserted">Migros İndirimi</p>
                                             <p _ngcontent-haa-c255="" class="ng-star-inserted">-630,00 TL</p>
                                             <!----><!----><!----><!----><!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <div _ngcontent-haa-c255="" class="subtitle-1">Ödenecek Tutar</div>
                                       <div _ngcontent-haa-c255="" class="subtitle-1 text-align-right">6.011,91 TL</div>
                                    </div>
                                    <mat-divider _ngcontent-haa-c255="" role="separator" class="mat-divider mat-divider-horizontal" aria-orientation="horizontal"></mat-divider>
                                    <mat-divider _ngcontent-haa-c256="" role="separator" class="mat-divider mat-divider-horizontal" aria-orientation="horizontal"></mat-divider>
                                    <button _ngcontent-haa-c256="" id="checkout-summary-desktop-confirm-button" mat-flat-button="" color="primary" feappclickthrottle="" class="confirm-button mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-primary mat-mdc-button-base"><span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span><span class="mdc-button__label"> Devam Et </span><span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span></button>
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