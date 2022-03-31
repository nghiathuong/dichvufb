<?php 
    require_once '../../../../../database/config.php';
    require_once '../../../../../database/function.php';
    
    function sub_speed($id,$server,$amount,$note){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://muasubsale.vn/api/service/facebook/sub-speed/order');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "idfb=$id&server_order=$server&amount=$amount&note=$note");
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
        $headers[] = 'Api-Token: eyJpdiI6InowWmh2bHBpdVhjZUdhMlNjWmVMb0E9PSIsInZhbHVlIjoibmxZdjQ4NzEySkxEOU5NVjFSa3dJeXgzSlptK3lZK2pGUFFiR2k3VGtnYnVsbm5yaktLQ2pFRkI2RXRjbVBuOSIsIm1hYyI6ImMwNmJjOTI1OGU2MDU4MTc2MmRmNmZiNWI4NGRiODU5MWQwZTE3MjY1M2M3ZDEyMTU1MDVlM2VmNTg5ZTRkODYiLCJ0YWciOiIifQ==';
        $headers[] = 'X-Requested-With: XMLHttpRequest';
        $headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
        $headers[] = 'Origin: https://muasubsale.vn';
        $headers[] = 'Sec-Fetch-Site: same-origin';
        $headers[] = 'Sec-Fetch-Mode: cors';
        $headers[] = 'Sec-Fetch-Dest: empty';
        $headers[] = 'Referer: https://muasubsale.vn/service/facebook/sub-speed/order';
        $headers[] = 'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5';
        $headers[] = 'Cookie: XSRF-TOKEN=eyJpdiI6ImtVYmd6RkNpSTlCQWplUWt6OHcxZVE9PSIsInZhbHVlIjoiMnBETmIrMURId3l5QmttU2dqdkpEUXNRMllhWnlyZSt6WUtFRFJpa25EakErOHEyS1EvSFRqK2hDKy9iaDdLeXB0aVZOU3JSbWJYT0dreFJOdDl3Vk95TlV5M2pNeU5RUjRlRCtwY3dxQVVHeUpQZlY0amN1Q2VkQS9hVUk2bnIiLCJtYWMiOiJlYjBlNTI5MWY2MWY4Njk1YzFjNDI4MTkwYWQwODFhNzI1OTk3ZjQ2NmI0NTk4MTkxMTYxZTVmZmZkNjM4ZGIwIiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6Ilk3a1ZDKzlCS2dkM2tFMzZ0RE45ZEE9PSIsInZhbHVlIjoibXhramlHUW1qejRWMnc1djQ2UkkrVWwwSlptVlZuL1FMNWNyMG9ZN0NkYjhCSVNpR0ROYnV5OWtxYWVERXhRU2greHNwaHFZZEhibXQwZDNYb1dhd1pOUitlVmJKVFM5anJxY1h5cGV1UTMzNkxRZFAvZEw4RFNrTnpuU2ljRDEiLCJtYWMiOiIyMjQxZmQ1NTQ0ODIwOTE1ZDA3Y2MzMTI2MWI3NmI2MDQ2NWIyNjg2NDYyZGZjY2I5NTFhZGQzMTExMTI4NDg4IiwidGFnIjoiIn0%3D; __cf_bm=ZKBQ.CPQSHl9EsHwi1PgV8nqFw1baj.Ct8HcUlc68Qk-1645621303-0-AQJuw3XC1XpDqU+3Ss0u/nnHdYkQB/MvZ9anapZUeNCnH1d1aUsRXOvtnv4EmGSmnJ2uT13wcKcuJ/9erkZl5ODlIES+nLraP5ij0PirE/nd2/K7b9vfaUfy6Q0cO9lyCg==';
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