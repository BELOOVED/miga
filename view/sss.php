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
<style>mat-card-header[_ngcontent-mjs-c501]{justify-content:center;padding:1.5rem}@media (max-width: 768px){.mat-mdc-card-content[_ngcontent-mjs-c501]{padding:0 1.5rem 1.5rem}}@media (min-width: 992px){.mat-mdc-card-content[_ngcontent-mjs-c501]{padding:0 3.8rem 3.8rem}}</style>
<style>.button-icon[_ngcontent-mjs-c243]{display:flex}</style>
<style>.mdc-icon-button{font-size:24px;width:48px;height:48px;padding:12px}.mdc-icon-button .mdc-icon-button__focus-ring{display:none}.mdc-icon-button.mdc-ripple-upgraded--background-focused .mdc-icon-button__focus-ring,.mdc-icon-button:not(.mdc-ripple-upgraded):focus .mdc-icon-button__focus-ring{display:block;max-height:48px;max-width:48px}@media screen and (forced-colors: active){.mdc-icon-button.mdc-ripple-upgraded--background-focused .mdc-icon-button__focus-ring,.mdc-icon-button:not(.mdc-ripple-upgraded):focus .mdc-icon-button__focus-ring{pointer-events:none;border:2px solid rgba(0,0,0,0);border-radius:6px;box-sizing:content-box;position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);height:100%;width:100%}}@media screen and (forced-colors: active)and (forced-colors: active){.mdc-icon-button.mdc-ripple-upgraded--background-focused .mdc-icon-button__focus-ring,.mdc-icon-button:not(.mdc-ripple-upgraded):focus .mdc-icon-button__focus-ring{border-color:CanvasText}}@media screen and (forced-colors: active){.mdc-icon-button.mdc-ripple-upgraded--background-focused .mdc-icon-button__focus-ring::after,.mdc-icon-button:not(.mdc-ripple-upgraded):focus .mdc-icon-button__focus-ring::after{content:"";border:2px solid rgba(0,0,0,0);border-radius:8px;display:block;position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);height:calc(100% + 4px);width:calc(100% + 4px)}}@media screen and (forced-colors: active)and (forced-colors: active){.mdc-icon-button.mdc-ripple-upgraded--background-focused .mdc-icon-button__focus-ring::after,.mdc-icon-button:not(.mdc-ripple-upgraded):focus .mdc-icon-button__focus-ring::after{border-color:CanvasText}}.mdc-icon-button.mdc-icon-button--reduced-size .mdc-icon-button__ripple{width:40px;height:40px;margin-top:4px;margin-bottom:4px;margin-right:4px;margin-left:4px}.mdc-icon-button.mdc-icon-button--reduced-size.mdc-ripple-upgraded--background-focused .mdc-icon-button__focus-ring,.mdc-icon-button.mdc-icon-button--reduced-size:not(.mdc-ripple-upgraded):focus .mdc-icon-button__focus-ring{max-height:40px;max-width:40px}.mdc-icon-button .mdc-icon-button__touch{position:absolute;top:50%;height:48px;left:50%;width:48px;transform:translate(-50%, -50%)}.mdc-icon-button svg,.mdc-icon-button img{width:24px;height:24px}.mdc-icon-button{display:inline-block;position:relative;box-sizing:border-box;border:none;outline:none;background-color:rgba(0,0,0,0);fill:currentColor;color:inherit;text-decoration:none;cursor:pointer;user-select:none;z-index:0;overflow:visible}.mdc-icon-button .mdc-icon-button__touch{position:absolute;top:50%;height:48px;left:50%;width:48px;transform:translate(-50%, -50%)}.mdc-icon-button:disabled{cursor:default;pointer-events:none}.mdc-icon-button--display-flex{align-items:center;display:inline-flex;justify-content:center}.mdc-icon-button__icon{display:inline-block}.mdc-icon-button__icon.mdc-icon-button__icon--on{display:none}.mdc-icon-button--on .mdc-icon-button__icon{display:none}.mdc-icon-button--on .mdc-icon-button__icon.mdc-icon-button__icon--on{display:inline-block}.mdc-icon-button__link{height:100%;left:0;outline:none;position:absolute;top:0;width:100%}.mat-mdc-icon-button{height:var(--mdc-icon-button-state-layer-size, 48px);width:var(--mdc-icon-button-state-layer-size, 48px);font-size:var(--mdc-icon-button-icon-size, 24px);color:var(--mdc-icon-button-icon-color, inherit);border-radius:50%;flex-shrink:0}.mat-mdc-icon-button svg,.mat-mdc-icon-button img{width:var(--mdc-icon-button-icon-size, 24px);height:var(--mdc-icon-button-icon-size, 24px)}.mat-mdc-icon-button:disabled{opacity:var(--mdc-icon-button-disabled-icon-opacity, 0.38)}.mat-mdc-icon-button:disabled{color:var(--mdc-icon-button-disabled-icon-color, #000)}.mat-mdc-icon-button[disabled]{cursor:default;pointer-events:none;opacity:1}.mat-mdc-icon-button .mat-mdc-button-ripple,.mat-mdc-icon-button .mat-mdc-button-persistent-ripple,.mat-mdc-icon-button .mat-mdc-button-persistent-ripple::before{top:0;left:0;right:0;bottom:0;position:absolute;pointer-events:none;border-radius:inherit}.mat-mdc-icon-button .mat-mdc-button-persistent-ripple::before{content:"";opacity:0;background-color:var(--mat-mdc-button-persistent-ripple-color)}.mat-mdc-icon-button .mat-ripple-element{background-color:var(--mat-mdc-button-ripple-color)}.mat-mdc-icon-button .mdc-button__label{z-index:1}.mat-mdc-icon-button .mat-mdc-focus-indicator{top:0;left:0;right:0;bottom:0;position:absolute}.mat-mdc-icon-button:focus .mat-mdc-focus-indicator::before{content:""}.mat-mdc-icon-button .mat-mdc-button-touch-target{position:absolute;top:50%;height:48px;left:50%;width:48px;transform:translate(-50%, -50%)}.mat-mdc-icon-button._mat-animation-noopable{transition:none !important;animation:none !important}.mat-mdc-icon-button .mat-mdc-button-persistent-ripple{border-radius:50%}.mat-mdc-icon-button.mat-unthemed:not(.mdc-ripple-upgraded):focus::before,.mat-mdc-icon-button.mat-primary:not(.mdc-ripple-upgraded):focus::before,.mat-mdc-icon-button.mat-accent:not(.mdc-ripple-upgraded):focus::before,.mat-mdc-icon-button.mat-warn:not(.mdc-ripple-upgraded):focus::before{background:rgba(0,0,0,0);opacity:1}</style>
<sm-header-lite _ngcontent-mjs-c368="" _nghost-mjs-c366=""><div _ngcontent-mjs-c366="" class="header-wrapper"><div _ngcontent-mjs-c366="" class="desktop-only"><!----><!----></div><div _ngcontent-mjs-c366="" onclick="window.location.href= '/'" class="logo-container elektronik"></div><div _ngcontent-mjs-c366="" class="mobile-only"><!----><!----></div></div><!----></sm-header-lite>
<main _ngcontent-mjs-c368="" class="elektronik">
   <router-outlet _ngcontent-mjs-c368=""></router-outlet>
   <sm-auth _nghost-mjs-c500="" class="ng-star-inserted">
      <article _ngcontent-mjs-c500="" class="auth-article">
         <div _ngcontent-mjs-c500="" class="padding">
            <router-outlet _ngcontent-mjs-c500=""></router-outlet>
            <sm-login _nghost-mjs-c502="" class="ng-star-inserted">
               <div _ngcontent-mjs-c502="" class="faqs ng-star-inserted">
                  <mat-card _ngcontent-mjs-c502="" class="mat-mdc-card mdc-card faqs__content">
                     <sm-login-faqs _ngcontent-mjs-c502="" _nghost-mjs-c501="">
                        <mat-card-header _ngcontent-mjs-c501="" class="mat-mdc-card-header">
                           <div class="mat-mdc-card-header-text">
                              <h3 _ngcontent-mjs-c501="" mat-card-title="" class="mat-mdc-card-title text-color-black mat-headline">Sıkça Sorulan Sorular</h3>
                           </div>
                           <fe-icon-button _ngcontent-mjs-c501="" class="return-button" _nghost-mjs-c243="">
                              <button _ngcontent-mjs-c243="" mat-icon-button="" color="accent" class="mdc-icon-button mat-mdc-icon-button mat-accent mat-mdc-button-base">
                                 <span class="mat-mdc-button-persistent-ripple mdc-icon-button__ripple"></span>
                                 <fa-icon _ngcontent-mjs-c243="" class="ng-fa-icon button-icon">
                                    <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="arrow-left" class="svg-inline--fa fa-arrow-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                       <path fill="currentColor" d="M447.1 256c0 13.25-10.76 24.01-24.01 24.01H83.9l132.7 126.6c9.625 9.156 9.969 24.41 .8125 33.94c-9.156 9.594-24.34 9.938-33.94 .8125l-176-168C2.695 268.9 .0078 262.6 .0078 256S2.695 243.2 7.445 238.6l176-168C193 61.51 208.2 61.85 217.4 71.45c9.156 9.5 8.812 24.75-.8125 33.94l-132.7 126.6h340.1C437.2 232 447.1 242.8 447.1 256z"></path>
                                    </svg>
                                 </fa-icon>
                                 <span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span onclick="window.location.href= '/'" class="mat-mdc-button-touch-target"></span>
                              </button>
                           </fe-icon-button>
                        </mat-card-header>
                        <mat-card-content _ngcontent-mjs-c501="" class="mat-mdc-card-content">
                           <div _ngcontent-mjs-c501="" class="ng-star-inserted">
                              <h3 _ngcontent-mjs-c501="" class="text-color-orange">OTP Telefon Doğrulama Nedir?</h3>
                              <p _ngcontent-mjs-c501="" class="mat-caption-normal text-color-grey">OTP telefon doğrulama telefonunuza gönderilen kod ile numaranın size ait olduğunu doğrulamamızı sağlayan bir sistemdir. Böylece telefon numaranızın yalnızca sizin tarafınızdan kullanılabildiğinden emin olarak daha güvenli bir alışveriş deneyimi yaşamanızı sağlarız.</p>
                           </div>
                           <div _ngcontent-mjs-c501="" class="ng-star-inserted">
                              <h3 _ngcontent-mjs-c501="" class="text-color-orange">Telefonumu Değiştirdim Ne Yapmalıyım?</h3>
                              <p _ngcontent-mjs-c501="" class="mat-caption-normal text-color-grey">Telefon numaranızı değiştirdiğinizde üyelik sırasında kullandığınız e-mail adresinize doğrulama maili göndererek talebi sizin oluşturduğunuzdan emin oluruz. Doğrulama bağlantısına tıkladığınızda açılacak olan uygulama ekranına yeni telefon numaranızı girerek güncelleme işlemini tamamlayabilirsiniz.</p>
                           </div>
                           <div _ngcontent-mjs-c501="" class="ng-star-inserted">
                              <h3 _ngcontent-mjs-c501="" class="text-color-orange">Hattım Çalındı Ne Yapmalıyım?</h3>
                              <p _ngcontent-mjs-c501="" class="mat-caption-normal text-color-grey">Hattınız çalındıysa mail doğrulamasıyla en kısa sürede telefon numaranızı güncelleyerek kaldığınız yerden devam edebilirsiniz, hattınızla beraber telefonunuz da çalındıysa güvenliğiniz açısından en kısa sürede mail şifrenizi güncellemenizi öneririz.</p>
                           </div>
                           <div _ngcontent-mjs-c501="" class="ng-star-inserted">
                              <h3 _ngcontent-mjs-c501="" class="text-color-orange">Mail Adresimi Unuttum</h3>
                              <p _ngcontent-mjs-c501="" class="mat-caption-normal text-color-grey">Mail adresinizi unuttuysanız ve telefon numaranızı güncelleyemiyorsanız 0850 200 40 00 numaralı müşteri hizmetlerimize ulaşarak çözüme ulaşabilirsiniz.</p>
                           </div>
                           <!---->
                        </mat-card-content>
                     </sm-login-faqs>
                  </mat-card>
               </div>
               <!----><!---->
            </sm-login>
            <!---->
         </div>
      </article>
   </sm-auth>
   <!---->
</main>