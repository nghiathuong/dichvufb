<?php 
    require_once '../../../../../database/config.php';
    require_once '../../../../../database/function.php';

    function sub_sale($idfb, $server, $amount, $note){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://muasubsale.vn/api/service/facebook/sub-sale/order');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "idfb=$idfb&server_order=$server&amount=$amount&note=$note");
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
        $headers[] = 'Api-Token: eyJpdiI6ImZVeUVMNFZUL01vMjVVN1F1YWRGVWc9PSIsInZhbHVlIjoiem5ualdhaHFBV1BqeVFOSVlrUlBsVGc1NVNpN1ZCUGtuMFlnb2pCMG41NXQ1d013MjdZOUNkWFJKa2V3dGNDdyIsIm1hYyI6IjAyODRmYjA2NzA3MGZhOGQ5OTc1YzdjNDljMjA1OWVlNDFmZWRjMmFiMGUwYzNkNTk3NGJmYTU1NzU3YmFkYjEiLCJ0YWciOiIifQ==';
        $headers[] = 'X-Requested-With: XMLHttpRequest';
        $headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
        $headers[] = 'Origin: https://muasubsale.vn';
        $headers[] = 'Sec-Fetch-Site: same-origin';
        $headers[] = 'Sec-Fetch-Mode: cors';
        $headers[] = 'Sec-Fetch-Dest: empty';
        $headers[] = 'Referer: https://muasubsale.vn/service/facebook/sub-sale/order?btwaf=44838627';
        $headers[] = 'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5';
        $headers[] = 'Cookie: __cf_bm=YfS9LS1S9Cs1YdJDkR0O4HcNx6mY1c4YonxHqEvKlyA-1645620247-0-AQyCvU7GfA3dpRrJYMuWeZ2yc4yxeDtBRl5ibzjRwmewdPj/sbZCjg1L2woH4HO5Cq3GrzaZwkjO1ArBOTe4L0xqJGWU5zeDDNzZPD70KmmC+GDTXWADXnbX1QLc/FBa9A==; XSRF-TOKEN=eyJpdiI6InplajczMnlSZUI4MzdUQ0pxa1R2dVE9PSIsInZhbHVlIjoiNktaRTVnbzgwck5yNHdsN2VUcGEzWmdBS1h2QTliU2ljNE5DbWQ0N1UyOVdMVjFXbmxXbFFDa29rNjluZzR2MCtGYldNdWFVUjNZbFhyNHFMRmpZUVVvSENHeStwQkFBR3JoSkxzRjN4cnBkenhZdHRVaFRNczI3b1RBOWxuVGIiLCJtYWMiOiJhYzQ5YTg0YWI0ZjY2ZWFlYzQzYjZiZDM1YzhiOTE2YzNlMjY0ZTQ5OGE2MWMwNjM1YWYyNDAxNWJjODg0MWQ5IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6ImxiNGRBTVpXaTVYT2d3Wi8wV1VTOEE9PSIsInZhbHVlIjoiaVYwTEVXU05oYXZQZlpST2JEbWo2WGhpNmRmSFdOYXBKQjRZb1VvM1hlTWFSWE1LYlpnSkJTUzFReEg1SkpNY05yWkRrOTZROVBHLzlLSzErZFJKNzI3VzVqZlR4QytqTWsybS84Yk1qWXNRV0sxMmYrVGhoNkxRWnh4R2dROTgiLCJtYWMiOiIwMThiYzY4Njk3M2ZjNDQ1ODgxMjNjN2U4ZTRhZWViZjIxYzljNGVhNzI1MmE2MTBkODBkM2FhM2E2YTFjYTZlIiwidGFnIjoiIn0%3D';
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