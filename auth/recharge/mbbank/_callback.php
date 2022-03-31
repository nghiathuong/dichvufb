<?php
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://online.mbbank.com.vn/retail_web/common/getTransactionHistory');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"accountNo\":\"0366897705\",\"fromDate\":\"23/02/2022\",\"toDate\":\"26/02/2022\",\"historyNumber\":\"\",\"historyType\":\"DATE_RANGE\",\"type\":\"ACCOUNT\",\"sessionId\":\"bd762043-7cc0-4497-ba0a-9c63233b1c2b\",\"refNo\":\"0366897705-2022022617194650\",\"deviceIdCommon\":\"acfup5mg-mbib-0000-0000-2022021918501478\"}");
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

    $headers = array();
    $headers[] = 'Connection: keep-alive';
    $headers[] = 'Pragma: no-cache';
    $headers[] = 'Cache-Control: no-cache';
    $headers[] = 'Sec-Ch-Ua: \" Not A;Brand\";v=\"99\", \"Chromium\";v=\"98\", \"Google Chrome\";v=\"98\"';
    $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
    $headers[] = 'Authorization: Basic QURNSU46QURNSU4=';
    $headers[] = 'Elastic-Apm-Traceparent: 00-56914c8c203b077ab179d9b9141e2878-39838f4a09f56707-01';
    $headers[] = 'Content-Type: application/json; charset=UTF-8';
    $headers[] = 'Accept: application/json, text/plain, */*';
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36';
    $headers[] = 'X-Request-Id: 0366897705-2022022617194650';
    $headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
    $headers[] = 'Origin: https://online.mbbank.com.vn';
    $headers[] = 'Sec-Fetch-Site: same-origin';
    $headers[] = 'Sec-Fetch-Mode: cors';
    $headers[] = 'Sec-Fetch-Dest: empty';
    $headers[] = 'Referer: https://online.mbbank.com.vn/information-account/source-account';
    $headers[] = 'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5';
    $headers[] = 'Cookie: MBAnalyticsaaaaaaaaaaaaaaaa_session_=FMCKJCKNNFCPKIEKMEPGJLMELJIPHAPDFCIMKDEGBOGKLPEOIEHMIDMFGDGBBOKCAKPDEBMCKOIDGKCOHKGABEPNDPMDDDJGIEJCHNIJMPDHOHIKAANJDJOJNELPDFGI; BIGipServerk8s_online_banking_pool_9712=3474718986.61477.0000; BIGipServerk8s_retail_web_internetbankingms_pool_9751=1713111306.5926.0000; BIGipServeronline_mbbank_retail_web_pool_8686=1376911626.60961.0000; BIGipServerk8s_retail-web-accountms_pool_10557=1713111306.15657.0000; JSESSIONID=B657465741AEBA865F92560EAB0BF57E';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);