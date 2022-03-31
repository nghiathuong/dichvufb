<?php 
    require_once '../../../../../database/config.php';
    require_once '../../../../../database/function.php';

    function sub_vip($id,$server,$amount,$note){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://muasubsale.vn/api/service/facebook/sub-vip/order');
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
        $headers[] = 'Api-Token: eyJpdiI6ImVza0VLTE1tazhucGZ3R253OERWVUE9PSIsInZhbHVlIjoiMzdCWGlwVnlJM2FYUkNvWXQzek91MUFkYVo4V0xHZWVGdnpLYkVIVlFxc0kwRENRdDlOeWRrU3hLcWp6OTV5SSIsIm1hYyI6IjEwZDk0NTY1NThkMmU4NmEzNmY1ODE3NGJhZjIzNzhiOWQ0ZGNhODY1MGU4MWQ0YjEyM2VhZDFiMDNkYjhlZTciLCJ0YWciOiIifQ==';
        $headers[] = 'X-Requested-With: XMLHttpRequest';
        $headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
        $headers[] = 'Origin: https://muasubsale.vn';
        $headers[] = 'Sec-Fetch-Site: same-origin';
        $headers[] = 'Sec-Fetch-Mode: cors';
        $headers[] = 'Sec-Fetch-Dest: empty';
        $headers[] = 'Referer: https://muasubsale.vn/service/facebook/sub-vip/order';
        $headers[] = 'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5';
        $headers[] = 'Cookie: __cf_bm=YfS9LS1S9Cs1YdJDkR0O4HcNx6mY1c4YonxHqEvKlyA-1645620247-0-AQyCvU7GfA3dpRrJYMuWeZ2yc4yxeDtBRl5ibzjRwmewdPj/sbZCjg1L2woH4HO5Cq3GrzaZwkjO1ArBOTe4L0xqJGWU5zeDDNzZPD70KmmC+GDTXWADXnbX1QLc/FBa9A==; XSRF-TOKEN=eyJpdiI6Ing1YXEzMmZMYXpRT2FwRlhjclRhcEE9PSIsInZhbHVlIjoiMnBWZUwvekM2RnhqQjJjYWpUdmVYQ0huTUZUcWlORVNKUW54M0tZK0VXTisvM2tBWVlSYmFibFFGQ3NqS2tVSmJGRUVHdU5IRnBSdDFDeXc3bDEyZWRWUlhBVnFZSXJXYnVQY2hzQ0hpSlpwRVJUWnJKY3R6RHdGSU1YVWFLWGwiLCJtYWMiOiJmZmY4NzY5NmJkYTU4NWEyMWUzOWI4MzAyNTY5NGMxNmQ3MWYzMDg0YzlkNDU2Nzk0OTdkYzAyNTBhODc5MTk1IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6Imo0TFlvbGRIc2NJeURqdC80emt4Ymc9PSIsInZhbHVlIjoicDNjRUJGRDB1WldjeHp1WnQwRkswSU45alVlSVJqK0xRNzRsZWx1RklGWGtIMlduWk9mOFVSUmI0NmYvUG9RaklHQU1GeEtKKzczZmNGK3NDQXBOQWg1V3lxN1lneGNaL2Q1RnBlOGZKUnlHS01vRVpEV3UxSjB3VXoybHl5dkciLCJtYWMiOiIzZjZjMTA3YmZjMDZhMjg4NzA4NDEwNDYwYjlkNDhjYmE0YzAzNDIyNTlhM2Q2NGQ5NTdhOGFlZjE2MDI0ZDZjIiwidGFnIjoiIn0%3D';
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