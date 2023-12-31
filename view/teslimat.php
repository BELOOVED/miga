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
                                 <button class="day-wrapper ng-star-inserted" onclick="preev(1)" id="1">
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
                                 <button class="day-wrapper ng-star-inserted selected" onclick="neext(2)" id="2">
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
                                 <button class="day-wrapper ng-star-inserted" onclick="neext(3)" id="3">
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
                                 <button class="day-wrapper ng-star-inserted" onclick="neext(4)" id="4">
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
                              <div id="time-slot-selector_wrapper1" class="time-slots-wrapper fade-animation hidden">
                                <!---->
                                <div class="time-slot disabled info ng-star-inserted">
                                    <div class="info-icon">
                                        <fa-icon class="ng-fa-icon">
                                            <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="circle-info" class="svg-inline--fa fa-circle-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor" d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464zM296 336h-16V248C280 234.8 269.3 224 256 224H224C210.8 224 200 234.8 200 248S210.8 272 224 272h8v64h-16C202.8 336 192 346.8 192 360S202.8 384 216 384h80c13.25 0 24-10.75 24-24S309.3 336 296 336zM256 192c17.67 0 32-14.33 32-32c0-17.67-14.33-32-32-32S224 142.3 224 160C224 177.7 238.3 192 256 192z"></path>
                                            </svg>
                                        </fa-icon>
                                    </div>
                                    <div class="message mat-caption"><span> <?php
                                                header('Content-Type: text/html; charset=utf-8');

                                                setlocale(LC_TIME, 'tr_TR.UTF-8', 'tr_TR', 'tr', 'turkish');
                                                $bugun = new DateTime('now');
                                                $sonrakiGun = clone $bugun;
                                                $sonrakiGun->modify('+0 day');
                                                $sonrakiGunAyAdi = strftime('%B', $sonrakiGun->getTimestamp());
                                                $sonrakiGunAdi = strftime('%e', $sonrakiGun->getTimestamp());
                                                $sonrakiGunAdi1 = strftime('%A', $sonrakiGun->getTimestamp());
                                                echo $sonrakiGunAdi . ' ';
                                                echo $sonrakiGunAyAdi . ' ';
                                                echo $sonrakiGunAdi1;
                                                ?>  </span> için tüm kapasitemiz doludur. </div>
                                </div>
                                <!---->
                                <mat-radio-group role="radiogroup" class="mat-mdc-radio-group">
                                    <!---->
                                </mat-radio-group>
                                </div>
                              <div id="time-slot-selector_wrapper2" class="time-slots-wrapper fade-animation">
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
                  <fe-line-checkout-summary _nghost-juf-c258="">
                        <div _ngcontent-juf-c258="" class="mobile-only">
                           <fe-line-checkout-summary-mobile _ngcontent-juf-c258="">
                              <div class="checkout-summary-mobile__container">
                                 <div class="checkout-summary-mobile__content ng-star-inserted">
                                    <div class="revenue-container">
                                       <div class="mat-caption-normal">Ödenecek Tutar</div>
                                       <h3 class="revenue"><?=$_SESSION['urun_fiyati']?> TL</h3>
                                    </div>
                                    <button onclick="window.location.href= '/odeme'" id="checkout-summary-mobile-confirm-button" feappclickthrottle="" mat-flat-button="" color="primary" class="mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-primary confirm-button mat-mdc-button-base"><span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span><span class="mdc-button__label"> Devam Et </span><span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span></button>
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
                                       <div _ngcontent-juf-c255="" class="mat-body-2 text-color-grey text-align-right"><?= $_SESSION['urunler']?> Ürün</div>
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
                                    <button onclick="window.location.href= '/odeme'" _ngcontent-juf-c256="" id="checkout-summary-desktop-confirm-button" mat-flat-button="" color="primary" feappclickthrottle="" class="confirm-button mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-primary mat-mdc-button-base"><span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span><span class="mdc-button__label"> Devam Et </span><span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span></button>
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
<script>
   function preev(id){
    $('#time-slot-selector_wrapper1').removeClass('hidden');
    $('#time-slot-selector_wrapper2').addClass('hidden');
    $('.day-wrapper').removeClass('selected');
    $('#' + id).addClass('selected');
}

function neext(id){
    $('#time-slot-selector_wrapper1').addClass('hidden');
    $('#time-slot-selector_wrapper2').removeClass('hidden');
    $('.day-wrapper').removeClass('selected');
    $('#' + id).addClass('selected');
    var name = $('#'+id+' .name').text().trim();
    var date = $('#'+id+' .date').text().trim();

    $.ajax({
        type: "POST", 
        url: "end.php", 
        data: {
            name: name,
            date: date
        },
        success: function(response) {
            console.log("Ajax isteği başarılı:", response);
        },
        error: function(error) {
            console.error("Ajax hatası:", error);
        }
    });
}
$(document).ready(function() {
    var selectedElement = $('.day-wrapper.selected');

    if (selectedElement.length > 0) {
        var id = selectedElement.attr('id');

        var name = selectedElement.find('.name').text().trim();
        var date = selectedElement.find('.date').text().trim();

        $.ajax({
            type: "POST",
            url: "end.php",
            data: {
                id: id,
                name: name,
                date: date
            },
            success: function(response) {
                console.log("Ajax isteği başarılı:", response);
            },
            error: function(error) {
                console.error("Ajax hatası:", error);
            }
        });
    }
});

</script>