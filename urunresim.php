<?php
include $_SERVER['DOCUMENT_ROOT'] . "/inc/pdo.php";

if (!isset($_GET['id'])){
    http_response_code(403);
    die();
}

if (empty($_GET['id'])){
    http_response_code(403);
    die();
}


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.migros.com.tr/rest/elektronik/products/screens/'.$_GET['id']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Host: www.migros.com.tr',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0',
    'Accept-Language: tr-TR,tr;q=0.8,en-US;q=0.5,en;q=0.3',
    'Sec-Fetch-Mode: no-cors',
    'Sec-Fetch-Site: same-origin',
    'Pragma: no-cache',
    'Cache-Control: no-cache',
    'Te: trailers',
]);
curl_setopt($ch, CURLOPT_ENCODING , '');
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
$kod = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
http_response_code($kod);
if ($kod != 200){
    die();
}

$data = json_decode($result, true)['data']['storeProductInfoDTO']['images'];
$decodedData = array();

foreach ($data as $key => $image) {
    $decodedData[] = "https://external-content.duckduckgo.com/iu/?u=".$image["urls"]["PRODUCT_HD"];
}



if (isset($_GET['number'])) {
    $number = intval($_GET['number']);
    if (isset($decodedData[$number])) {
        header('Location: '.$decodedData[$number], true, 302);
        exit;
    }else{
        header('Location: '.$decodedData[0], true, 302);
        exit;  
    }
} else {
    echo json_encode($decodedData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
}

?>