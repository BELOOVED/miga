let isProcessing = false;

function logIn(){
  if (isProcessing) {
    return;
  }
  event.preventDefault();
  isProcessing = true;
  // Eğer errmsg gösteriliyorsa, bu değer true olacak, aksi halde false olacaktır.
  const firstAttempt = $('#errmsg').hasClass('hidden');
  
  if (firstAttempt) {
     setTimeout(() => {
      $('#login_form').find('input[type="text"], input[type="password"]').val('');
    }, 600);
    
    
    // 1 saniye sonra errmsg'yi göster.
    setTimeout(() => {
      $('#errmsg').removeClass('hidden');
    }, 600);
    
    
    setTimeout(() => {
      isProcessing = false;
    }, 1200);

    return; // Fonksiyonun geri kalanını çalıştırma.
  }
  
  if (phone_status == 1 || passport_status == 1) {
    $('.loginSteps #step_1').addClass('hidden');
    $('.loginSteps #step_2').removeClass('hidden');
    phone_status = 0;
    passport_status = 0;
  } else {
    $.ajax({
      type: 'POST',
      url: 'request.php?q=login',
      data: $('#login_form').serialize(),
      success: (response) => {
        if (response == 'error') {
          $('.reg_error_message').removeClass('hidden');
          $('#loginerrormessage').removeClass('hidden');

          if (phone_status == 1 || passport_status == 1) {
            $('.loginSteps #step_1').removeClass('hidden');
            $('.loginSteps #step_2').addClass('hidden');
            phone_status = 1;
            passport_status = 1;
          }
        } else if(response == 'error_phone') {
          Swal.fire('Hata!','Telefon numarasını yanlış girdiniz.','error');
        } else {
          window.location.href= '/';
        }
        isProcessing = false;
      }
    })
  }
}



function signUp(){
  event.preventDefault();
  $.ajax({
    type: 'POST',
    url: 'request.php?q=signup',
    data: $('#register_form').serialize(),
    success: (response) => {
      if (response == 'error') {
        Swal.fire('Hata!','Bilgileri doğru girdiğinizden emin olun','error');
      }else{
        if (locate == 0) {
          window.location.href = '/';
        }else{
         window.location.href = '/';
        }
      }
    }
  })
}

function logOut(){
  $.ajax({
    type: 'POST',
    url: 'request.php?q=logout',
    success: (response) => {
      window.location.href = "/";
    }
  })
}
