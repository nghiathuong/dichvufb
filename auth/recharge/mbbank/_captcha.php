<?php 
    require_once 'simple_html_dom.php';
    $html = file_get_html('https://online.mbbank.com.vn/');

    foreach($html->find('img') as $element) {
        $captcha = $element->src;
        echo $captcha;
    }


    $ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://online.mbbank.com.vn/retail_web/internetbanking/doLogin');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"userId\":\"0366897705\",\"password\":\"f98dad1329d19a332cc1bd8c8eba2b26\",\"captcha\":\"pasdasd\",\"sessionId\":null,\"refNo\":\"bee6dba6f4b51aef7790b068fd6bd7ed-2022022617351951\",\"deviceIdCommon\":\"acfup5mg-mbib-0000-0000-2022021918501478\"}");
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Connection: keep-alive';
$headers[] = 'Pragma: no-cache';
$headers[] = 'Cache-Control: no-cache';
$headers[] = 'Sec-Ch-Ua: \" Not A;Brand\";v=\"99\", \"Chromium\";v=\"98\", \"Google Chrome\";v=\"98\"';
$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
$headers[] = 'Authorization: Basic QURNSU46QURNSU4=';
$headers[] = 'Elastic-Apm-Traceparent: 00-a82ea0431895f6532ee576b71f93341d-7dbe0ed90e836643-01';
$headers[] = 'Content-Type: application/json; charset=UTF-8';
$headers[] = 'Accept: application/json, text/plain, */*';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36';
$headers[] = 'X-Request-Id: bee6dba6f4b51aef7790b068fd6bd7ed-2022022617351951';
$headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
$headers[] = 'Origin: https://online.mbbank.com.vn';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Referer: https://online.mbbank.com.vn/pl/login';
$headers[] = 'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5';
$headers[] = 'Cookie: MBAnalyticsaaaaaaaaaaaaaaaa_session_=FMCKJCKNNFCPKIEKMEPGJLMELJIPHAPDFCIMKDEGBOGKLPEOIEHMIDMFGDGBBOKCAKPDEBMCKOIDGKCOHKGABEPNDPMDDDJGIEJCHNIJMPDHOHIKAANJDJOJNELPDFGI; BIGipServerk8s_online_banking_pool_9712=3474718986.61477.0000; BIGipServerk8s_retail_web_internetbankingms_pool_9751=1713111306.5926.0000; BIGipServeronline_mbbank_retail_web_pool_8686=1376911626.60961.0000; BIGipServerk8s_retail-web-accountms_pool_10557=1713111306.15657.0000; MBAnalytics1065839563aaaaaaaaaaaaaaaa_cspm_=HIJKPFACBJJLMEKGKFAAPGBKINNKBAPMGMAAOOFBFBBAAMBIIELNAAJCEAALJOOHAKOCPBGOPIAFLFMBFOLAEJAKADPMPFIPNDOEOAPADOBDLCPDOIBCMOCEGEOPDMPF; JSESSIONID=AEA20055B3CDD7EB1E88D7F2B7432443';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
