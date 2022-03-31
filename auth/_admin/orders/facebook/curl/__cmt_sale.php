<?php 
    require_once '../../../../../database/config.php';
    require_once '../../../../../database/function.php';
    function cmt_sale($link_pst, $server,$cmt,$amount,$note){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://muasubsale.vn/api/service/facebook/comment-sale/order');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "link_post=$link_pst&server_order=$server&comment=$cmt&amount=$amount&note=$note");
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
        $headers[] = 'Api-Token: eyJpdiI6IkZicFgrVlY3ZEZqaWNPNndDRlVLWVE9PSIsInZhbHVlIjoiaTBSUGdqZVJ3aU0rK09KMXJkZ1o0Nys1bWFlTWVZM25rZjVRWjNrRlpxeWRPSVBOWGZRRkRUak00M3hvdXJSKyIsIm1hYyI6ImRiMmNiZDVlOWFhODQ1M2MyZjI2ODExYjU1NjVjZjc4YmEwMGIzNjE2YjJmYTRkOTVhZjFjNWRlYTg3NWRmYzIiLCJ0YWciOiIifQ==';
        $headers[] = 'X-Requested-With: XMLHttpRequest';
        $headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
        $headers[] = 'Origin: https://muasubsale.vn';
        $headers[] = 'Sec-Fetch-Site: same-origin';
        $headers[] = 'Sec-Fetch-Mode: cors';
        $headers[] = 'Sec-Fetch-Dest: empty';
        $headers[] = 'Referer: https://muasubsale.vn/service/facebook/comment-sale/order?btwaf=77694859';
        $headers[] = 'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5';
        $headers[] = 'Cookie: XSRF-TOKEN=eyJpdiI6IlZEc0ZVREY2dzBSSGZZZnNFdzc4NGc9PSIsInZhbHVlIjoibnA2VEt6S2RZSmJGYmd6d0VQdDlRRDBUbGNHTlVHT2NUNVhmbExISytKelhGWW9adENXaHhjNzlaQU52dTFWYWpINGdkMCtEbEthV3lUNzZmV3BnSFZXTWF1aDFwa2ZCNVJqQzY4V1lURFFLaGgzZ0txdEoxNkl1Z2dmaUkxaHAiLCJtYWMiOiJmMWNiYzczNDFmZTNlZTQwMmU5YWNmODczOThiY2ZhZDIzYzI4ZjZhOTk2NTY2ZjBmODNlNmU4MDZhOTcxY2M2IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6IkNkRk5xWUw3TEpXcG1zZSs5ajA5Z0E9PSIsInZhbHVlIjoiaEFWY1dKNEc1Q2t6SlhObm1kR3VjemZPZ1FPdDZzWFFvSnlBOGN4VFRWNDJEYytSWXBLbjRjcXBaUDNvREtQQmNLbXpVMDQ1TnJVK3pqSGpKWitTTE0yMGRNb2VMTDFaZG52ZjA4emQvaXRuZlRSYi8wY2NhQjIvOUlCQVQ4djEiLCJtYWMiOiJmZGJhOTI3NDhlNGI1NTI4MjRjNmFlNWMwNWFlZTRmN2I1ZGU4MWUzODdkYzQ1MDhmYTEyZTIzZTBkZjllOWU4IiwidGFnIjoiIn0%3D; __cf_bm=YfS9LS1S9Cs1YdJDkR0O4HcNx6mY1c4YonxHqEvKlyA-1645620247-0-AQyCvU7GfA3dpRrJYMuWeZ2yc4yxeDtBRl5ibzjRwmewdPj/sbZCjg1L2woH4HO5Cq3GrzaZwkjO1ArBOTe4L0xqJGWU5zeDDNzZPD70KmmC+GDTXWADXnbX1QLc/FBa9A==';
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


    }else{
        header("location: $welecome");
    }
?>