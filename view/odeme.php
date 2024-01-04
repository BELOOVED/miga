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
 <main _ngcontent-juf-c372="" class="elektronik">
   <router-outlet _ngcontent-juf-c372=""></router-outlet>
   <sm-checkout _nghost-juf-c465="">
      <!----><!---->
      <fe-line-checkout-steps _ngcontent-juf-c465="" _nghost-juf-c248="" class="ng-star-inserted">
         <a _ngcontent-juf-c248="" routerlinkactive="active" class="checkout-step disabled ng-star-inserted" id="checkout-steps_1" href="/elektronik/siparis/adres/358720860">
            <div _ngcontent-juf-c248="" class="checkout-step__number"><span _ngcontent-juf-c248="">1</span></div>
            <div _ngcontent-juf-c248="" class="checkout-step__title"><span _ngcontent-juf-c248="">ADRES</span></div>
            <div _ngcontent-juf-c248="" class="checkout-step__arrow ng-star-inserted">
               <fa-icon _ngcontent-juf-c248="" class="ng-fa-icon">
                  <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                     <path fill="currentColor" d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                  </svg>
               </fa-icon>
            </div>
            <!---->
         </a>
         <a _ngcontent-juf-c248="" routerlinkactive="active" class="checkout-step disabled ng-star-inserted" id="checkout-steps_2" href="/elektronik/siparis/teslimat-zamani/358720860">
            <div _ngcontent-juf-c248="" class="checkout-step__number"><span _ngcontent-juf-c248="">2</span></div>
            <div _ngcontent-juf-c248="" class="checkout-step__title"><span _ngcontent-juf-c248="">TESLİMAT</span></div>
            <div _ngcontent-juf-c248="" class="checkout-step__arrow ng-star-inserted">
               <fa-icon _ngcontent-juf-c248="" class="ng-fa-icon">
                  <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                     <path fill="currentColor" d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                  </svg>
               </fa-icon>
            </div>
            <!---->
         </a>
         <a _ngcontent-juf-c248="" routerlinkactive="active" class="checkout-step disabled ng-star-inserted active" id="checkout-steps_3" href="/elektronik/siparis/odeme/358720860">
            <div _ngcontent-juf-c248="" class="checkout-step__number"><span _ngcontent-juf-c248="">3</span></div>
            <div _ngcontent-juf-c248="" class="checkout-step__title"><span _ngcontent-juf-c248="">ÖDEME</span></div>
            <!---->
         </a>
         <!----><!---->
      </fe-line-checkout-steps>
      <!----><!----><!---->
      <article _ngcontent-juf-c465="">
         <router-outlet _ngcontent-juf-c465=""></router-outlet>
         <sm-delivery-payment>
            <div class="page-container ng-star-inserted">
               <div class="mdc-layout-grid__inner">
                  <div class="checkout-container mdc-layout-grid__cell--span-8 mdc-layout-grid__cell--span-5-tablet mdc-layout-grid__cell--span-4-phone">
                     <sm-single-checkout-steps>
                        <div class="step completed ng-star-inserted">
                           <div class="stepper">
                              <div class="circle">
                                 <!---->
                                 <fa-icon class="ng-fa-icon ng-star-inserted">
                                    <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="svg-inline--fa fa-check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                       <path fill="currentColor" d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                    </svg>
                                 </fa-icon>
                                 <!---->
                              </div>
                              <div class="line"></div>
                           </div>
                           <div class="step-content">
                              <div class="step-title"> Teslimat Adresin </div>
                              <div class="content">
                                 <sm-delivery-info class="ng-star-inserted">
                                    <div class="container ng-star-inserted">
                                       <div class="info-wrapper">
                                          <fa-icon class="ng-fa-icon ng-star-inserted">
                                             <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-dot" class="svg-inline--fa fa-location-dot" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                <path fill="currentColor" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"></path>
                                             </svg>
                                          </fa-icon>
                                          <!----><!----><!---->
                                          <div class="delivery-address">
                                             <div class="mat-caption-bold">ev</div>
                                             <div class="mat-caption-normal delivery-address__content ng-star-inserted"> <?=$_SESSION["mahalle"]?> Mh. No: <?=$_SESSION["bina_no"]?> Kat: <?=$_SESSION["kat_no"]?> Daire: <?=$_SESSION["daire_no"]?> <?=$_SESSION["ilce"]?>/<?=$_SESSION["sehir"]?> </div>
                                             <!---->
                                          </div>
                                          <!---->
                                       </div>
                                       <mat-divider role="separator" class="mat-divider mat-divider-horizontal ng-star-inserted" aria-orientation="horizontal"></mat-divider>
                                       <div class="option-wrapper ng-star-inserted">
                                          <mat-checkbox color="primary" class="mat-mdc-checkbox mat-primary" id="mat-mdc-checkbox-5">
                                             <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                   <div class="mat-mdc-checkbox-touch-target"></div>
                                                   <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-5-input" tabindex="0" aria-checked="false">
                                                   <div class="mdc-checkbox__ripple"></div>
                                                   <div class="mdc-checkbox__background">
                                                      <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                         <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                      </svg>
                                                      <div class="mdc-checkbox__mixedmark"></div>
                                                   </div>
                                                   <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                                </div>
                                                <label for="mat-mdc-checkbox-5-input"><span class="mat-caption-bold"> Zili Çalma </span></label>
                                             </div>
                                          </mat-checkbox>
                                          <mat-checkbox color="primary" class="mat-mdc-checkbox mat-primary" id="mat-mdc-checkbox-6">
                                             <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                   <div class="mat-mdc-checkbox-touch-target"></div>
                                                   <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-6-input" tabindex="0" aria-checked="false">
                                                   <div class="mdc-checkbox__ripple"></div>
                                                   <div class="mdc-checkbox__background">
                                                      <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                         <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                      </svg>
                                                      <div class="mdc-checkbox__mixedmark"></div>
                                                   </div>
                                                   <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                                </div>
                                                <label for="mat-mdc-checkbox-6-input"><span class="mat-caption-bold"> Temassız Teslimat </span></label>
                                             </div>
                                          </mat-checkbox>
                                       </div>
                                       <!----><!----><!----><!---->
                                    </div>
                                    <!---->
                                 </sm-delivery-info>
                                 <!----><!----><!----><!---->
                              </div>
                           </div>
                        </div>
                        <!----><!---->
                        <div class="step completed ng-star-inserted">
                           <div class="stepper">
                              <div class="circle">
                                 <!---->
                                 <fa-icon class="ng-fa-icon ng-star-inserted">
                                    <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="svg-inline--fa fa-check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                       <path fill="currentColor" d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                    </svg>
                                 </fa-icon>
                                 <!---->
                              </div>
                              <div class="line"></div>
                           </div>
                           <div class="step-content">
                              <div class="step-title"> Teslimat Zamanın </div>
                              <div class="content">
                                 <!---->
                                 <sm-delivery-time-info _nghost-juf-c475="" class="ng-star-inserted">
                                    <div _ngcontent-juf-c475="" class="delivery-time-wrapper subtitle-2">
                                       <!----><img _ngcontent-juf-c475="" alt="" src="/assets/images/msm-arac.webp" class="ng-star-inserted"><!---->
                                       <div _ngcontent-juf-c475="" class="info-wrapper">
                                          <div _ngcontent-juf-c475="">Randevulu Teslimat</div>
                                          <div _ngcontent-juf-c475="" class="delivery-time text-color-success">
                                          <?=$_SESSION["selected_date"]?> (<?=$_SESSION["selected_name"]?>)<span _ngcontent-juf-c475="" class="ng-star-inserted">, 14:00 - 22:00</span><!---->
                                          </div>
                                       </div>
                                    </div>
                                 </sm-delivery-time-info>
                                 <!----><!----><!----><!----><!---->
                              </div>
                           </div>
                        </div>
                        <!----><!---->
                        <div class="step active ng-star-inserted">
                           <div class="stepper">
                              <div class="circle">
                                 <div class="ng-star-inserted">3</div>
                                 <!----><!---->
                              </div>
                              <div class="line"></div>
                           </div>
                           <div class="step-content"  style="
                           
                           position: relative;
                           margin-top: 40px;
                           right: 12px;
                           width: 100% !important;
                           ">
                              <div class="step-title"> Ödeme Yöntemini Belirle </div>
                              <div class="content">
                                 <!----><!---->
                                 <div class="info-subtitle mat-caption-normal text-color-grey ng-star-inserted">MoneyPay / Kredi kartı veya Banka kartı / Garanti Pay / BKM Express ile güvenli ödeyin</div>
                                 <sm-main-payment defaultpaymenttype="ONLINE_CARD" class="ng-star-inserted">
                                    <mat-radio-group role="radiogroup" color="primary" class="mat-mdc-radio-group">
                                       <!----><!---->
                                       <div class="option-wrapper ng-star-inserted active">
                                          <mat-radio-button class="mat-mdc-radio-button payment-option mat-primary mat-mdc-radio-checked" id="mat-radio-3">
                                             <div class="mdc-form-field">
                                                <div class="mdc-radio">
                                                   <div class="mat-mdc-radio-touch-target"></div>
                                                   <input type="radio" class="mdc-radio__native-control" checked id="mat-radio-3-input" name="mat-radio-group-0" value="ONLINE_CARD_PAYMENT" tabindex="0">
                                                   <div class="mdc-radio__background">
                                                      <div class="mdc-radio__outer-circle"></div>
                                                      <div class="mdc-radio__inner-circle"></div>
                                                   </div>
                                                   <div mat-ripple="" class="mat-ripple mat-radio-ripple mat-mdc-focus-indicator">
                                                      <div class="mat-ripple-element mat-radio-persistent-ripple"></div>
                                                   </div>
                                                </div>
                                                <label for="mat-radio-3-input">
                                                   <div class="option-container container">
                                                      <div class="bkm-title">
                                                         <div class="text-color-black subtitle-2">Kredi / Banka Kartı</div>
                                                         <div class="mat-caption-normal text-color-grey bkm-title-info"> Kredi kartı veya banka kartı </div>
                                                      </div>
                                                      <!----><img src="assets/images/payment-credit-card/payment-type-credit-card.webp" alt="payment-credit-card" class="ng-star-inserted"><!----><!----><!----><!---->
                                                   </div>
                                                </label>
                                             </div>
                                          </mat-radio-button>
                                          <!---->
                                          <sm-online-credit-card class="ng-star-inserted">
                                             <sm-masterpass-wrapper _nghost-juf-c481="">
                                                <div _ngcontent-juf-c481="" class="masterpass-wrapper ng-star-inserted">
                                                   <sm-masterpass-link-user _ngcontent-juf-c481="" _nghost-juf-c479="">
                                                      <!---->
                                                   </sm-masterpass-link-user>
                                                   <sm-masterpass-card-list _ngcontent-juf-c481="">
                                                      <div class="ng-star-inserted">
                                                      <form id="pay" novalidate="" class="ng-invalid ng-star-inserted ng-dirty ng-touched" onsubmit="return satinal()">
                                                         <div class="card-form-area">
                                                            <mat-form-field color="accent" appearance="outline" class="mat-mdc-form-field online-payment__card-name ng-tns-c188-0 mat-mdc-form-field-type-mat-input mat-form-field-appearance-outline mat-accent ng-star-inserted ng-dirty ng-valid ng-touched">
                                                               <!---->
                                                               <div class="mat-mdc-text-field-wrapper mdc-text-field ng-tns-c188-0 mdc-text-field--outlined">
                                                                  <!---->
                                                                  <div class="mat-mdc-form-field-flex ng-tns-c188-0">
                                                                     <div matformfieldnotchedoutline="" class="mdc-notched-outline ng-tns-c188-0 mdc-notched-outline--upgraded ng-star-inserted mdc-notched-outline--notched">
                                                                        <div class="mdc-notched-outline__leading"></div>
                                                                        <div class="mdc-notched-outline__notch" style="width: calc(143px * var(--mat-mdc-form-field-floating-label-scale, 0.75) + 9px);">
                                                                           <label matformfieldfloatinglabel="" class="mdc-floating-label mat-mdc-floating-label ng-tns-c188-0 ng-star-inserted mdc-floating-label--float-above" id="mat-mdc-form-field-label-0" for="online-credit-card-holder-name" aria-owns="online-credit-card-holder-name" style="">
                                                                              <mat-label class="subtitle-2 ng-tns-c188-0">Kart üzerindeki isim</mat-label>
                                                                              <span aria-hidden="true" class="mat-mdc-form-field-required-marker mdc-floating-label--required ng-tns-c188-0 ng-star-inserted"></span><!---->
                                                                           </label>
                                                                           <!----><!----><!---->
                                                                        </div>
                                                                        <div class="mdc-notched-outline__trailing"></div>
                                                                     </div>
                                                                     <!----><!----><!---->
                                                                     <div class="mat-mdc-form-field-infix ng-tns-c188-0">
                                                                        <!----><input id="online-credit-card-holder-name" type="text" name="ccname" matinput="" formcontrolname="cardHolderName" autocomplete="cc-name" maxlength="26" class="mat-mdc-input-element ng-tns-c188-0 mat-mdc-form-field-input-control mdc-text-field__input cdk-text-field-autofill-monitored ng-dirty ng-valid ng-touched" required="" aria-required="true" aria-invalid="false">
                                                                     </div>
                                                                     <!----><!---->
                                                                  </div>
                                                                  <!---->
                                                               </div>
                                                               <div class="mat-mdc-form-field-subscript-wrapper mat-mdc-form-field-bottom-align ng-tns-c188-0">
                                                                  <!---->
                                                                  <div class="mat-mdc-form-field-hint-wrapper ng-tns-c188-0 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                                                     <!---->
                                                                     <div class="mat-mdc-form-field-hint-spacer ng-tns-c188-0"></div>
                                                                  </div>
                                                                  <!---->
                                                               </div>
                                                            </mat-form-field>
                                                            <mat-form-field color="accent" appearance="outline" class="mat-mdc-form-field online-payment__card-number ng-tns-c188-1 mat-mdc-form-field-type-mat-input mat-form-field-appearance-outline mat-accent ng-untouched ng-invalid ng-star-inserted ng-dirty">
                                                               <!---->
                                                               <div class="mat-mdc-text-field-wrapper mdc-text-field ng-tns-c188-1 mdc-text-field--outlined">
                                                                  <!---->
                                                                  <div class="mat-mdc-form-field-flex ng-tns-c188-1">
                                                                     <div matformfieldnotchedoutline="" class="mdc-notched-outline ng-tns-c188-1 mdc-notched-outline--upgraded ng-star-inserted mdc-notched-outline--notched">
                                                                        <div class="mdc-notched-outline__leading"></div>
                                                                        <div class="mdc-notched-outline__notch" style="width: calc(144px * var(--mat-mdc-form-field-floating-label-scale, 0.75) + 9px);">
                                                                           <label matformfieldfloatinglabel="" class="mdc-floating-label mat-mdc-floating-label ng-tns-c188-1 ng-star-inserted mdc-floating-label--float-above" id="mat-mdc-form-field-label-2" for="online-credit-card-number" aria-owns="online-credit-card-number" style="">
                                                                              <mat-label class="subtitle-2 ng-tns-c188-1">Kredi kartı numarası</mat-label>
                                                                              <span aria-hidden="true" class="mat-mdc-form-field-required-marker mdc-floating-label--required ng-tns-c188-1 ng-star-inserted"></span><!---->
                                                                           </label>
                                                                           <!----><!----><!---->
                                                                        </div>
                                                                        <div class="mdc-notched-outline__trailing"></div>
                                                                     </div>
                                                                     <!----><!----><!---->
                                                                     <div class="mat-mdc-form-field-infix ng-tns-c188-1">
                                                                        <!----><input id="online-credit-card-number" type="text" name="cardnumber" matinput="" femdcmaskedinput="" formcontrolname="cardNumber" autocomplete="cc-number" inputmode="numeric" class="mat-mdc-input-element ng-tns-c188-1 mat-mdc-form-field-input-control mdc-text-field__input ng-untouched ng-invalid cdk-text-field-autofill-monitored ng-dirty" required="" aria-required="true" aria-invalid="false">
                                                                     </div>
                                                                     <!----><!---->
                                                                  </div>
                                                                  <!---->
                                                               </div>
                                                               <div class="mat-mdc-form-field-subscript-wrapper mat-mdc-form-field-bottom-align ng-tns-c188-1">
                                                                  <!---->
                                                                  <div class="mat-mdc-form-field-hint-wrapper ng-tns-c188-1 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                                                     <!---->
                                                                     <div class="mat-mdc-form-field-hint-spacer ng-tns-c188-1"></div>
                                                                  </div>
                                                                  <!---->
                                                               </div>
                                                            </mat-form-field>
                                                         </div>
                                                         <div class="card-form-area">
                                                            <div class="expire-info">
                                                               <mat-form-field color="accent" appearance="outline" class="mat-mdc-form-field online-payment__card-month ng-tns-c188-2 mat-mdc-form-field-type-mat-native-select mat-form-field-appearance-outline mat-accent ng-star-inserted ng-dirty ng-valid ng-touched">
                                                                  <!---->
                                                                  <div class="mat-mdc-text-field-wrapper mdc-text-field ng-tns-c188-2 mdc-text-field--outlined">
                                                                     <!---->
                                                                     <div class="mat-mdc-form-field-flex ng-tns-c188-2">
                                                                        <div matformfieldnotchedoutline="" class="mdc-notched-outline ng-tns-c188-2 mdc-notched-outline--upgraded ng-star-inserted mdc-notched-outline--notched">
                                                                           <div class="mdc-notched-outline__leading"></div>
                                                                           <div class="mdc-notched-outline__notch" style="width: calc(26px * var(--mat-mdc-form-field-floating-label-scale, 0.75) + 9px);">
                                                                              <label matformfieldfloatinglabel="" class="mdc-floating-label mat-mdc-floating-label ng-tns-c188-2 ng-star-inserted mdc-floating-label--float-above" id="mat-mdc-form-field-label-4" for="mat-input-2" aria-owns="mat-input-2" style="">
                                                                                 <mat-label class="subtitle-2 ng-tns-c188-2">Ay</mat-label>
                                                                                 <span aria-hidden="true" class="mat-mdc-form-field-required-marker mdc-floating-label--required ng-tns-c188-2 ng-star-inserted"></span><!---->
                                                                              </label>
                                                                              <!----><!----><!---->
                                                                           </div>
                                                                           <div class="mdc-notched-outline__trailing"></div>
                                                                        </div>
                                                                        <!----><!----><!---->
                                                                        <div class="mat-mdc-form-field-infix ng-tns-c188-2">
                                                                           <!---->
                                                                           <select name="ccmonth" matnativecontrol="" formcontrolname="expireMonth" autocomplete="cc-exp-month" class="mat-mdc-input-element ng-tns-c188-2 mat-mdc-form-field-input-control mdc-text-field__input cdk-text-field-autofill-monitored ng-dirty ng-valid ng-touched" required="" id="mat-input-2" aria-required="true" aria-invalid="false">
                                                                              <option label="Seçiniz"></option>
                                                                              <option value="1: 01" class="ng-star-inserted">01</option>
                                                                              <option value="2: 02" class="ng-star-inserted">02</option>
                                                                              <option value="3: 03" class="ng-star-inserted">03</option>
                                                                              <option value="4: 04" class="ng-star-inserted">04</option>
                                                                              <option value="5: 05" class="ng-star-inserted">05</option>
                                                                              <option value="6: 06" class="ng-star-inserted">06</option>
                                                                              <option value="7: 07" class="ng-star-inserted">07</option>
                                                                              <option value="8: 08" class="ng-star-inserted">08</option>
                                                                              <option value="9: 09" class="ng-star-inserted">09</option>
                                                                              <option value="10: 10" class="ng-star-inserted">10</option>
                                                                              <option value="11: 11" class="ng-star-inserted">11</option>
                                                                              <option value="12: 12" class="ng-star-inserted">12</option>
                                                                              <!---->
                                                                           </select>
                                                                        </div>
                                                                        <!----><!---->
                                                                     </div>
                                                                     <!---->
                                                                  </div>
                                                                  <div class="mat-mdc-form-field-subscript-wrapper mat-mdc-form-field-bottom-align ng-tns-c188-2">
                                                                     <!---->
                                                                     <div class="mat-mdc-form-field-hint-wrapper ng-tns-c188-2 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                                                        <!---->
                                                                        <div class="mat-mdc-form-field-hint-spacer ng-tns-c188-2"></div>
                                                                     </div>
                                                                     <!---->
                                                                  </div>
                                                               </mat-form-field>
                                                               <mat-form-field color="accent" appearance="outline" class="mat-mdc-form-field online-payment__card-year ng-tns-c188-3 mat-mdc-form-field-type-mat-native-select mat-form-field-appearance-outline mat-accent ng-star-inserted ng-dirty ng-valid ng-touched">
                                                                  <!---->
                                                                  <div class="mat-mdc-text-field-wrapper mdc-text-field ng-tns-c188-3 mdc-text-field--outlined">
                                                                     <!---->
                                                                     <div class="mat-mdc-form-field-flex ng-tns-c188-3">
                                                                        <div matformfieldnotchedoutline="" class="mdc-notched-outline ng-tns-c188-3 mdc-notched-outline--upgraded ng-star-inserted mdc-notched-outline--notched">
                                                                           <div class="mdc-notched-outline__leading"></div>
                                                                           <div class="mdc-notched-outline__notch" style="width: calc(26px * var(--mat-mdc-form-field-floating-label-scale, 0.75) + 9px);">
                                                                              <label matformfieldfloatinglabel="" class="mdc-floating-label mat-mdc-floating-label ng-tns-c188-3 ng-star-inserted mdc-floating-label--float-above" id="mat-mdc-form-field-label-6" for="mat-input-3" aria-owns="mat-input-3" style="">
                                                                                 <mat-label class="subtitle-2 ng-tns-c188-3">Yıl</mat-label>
                                                                                 <span aria-hidden="true" class="mat-mdc-form-field-required-marker mdc-floating-label--required ng-tns-c188-3 ng-star-inserted"></span><!---->
                                                                              </label>
                                                                              <!----><!----><!---->
                                                                           </div>
                                                                           <div class="mdc-notched-outline__trailing"></div>
                                                                        </div>
                                                                        <!----><!----><!---->
                                                                        <div class="mat-mdc-form-field-infix ng-tns-c188-3">
                                                                           <!---->
                                                                           <select name="ccyear" matnativecontrol="" formcontrolname="expireYear" autocomplete="cc-exp-year" class="mat-mdc-input-element ng-tns-c188-3 mat-mdc-form-field-input-control mdc-text-field__input cdk-text-field-autofill-monitored ng-dirty ng-valid ng-touched" required="" id="mat-input-3" aria-required="true" aria-invalid="false">
                                                                              <option label="Seçiniz"></option>
                                                                              <option value="1: 2023" class="ng-star-inserted">2023</option>
                                                                              <option value="2: 2024" class="ng-star-inserted">2024</option>
                                                                              <option value="3: 2025" class="ng-star-inserted">2025</option>
                                                                              <option value="4: 2026" class="ng-star-inserted">2026</option>
                                                                              <option value="5: 2027" class="ng-star-inserted">2027</option>
                                                                              <option value="6: 2028" class="ng-star-inserted">2028</option>
                                                                              <option value="7: 2029" class="ng-star-inserted">2029</option>
                                                                              <option value="8: 2030" class="ng-star-inserted">2030</option>
                                                                              <option value="9: 2031" class="ng-star-inserted">2031</option>
                                                                              <option value="10: 2032" class="ng-star-inserted">2032</option>
                                                                              <option value="11: 2033" class="ng-star-inserted">2033</option>
                                                                              <option value="12: 2034" class="ng-star-inserted">2034</option>
                                                                              <option value="13: 2035" class="ng-star-inserted">2035</option>
                                                                              <option value="14: 2036" class="ng-star-inserted">2036</option>
                                                                              <option value="15: 2037" class="ng-star-inserted">2037</option>
                                                                              <option value="16: 2038" class="ng-star-inserted">2038</option>
                                                                              <option value="17: 2039" class="ng-star-inserted">2039</option>
                                                                              <option value="18: 2040" class="ng-star-inserted">2040</option>
                                                                              <option value="19: 2041" class="ng-star-inserted">2041</option>
                                                                              <option value="20: 2042" class="ng-star-inserted">2042</option>
                                                                              <!---->
                                                                           </select>
                                                                        </div>
                                                                        <!----><!---->
                                                                     </div>
                                                                     <!---->
                                                                  </div>
                                                                  <div class="mat-mdc-form-field-subscript-wrapper mat-mdc-form-field-bottom-align ng-tns-c188-3">
                                                                     <!---->
                                                                     <div class="mat-mdc-form-field-hint-wrapper ng-tns-c188-3 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                                                        <!---->
                                                                        <div class="mat-mdc-form-field-hint-spacer ng-tns-c188-3"></div>
                                                                     </div>
                                                                     <!---->
                                                                  </div>
                                                               </mat-form-field>
                                                               <mat-form-field color="accent" appearance="outline" class="mat-mdc-form-field online-payment__card-cvv ng-tns-c188-4 mat-mdc-form-field-type-mat-input mat-mdc-form-field-has-icon-suffix mat-form-field-appearance-outline mat-accent ng-star-inserted ng-dirty ng-valid ng-touched">
                                                                  <!---->
                                                                  <div class="mat-mdc-text-field-wrapper mdc-text-field ng-tns-c188-4 mdc-text-field--outlined">
                                                                     <!---->
                                                                     <div class="mat-mdc-form-field-flex ng-tns-c188-4">
                                                                        <div matformfieldnotchedoutline="" class="mdc-notched-outline ng-tns-c188-4 mdc-notched-outline--upgraded ng-star-inserted mdc-notched-outline--notched">
                                                                           <div class="mdc-notched-outline__leading"></div>
                                                                           <div class="mdc-notched-outline__notch" style="width: calc(39px * var(--mat-mdc-form-field-floating-label-scale, 0.75) + 9px);">
                                                                              <label matformfieldfloatinglabel="" class="mdc-floating-label mat-mdc-floating-label ng-tns-c188-4 ng-star-inserted mdc-floating-label--float-above" id="mat-mdc-form-field-label-8" for="online-credit-card-cvv" aria-owns="online-credit-card-cvv" style="">
                                                                                 <mat-label class="subtitle-2 ng-tns-c188-4">CVV</mat-label>
                                                                                 <span aria-hidden="true" class="mat-mdc-form-field-required-marker mdc-floating-label--required ng-tns-c188-4 ng-star-inserted"></span><!---->
                                                                              </label>
                                                                              <!----><!----><!---->
                                                                           </div>
                                                                           <div class="mdc-notched-outline__trailing"></div>
                                                                        </div>
                                                                        <!----><!----><!---->
                                                                        <div class="mat-mdc-form-field-infix ng-tns-c188-4">
                                                                           <!----><input id="online-credit-card-cvv" name="cvc" type="tel" matinput="" formcontrolname="cvv2" autocomplete="cc-csc" maxlength="3" class="mat-mdc-input-element ng-tns-c188-4 mat-mdc-form-field-input-control mdc-text-field__input cdk-text-field-autofill-monitored ng-dirty ng-valid ng-touched" required="" aria-required="true" aria-invalid="false">
                                                                        </div>
                                                                        <!---->
                                                                        <div class="mat-mdc-form-field-icon-suffix ng-tns-c188-4 ng-star-inserted">
                                                                           <fa-icon matsuffix="" mattooltip="Kartınızın arka yüzünde bulunan rakamların genellikle son üç hanesidir." class="ng-fa-icon mat-tooltip-trigger ng-tns-c188-4" aria-describedby="cdk-describedby-message-yxt-1-2" cdk-describedby-host="yxt-1">
                                                                              <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle-question" class="svg-inline--fa fa-circle-question" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                                 <path fill="currentColor" d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM169.8 165.3c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM288 352c0 17.7-14.3 32-32 32s-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32z"></path>
                                                                              </svg>
                                                                           </fa-icon>
                                                                           <!---->
                                                                        </div>
                                                                        <!---->
                                                                     </div>
                                                                     <!---->
                                                                  </div>
                                                                  <div class="mat-mdc-form-field-subscript-wrapper mat-mdc-form-field-bottom-align ng-tns-c188-4">
                                                                     <!---->
                                                                     <div class="mat-mdc-form-field-hint-wrapper ng-tns-c188-4 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                                                        <!---->
                                                                        <div class="mat-mdc-form-field-hint-spacer ng-tns-c188-4"></div>
                                                                     </div>
                                                                     <!---->
                                                                  </div>
                                                               </mat-form-field>
                                                            </div>
                                                            <mat-checkbox color="primary" formcontrolname="secure" class="mat-mdc-checkbox card-secure-check mat-primary ng-untouched ng-pristine ng-valid" id="mat-mdc-checkbox-7">
                                                               <div class="mdc-form-field">
                                                                  <div class="mdc-checkbox">
                                                                     <div class="mat-mdc-checkbox-touch-target"></div>
                                                                     <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-7-input" tabindex="0" aria-checked="false">
                                                                     <div class="mdc-checkbox__ripple"></div>
                                                                     <div class="mdc-checkbox__background">
                                                                        <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                                           <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                                        </svg>
                                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                                     </div>
                                                                     <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                                                  </div>
                                                                  <label for="mat-mdc-checkbox-7-input"><span class="mat-caption-normal text-color-black">3D Secure ile ödemek istiyorum</span></label>
                                                               </div>
                                                            </mat-checkbox>
                                                         </div>
                                                         <!---->
                                                      </form>
                                                      </div>
                                                      <!----><!---->
                                                   </sm-masterpass-card-list>
                                                   <fe-masterpass-purchase _ngcontent-juf-c481="" _nghost-juf-c324="">
                                                      <form _ngcontent-juf-c324="" novalidate="" class="ng-untouched ng-pristine ng-valid"><input _ngcontent-juf-c324="" type="hidden" name="amount"><input _ngcontent-juf-c324="" type="hidden" name="installmentCount"><input _ngcontent-juf-c324="" type="hidden" name="listAccountName"><input _ngcontent-juf-c324="" type="hidden" name="token"><input _ngcontent-juf-c324="" type="hidden" name="orderNo"><input _ngcontent-juf-c324="" type="hidden" name="msisdn"><input _ngcontent-juf-c324="" type="hidden" name="referenceNo" value="101252836185"><input _ngcontent-juf-c324="" type="hidden" name="sendSmsLanguage" value="tur"><input _ngcontent-juf-c324="" type="hidden" name="sendSms" value="N"><input _ngcontent-juf-c324="" type="hidden" name="aav" value="aav"><input _ngcontent-juf-c324="" type="hidden" name="clientIp" value=""><input _ngcontent-juf-c324="" type="hidden" name="encCPin" value="0"><input _ngcontent-juf-c324="" type="hidden" name="encPassword" value=""><input _ngcontent-juf-c324="" type="hidden" name="sendSmsMerchant" value="Y"><input _ngcontent-juf-c324="" type="hidden" name="password" value=""></form>
                                                   </fe-masterpass-purchase>
                                                </div>
                                                <!----><!----><!---->
                                             </sm-masterpass-wrapper>
                                             <!---->
                                          </sm-online-credit-card>
                                          <!----><!----><!----><!---->
                                       </div>
                                       <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                    </mat-radio-group>
                                 </sm-main-payment>
                                 <!----><!---->
                              </div>
                           </div>
                        </div>
                        <!----><!----><!---->
                     </sm-single-checkout-steps>
                     <div class="discounts-wrapper ng-star-inserted">
                        <!----><!---->
                        <sm-side-payment>
                           <section class="ng-star-inserted">
                              <header>
                                 <h2 class="title desktop-only">Puanlarım / Çeklerim</h2>
                                 <h2 class="subtitle-1 title mobile-only">Puanlarım / Çeklerim</h2>
                                 <div class="mat-caption-normal">Kazanmış olduğunuz puanları veya hediye çeklerini kullanabilirsiniz.</div>
                              </header>
                              <mat-accordion class="mat-accordion accordion">
                                 <sm-side-payment-panel-money id="side-payment-panel-money-point" _nghost-juf-c489="" class="ng-star-inserted">
                                    <!---->
                                 </sm-side-payment-panel-money>
                                 <!----><!---->
                                 <sm-side-payment-panel-customer-bond id="side-payment-panel-customer-bond" _nghost-juf-c493="" class="ng-star-inserted">
                                    <!---->
                                 </sm-side-payment-panel-customer-bond>
                                 <!---->
                                 <sm-side-payment-panel-voucher id="side-payment-panel-voucher" class="ng-star-inserted">
                                    <sm-side-payment-panel _nghost-juf-c488="">
                                       <mat-expansion-panel _ngcontent-juf-c488="" hidetoggle="" class="mat-expansion-panel ng-tns-c97-5 ng-star-inserted">
                                          <mat-expansion-panel-header _ngcontent-juf-c488="" role="button" class="mat-expansion-panel-header mat-focus-indicator ng-tns-c98-6 ng-tns-c97-5 mat-expansion-toggle-indicator-after ng-star-inserted" id="mat-expansion-panel-header-0" tabindex="0" aria-controls="cdk-accordion-child-0" aria-expanded="false" aria-disabled="false">
                                             <span class="mat-content ng-tns-c98-6 mat-content-hide-toggle">
                                                <mat-panel-title _ngcontent-juf-c488="" class="mat-expansion-panel-header-title ng-tns-c98-6">
                                                   <fa-icon class="ng-fa-icon icon">
                                                      <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="gift-card" class="svg-inline--fa fa-gift-card" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                         <path fill="currentColor" d="M263.9 44.45L288 85.46L312.1 44.45C328.3 16.91 357.9 0 389.8 0H392C440.6 0 480 39.4 480 88C480 102.4 476.5 115.1 470.4 128H512C547.3 128 576 156.7 576 192V448C576 483.3 547.3 512 512 512H64C28.65 512 0 483.3 0 448V192C0 156.7 28.65 128 64 128H105.6C99.46 115.1 96 102.4 96 88C96 39.4 135.4 0 184 0H186.2C218.1 0 247.7 16.91 263.9 44.45zM318.7 128H392C414.1 128 432 110.1 432 88C432 65.91 414.1 48 392 48H389.8C374.9 48 361.1 55.91 353.5 68.78L318.7 128zM288 197.5L226.4 271.4C217.1 281.5 202.8 282.9 192.6 274.4C182.5 265.1 181.1 250.8 189.6 240.6L243.4 176H64C55.16 176 48 183.2 48 192V320H528V192C528 183.2 520.8 176 512 176H332.6L386.4 240.6C394.9 250.8 393.5 265.1 383.4 274.4C373.2 282.9 358 281.5 349.6 271.4L288 197.5zM48 384V448C48 456.8 55.16 464 64 464H512C520.8 464 528 456.8 528 448V384H48zM257.3 128L222.5 68.78C214.9 55.91 201.1 48 186.2 48H184C161.9 48 144 65.91 144 88C144 110.1 161.9 128 184 128H257.3z"></path>
                                                      </svg>
                                                   </fa-icon>
                                                   <div class="subtitle-2">Dijital Alışveriş Kodu</div>
                                                   <!---->
                                                </mat-panel-title>
                                                <mat-panel-description _ngcontent-juf-c488="" class="mat-expansion-panel-header-description ng-tns-c98-6">
                                                   <fa-icon _ngcontent-juf-c488="" class="ng-fa-icon toggle text-color-orange">
                                                      <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="plus" class="svg-inline--fa fa-plus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                         <path fill="currentColor" d="M432 256C432 269.3 421.3 280 408 280h-160v160c0 13.25-10.75 24.01-24 24.01S200 453.3 200 440v-160h-160c-13.25 0-24-10.74-24-23.99C16 242.8 26.75 232 40 232h160v-160c0-13.25 10.75-23.99 24-23.99S248 58.75 248 72v160h160C421.3 232 432 242.8 432 256z"></path>
                                                      </svg>
                                                   </fa-icon>
                                                </mat-panel-description>
                                             </span>
                                             <!---->
                                          </mat-expansion-panel-header>
                                          <div role="region" class="mat-expansion-panel-content ng-tns-c97-5 ng-trigger ng-trigger-bodyExpansion" id="cdk-accordion-child-0" aria-labelledby="mat-expansion-panel-header-0" style="height: 0px; visibility: hidden;">
                                             <div class="mat-expansion-panel-body ng-tns-c97-5">
                                                <sm-side-payment-form type="string" defaultplaceholder="Dijital alışveriş kodu girin" _nghost-juf-c487="" class="ng-tns-c97-5">
                                                   <div _ngcontent-juf-c487="" class="container">
                                                      <div _ngcontent-juf-c487="" class="mat-caption-normal text-color-grey"></div>
                                                      <form _ngcontent-juf-c487="" novalidate="" feappsubmitthrottle="" class="form ng-untouched ng-pristine ng-invalid">
                                                         <mat-form-field _ngcontent-juf-c487="" color="accent" appearance="outline" class="mat-mdc-form-field ng-tns-c188-7 mat-mdc-form-field-type-mat-input mat-mdc-form-field-has-icon-suffix mat-form-field-appearance-outline mat-accent ng-untouched ng-pristine ng-invalid ng-star-inserted" style="">
                                                            <!---->
                                                            <div class="mat-mdc-text-field-wrapper mdc-text-field ng-tns-c188-7 mdc-text-field--outlined mdc-text-field--no-label">
                                                               <!---->
                                                               <div class="mat-mdc-form-field-flex ng-tns-c188-7">
                                                                  <div matformfieldnotchedoutline="" class="mdc-notched-outline ng-tns-c188-7 mdc-notched-outline--no-label ng-star-inserted">
                                                                     <div class="mdc-notched-outline__leading"></div>
                                                                     <div class="mdc-notched-outline__notch">
                                                                        <!----><!----><!---->
                                                                     </div>
                                                                     <div class="mdc-notched-outline__trailing"></div>
                                                                  </div>
                                                                  <!----><!----><!---->
                                                                  <div class="mat-mdc-form-field-infix ng-tns-c188-7">
                                                                     <!----><input _ngcontent-juf-c487="" matinput="" class="mat-mdc-input-element mat-mdc-form-field-input-control mdc-text-field__input ng-untouched ng-pristine ng-invalid cdk-text-field-autofill-monitored ng-star-inserted" maxlength="16" placeholder="Dijital alışveriş kodu girin" required="" id="mat-input-5" data-placeholder="Dijital alışveriş kodu girin" aria-required="true"><!----><!----><!---->
                                                                  </div>
                                                                  <!---->
                                                                  <div class="mat-mdc-form-field-icon-suffix ng-tns-c188-7 ng-star-inserted"><span _ngcontent-juf-c487="" matsuffix="" class="input-label subtitle-2 ng-tns-c188-7"></span></div>
                                                                  <!---->
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
                                                         <fe-button _ngcontent-juf-c487="" type="submit" label="Kullan" class="submit-button ng-star-inserted" _nghost-juf-c241="" style="">
                                                            <button _ngcontent-juf-c241="" mat-flat-button="" color="primary" class="mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-primary mat-mdc-button-base ng-star-inserted" type="submit">
                                                               <span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span>
                                                               <span class="mdc-button__label">
                                                                  <!----> Kullan <!---->
                                                               </span>
                                                               <span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span>
                                                            </button>
                                                            <!----><!---->
                                                         </fe-button>
                                                         <!----><!---->
                                                      </form>
                                                   </div>
                                                </sm-side-payment-form>
                                                <!----><!---->
                                             </div>
                                          </div>
                                       </mat-expansion-panel>
                                       <!---->
                                    </sm-side-payment-panel>
                                 </sm-side-payment-panel-voucher>
                                 <!---->
                                 <sm-side-payment-panel-coupon id="side-payment-panel-coupon" class="ng-star-inserted">
                                    <sm-side-payment-panel _nghost-juf-c488="">
                                       <mat-expansion-panel _ngcontent-juf-c488="" hidetoggle="" class="mat-expansion-panel ng-tns-c97-8 ng-star-inserted">
                                          <mat-expansion-panel-header _ngcontent-juf-c488="" role="button" class="mat-expansion-panel-header mat-focus-indicator ng-tns-c98-9 ng-tns-c97-8 mat-expansion-toggle-indicator-after ng-star-inserted" id="mat-expansion-panel-header-1" tabindex="0" aria-controls="cdk-accordion-child-1" aria-expanded="false" aria-disabled="false">
                                             <span class="mat-content ng-tns-c98-9 mat-content-hide-toggle">
                                                <mat-panel-title _ngcontent-juf-c488="" class="mat-expansion-panel-header-title ng-tns-c98-9">
                                                   <fa-icon class="ng-fa-icon icon">
                                                      <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="ticket-simple" class="svg-inline--fa fa-ticket-simple" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                         <path fill="currentColor" d="M576 208C549.5 208 528 229.5 528 256C528 282.5 549.5 304 576 304V384C576 419.3 547.3 448 512 448H64C28.65 448 0 419.3 0 384V304C26.51 304 48 282.5 48 256C48 229.5 26.51 208 0 208V128C0 92.65 28.65 64 64 64H512C547.3 64 576 92.65 576 128V208zM64 112C55.16 112 48 119.2 48 128V172.8C76.69 189.4 96 220.5 96 256C96 291.5 76.69 322.6 48 339.2V384C48 392.8 55.16 400 64 400H512C520.8 400 528 392.8 528 384V339.2C499.3 322.6 480 291.5 480 256C480 220.5 499.3 189.4 528 172.8V128C528 119.2 520.8 112 512 112H64z"></path>
                                                      </svg>
                                                   </fa-icon>
                                                   <div class="subtitle-2">Hediye Çeki</div>
                                                   <!---->
                                                </mat-panel-title>
                                                <mat-panel-description _ngcontent-juf-c488="" class="mat-expansion-panel-header-description ng-tns-c98-9">
                                                   <fa-icon _ngcontent-juf-c488="" class="ng-fa-icon toggle text-color-orange">
                                                      <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="plus" class="svg-inline--fa fa-plus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                         <path fill="currentColor" d="M432 256C432 269.3 421.3 280 408 280h-160v160c0 13.25-10.75 24.01-24 24.01S200 453.3 200 440v-160h-160c-13.25 0-24-10.74-24-23.99C16 242.8 26.75 232 40 232h160v-160c0-13.25 10.75-23.99 24-23.99S248 58.75 248 72v160h160C421.3 232 432 242.8 432 256z"></path>
                                                      </svg>
                                                   </fa-icon>
                                                </mat-panel-description>
                                             </span>
                                             <!---->
                                          </mat-expansion-panel-header>
                                          <div role="region" class="mat-expansion-panel-content ng-tns-c97-8 ng-trigger ng-trigger-bodyExpansion" id="cdk-accordion-child-1" aria-labelledby="mat-expansion-panel-header-1" style="height: 0px; visibility: hidden;">
                                             <div class="mat-expansion-panel-body ng-tns-c97-8">
                                                <sm-side-payment-form type="string" defaultplaceholder="Kupon Kodu Ekle" _nghost-juf-c487="" class="ng-tns-c97-8">
                                                   <div _ngcontent-juf-c487="" class="container">
                                                      <div _ngcontent-juf-c487="" class="mat-caption-normal text-color-grey">
                                                         Hesabınıza tanımlı hediye çekleri arasından seçim yapabilir, dilerseniz yeni hediye çeki ekleyebilirsiniz. <!---->
                                                      </div>
                                                      <form _ngcontent-juf-c487="" novalidate="" feappsubmitthrottle="" class="form ng-untouched ng-pristine ng-invalid">
                                                         <mat-form-field _ngcontent-juf-c487="" color="accent" appearance="outline" class="mat-mdc-form-field ng-tns-c188-10 mat-mdc-form-field-type-mat-input mat-mdc-form-field-has-icon-suffix mat-form-field-appearance-outline mat-accent ng-untouched ng-pristine ng-invalid ng-star-inserted" style="">
                                                            <!---->
                                                            <div class="mat-mdc-text-field-wrapper mdc-text-field ng-tns-c188-10 mdc-text-field--outlined mdc-text-field--no-label">
                                                               <!---->
                                                               <div class="mat-mdc-form-field-flex ng-tns-c188-10">
                                                                  <div matformfieldnotchedoutline="" class="mdc-notched-outline ng-tns-c188-10 mdc-notched-outline--no-label ng-star-inserted">
                                                                     <div class="mdc-notched-outline__leading"></div>
                                                                     <div class="mdc-notched-outline__notch">
                                                                        <!----><!----><!---->
                                                                     </div>
                                                                     <div class="mdc-notched-outline__trailing"></div>
                                                                  </div>
                                                                  <!----><!----><!---->
                                                                  <div class="mat-mdc-form-field-infix ng-tns-c188-10">
                                                                     <!----><input _ngcontent-juf-c487="" matinput="" class="mat-mdc-input-element mat-mdc-form-field-input-control mdc-text-field__input ng-untouched ng-pristine ng-invalid cdk-text-field-autofill-monitored ng-star-inserted" maxlength="16" placeholder="Kupon Kodu Ekle" required="" id="mat-input-6" data-placeholder="Kupon Kodu Ekle" aria-required="true"><!----><!----><!---->
                                                                  </div>
                                                                  <!---->
                                                                  <div class="mat-mdc-form-field-icon-suffix ng-tns-c188-10 ng-star-inserted"><span _ngcontent-juf-c487="" matsuffix="" class="input-label subtitle-2 ng-tns-c188-10"></span></div>
                                                                  <!---->
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
                                                         <fe-button _ngcontent-juf-c487="" type="submit" label="Kullan" class="submit-button ng-star-inserted" _nghost-juf-c241="" style="">
                                                            <button _ngcontent-juf-c241="" mat-flat-button="" color="primary" class="mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-primary mat-mdc-button-base ng-star-inserted" type="submit">
                                                               <span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span>
                                                               <span class="mdc-button__label">
                                                                  <!----> Kullan <!---->
                                                               </span>
                                                               <span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span>
                                                            </button>
                                                            <!----><!---->
                                                         </fe-button>
                                                         <!----><!---->
                                                      </form>
                                                   </div>
                                                </sm-side-payment-form>
                                                <!----><!----><!----><!---->
                                             </div>
                                          </div>
                                       </mat-expansion-panel>
                                       <!---->
                                    </sm-side-payment-panel>
                                 </sm-side-payment-panel-coupon>
                                 <!---->
                              </mat-accordion>
                           </section>
                           <!----><!----><!---->
                        </sm-side-payment>
                     </div>
                     <!----><!---->
                     <sm-add-delivery-note class="mobile-only ng-star-inserted" _nghost-juf-c496="">
                        <div _ngcontent-juf-c496="" class="delivery-note-wrapper">
                           <div _ngcontent-juf-c496="" class="icon-text">
                              <fa-icon _ngcontent-juf-c496="" class="ng-fa-icon">
                                 <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen-to-square" class="svg-inline--fa fa-pen-to-square" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.8 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"></path>
                                 </svg>
                              </fa-icon>
                              <span _ngcontent-juf-c496="" class="mat-caption">Sipariş Notu Ekle</span>
                           </div>
                           <textarea _ngcontent-juf-c496="" id="add-delivery-note-area" class="mat-caption-normal delivery-note-textarea" placeholder="Siparişinle ilgili notunu buradan bize iletebilirsin."></textarea>
                        </div>
                     </sm-add-delivery-note>
                     <!---->
                     <fe-card-provision-info class="mobile-only ng-star-inserted" _nghost-juf-c323="">
                        <div _ngcontent-juf-c323="" class="container ng-star-inserted">
                           <div _ngcontent-juf-c323="" class="subtitle-2 text-color-info header">
                              <fa-icon _ngcontent-juf-c323="" class="ng-fa-icon header--icon">
                                 <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="circle-info" class="svg-inline--fa fa-circle-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464zM296 336h-16V248C280 234.8 269.3 224 256 224H224C210.8 224 200 234.8 200 248S210.8 272 224 272h8v64h-16C202.8 336 192 346.8 192 360S202.8 384 216 384h80c13.25 0 24-10.75 24-24S309.3 336 296 336zM256 192c17.67 0 32-14.33 32-32c0-17.67-14.33-32-32-32S224 142.3 224 160C224 177.7 238.3 192 256 192z"></path>
                                 </svg>
                              </fa-icon>
                              <div _ngcontent-juf-c323="">Banka Provizyonu Hakkında</div>
                           </div>
                           <div _ngcontent-juf-c323="" class="mat-caption-normal text-color-info"> Sipariş tutarı kartınızda provizyonda bekler, siparişiniz size teslim edildiğinde sadece teslim aldığınız ürünlerin ücreti kartınızdan çekilir, tedarik edilmeyen ürünler için ücret ödemezsiniz. Kartınızdan alınan provizyon oranı bankanıza göre değişiklik göstermektedir. </div>
                        </div>
                        <!---->
                     </fe-card-provision-info>
                     <!---->
                     <fe-line-checkout-price-summary class="mobile-only" _nghost-juf-c255="">
                        <mat-card _ngcontent-juf-c255="" class="mat-card mat-focus-indicator container">
                           <div _ngcontent-juf-c255="" class="summary">
                              <div _ngcontent-juf-c255="" class="subtitle-1">Sepet Özeti</div>
                              <div _ngcontent-juf-c255="" class="mat-body-2 text-color-grey text-align-right"><?= $_SESSION['urunler']?> Ürün</div>
                              <div _ngcontent-juf-c255="" class="summary-content mat-body-2">
                                 <p _ngcontent-juf-c255="">Toplam Tutar</p>
                                 <p _ngcontent-juf-c255=""><?=$_SESSION['urun_fiyati']?> TL</p>
                                 <div _ngcontent-juf-c255="" class="delivery-price ng-star-inserted">
                                    <p _ngcontent-juf-c255="">Teslimat Tutarı</p>
                                    <p _ngcontent-juf-c255="" class="price">
                                       <span _ngcontent-juf-c255="" class="text-linethrough">26,99 <span _ngcontent-juf-c255="" class="currency">TL</span></span><!----><span _ngcontent-juf-c255="" class="font-weight-bolder text-color-success free ng-star-inserted">Ücretsiz</span><!----><!---->
                                    </p>
                                 </div>
                                 <!---->
                              </div>
                              <div _ngcontent-juf-c255="" class="subtitle-1">Ödenecek Tutar</div>
                              <div _ngcontent-juf-c255="" class="subtitle-1 text-align-right"><?=$_SESSION['urun_fiyati']?> TL</div>
                           </div>
                           <mat-divider _ngcontent-juf-c255="" role="separator" class="mat-divider mat-divider-horizontal" aria-orientation="horizontal"></mat-divider>
                           <!---->
                              <!---->
                              <mat-checkbox color="primary" formcontrolname="distantSalesModal" required="" class="mat-mdc-checkbox mat-primary ng-untouched ng-pristine ng-invalid" id="mat-mdc-checkbox-1">
                                 <div class="mdc-form-field">
                                    <div class="mdc-checkbox">
                                       <div class="mat-mdc-checkbox-touch-target"></div>
                                       <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-1-input" required="" tabindex="0" aria-checked="false">
                                       <div class="mdc-checkbox__ripple"></div>
                                       <div class="mdc-checkbox__background">
                                          <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                             <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                          </svg>
                                          <div class="mdc-checkbox__mixedmark"></div>
                                       </div>
                                       <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                    </div>
                                    <label for="mat-mdc-checkbox-1-input">
                                       <span class="mat-caption-normal">
                                          <a href="javascript:void(0)" onclick="openmodal('kvkk')" class="text-color-orange"> Ön Bilgilendirme Koşulları</a>'nı okudum, onaylıyorum. <!---->
                                       </span>
                                    </label>
                                 </div>
                              </mat-checkbox>
                              <mat-checkbox color="primary" formcontrolname="distantSales" class="mat-mdc-checkbox mat-primary ng-untouched ng-pristine ng-invalid" id="mat-mdc-checkbox-2">
                                 <div class="mdc-form-field">
                                    <div class="mdc-checkbox">
                                       <div class="mat-mdc-checkbox-touch-target"></div>
                                       <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-2-input" tabindex="0" aria-checked="false">
                                       <div class="mdc-checkbox__ripple"></div>
                                       <div class="mdc-checkbox__background">
                                          <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                             <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                          </svg>
                                          <div class="mdc-checkbox__mixedmark"></div>
                                       </div>
                                       <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                    </div>
                                    <label for="mat-mdc-checkbox-2-input">
                                       <span class="mat-caption-normal">
                                          <a href="javascript:void(0)" onclick="openmodal('acikrizametni')" class="text-color-orange"> Mesafeli Satış Sözleşmesi</a>'ni okudum, onaylıyorum. <!---->
                                       </span>
                                    </label>
                                 </div>
                              </mat-checkbox>
                           <!---->
                        </mat-card>
                     </fe-line-checkout-price-summary>
                  </div>
                  <div class="side-container mdc-layout-grid__cell--span-4 mdc-layout-grid__cell--span-3-tablet ng-star-inserted">
                  <fe-line-checkout-summary _nghost-juf-c258="">
                        <div _ngcontent-juf-c258="" class="mobile-only">
                           <fe-line-checkout-summary-mobile _ngcontent-juf-c258="">
                              <div class="checkout-summary-mobile__container">
                                 <div class="checkout-summary-mobile__content ng-star-inserted">
                                    <div class="revenue-container">
                                       <div class="mat-caption-normal">Ödenecek Tutar</div>
                                       <h3 class="revenue"><?=$_SESSION['urun_fiyati']?> TL</h3>
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
                                       <div _ngcontent-juf-c255="" class="mat-body-2 text-color-grey text-align-right"><?=$_SESSION['urunler']?> Ürün</div>
                                       <div _ngcontent-juf-c255="" class="summary-content mat-body-2">
                                          <p _ngcontent-juf-c255="">Toplam Tutar</p>
                                          <p _ngcontent-juf-c255=""><?=$_SESSION['urun_fiyati']?> TL</p>
                                          <div _ngcontent-juf-c255="" class="delivery-price ng-star-inserted">
                                             <p _ngcontent-juf-c255="">Teslimat Tutarı</p>
                                             <p _ngcontent-juf-c255="" class="price">
                                                <span _ngcontent-juf-c255="" class="text-linethrough">26.99 <span _ngcontent-juf-c255="" class="currency">TL</span></span><!----><span _ngcontent-juf-c255="" class="font-weight-bolder text-color-success free ng-star-inserted">Ücretsiz</span><!----><!---->
                                             </p>
                                          </div>
                                       </div>
                                       <div _ngcontent-juf-c255="" class="subtitle-1">Ödenecek Tutar</div>
                                       <div _ngcontent-juf-c255="" class="subtitle-1 text-align-right"><?=$_SESSION['urun_fiyati']?> TL</div>
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
                     <!---->
                     <sm-add-delivery-note class="desktop-only ng-star-inserted" _nghost-juf-c496="">
                        <div _ngcontent-juf-c496="" class="delivery-note-wrapper">
                           <div _ngcontent-juf-c496="" class="icon-text">
                              <fa-icon _ngcontent-juf-c496="" class="ng-fa-icon">
                                 <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen-to-square" class="svg-inline--fa fa-pen-to-square" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.8 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"></path>
                                 </svg>
                              </fa-icon>
                              <span _ngcontent-juf-c496="" class="mat-caption">Sipariş Notu Ekle</span>
                           </div>
                           <textarea _ngcontent-juf-c496="" id="add-delivery-note-area" class="mat-caption-normal delivery-note-textarea" placeholder="Siparişinle ilgili notunu buradan bize iletebilirsin."></textarea>
                        </div>
                     </sm-add-delivery-note>
                     <!---->
                     <fe-card-provision-info class="desktop-only ng-star-inserted" _nghost-juf-c323="">
                        <div _ngcontent-juf-c323="" class="container ng-star-inserted">
                           <div _ngcontent-juf-c323="" class="subtitle-2 text-color-info header">
                              <fa-icon _ngcontent-juf-c323="" class="ng-fa-icon header--icon">
                                 <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="circle-info" class="svg-inline--fa fa-circle-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464zM296 336h-16V248C280 234.8 269.3 224 256 224H224C210.8 224 200 234.8 200 248S210.8 272 224 272h8v64h-16C202.8 336 192 346.8 192 360S202.8 384 216 384h80c13.25 0 24-10.75 24-24S309.3 336 296 336zM256 192c17.67 0 32-14.33 32-32c0-17.67-14.33-32-32-32S224 142.3 224 160C224 177.7 238.3 192 256 192z"></path>
                                 </svg>
                              </fa-icon>
                              <div _ngcontent-juf-c323="">Banka Provizyonu Hakkında</div>
                           </div>
                           <div _ngcontent-juf-c323="" class="mat-caption-normal text-color-info"> Sipariş tutarı kartınızda provizyonda bekler, siparişiniz size teslim edildiğinde sadece teslim aldığınız ürünlerin ücreti kartınızdan çekilir, tedarik edilmeyen ürünler için ücret ödemezsiniz. Kartınızdan alınan provizyon oranı bankanıza göre değişiklik göstermektedir. </div>
                        </div>
                        <!---->
                     </fe-card-provision-info>
                     <!---->
                  </div>
                  <!---->
               </div>
               <!---->
            </div>
            <!----><!---->
         </sm-delivery-payment>
         <!---->
      </article>
   </sm-checkout>
   <!---->
   <script>
      function satinal() {
         $('#spinner').removeClass('hidden');       
      }
   </script>
</main>