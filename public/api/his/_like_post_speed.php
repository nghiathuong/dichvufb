<?php 
    require_once 'simple_html_dom.php';
    $ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://muasubsale.vn/service/facebook/like-post-speed/order');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Authority: muasubsale.vn';
$headers[] = 'Pragma: no-cache';
$headers[] = 'Cache-Control: no-cache';
$headers[] = 'Sec-Ch-Ua: \" Not A;Brand\";v=\"99\", \"Chromium\";v=\"98\", \"Google Chrome\";v=\"98\"';
$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
$headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-User: ?1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Referer: https://muasubsale.vn/service/facebook/like-post-sale/list?btwaf=22779692';
$headers[] = 'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5';
$headers[] = 'Cookie: XSRF-TOKEN=eyJpdiI6IkNaaTJYcU5pVFVoaWgxMGNNREI1Rnc9PSIsInZhbHVlIjoid0ZHdWlmemtyWUZpRXF5SlZnYlRYM3VkRnFQY2ZzOXg5bXFka0Q4RFkrZlFsK1AzMDRXUXJvS0l3UzM5bGdrT3JzRDRsWkd1MnJqSzc5M1AxWGlDR3Y1Z041MUhOUmp0c0J3NlZDaWg3bVJ5dXBPUTBBQkxNekloSmVJN2k4TDUiLCJtYWMiOiI2ZDI3MmM3NTZjNTJkY2FkYzQxYTZkY2Q2N2EyYWFiNjFhOWVlZTY1MjA4MzI2NmI0NWIxOGRjOWRlM2RlYmUyIiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6ImhyQkRQQ0djNEx2b0lkaGs3YU1NcEE9PSIsInZhbHVlIjoiWTlQUTkyUEZhTVFBMC9DbEZ0QXJGMGU4aDdpaW50Myswa0s1SHZnSFRhTzhwU3g2Z2xIMTdJZ2RVWGUreDZYK09BWW8yMzJudWpYV0dIdnNuYTNWZkFLZ1BhTGQyc0JIeXJZYVh3WExuanZrZ2plUklzbFVRNVVKOVZZVEdXbDMiLCJtYWMiOiJmN2I5YTM2MTZlYjkxNTJjMDllNWRkYmQ4MzgzYTg5OTc5OTQ0NjY3ZTYwOWZmY2EyNWI5MzNhMWQwZTYyZTQxIiwidGFnIjoiIn0%3D; __cf_bm=WVdjv010lGNWS6g9chj4oFR76nYKIuiRLwuU8hI.Rys-1645984229-0-AQ5jWeO9eIRq0aWfhs7TUVBJUjPJX+2XlpHsCiyeqhMkTk1GA9J1lkymlGQhyzhWOjwuNdDxnjmp7u8VVctYTCHTAPkR7tmlp58aUN6OAc0ZHXFct+lo5fVELo3L6tlhgg==';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

$html = str_get_html($result);

foreach($html->find('tbody tr') as $data){
    $value = $data->innertext;
    echo $value;

    $team = $data->find('td', 0)->outertext;
    $team = explode('<td>', $team)[1];
    $team = explode('</td>', $team)[0];
    //
    $id = $data->find('td', 3)->outertext;
    $id = explode('<td style="max-width: 350px;"> <p>', $id)[1];
    $id = explode('</p> </td>', $id)[0];
    //
    $sl = $data->find('td', 7)->outertext;
    $sl = explode('<td><b class="text-danger">', $sl)[1];
    $sl = explode('</b> <sup>like</sup> </td>', $sl)[0];

     $arrayT[] = array(
        'type' => 'sub_sale',
        'his' => $team,
        'id' => $id,
        'amount' => $sl
    );  
}/* 
echo "<h1>Tạm thời chúng tôi sẽ làm như vậy</h1>";
echo "<pre>";
print_r($arrayT);
echo "</pre>";  */

?>