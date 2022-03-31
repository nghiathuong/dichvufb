<?php 
    require_once '../../../../../database/config.php';
    require_once '../../../../../database/function.php';

    function like_post_speed($id_Post, $server,$reaction,$speed,$amount,$note){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://muasubsale.vn/api/service/facebook/like-post-speed/order');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "idpost=$id_Post&server_order=$server&reaction=$reaction&speed=$speed&amount=$amount&note=$note");
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
        $headers[] = 'Api-Token: eyJpdiI6InFubnUrVzlqeklpWWJiL1FiM1h1U1E9PSIsInZhbHVlIjoiamt5OFN3VU5kU21XQnQ4WGpKVGtsYzN2TE5YaEtNTldyWm96elE5d3lJNHNxM3FKNGhaY3JiR3RyMWtFRXBjOCIsIm1hYyI6ImFmYWQxNWE5ZWM2YjU1YTIwZTBlZjVhNTY5N2JlMTZmNWExODAwNzI1ZTU3ZmUyNzg2NDNiOTZkMjY5ZjA3YzMiLCJ0YWciOiIifQ==';
        $headers[] = 'X-Requested-With: XMLHttpRequest';
        $headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
        $headers[] = 'Origin: https://muasubsale.vn';
        $headers[] = 'Sec-Fetch-Site: same-origin';
        $headers[] = 'Sec-Fetch-Mode: cors';
        $headers[] = 'Sec-Fetch-Dest: empty';
        $headers[] = 'Referer: https://muasubsale.vn/service/facebook/like-post-speed/order';
        $headers[] = 'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5';
        $headers[] = 'Cookie: __cf_bm=Th_mJ3oNqTtdNxtRl9bSFTOOVVrDLoSfglD0iZho32g-1645619296-0-AVdmw8LYj2RDoBfKeyWiiTYrqcu/33i7kRP3XOkOIh2xrhFIuADxfu+ikRPWUyXKCu3FVKIGh4lnXfP3r9K6YxLctW9H/gkM82euyRJJy0QmkLW7iKX/AqL9oYBuBjmSIA==; XSRF-TOKEN=eyJpdiI6ImJzSXZtT1F2d1l5eG9rbDVHbTV2M2c9PSIsInZhbHVlIjoiaTZ3RlNObUkvZFdtMVhmODljUzEzVk5yRGZhZFp5TzlDL3JDN0hmYkhOQ1V3YkQ5ZStLUXlRWFVncEM1ZW5NTUZta2YxUXFhVWRicTNoa3RYVG05MU5jc1pIaVRuMVBQc1A3SXU5ZVUrT2VFdUxoWGVNR0dOU2lMYnBLdGlaaWwiLCJtYWMiOiI1ZWM3OGExMWE4ZWE5MTBmZTAyMjcwNTEyNzJlOTFkZGIwYWVkZTZiM2M1YTZiZGNkNDQ2ODUyMTcyODY5MTQyIiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6IjdVS3haeHNJVXZ3TkszRWdOdVJySUE9PSIsInZhbHVlIjoiUW1FRkxwVDNhbmdWTDcxK3Nub3FTRnYxV2xRbC9TM1lyalV6cU53K2ROQlkyQzlXYU9Ba2hEZkVhS0xKZUZHckRmNm5LbFB5TE1TUU5kOEExWGNLY1R3enl2TldyaTRWMHdSVXNUL0pIdW5GMEtiWWgzYm5VSU5wYjFHMVdIbjUiLCJtYWMiOiI2OWJmMDQ2NWE2ODFiOTc3YWJkNjNhOTg1MDgwNjhiMmY2OWVhZmQwZGRhNDkzNDY5NjE3MTcyNmIxZTk0OTk1IiwidGFnIjoiIn0%3D';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        return $result;
        $result = json_decode($result, true);
        return $result['message'];
    }
    
    if(!$getUser){
        header("location: $welecome");
    }elseif($getUser['level'] == 4){

    }else{
        header("location: $welecome");
    }
