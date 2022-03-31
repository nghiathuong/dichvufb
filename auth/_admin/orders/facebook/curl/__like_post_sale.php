<?php
require_once '../../../../../database/config.php';
require_once '../../../../../database/function.php';
require_once('simple_html_dom.php');
function like_posts_sale($link_post, $server, $reaction, $amount, $note)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://muasubsale.vn/api/service/facebook/like-post-sale/order');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "link_post=$link_post&server_order=$server&reaction=$reaction&amount=$amount&note=$note");
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

    $headers = array();
    $headers[] = 'Authority: muasubsale.vn';
    $headers[] = 'Pragma: no-cache';
    $headers[] = 'Cache-Control: no-cache';
    $headers[] = 'Sec-Ch-Ua: \" Not A;Brand\";v=\"99\", \"Chromium\";v=\"98\", \"Google Chrome\";v=\"98\"';
    $headers[] = 'X-Csrf-Token: 6vaEYR16seRw76rMAvsVj4xFUZ2jlJNW7STZc4vO';
    $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36';
    $headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
    $headers[] = 'Accept: application/json, text/javascript, */*; q=0.01';
    $headers[] = 'Api-Token: eyJpdiI6IkdqRkpmeUJRTkhiVTBLNWJYdzBMdlE9PSIsInZhbHVlIjoiVTZoeldOSEhva2ViZUtoV290TTVKRmtqTEZ1TnBzeDZBWXV0Z1ZUdEtkUzMxNm9qMC9yVWlEajZVTDMwL2tQciIsIm1hYyI6Ijc2MDQ0YjcyMmViMWZiNzQ5MjRiYzAwZDVmMDYzNzU3NzM2MWM5OWViZjFlZTFjMjcyODBkYzg4YjA5MjMzYmIiLCJ0YWciOiIifQ==';
    $headers[] = 'X-Requested-With: XMLHttpRequest';
    $headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
    $headers[] = 'Origin: https://muasubsale.vn';
    $headers[] = 'Sec-Fetch-Site: same-origin';
    $headers[] = 'Sec-Fetch-Mode: cors';
    $headers[] = 'Sec-Fetch-Dest: empty';
    $headers[] = 'Referer: https://muasubsale.vn/service/facebook/like-post-sale/order';
    $headers[] = 'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5';
    $headers[] = 'Cookie: XSRF-TOKEN=eyJpdiI6InVONzRRcHpiSmZLN2wvMmxDU0cxQ0E9PSIsInZhbHVlIjoiV0crQnFERkVKNjNXdHIzYTQ5S3FKNFhNVEc1K0VLSmh2UHpKVWNWOXBwVkhKWTFNRDV5U3BMUU9HL2x1TlBES2NMVUFGb3NqNWZtUk1BM2ptMmhCcXRWbVJiMUxlczdvRHFuTVkvaHlLdGFFdmVNNVowb1d1b0VoZENGWDNVcWYiLCJtYWMiOiI1MWIxZTNmODE4ODEyNDczMjNiOTEyNDNmNDg5NGZjMDc4ZTMxMTdjYmI0NWFiMzc3YjZjNTYwZmIwMzAxYmI4IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6IlgvcmVaTXV2TVIybmE2NE5ld2FlR3c9PSIsInZhbHVlIjoiUWw2aGNVVEpvQUdkRmZEY3RVRkUyMkQvMEZxN21MSU5XRk9kaXJZYWRXeFZDKzh4M0hWMnNLMnh1K28wVEFLUi9jY3dMTEkwdlFRcExvSnQvenFhL0JNUEN6N3FjbExuVXpFcS9kd3hQalAwTjBtMXB1TFBhK0pTamFsN1AxcFgiLCJtYWMiOiJkOTBhNzFkOWY5MTQ1NWU2NWQ5M2VhZDgyYmZjNjAwZmVkYmU3NjQ0YTM0MGNjYTA1NTk4NTIxMmUyMjE2NjA1IiwidGFnIjoiIn0%3D; __cf_bm=Vz9eabcFHs8D096x2yRImLPYb_ZlgTuYeMxaHsi_l4o-1645618389-0-AU+qWTTAB/d+I54JZwCc9Pui1ipedQ2Fnhaqo6FCIYovlMgnHpY9siM3A1BYxuhHlaqYHQQ/5lKdNqlpMBJP94ftSeWQgfCYmSjJjRVtvAUzET8UFWAMdGtDTOns4Aicnw==';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    $result = json_decode($result, true);

    return $result['message'];
}

if (!$getUser) {
    header("location: $welecome");
} elseif ($getUser['level'] == 4) {
} else {
    header("location: $welecome");
}
