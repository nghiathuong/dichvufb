<?php 
    require_once '../../../../../database/config.php';
    require_once '../../../../../database/function.php';

    function sub_page_sale($id,$server,$amount,$note){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://muasubsale.vn/api/service/facebook/like-page-sale/order');
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
        $headers[] = 'Api-Token: eyJpdiI6Iks4ZDZhQ1N0OTlEQzJGdVJKNm9YTEE9PSIsInZhbHVlIjoiRWxpQTlzd0tab2MzTkROcVVDM3QvTmZ6M2ZNUThuTno5VndzVjYrU2RMQnhFMFVIeEtkZWFNdGV5eXVYS0s3TiIsIm1hYyI6ImVjYmQ2NDg3ZWViMDJjYjk3MjkwMzg5M2VhMDRmMDljYzBlYTdlM2ExOWY4OWZhNGEwYTNhNTQzMGVhNmZmNjEiLCJ0YWciOiIifQ==';
        $headers[] = 'X-Requested-With: XMLHttpRequest';
        $headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
        $headers[] = 'Origin: https://muasubsale.vn';
        $headers[] = 'Sec-Fetch-Site: same-origin';
        $headers[] = 'Sec-Fetch-Mode: cors';
        $headers[] = 'Sec-Fetch-Dest: empty';
        $headers[] = 'Referer: https://muasubsale.vn/service/facebook/like-page-sale/order';
        $headers[] = 'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5';
        $headers[] = 'Cookie: __cf_bm=ZKBQ.CPQSHl9EsHwi1PgV8nqFw1baj.Ct8HcUlc68Qk-1645621303-0-AQJuw3XC1XpDqU+3Ss0u/nnHdYkQB/MvZ9anapZUeNCnH1d1aUsRXOvtnv4EmGSmnJ2uT13wcKcuJ/9erkZl5ODlIES+nLraP5ij0PirE/nd2/K7b9vfaUfy6Q0cO9lyCg==; XSRF-TOKEN=eyJpdiI6IkFWWERHR0MzdGVxQU5MZ1ZlMnJWTUE9PSIsInZhbHVlIjoidDNkQUNYL2FQWTlsUFlqTkwyY0xVcE94aVZGT2VhSVpxbHdiTEZENk8xRnhxME04Rk5Fa2FrVklYUmZoUnNaMUVvMDhIMy9udzlZR3c1YzIycmFUMXRQbm9SdUNXbHd2aU12SVRpYjdLODFhdW9VOXpxUm5sbTdJaERuSFc3QjEiLCJtYWMiOiI5OTRmZmYyNTdmOTFjYjQ1ODQ0MTEzZTE4OTZjNzdlMjhhYzAyMTZkNDljNGViNjAxYmIxMjkzMTE4MTM4YTY5IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6IlR2WExtcnRBMGpVRklDV0I4MjdKbGc9PSIsInZhbHVlIjoiM3ZOSnorY2lxUVZ2N01va2ZHZ3dybHJ3WkxHNXRoYjZHYWFFb1djbkkyOFdOSStuTXVvRlp0dW02bjZ1TmIxWllOUXNFaUw1V1hkWCtGOW9FQ0VnK0trNEJ0Q3I1QUI1empxdVhub3FJWlBNZ3Y3b0ZPNnZhcitCd0pVWkk4MEkiLCJtYWMiOiIxMzJlMzY0ZmNlNjA5NzgzN2UzYzI4YWY1OTU2Mzg2Y2EzN2IyODRhZGM5YzBhMWY2OTg2ZDMwNDg0NjY1Mzg3IiwidGFnIjoiIn0%3D';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        $result = json_decode($result, true);
        return $result['message'];
    }

?>