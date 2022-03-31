<?php 
require_once '../../../database/config.php';
require_once '../../../database/function.php';


if ((!empty($_SERVER['HTTP_X_FORWARDED_HOST'])) || (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))) {
    $_SERVER['HTTP_HOST'] = $_SERVER['HTTP_X_FORWARDED_HOST'];
    $_SERVER['HTTPS'] = 'on';
}
function get_id_fb($link_fb)
{
    $ch = curl_init();
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://id.traodoisub.com/api.php');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "link=$link_fb");
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

    $headers = array();
    $headers[] = 'Authority: id.traodoisub.com';
    $headers[] = 'Pragma: no-cache';
    $headers[] = 'Cache-Control: no-cache';
    $headers[] = 'Sec-Ch-Ua: \" Not;A Brand\";v=\"99\", \"Google Chrome\";v=\"97\", \"Chromium\";v=\"97\"';
    $headers[] = 'Accept: application/json, text/javascript, */*; q=0.01';
    $headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
    $headers[] = 'X-Requested-With: XMLHttpRequest';
    $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36';
    $headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
    $headers[] = 'Origin: https://id.traodoisub.com';
    $headers[] = 'Sec-Fetch-Site: same-origin';
    $headers[] = 'Sec-Fetch-Mode: cors';
    $headers[] = 'Sec-Fetch-Dest: empty';
    $headers[] = 'Referer: https://id.traodoisub.com/';
    $headers[] = 'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    $get = json_decode($result, true);
    if ($get['code'] == 400){
        return $get['error'];
    }
    elseif($get['code'] ==200){
        return $get['id'];
    }
}
if(empty($_POST['link_fb'])){
    echo JSON(400, 'Vui lòng nhập link fb');
}
else{
    $link_fb = check_string($_POST['link_fb']);
    $get_id = get_id_fb($link_fb);
    echo JSON(200, $get_id);
}

?>