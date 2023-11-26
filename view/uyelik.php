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
   <!---->
</main>