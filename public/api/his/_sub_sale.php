<?php 
require_once '../../../database/config.php';
require_once '../../../database/function.php';
if(!$getUser){
    header("location: $welecome");
}
require_once 'simple_html_dom.php';
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://muasubsale.vn/service/facebook/sub-sale/list?btwaf=29070385');
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
$headers[] = 'Referer: https://muasubsale.vn/service/facebook/sub-sale/list';
$headers[] = 'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5';
$headers[] = 'Cookie: __cf_bm=kF847LDUY4uPBvvLfZOAgjQn_OALoSx1bSOjrjieVLw-1645967933-0-AVhbgV12pjGfO+EuvFNkofTaBU1heXFI4LBFGOT+CXWLZzR5ipxoR6JJjfEOj+JkKttSduwfme5dbkvexBRbf+8vhoApKksrFg/tuZfdizkwjttOVIDEXkrv4Cv/YgurIw==; XSRF-TOKEN=eyJpdiI6Im04YTVvYzZncWRlUG5VQmVHN3lrRUE9PSIsInZhbHVlIjoiV082WUlpYjNBWjBaaU5IS2IxUmdsZy9wQi9jSVJrNS9Pa1Q2bkJkcjF5WjkvV0ViczZKWVZxd0gyQmIvSjdpVEFieUtxQmZIR0FPQ3hNV0MrOUQ3WitqQ05VbjY3VUZsRVFRL0JMVFZ2T1QybEk5aFRmcWVVZG1kK0g5alVjSGUiLCJtYWMiOiJmNWM5ODMxNzllZTY1YjQyOTY0MDBiMmUzOWYyY2IyOTUwMTUwMGYyMDgxNmU0YjFmYWFkNGQ4ZGJjN2FhMWQ3IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6Im1WMGtiVVcwcVU0M3lRUXJVMUJGRXc9PSIsInZhbHVlIjoiSjZnK3pKanlHeUd6bktsUG9zK3NzbG5QKzBnbFZabDJNbUxTenZEcXV2dnJzVmhzT2NCSHNwY0Zkd3dBR09sd0NPNXZ5YjlaaklsZk0vNWdqNFVueHhsQXJoZTJGNEl5MlZaYzJ2b3ZOUXJEU0ljZCtnZHQvSWpqeWl2VHdqbU8iLCJtYWMiOiIzODYzNzIyOWNmM2E5OTE4YTFhMmQ4YmZiOWI2ZWMzNTI1NDQ5MmFiMjU3NDYwZGFmNjczMWEwM2JkOGNjZjFjIiwidGFnIjoiIn0%3D';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

$html = str_get_html($result);

foreach($html->find('tbody tr') as $data){
    $value = $data->innertext;
    //echo $value;

    $team = $data->find('td', 0)->outertext;
    $team = explode('<td>', $team)[1];
    $team = explode('</td>', $team)[0];
    //
    $id = $data->find('td', 3)->outertext;
    $id = explode('<td>', $id)[1];
    $id = explode('</td>', $id)[0];
    //
    $sl = $data->find('td', 7)->outertext;
    $sl = explode('<td><b class="text-danger">', $sl)[1];
    $sl = explode('</b> <sup>sub</sup> </td>', $sl)[0];

    $arrayT[] = array(
        'type' => 'sub_sale',
        'his' => $team,
        'id' => $id,
        'amount' => $sl
    );
}
echo "<h1>Tạm thời chúng tôi sẽ làm như vậy</h1>";
echo "<pre>";
print_r($arrayT);
echo "</pre>";