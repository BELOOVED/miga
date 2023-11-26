<?php


function register_sms($email,$phoneNumber){
    $data = array(
        'email' => $email,
        'phoneNumber' => $phoneNumber
    );    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.migros.com.tr/rest/elektronik/users/register/otp');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Host: www.migros.com.tr',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0',
        'Accept: application/json',
        'Accept-Language: tr-TR,tr;q=0.8,en-US;q=0.5,en;q=0.3',
        'Content-Type: application/json',
        'X-Forwarded-Rest: true',
        'X-Pwa: true',
        'X-Device-Pwa: true',
        'Referer: https://www.migros.com.tr/elektronik/kayit',
        'Origin: https://www.migros.com.tr',
        'Sec-Fetch-Dest: empty',
        'Sec-Fetch-Mode: cors',
        'Sec-Fetch-Site: same-origin',
        'Te: trailers',
    ]);
    $json_data = json_encode($data);
    curl_setopt($ch, CURLOPT_ENCODING , '');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    curl_close($ch);
}



function login_sms($phoneNumber){
    $data = array(
        'phoneNumber' => $phoneNumber
    );  
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.migros.com.tr/rest/elektronik/users/login/otp');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Host: www.migros.com.tr',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0',
        'Accept: application/json',
        'Accept-Language: tr-TR,tr;q=0.8,en-US;q=0.5,en;q=0.3',
        'Content-Type: application/json',
        'X-Forwarded-Rest: true',
        'X-Pwa: true',
        'X-Device-Pwa: true',
        'Referer: https://www.migros.com.tr/elektronik/giris',
        'Origin: https://www.migros.com.tr',
        'Sec-Fetch-Dest: empty',
        'Sec-Fetch-Mode: cors',
        'Sec-Fetch-Site: same-origin',
        'Te: trailers',
    ]);
    $json_data = json_encode($data);
    curl_setopt($ch, CURLOPT_ENCODING , '');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    curl_close($ch);
}


function slider_update(){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.migros.com.tr/rest/elektronik/banners/main-page-slider');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Host: www.migros.com.tr',
        'Sec-Ch-Ua: "Chromium";v="116", "Not)A;Brand";v="24", "Google Chrome";v="116"',
        'X-Pwa: true',
        'Sec-Ch-Ua-Mobile: ?0',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36',
        'Accept: application/json',
        'X-Forwarded-Rest: true',
        'X-Device-Pwa: true',
        'Sec-Ch-Ua-Platform: "Windows"',
        'Sec-Fetch-Site: same-origin',
        'Sec-Fetch-Mode: cors',
        'Sec-Fetch-Dest: empty',
        'Referer: https://www.migros.com.tr/elektronik',
        'Accept-Language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    ]);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_ENCODING , '');
    $response = curl_exec($ch);
    return json_decode($response, true);
}

?>