<?php
    require_once '../../../../../database/config.php';
    require_once '../../../../../database/function.php';

    function sub_quality($id,$server,$amount,$note){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://muasubsale.vn/api/service/facebook/sub-quality/order');
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
        $headers[] = 'Api-Token: eyJpdiI6InJPVmlLMGNKUEZUREMrVW00VGV0OUE9PSIsInZhbHVlIjoiblJkNXhydFNXeEFIQmRUU01wKzU1RXJHbTBrUDhGZXFSMW9kZ3VFTTUzYktqd3dlNUJxNzdtc1l4Q1RSUThDQSIsIm1hYyI6ImYzNDc3MTQ4Mzg4M2E1MDI2ZTBhZTZlYTI0NjlkYzFjYTQ3YzZiZmNhMDRjYzc2NjgyMTY4ZGFjYjNlNWRmYmQiLCJ0YWciOiIifQ==';
        $headers[] = 'X-Requested-With: XMLHttpRequest';
        $headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
        $headers[] = 'Origin: https://muasubsale.vn';
        $headers[] = 'Sec-Fetch-Site: same-origin';
        $headers[] = 'Sec-Fetch-Mode: cors';
        $headers[] = 'Sec-Fetch-Dest: empty';
        $headers[] = 'Referer: https://muasubsale.vn/service/facebook/sub-quality/order';
        $headers[] = 'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5';
        $headers[] = 'Cookie: __cf_bm=YfS9LS1S9Cs1YdJDkR0O4HcNx6mY1c4YonxHqEvKlyA-1645620247-0-AQyCvU7GfA3dpRrJYMuWeZ2yc4yxeDtBRl5ibzjRwmewdPj/sbZCjg1L2woH4HO5Cq3GrzaZwkjO1ArBOTe4L0xqJGWU5zeDDNzZPD70KmmC+GDTXWADXnbX1QLc/FBa9A==; XSRF-TOKEN=eyJpdiI6Im5lanVCTzZaSFc4SEIwU1R2MVlNSnc9PSIsInZhbHVlIjoiQ25LVi9aUVNYcEd0c2NWNmFKVXE2S2x6SGlJQ2k3MFhyOEJlTHRONDRZN1lUZUFjaW93YVErZHZoeXpDT25NNmU1L0JHZmdiWjFsR0RhbU1LNGdqRktlcWJ2UWtDZlk0K2s5SCs1cUFkaENSd293VzdrL1RhbTlLTWF0RS9SWEEiLCJtYWMiOiJjZGU0N2Q0ZDBjMTZiY2U3NzQ5MmFmNTIxYzAyNDliMjA3YWE2YjNjZDA4MWI0NjE5ZWFiNDgxODA2ZTQ0NDJlIiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6IkFGSHRUQTlwRHV1TElJL2srTHZVNmc9PSIsInZhbHVlIjoibFpyNFZ3KzBTazhjaXJBTWdsZHRwaFhVQWVwc2gzMVlweEVqc3RsUWdUb0VIN3ExTXhYK1hMZFdQNUsrWTNqQ01mTWFxWXo3Y3hkRWh3Yk9uaGQ3di95VGY4QjRyeXdxVmlaTU5nTVBkVnVpMXZkTFl6TjdyMXNnTEFMN2Q0blgiLCJtYWMiOiJjMjA4ZjNmYmIzZDgyNjMzNjNkMDg2OTgyMWJkYWNmY2Q3NmM3MTY4ZjQyZDgwYTRiZDIxZjU4ZDA4ZWQ2OGI2IiwidGFnIjoiIn0%3D';
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