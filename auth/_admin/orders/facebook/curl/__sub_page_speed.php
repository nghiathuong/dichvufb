<?php 
    require_once '../../../../../database/config.php';
    require_once '../../../../../database/function.php';

    function sub_page_speed($id,$server,$amount,$note){
        $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://muasubsale.vn/api/service/facebook/like-page-speed/order');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "idpage=$id&server_order=$server&amount=$amount&note=$note");
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
    $headers[] = 'Api-Token: eyJpdiI6InEzS3hkalUyZEJUZzk3MUROZEJrbnc9PSIsInZhbHVlIjoiRmtqTTAzUFRseXRsNWZQUnNYbHZJQVRCMnBud0VPbmxRSTlmSGpzL1hNbG1WcVFzLzlUSG8xTTV2RFJ1Q25RVSIsIm1hYyI6ImNjYjE5YzU1OWYyNjYyNDRkMzEwZjI0MDBlZjU4ZmNiM2UzMjM0ZGJlMWE0M2Q2NzAyM2ZkNTFiZWI2MWRmZGUiLCJ0YWciOiIifQ==';
    $headers[] = 'X-Requested-With: XMLHttpRequest';
    $headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
    $headers[] = 'Origin: https://muasubsale.vn';
    $headers[] = 'Sec-Fetch-Site: same-origin';
    $headers[] = 'Sec-Fetch-Mode: cors';
    $headers[] = 'Sec-Fetch-Dest: empty';
    $headers[] = 'Referer: https://muasubsale.vn/service/facebook/like-page-speed/order';
    $headers[] = 'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5';
    $headers[] = 'Cookie: XSRF-TOKEN=eyJpdiI6Iktadml4UjZBTjFkWnBJNGtabWRxdmc9PSIsInZhbHVlIjoiVStZRnE4OGxzVC81WEhmN1pTSkhreXRFTy9FVk01ZE9UU2kvR3Y0T1RHL1U0YnJPVkc1VFVibTJVK0g3TG8zaldDU2c1Z1hmYW1sTXBTa2N0U2kwdXZHUk15bG1OYndpMUdWOUpqaE5rUFpVRUZIdkFIKzZFR2RLMVIwLzRQcVgiLCJtYWMiOiI2MmQ3NzI0MjYxYTQ2MGEwNzk3NzYzN2UwNzk1YjExZmIxZGRjYzdlNTRkMDk0NDU5MGM1NTAwN2JjODhmN2QzIiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6IlFrY0dyVFc3cGQrclIyNHNzdXdwOVE9PSIsInZhbHVlIjoid0ZvODJUNlFYeXR4R1k1Rlk1OXpZMUcvQkNkSHExQTFUZGJCalEwL0hOcU5LUEh6WU0vZndrZ3RaZUZJcXBwQ0tNTUxtczM5TUJ3eHIvRitlT25qR1Z6VTQ0RnRyN3dyRzA0ZWFYNnFHU3ErSU8wREM1L2d4WjU4NklrbjNrRngiLCJtYWMiOiJkNzllNmI1ODIzNWZjMTRiYzM0YjRiYzdlZDMwMzZhYTA5NDRlMGU1NzI2N2U4OGJlOWZlNDhlNDIxMTEyZjI5IiwidGFnIjoiIn0%3D';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    $result = json_decode($result, true);
    return $result['message'];
    }
    
    if(!$getUser){
        header("location: $welecome");
    }elseif($getUser['level'] == 4){

        //

    }else{
        header("location: $welecome");
    }

?>