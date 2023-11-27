<?php
                if ($detect->isMobile()) {?>
<style>
    .header{
        display: none;
    }
    .footer
    {
      display: none;
    }
</style>
<?php }?>
<style>@keyframes spin{0%{transform:rotate(0)}to{transform:rotate(360deg)}}@keyframes presence{0%{opacity:0}to{opacity:1}}sm-membership-shell-page .page{display:flex;padding:0 1rem}@media (min-width: 1200px){sm-membership-shell-page .page{padding:0 7rem}}@media (min-width: 1440px){sm-membership-shell-page .page{padding:0 11rem}}@media (min-width: 1600px){sm-membership-shell-page .page{padding:0 11rem}}@media (min-width: 1800px){sm-membership-shell-page .page{padding:0 18rem}}@media (max-width: 991.98px){sm-membership-shell-page .page{padding:0}}sm-membership-shell-page .page .sidenav{margin-top:2rem;width:100%}@media (min-width: 768px){sm-membership-shell-page .page .sidenav{width:unset}}sm-membership-shell-page fe-mobile-breadcrumb .breadcrumb{height:4.35rem!important;position:fixed!important;top:0;width:100%;z-index:999}sm-membership-shell-page .account-mainpage .breadcrumb{justify-content:start;padding-left:1rem}sm-membership-shell-page .account-mainpage a{display:none}
</style>
<style>.breadcrumb[_ngcontent-ecm-c391]{display:flex;justify-content:center;align-items:center;text-align:left;height:3.5rem;background-color:var(--brandColorPrimary700);position:relative}.breadcrumb[_ngcontent-ecm-c391]   .content[_ngcontent-ecm-c391]{width:67%}.breadcrumb[_ngcontent-ecm-c391]   .content[_ngcontent-ecm-c391]   h3[_ngcontent-ecm-c391]{margin:0;color:var(--font-color__light)}.breadcrumb[_ngcontent-ecm-c391]   a[_ngcontent-ecm-c391]{width:17.5px;height:30px}.breadcrumb[_ngcontent-ecm-c391]   a[_ngcontent-ecm-c391]   fa-icon[_ngcontent-ecm-c391]{position:absolute;left:1.125rem;color:var(--font-color__light);font-size:1.25rem}.breadcrumb   .hemen[_nghost-ecm-c391]   h3[_ngcontent-ecm-c391], .hemen   [_nghost-ecm-c391]   h3[_ngcontent-ecm-c391], .breadcrumb   .hemen[_nghost-ecm-c391]   a[_ngcontent-ecm-c391]   fa-icon[_ngcontent-ecm-c391], .hemen   [_nghost-ecm-c391]   a[_ngcontent-ecm-c391]   fa-icon[_ngcontent-ecm-c391]{color:var(--basicColor900)}</style>
<style>.container[_ngcontent-ecm-c509]{padding:0 1rem 1.125rem;display:flex;flex-direction:column;min-height:calc(100vh - var(--mobile-bottom-nav-height) - 4.375rem)}@media (min-width: 768px){.container[_ngcontent-ecm-c509]{display:block;flex-direction:column;min-height:unset;padding:0 0 1.125rem;width:16.125rem}}.container[_ngcontent-ecm-c509]   .nav-header__logged-in[_ngcontent-ecm-c509]{display:flex;flex-direction:column;align-items:center;justify-content:center;padding-bottom:1.5rem}@media (min-width: 768px){.container[_ngcontent-ecm-c509]   .nav-header__logged-in[_ngcontent-ecm-c509]{padding-bottom:1.75rem}}.container[_ngcontent-ecm-c509]   .nav-header__logged-in[_ngcontent-ecm-c509]   .user-avatar[_ngcontent-ecm-c509]{width:3.875rem;height:3.875rem;background-color:#f5f3f2;border-radius:50%;display:none;align-items:center;justify-content:center;margin-bottom:.375rem}@media (min-width: 768px){.container[_ngcontent-ecm-c509]   .nav-header__logged-in[_ngcontent-ecm-c509]   .user-avatar[_ngcontent-ecm-c509]{display:flex}}.container[_ngcontent-ecm-c509]   .nav-header__logged-in[_ngcontent-ecm-c509]   .user-info[_ngcontent-ecm-c509]{margin-bottom:1.5rem}@media (min-width: 768px){.container[_ngcontent-ecm-c509]   .nav-header__logged-in[_ngcontent-ecm-c509]   .user-info[_ngcontent-ecm-c509]{margin-bottom:.563rem}}.container[_ngcontent-ecm-c509]   .nav-header__logged-in[_ngcontent-ecm-c509]   .user-info[_ngcontent-ecm-c509]   .name[_ngcontent-ecm-c509]{margin-bottom:0}.container[_ngcontent-ecm-c509]   .nav-header__logged-in[_ngcontent-ecm-c509]   .user-money[_ngcontent-ecm-c509]{display:flex;width:100%;height:3.125rem;justify-content:space-between;align-items:center;padding-left:.938rem;padding-right:.875rem;border-radius:4px;background:url(/assets/logos/money/money-background.svg) no-repeat center;background-size:cover}.container[_ngcontent-ecm-c509]   .nav-header__logged-in[_ngcontent-ecm-c509]   .user-money[_ngcontent-ecm-c509]   .money-logo[_ngcontent-ecm-c509]{width:3.125rem;height:1.188rem}.container[_ngcontent-ecm-c509]   .nav-header__logged-in[_ngcontent-ecm-c509]   .user-money[_ngcontent-ecm-c509]   a[_ngcontent-ecm-c509]{display:flex;align-items:center;color:var(--basicColorWhite)}.container[_ngcontent-ecm-c509]   .nav-header__logged-in[_ngcontent-ecm-c509]   .user-money[_ngcontent-ecm-c509]   a[_ngcontent-ecm-c509]:hover{color:var(--basicColorWhite)}.container[_ngcontent-ecm-c509]   .nav-header__logged-in[_ngcontent-ecm-c509]   .user-money[_ngcontent-ecm-c509]   a[_ngcontent-ecm-c509]   mat-spinner[_ngcontent-ecm-c509]{transform:scale(.3);margin-right:-2rem}.container[_ngcontent-ecm-c509]   .nav-header__logged-in[_ngcontent-ecm-c509]   .user-money[_ngcontent-ecm-c509]   fa-icon[_ngcontent-ecm-c509]{margin:.125rem 0 0 .563rem;font-size:1rem}.container[_ngcontent-ecm-c509]   .nav-header__logged-in[_ngcontent-ecm-c509]   .money-gold-wrapper[_ngcontent-ecm-c509]{width:100%;margin-top:1rem}.container[_ngcontent-ecm-c509]   .nav-header__logged-out[_ngcontent-ecm-c509]{padding-bottom:2.25rem}.container[_ngcontent-ecm-c509]   .nav-header__logged-out[_ngcontent-ecm-c509] > *[_ngcontent-ecm-c509]:not(:last-child){margin-bottom:2.5rem}.container[_ngcontent-ecm-c509]   .nav-body[_ngcontent-ecm-c509]{padding-top:.375rem;padding-left:1.125rem;padding-right:.5rem}@media (min-width: 768px){.container[_ngcontent-ecm-c509]   .nav-body[_ngcontent-ecm-c509]{padding-right:.75rem}}.container[_ngcontent-ecm-c509]   .nav-body[_ngcontent-ecm-c509]   sm-side-nav-link[_ngcontent-ecm-c509]:not(:last-child){margin-bottom:2rem}.container[_ngcontent-ecm-c509]   .nav-footer[_ngcontent-ecm-c509]{display:flex;flex-direction:column;align-items:center;padding:2rem 0 4rem;margin-top:auto}@media (min-width: 768px){.container[_ngcontent-ecm-c509]   .nav-footer[_ngcontent-ecm-c509]{margin-top:unset}}.container[_ngcontent-ecm-c509]   .nav-footer[_ngcontent-ecm-c509] > *[_ngcontent-ecm-c509]:not(:last-child){margin-bottom:1.5rem}.container[_ngcontent-ecm-c509]   .nav-footer[_ngcontent-ecm-c509]   .customer-contact[_ngcontent-ecm-c509]{width:100%;border-radius:8px;border:solid 1px var(--brandColorPrimary700);display:flex;overflow:hidden;max-width:13rem}@media (min-width: 768px){.container[_ngcontent-ecm-c509]   .nav-footer[_ngcontent-ecm-c509]   .customer-contact[_ngcontent-ecm-c509]{max-width:initial}}.container[_ngcontent-ecm-c509]   .nav-footer[_ngcontent-ecm-c509]   .customer-contact[_ngcontent-ecm-c509]   .icon[_ngcontent-ecm-c509]{display:flex;justify-content:center;align-items:center;flex-basis:3rem;background-color:var(--brandColorPrimary700)}.container[_ngcontent-ecm-c509]   .nav-footer[_ngcontent-ecm-c509]   .customer-contact[_ngcontent-ecm-c509]   .icon[_ngcontent-ecm-c509]   fa-icon[_ngcontent-ecm-c509]{font-size:1.125rem;color:var(--basicColorWhite);display:inline-block}.container[_ngcontent-ecm-c509]   .nav-footer[_ngcontent-ecm-c509]   .customer-contact[_ngcontent-ecm-c509]   .info[_ngcontent-ecm-c509]{padding:0 .8rem}.container[_ngcontent-ecm-c509]   .nav-footer[_ngcontent-ecm-c509]   .customer-contact[_ngcontent-ecm-c509]   .info[_ngcontent-ecm-c509]   .contact-number[_ngcontent-ecm-c509]{margin-bottom:-.35rem;font-weight:600}@media (min-width: 768px){.container[_ngcontent-ecm-c509]   .nav-footer[_ngcontent-ecm-c509]   .customer-contact[_ngcontent-ecm-c509]   .info[_ngcontent-ecm-c509]   .contact-number[_ngcontent-ecm-c509]{max-width:unset;font-size:1.125rem}}.container[_ngcontent-ecm-c509]   .nav-footer[_ngcontent-ecm-c509]   .whatsapp-contact[_ngcontent-ecm-c509]{border-radius:8px;border:solid 1px rgba(0,0,0,.1215686275);display:flex;flex-direction:row;height:3rem;width:19rem;overflow:hidden}@media (min-width: 768px){.container[_ngcontent-ecm-c509]   .nav-footer[_ngcontent-ecm-c509]   .whatsapp-contact[_ngcontent-ecm-c509]{width:100%}}.container[_ngcontent-ecm-c509]   .nav-footer[_ngcontent-ecm-c509]   .whatsapp-contact[_ngcontent-ecm-c509]   .icon[_ngcontent-ecm-c509]{width:3rem;background-color:var(--systemColorSuccess600);display:flex;flex-shrink:0;justify-content:center}.container[_ngcontent-ecm-c509]   .nav-footer[_ngcontent-ecm-c509]   .whatsapp-contact[_ngcontent-ecm-c509]   .icon[_ngcontent-ecm-c509]   img[_ngcontent-ecm-c509]{object-fit:none}.container[_ngcontent-ecm-c509]   .nav-footer[_ngcontent-ecm-c509]   .whatsapp-contact[_ngcontent-ecm-c509]   .info[_ngcontent-ecm-c509]{display:flex;align-items:center;padding-left:.8rem;padding-right:1.2rem;font-size:.75rem}@media (min-width: 768px){.container[_ngcontent-ecm-c509]   .nav-footer[_ngcontent-ecm-c509]   .whatsapp-contact[_ngcontent-ecm-c509]   .info[_ngcontent-ecm-c509]   .text[_ngcontent-ecm-c509]{font-size:.625rem}}.container[_ngcontent-ecm-c509]   .nav-footer[_ngcontent-ecm-c509]   .whatsapp-contact[_ngcontent-ecm-c509]   .info[_ngcontent-ecm-c509]   .text[_ngcontent-ecm-c509]   .phone-number[_ngcontent-ecm-c509]{color:var(--systemColorSuccess600)}.container[_ngcontent-ecm-c509]   .nav-footer[_ngcontent-ecm-c509]   .external-links[_ngcontent-ecm-c509]{color:var(--basicColor500);margin-top:.5rem}.container[_ngcontent-ecm-c509]   .nav-footer[_ngcontent-ecm-c509]   .external-links[_ngcontent-ecm-c509]   .row[_ngcontent-ecm-c509]:not(:last-child){margin-bottom:1rem}.container[_ngcontent-ecm-c509]   .nav-footer[_ngcontent-ecm-c509]   .external-links[_ngcontent-ecm-c509]   .row[_ngcontent-ecm-c509]   .text[_ngcontent-ecm-c509]{margin-right:.25rem}</style>
<style>@keyframes spin{0%{transform:rotate(0)}to{transform:rotate(360deg)}}@keyframes presence{0%{opacity:0}to{opacity:1}}.header-wrapper[_ngcontent-ecm-c366]{border-bottom:1px solid rgba(0,0,0,.12)}.header-wrapper[_ngcontent-ecm-c366]   .logo-container[_ngcontent-ecm-c366]{padding:0 1rem;display:flex;align-items:center;cursor:pointer;height:4.375rem;background-repeat:no-repeat;background-origin:content-box;background-position:left}@media (min-width: 1200px){.header-wrapper[_ngcontent-ecm-c366]   .logo-container[_ngcontent-ecm-c366]{padding:0 7rem}}@media (min-width: 1440px){.header-wrapper[_ngcontent-ecm-c366]   .logo-container[_ngcontent-ecm-c366]{padding:0 11rem}}@media (min-width: 1600px){.header-wrapper[_ngcontent-ecm-c366]   .logo-container[_ngcontent-ecm-c366]{padding:0 18rem}}@media (min-width: 1800px){.header-wrapper[_ngcontent-ecm-c366]   .logo-container[_ngcontent-ecm-c366]{padding:0 23rem}}.header-wrapper[_ngcontent-ecm-c366]   .logo-container.invisible[_ngcontent-ecm-c366]{visibility:hidden}.header-wrapper[_ngcontent-ecm-c366]   .logo-container.sanalmarket[_ngcontent-ecm-c366]{background-image:url(/assets/logos/sanalmarket/sanalmarket-logo.svg)}@media (max-width: 576px){.header-wrapper[_ngcontent-ecm-c366]   .logo-container.sanalmarket[_ngcontent-ecm-c366]{background-image:url(/assets/logos/sanalmarket/sanalmarket-logo-mobile.svg);background-size:unset;width:5rem}}.header-wrapper[_ngcontent-ecm-c366]   .logo-container.elektronik[_ngcontent-ecm-c366]{background-image:url(/assets/logos/elektronik/ekstra-logo.svg);width:7rem}@media (max-width: 576px){.header-wrapper[_ngcontent-ecm-c366]   .logo-container.elektronik[_ngcontent-ecm-c366]{background-image:url(/assets/logos/elektronik/ekstra-logo-mobile.png);background-size:unset;width:5rem}}.header-wrapper[_ngcontent-ecm-c366]   .logo-container.kurban[_ngcontent-ecm-c366]{background-image:url(/assets/logos/kurban/kurban-logo.svg);width:7rem}@media (max-width: 576px){.header-wrapper[_ngcontent-ecm-c366]   .logo-container.kurban[_ngcontent-ecm-c366]{background-image:url(/assets/logos/kurban/kurban-logo-mobile.svg);background-size:unset}}.header-wrapper[_ngcontent-ecm-c366]   .logo-container.yemek[_ngcontent-ecm-c366]{background-image:url(/assets/logos/yemek/yemek_logo.svg);background-size:10rem}@media (max-width: 576px){.header-wrapper[_ngcontent-ecm-c366]   .logo-container.yemek[_ngcontent-ecm-c366]{background-size:6rem}}.header-wrapper[_ngcontent-ecm-c366]   .logo-container.hemen[_ngcontent-ecm-c366]{background-image:url(/assets/logos/hemen/hemen-logo.svg);width:7rem}@media (max-width: 576px){.header-wrapper[_ngcontent-ecm-c366]   .logo-container.hemen[_ngcontent-ecm-c366]{background-size:unset;width:5rem}}</style>
<style>[_nghost-ecm-c507]{display:block}.side-nav-link[_ngcontent-ecm-c507]{display:flex;align-items:center;width:100%;cursor:pointer}.side-nav-link[_ngcontent-ecm-c507] > *[_ngcontent-ecm-c507]:not(:last-child){margin-right:1.125rem}.side-nav-link[_ngcontent-ecm-c507]   .icon[_ngcontent-ecm-c507]{width:1.75rem;font-size:1.5rem;text-align:center}.side-nav-link[_ngcontent-ecm-c507]   .text[_ngcontent-ecm-c507]{flex-grow:1}.side-nav-link[_ngcontent-ecm-c507]   .chevron[_ngcontent-ecm-c507]{width:1.375rem;text-align:center}</style>
<style>.banner[_ngcontent-ecm-c508]{height:4.938rem;border-radius:3px;background-image:linear-gradient(275deg,#f7e7a6,#bb9962);display:flex;align-items:center;justify-content:space-between;padding:1.125rem .625rem 1.125rem 1.188rem;position:relative}.banner[_ngcontent-ecm-c508]   .logo[_ngcontent-ecm-c508]{width:5.938rem;height:2.687rem}.banner[_ngcontent-ecm-c508]   .title[_ngcontent-ecm-c508]{flex:1;font-weight:900;line-height:normal;color:#412761;margin-left:.75rem}.banner[_ngcontent-ecm-c508]   .register-button[_ngcontent-ecm-c508]{width:6.625rem;height:1.938rem;border-radius:3px;background-image:linear-gradient(106deg,#3d1857 0%,#6d5181);display:flex;justify-content:space-around;align-items:center}.banner[_ngcontent-ecm-c508]   .register-button[_ngcontent-ecm-c508]   span[_ngcontent-ecm-c508]{font-size:.7rem;color:var(--basicColorWhite);font-weight:600;margin-left:.25rem}.banner[_ngcontent-ecm-c508]   .register-button[_ngcontent-ecm-c508]   fa-icon[_ngcontent-ecm-c508]{color:var(--basicColorWhite)}.banner[_ngcontent-ecm-c508]   .description[_ngcontent-ecm-c508]{color:var(--basicColorBlack);position:absolute;bottom:.532rem;right:.532rem;font-size:.55rem;line-height:normal;font-weight:900}.banner[_ngcontent-ecm-c508]   .description--amount[_ngcontent-ecm-c508]{color:#412761}.banner.small[_ngcontent-ecm-c508]{height:3.125rem;width:100%;padding:0 .813rem}.banner.small[_ngcontent-ecm-c508]   .logo[_ngcontent-ecm-c508]{width:4.375rem;height:2.063rem}.banner.small[_ngcontent-ecm-c508]   .title[_ngcontent-ecm-c508]{font-size:.75rem}.banner.small[_ngcontent-ecm-c508]   fa-icon[_ngcontent-ecm-c508]{color:#412761}</style>

<?php
   if (!isset($_SESSION['login'])){
      $_SESSION['login'] = 0;
  
   ?>
<main _ngcontent-cro-c368="" class="elektronik">
   <router-outlet _ngcontent-cro-c368=""></router-outlet>
   
   <sm-membership-shell-page class="ng-star-inserted">
      <div class="page">
         <fe-mobile-breadcrumb pagename="Hesabım" linkname="uyelik" class="account-mainpage" _nghost-cro-c391="">
            <div _ngcontent-cro-c391="" class="breadcrumb mobile-only">
               <a _ngcontent-cro-c391="" href="/uyelik">
                  <fa-icon _ngcontent-cro-c391="" class="ng-fa-icon">
                     <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="arrow-left" class="svg-inline--fa fa-arrow-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M447.1 256c0 13.25-10.76 24.01-24.01 24.01H83.9l132.7 126.6c9.625 9.156 9.969 24.41 .8125 33.94c-9.156 9.594-24.34 9.938-33.94 .8125l-176-168C2.695 268.9 .0078 262.6 .0078 256S2.695 243.2 7.445 238.6l176-168C193 61.51 208.2 61.85 217.4 71.45c9.156 9.5 8.812 24.75-.8125 33.94l-132.7 126.6h340.1C437.2 232 447.1 242.8 447.1 256z"></path>
                     </svg>
                  </fa-icon>
               </a>
               <div _ngcontent-cro-c391="" class="content">
                  <h3 _ngcontent-cro-c391="">Hesabım</h3>
                  <!---->
               </div>
            </div>
         </fe-mobile-breadcrumb>
         <sm-membership-side-nav class="sidenav" _nghost-cro-c509="">
            <div _ngcontent-cro-c509="" class="container">
               <!---->
               <div _ngcontent-cro-c509="" class="nav-header__logged-out ng-star-inserted">
                  <div _ngcontent-cro-c509="" class="mat-headline text-color-black text-align-center">Merhaba 👋</div>
               </div>
               <!---->
               <div _ngcontent-cro-c509="" class="nav-body">
                  <!---->
                  <sm-side-nav-link _ngcontent-cro-c509="" linktitle="Giriş Yap veya Üye Ol" routerlinkactive="active" _nghost-cro-c507="" tabindex="0" ngx-ql="" class="ng-star-inserted">
                     <div _ngcontent-cro-c507="" class="side-nav-link">
                        <fa-icon _ngcontent-cro-c507="" routerlinkactive="text-color-orange" class="ng-fa-icon icon">
                           <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="circle-user" class="svg-inline--fa fa-circle-user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path fill="currentColor" d="M256 112c-48.6 0-88 39.4-88 88C168 248.6 207.4 288 256 288s88-39.4 88-88C344 151.4 304.6 112 256 112zM256 240c-22.06 0-40-17.95-40-40C216 177.9 233.9 160 256 160s40 17.94 40 40C296 222.1 278.1 240 256 240zM256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-46.73 0-89.76-15.68-124.5-41.79C148.8 389 182.4 368 220.2 368h71.69c37.75 0 71.31 21.01 88.68 54.21C345.8 448.3 302.7 464 256 464zM416.2 388.5C389.2 346.3 343.2 320 291.8 320H220.2c-51.36 0-97.35 26.25-124.4 68.48C65.96 352.5 48 306.3 48 256c0-114.7 93.31-208 208-208s208 93.31 208 208C464 306.3 446 352.5 416.2 388.5z"></path>
                           </svg>
                        </fa-icon>
                        <div _ngcontent-cro-c507="" class="text">
                           <div _ngcontent-cro-c507="" routerlinkactive="text-color-orange" onclick="window.location.href = 'giris'" class="title subtitle-2 text-color-black"> Giriş Yap veya Üye Ol </div>
                           <!---->
                        </div>
                        <fa-icon _ngcontent-cro-c507="" routerlinkactive="text-color-orange" class="ng-fa-icon chevron">
                           <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                              <path fill="currentColor" d="M113.3 47.41l183.1 191.1c4.469 4.625 6.688 10.62 6.688 16.59s-2.219 11.97-6.688 16.59l-183.1 191.1c-9.152 9.594-24.34 9.906-33.9 .7187c-9.625-9.125-9.938-24.38-.7187-33.91l168-175.4L78.71 80.6c-9.219-9.5-8.906-24.78 .7187-33.91C88.99 37.5 104.2 37.82 113.3 47.41z"></path>
                           </svg>
                        </fa-icon>
                     </div>
                  </sm-side-nav-link>
                  <sm-side-nav-link _ngcontent-cro-c509="" linktitle="Sipariş Takibi" linkdetail="Üye olmayan kullanıcılar için" _nghost-cro-c507="" class="ng-star-inserted">
                     <div _ngcontent-cro-c507="" class="side-nav-link">
                        <fa-icon _ngcontent-cro-c507="" routerlinkactive="text-color-orange" class="ng-fa-icon icon">
                           <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="bags-shopping" class="svg-inline--fa fa-bags-shopping" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                              <path fill="currentColor" d="M128 96C128 42.98 170.1 0 224 0C277 0 320 42.98 320 96V160H384C419.3 160 448 188.7 448 224H400C400 215.2 392.8 208 384 208H64C55.16 208 48 215.2 48 224V416C48 424.8 55.16 432 64 432H160V480H64C28.65 480 0 451.3 0 416V224C0 188.7 28.65 160 64 160H128V96zM176 160H272V96C272 69.49 250.5 48 224 48C197.5 48 176 69.49 176 96V160zM512 256C547.3 256 576 284.7 576 320V448C576 483.3 547.3 512 512 512H256C220.7 512 192 483.3 192 448V320C192 284.7 220.7 256 256 256H512zM320 336C320 327.2 312.8 320 304 320C295.2 320 288 327.2 288 336V352C288 405 330.1 448 384 448C437 448 480 405 480 352V336C480 327.2 472.8 320 464 320C455.2 320 448 327.2 448 336V352C448 387.3 419.3 416 384 416C348.7 416 320 387.3 320 352V336z"></path>
                           </svg>
                        </fa-icon>
                        <div _ngcontent-cro-c507="" class="text">
                           <div _ngcontent-cro-c507="" routerlinkactive="text-color-orange" class="title subtitle-2 text-color-black" onclick="openmodal('takip')"> Sipariş Takibi </div>
                           <div _ngcontent-cro-c507="" class="detail mat-caption-normal text-color-grey ng-star-inserted"> Üye olmayan kullanıcılar için </div>
                           <!---->
                        </div>
                        <fa-icon _ngcontent-cro-c507="" routerlinkactive="text-color-orange" class="ng-fa-icon chevron">
                           <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                              <path fill="currentColor" d="M113.3 47.41l183.1 191.1c4.469 4.625 6.688 10.62 6.688 16.59s-2.219 11.97-6.688 16.59l-183.1 191.1c-9.152 9.594-24.34 9.906-33.9 .7187c-9.625-9.125-9.938-24.38-.7187-33.91l168-175.4L78.71 80.6c-9.219-9.5-8.906-24.78 .7187-33.91C88.99 37.5 104.2 37.82 113.3 47.41z"></path>
                           </svg>
                        </fa-icon>
                     </div>
                  </sm-side-nav-link>
                  <!----><!----><!---->
               </div>
               <div _ngcontent-cro-c509="" class="nav-footer">
                  <div _ngcontent-cro-c509="" class="customer-contact">
                     <div _ngcontent-cro-c509="" class="icon">
                        <fa-icon _ngcontent-cro-c509="" class="ng-fa-icon">
                           <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-flip" class="svg-inline--fa fa-phone-flip" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path fill="currentColor" d="M347.1 24.6c7.7-18.6 28-28.5 47.4-23.2l88 24C499.9 30.2 512 46 512 64c0 247.4-200.6 448-448 448c-18 0-33.8-12.1-38.6-29.5l-24-88c-5.3-19.4 4.6-39.7 23.2-47.4l96-40c16.3-6.8 35.2-2.1 46.3 11.6L207.3 368c70.4-33.3 127.4-90.3 160.7-160.7L318.7 167c-13.7-11.2-18.4-30-11.6-46.3l40-96z"></path>
                           </svg>
                        </fa-icon>
                     </div>
                     <div _ngcontent-cro-c509="" class="info">
                        <div _ngcontent-cro-c509="" class="contact-number mat-subheading-1 text-color-orange">0850 200 40 00</div>
                        <div _ngcontent-cro-c509="" class="mat-caption-normal text-color-grey">Müşteri Hizmetleri</div>
                     </div>
                  </div>
                  <!----><!---->
                  <div _ngcontent-cro-c509="" class="external-links mobile-only">
                     <!---->
                     <div _ngcontent-cro-c509="" class="row mat-caption-normal text-align-center">
                        <span _ngcontent-cro-c509="" class="text">Kişisel Verilerin Korunması Hakkında Aydınlatma Yazısı</span>
                        <fa-icon _ngcontent-cro-c509="" class="ng-fa-icon">
                           <svg role="img" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="arrow-up-right-from-square" class="svg-inline--fa fa-arrow-up-right-from-square" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path fill="currentColor" d="M336 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H457.4L212.7 276.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L480 54.6V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.8-7.2-16-16-16H336zM64 64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V304c0-8.8-7.2-16-16-16s-16 7.2-16 16V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V128c0-17.7 14.3-32 32-32H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H64z"></path>
                           </svg>
                        </fa-icon>
                     </div>
                  </div>
               </div>
            </div>
         </sm-membership-side-nav>
         <router-outlet></router-outlet>
         <!---->
      </div>
   </sm-membership-shell-page>
   </main>
  <?php }else{?>
   <main _ngcontent-ecm-c368="" class="elektronik">
   <router-outlet _ngcontent-ecm-c368=""></router-outlet>
   <sm-membership-shell-page class="ng-star-inserted">
      <div class="page">
         <fe-mobile-breadcrumb pagename="Hesabım" linkname="uyelik" class="account-mainpage" _nghost-ecm-c391="">
            <div _ngcontent-ecm-c391="" class="breadcrumb mobile-only">
               <a _ngcontent-ecm-c391="" href="/uyelik">
                  <fa-icon _ngcontent-ecm-c391="" class="ng-fa-icon">
                     <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="arrow-left" class="svg-inline--fa fa-arrow-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M447.1 256c0 13.25-10.76 24.01-24.01 24.01H83.9l132.7 126.6c9.625 9.156 9.969 24.41 .8125 33.94c-9.156 9.594-24.34 9.938-33.94 .8125l-176-168C2.695 268.9 .0078 262.6 .0078 256S2.695 243.2 7.445 238.6l176-168C193 61.51 208.2 61.85 217.4 71.45c9.156 9.5 8.812 24.75-.8125 33.94l-132.7 126.6h340.1C437.2 232 447.1 242.8 447.1 256z"></path>
                     </svg>
                  </fa-icon>
               </a>
               <div _ngcontent-ecm-c391="" class="content">
                  <h3 _ngcontent-ecm-c391="">Hesabım</h3>
                  <!---->
               </div>
            </div>
         </fe-mobile-breadcrumb>
         <sm-membership-side-nav class="sidenav" _nghost-ecm-c509="">
            <div _ngcontent-ecm-c509="" class="container">
               <div _ngcontent-ecm-c509="" class="nav-header__logged-in ng-star-inserted">
                  <div _ngcontent-ecm-c509="" class="user-avatar">
                     <fa-icon _ngcontent-ecm-c509="" size="lg" class="ng-fa-icon">
                        <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="user-large" class="svg-inline--fa fa-user-large fa-lg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                           <path fill="currentColor" d="M256 288c79.53 0 144-64.47 144-144s-64.47-144-144-144c-79.52 0-144 64.47-144 144S176.5 288 256 288zM256 48c52.94 0 96 43.06 96 96c0 52.93-43.06 96-96 96c-52.93 0-96-43.07-96-96C160 91.06 203.1 48 256 48zM351.1 320H160c-88.36 0-160 71.63-160 160c0 17.67 14.33 32 31.1 32H480c17.67 0 31.1-14.33 31.1-32C512 391.6 440.4 320 351.1 320zM49.14 464c7.787-54.21 54.54-96 110.9-96h191.1c56.33 0 103.1 41.79 110.9 96H49.14z"></path>
                        </svg>
                     </fa-icon>
                  </div>
                  <div _ngcontent-ecm-c509="" class="user-info">
                     <div _ngcontent-ecm-c509="" class="name mat-headline text-color-black text-align-center">   </div>
                     <div _ngcontent-ecm-c509="" class="email mat-body-2 text-color-grey text-align-center ng-star-inserted"></div>
                     <!---->
                  </div>
                  <div _ngcontent-ecm-c509="" class="user-money ng-star-inserted">
                     <img _ngcontent-ecm-c509="" src="assets/logos/money/money-logo.svg" class="money-logo">
                     <div _ngcontent-ecm-c509="" class="mat-caption-normal">
                        <!---->
                        <a _ngcontent-ecm-c509="" routerlink="/money-kayit" ngx-ql="" href="/money-kayit" class="ng-star-inserted">
                           Üye Ol, Fırsatları Yakala ! 
                           <fa-icon _ngcontent-ecm-c509="" class="ng-fa-icon">
                              <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="circle-arrow-right" class="svg-inline--fa fa-circle-arrow-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                 <path fill="currentColor" d="M280.3 134.4c-9.719-9-24.91-8.438-33.94 1.25c-9 9.719-8.469 24.88 1.25 33.94L314.9 232H144C130.8 232 120 242.8 120 256S130.8 280 144 280h170.9l-67.21 62.41c-9.719 9.062-10.25 24.22-1.25 33.94c9.031 9.688 24.22 10.25 33.94 1.25l112-104C397.2 269 400 262.7 400 256s-2.781-13.03-7.656-17.59L280.3 134.4zM256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464z"></path>
                              </svg>
                           </fa-icon>
                        </a>
                        <!---->
                     </div>
                  </div>
                  <!---->
                  <div _ngcontent-ecm-c509="" class="money-gold-wrapper ng-star-inserted">
                     <sm-money-gold-banner _ngcontent-ecm-c509="" _nghost-ecm-c508="">
                        <!---->
                        <a _ngcontent-ecm-c508="" routerlink="/money-gold" class="banner small ng-star-inserted" ngx-ql="" href="/money-gold">
                           <img _ngcontent-ecm-c508="" src="assets/logos/money/money-gold-logo.png" alt="money-gold-logo" class="logo"><span _ngcontent-ecm-c508="" class="title">Ayrıcalıklarını Keşfet!</span>
                           <fa-icon _ngcontent-ecm-c508="" class="ng-fa-icon">
                              <svg role="img" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="circle-arrow-right" class="svg-inline--fa fa-circle-arrow-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                 <path fill="currentColor" d="M283.3 148.7c-6.25-6.25-16.38-6.25-22.62 0s-6.25 16.38 0 22.62L329.4 240H144C135.2 240 128 247.2 128 256s7.156 16 16 16h185.4l-68.69 68.69c-6.25 6.25-6.25 16.38 0 22.62s16.38 6.25 22.62 0l96-96C382.4 264.2 384 260.1 384 256s-1.562-8.188-4.688-11.31L283.3 148.7zM256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 480c-123.5 0-224-100.5-224-224s100.5-224 224-224s224 100.5 224 224S379.5 480 256 480z"></path>
                              </svg>
                           </fa-icon>
                        </a>
                        <!----><!---->
                     </sm-money-gold-banner>
                  </div>
                  <!---->
               </div>
               <!----><!---->
               <div _ngcontent-ecm-c509="" class="nav-body">
                  <sm-side-nav-link _ngcontent-ecm-c509="" linktitle="Adreslerim" _nghost-ecm-c507="" tabindex="0" ngx-ql="" class="ng-star-inserted">
                     <div _ngcontent-ecm-c507="" class="side-nav-link">
                        <fa-icon _ngcontent-ecm-c507="" routerlinkactive="text-color-orange" class="ng-fa-icon icon">
                           <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="address-book" class="svg-inline--fa fa-address-book" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path fill="currentColor" d="M272 288h-64C163.8 288 128 323.8 128 368C128 376.8 135.2 384 144 384h192c8.836 0 16-7.164 16-16C352 323.8 316.2 288 272 288zM240 256c35.35 0 64-28.65 64-64s-28.65-64-64-64c-35.34 0-64 28.65-64 64S204.7 256 240 256zM496 320H480v96h16c8.836 0 16-7.164 16-16v-64C512 327.2 504.8 320 496 320zM496 64H480v96h16C504.8 160 512 152.8 512 144v-64C512 71.16 504.8 64 496 64zM496 192H480v96h16C504.8 288 512 280.8 512 272v-64C512 199.2 504.8 192 496 192zM384 0H96C60.65 0 32 28.65 32 64v384c0 35.35 28.65 64 64 64h288c35.35 0 64-28.65 64-64V64C448 28.65 419.3 0 384 0zM400 448c0 8.836-7.164 16-16 16H96c-8.836 0-16-7.164-16-16V64c0-8.838 7.164-16 16-16h288c8.836 0 16 7.162 16 16V448z"></path>
                           </svg>
                        </fa-icon>
                        <div _ngcontent-ecm-c507="" class="text">
                           <div _ngcontent-ecm-c507="" routerlinkactive="text-color-orange" class="title subtitle-2 text-color-black"> Adreslerim </div>
                           <!---->
                        </div>
                        <fa-icon _ngcontent-ecm-c507="" routerlinkactive="text-color-orange" class="ng-fa-icon chevron">
                           <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                              <path fill="currentColor" d="M113.3 47.41l183.1 191.1c4.469 4.625 6.688 10.62 6.688 16.59s-2.219 11.97-6.688 16.59l-183.1 191.1c-9.152 9.594-24.34 9.906-33.9 .7187c-9.625-9.125-9.938-24.38-.7187-33.91l168-175.4L78.71 80.6c-9.219-9.5-8.906-24.78 .7187-33.91C88.99 37.5 104.2 37.82 113.3 47.41z"></path>
                           </svg>
                        </fa-icon>
                     </div>
                  </sm-side-nav-link>
                  <sm-side-nav-link _ngcontent-ecm-c509="" linktitle="Siparişlerim" _nghost-ecm-c507="" tabindex="0" ngx-ql="" class="ng-star-inserted">
                     <div _ngcontent-ecm-c507="" class="side-nav-link">
                        <fa-icon _ngcontent-ecm-c507="" routerlinkactive="text-color-orange" class="ng-fa-icon icon">
                           <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="bags-shopping" class="svg-inline--fa fa-bags-shopping" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                              <path fill="currentColor" d="M128 96C128 42.98 170.1 0 224 0C277 0 320 42.98 320 96V160H384C419.3 160 448 188.7 448 224H400C400 215.2 392.8 208 384 208H64C55.16 208 48 215.2 48 224V416C48 424.8 55.16 432 64 432H160V480H64C28.65 480 0 451.3 0 416V224C0 188.7 28.65 160 64 160H128V96zM176 160H272V96C272 69.49 250.5 48 224 48C197.5 48 176 69.49 176 96V160zM512 256C547.3 256 576 284.7 576 320V448C576 483.3 547.3 512 512 512H256C220.7 512 192 483.3 192 448V320C192 284.7 220.7 256 256 256H512zM320 336C320 327.2 312.8 320 304 320C295.2 320 288 327.2 288 336V352C288 405 330.1 448 384 448C437 448 480 405 480 352V336C480 327.2 472.8 320 464 320C455.2 320 448 327.2 448 336V352C448 387.3 419.3 416 384 416C348.7 416 320 387.3 320 352V336z"></path>
                           </svg>
                        </fa-icon>
                        <div _ngcontent-ecm-c507="" class="text">
                           <div _ngcontent-ecm-c507="" routerlinkactive="text-color-orange" class="title subtitle-2 text-color-black"> Siparişlerim </div>
                           <!---->
                        </div>
                        <fa-icon _ngcontent-ecm-c507="" routerlinkactive="text-color-orange" class="ng-fa-icon chevron">
                           <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                              <path fill="currentColor" d="M113.3 47.41l183.1 191.1c4.469 4.625 6.688 10.62 6.688 16.59s-2.219 11.97-6.688 16.59l-183.1 191.1c-9.152 9.594-24.34 9.906-33.9 .7187c-9.625-9.125-9.938-24.38-.7187-33.91l168-175.4L78.71 80.6c-9.219-9.5-8.906-24.78 .7187-33.91C88.99 37.5 104.2 37.82 113.3 47.41z"></path>
                           </svg>
                        </fa-icon>
                     </div>
                  </sm-side-nav-link>
                  <sm-side-nav-link _ngcontent-ecm-c509="" linktitle="Favori Ürünlerim" _nghost-ecm-c507="" tabindex="0" ngx-ql="" class="ng-star-inserted">
                     <div _ngcontent-ecm-c507="" class="side-nav-link">
                        <fa-icon _ngcontent-ecm-c507="" routerlinkactive="text-color-orange" class="ng-fa-icon icon">
                           <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="heart" class="svg-inline--fa fa-heart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path fill="currentColor" d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z"></path>
                           </svg>
                        </fa-icon>
                        <div _ngcontent-ecm-c507="" class="text">
                           <div _ngcontent-ecm-c507="" routerlinkactive="text-color-orange" class="title subtitle-2 text-color-black"> Favori Ürünlerim </div>
                           <!---->
                        </div>
                        <fa-icon _ngcontent-ecm-c507="" routerlinkactive="text-color-orange" class="ng-fa-icon chevron">
                           <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                              <path fill="currentColor" d="M113.3 47.41l183.1 191.1c4.469 4.625 6.688 10.62 6.688 16.59s-2.219 11.97-6.688 16.59l-183.1 191.1c-9.152 9.594-24.34 9.906-33.9 .7187c-9.625-9.125-9.938-24.38-.7187-33.91l168-175.4L78.71 80.6c-9.219-9.5-8.906-24.78 .7187-33.91C88.99 37.5 104.2 37.82 113.3 47.41z"></path>
                           </svg>
                        </fa-icon>
                     </div>
                  </sm-side-nav-link>
                  <!---->
                  <sm-side-nav-link _ngcontent-ecm-c509="" linktitle="Puan ve Çeklerim" _nghost-ecm-c507="" tabindex="0" ngx-ql="" class="ng-star-inserted">
                     <div _ngcontent-ecm-c507="" class="side-nav-link">
                        <fa-icon _ngcontent-ecm-c507="" routerlinkactive="text-color-orange" class="ng-fa-icon icon">
                           <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="gift-card" class="svg-inline--fa fa-gift-card" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                              <path fill="currentColor" d="M263.9 44.45L288 85.46L312.1 44.45C328.3 16.91 357.9 0 389.8 0H392C440.6 0 480 39.4 480 88C480 102.4 476.5 115.1 470.4 128H512C547.3 128 576 156.7 576 192V448C576 483.3 547.3 512 512 512H64C28.65 512 0 483.3 0 448V192C0 156.7 28.65 128 64 128H105.6C99.46 115.1 96 102.4 96 88C96 39.4 135.4 0 184 0H186.2C218.1 0 247.7 16.91 263.9 44.45zM318.7 128H392C414.1 128 432 110.1 432 88C432 65.91 414.1 48 392 48H389.8C374.9 48 361.1 55.91 353.5 68.78L318.7 128zM288 197.5L226.4 271.4C217.1 281.5 202.8 282.9 192.6 274.4C182.5 265.1 181.1 250.8 189.6 240.6L243.4 176H64C55.16 176 48 183.2 48 192V320H528V192C528 183.2 520.8 176 512 176H332.6L386.4 240.6C394.9 250.8 393.5 265.1 383.4 274.4C373.2 282.9 358 281.5 349.6 271.4L288 197.5zM48 384V448C48 456.8 55.16 464 64 464H512C520.8 464 528 456.8 528 448V384H48zM257.3 128L222.5 68.78C214.9 55.91 201.1 48 186.2 48H184C161.9 48 144 65.91 144 88C144 110.1 161.9 128 184 128H257.3z"></path>
                           </svg>
                        </fa-icon>
                        <div _ngcontent-ecm-c507="" class="text">
                           <div _ngcontent-ecm-c507="" routerlinkactive="text-color-orange" class="title subtitle-2 text-color-black"> Puan ve Çeklerim </div>
                           <!---->
                        </div>
                        <fa-icon _ngcontent-ecm-c507="" routerlinkactive="text-color-orange" class="ng-fa-icon chevron">
                           <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                              <path fill="currentColor" d="M113.3 47.41l183.1 191.1c4.469 4.625 6.688 10.62 6.688 16.59s-2.219 11.97-6.688 16.59l-183.1 191.1c-9.152 9.594-24.34 9.906-33.9 .7187c-9.625-9.125-9.938-24.38-.7187-33.91l168-175.4L78.71 80.6c-9.219-9.5-8.906-24.78 .7187-33.91C88.99 37.5 104.2 37.82 113.3 47.41z"></path>
                           </svg>
                        </fa-icon>
                     </div>
                  </sm-side-nav-link>
                  <!----><!---->
                  <sm-side-nav-link _ngcontent-ecm-c509="" linktitle="Hesap Ayarları" _nghost-ecm-c507="" tabindex="0" ngx-ql="" class="ng-star-inserted">
                     <div _ngcontent-ecm-c507="" class="side-nav-link">
                        <fa-icon _ngcontent-ecm-c507="" routerlinkactive="text-color-orange" class="ng-fa-icon icon">
                           <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="user-gear" class="svg-inline--fa fa-user-gear" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                              <path fill="currentColor" d="M610.5 373.3c2.625-14 2.625-28.5 0-42.5l25.75-15c3-1.625 4.375-5.125 3.375-8.5c-6.751-21.5-18.25-41.13-33.25-57.38c-2.25-2.5-6-3.125-9-1.375l-25.75 14.88c-10.88-9.25-23.37-16.5-36.88-21.25V212.3c0-3.375-2.5-6.375-5.75-7c-22.25-5-45-4.875-66.25 0c-3.25 .625-5.625 3.625-5.625 7v29.88c-13.5 4.75-26 12-36.88 21.25L394.4 248.5c-2.875-1.75-6.625-1.125-9 1.375c-15 16.25-26.5 35.88-33.13 57.38c-1 3.375 .3748 6.875 3.25 8.5l25.75 15c-2.5 14-2.5 28.5 0 42.5l-25.75 15c-3 1.625-4.25 5.125-3.25 8.5c6.626 21.5 18.12 41 33.13 57.38c2.375 2.5 6 3.125 9 1.375l25.88-14.88c10.88 9.25 23.37 16.5 36.88 21.25v29.88c0 3.375 2.375 6.375 5.625 7c22.38 5 45 4.875 66.25 0c3.25-.625 5.75-3.625 5.75-7v-29.88c13.5-4.75 26-12 36.88-21.25l25.75 14.88c2.875 1.75 6.75 1.125 9-1.375c15-16.25 26.5-35.88 33.25-57.38c1-3.375-.3749-6.875-3.375-8.5L610.5 373.3zM496 400.5c-26.75 0-48.5-21.75-48.5-48.5s21.75-48.5 48.5-48.5S544.5 325.3 544.5 352S522.8 400.5 496 400.5zM425.1 491.8c0 6.148 1.867 11.77 4.433 17.01C425.4 510.7 420.9 512 416 512H32C14.33 512 0 497.7 0 480c0-97.2 78.8-176 176-176h95.1c16.68 0 32.78 2.473 48.07 6.811c.4258 13.5 7.556 25.94 19.68 32.8l7.655 4.461c-.0684 2.619-.0684 5.24 0 7.859l-8.018 4.669c-3.125 1.689-5.664 4.06-8.111 6.507C313.5 357.7 293.5 352 272 352H176c-65.17 0-119.1 48.95-127 112h303.2c3.102 3.998 6.18 8.001 9.604 11.74c7.842 8.26 18.25 12.75 28.97 12.75c6.917 0 13.75-1.85 19.75-5.352l7.818-4.493c2.237 1.371 4.506 2.68 6.809 3.93V491.8zM224 256c70.7 0 128-57.31 128-128c0-70.69-57.3-128-128-128S96 57.31 96 128C96 198.7 153.3 256 224 256zM224 48C268.1 48 304 83.89 304 128c0 44.11-35.89 80-80.01 80S144 172.1 144 128C144 83.89 179.9 48 224 48z"></path>
                           </svg>
                        </fa-icon>
                        <div _ngcontent-ecm-c507="" class="text">
                           <div _ngcontent-ecm-c507="" routerlinkactive="text-color-orange" class="title subtitle-2 text-color-black"> Hesap Ayarları </div>
                           <!---->
                        </div>
                        <fa-icon _ngcontent-ecm-c507="" routerlinkactive="text-color-orange" class="ng-fa-icon chevron">
                           <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                              <path fill="currentColor" d="M113.3 47.41l183.1 191.1c4.469 4.625 6.688 10.62 6.688 16.59s-2.219 11.97-6.688 16.59l-183.1 191.1c-9.152 9.594-24.34 9.906-33.9 .7187c-9.625-9.125-9.938-24.38-.7187-33.91l168-175.4L78.71 80.6c-9.219-9.5-8.906-24.78 .7187-33.91C88.99 37.5 104.2 37.82 113.3 47.41z"></path>
                           </svg>
                        </fa-icon>
                     </div>
                  </sm-side-nav-link>
                  <!----><!----><!----><!----><!---->
               </div>
               <div _ngcontent-ecm-c509="" class="nav-footer">
                  <div _ngcontent-ecm-c509="" class="customer-contact">
                     <div _ngcontent-ecm-c509="" class="icon">
                        <fa-icon _ngcontent-ecm-c509="" class="ng-fa-icon">
                           <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-flip" class="svg-inline--fa fa-phone-flip" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path fill="currentColor" d="M347.1 24.6c7.7-18.6 28-28.5 47.4-23.2l88 24C499.9 30.2 512 46 512 64c0 247.4-200.6 448-448 448c-18 0-33.8-12.1-38.6-29.5l-24-88c-5.3-19.4 4.6-39.7 23.2-47.4l96-40c16.3-6.8 35.2-2.1 46.3 11.6L207.3 368c70.4-33.3 127.4-90.3 160.7-160.7L318.7 167c-13.7-11.2-18.4-30-11.6-46.3l40-96z"></path>
                           </svg>
                        </fa-icon>
                     </div>
                     <div _ngcontent-ecm-c509="" class="info">
                        <div _ngcontent-ecm-c509="" class="contact-number mat-subheading-1 text-color-orange">0850 200 40 00</div>
                        <div _ngcontent-ecm-c509="" class="mat-caption-normal text-color-grey">Müşteri Hizmetleri</div>
                     </div>
                  </div>
                  <!----><a _ngcontent-ecm-c509="" href="javascript:void(0)" class="logout mat-caption-normal text-color-error ng-star-inserted"> Çıkış Yap </a><!---->
                  <div _ngcontent-ecm-c509="" class="external-links mobile-only">
                     <div _ngcontent-ecm-c509="" class="row mat-caption-normal text-align-center ng-star-inserted">
                        <span _ngcontent-ecm-c509="" class="text">Öneri ve Talep Formu</span>
                        <fa-icon _ngcontent-ecm-c509="" class="ng-fa-icon">
                           <svg role="img" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="arrow-up-right-from-square" class="svg-inline--fa fa-arrow-up-right-from-square" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path fill="currentColor" d="M336 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H457.4L212.7 276.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L480 54.6V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.8-7.2-16-16-16H336zM64 64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V304c0-8.8-7.2-16-16-16s-16 7.2-16 16V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V128c0-17.7 14.3-32 32-32H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H64z"></path>
                           </svg>
                        </fa-icon>
                     </div>
                     <!---->
                     <div _ngcontent-ecm-c509="" class="row mat-caption-normal text-align-center">
                        <span _ngcontent-ecm-c509="" class="text">Kişisel Verilerin Korunması Hakkında Aydınlatma Yazısı</span>
                        <fa-icon _ngcontent-ecm-c509="" class="ng-fa-icon">
                           <svg role="img" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="arrow-up-right-from-square" class="svg-inline--fa fa-arrow-up-right-from-square" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path fill="currentColor" d="M336 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H457.4L212.7 276.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L480 54.6V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.8-7.2-16-16-16H336zM64 64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V304c0-8.8-7.2-16-16-16s-16 7.2-16 16V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V128c0-17.7 14.3-32 32-32H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H64z"></path>
                           </svg>
                        </fa-icon>
                     </div>
                  </div>
               </div>
            </div>
         </sm-membership-side-nav>
         <router-outlet></router-outlet>
         <!---->
      </div>
   </sm-membership-shell-page>
   <!---->
</main>
   <?php }?>
