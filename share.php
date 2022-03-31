<?php 
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/a/comment.php?fs=8&actionsource=0&comment_logging&ft_ent_identifier=258806899754099&eav=AfZ94AZYW1IGVoARwhQBlPRo0CYw1siWBNMWSY75gsvu1ASTwkCzIf6biPceUxxMalM&av=100068743724597&gfid=AQDO7Q_KBes6EGqdIxs&refid=52');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "fb_dtsg=AQG3WrKySES4kt8%3A5%3A1646057349&jazoest=21925&comment_text=AE+MUA+%E1%BB%A6NG+H%E1%BB%98+N%C3%80OO");
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Authority: mbasic.facebook.com';
$headers[] = 'Pragma: no-cache';
$headers[] = 'Cache-Control: no-cache';
$headers[] = 'Sec-Ch-Ua: \" Not A;Brand\";v=\"99\", \"Chromium\";v=\"98\", \"Google Chrome\";v=\"98\"';
$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
$headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Origin: https://mbasic.facebook.com';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-User: ?1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Referer: https://mbasic.facebook.com/story.php?story_fbid=258806899754099&id=100068743724597&fs=0&focus_composer=0&m_entstream_source=timeline';
$headers[] = 'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5';
$headers[] = 'Cookie: datr=UfQZYpd6XXG3rwFZ02oD0G77; sb=VvQZYi3Z68LfojlMritFcIrz; locale=vi_VN; c_user=100068743724597; xs=5%3A2ydMDbZH_k0vYQ%3A2%3A1646057349%3A-1%3A6279; presence=C%7B%22t3%22%3A%5B%5D%2C%22utc3%22%3A1646057375151%2C%22v%22%3A1%7D; m_pixel_ratio=1; wd=1333x545; fr=0LttphX9whdT3gwmi.AWViZC5FZa0_Y0AkhpOoSh4F99c.BiHIAC.N1.AAA.0.0.BiHNff.AWUNwCqBQDs; x-referer=eyJyIjoiL3N0b3J5LnBocD9zdG9yeV9mYmlkPTI1ODgwNjg5OTc1NDA5OSZpZD0xMDAwNjg3NDM3MjQ1OTcmZnM9MCZmb2N1c19jb21wb3Nlcj0wJm1fZW50c3RyZWFtX3NvdXJjZT10aW1lbGluZSIsImgiOiIvc3RvcnkucGhwP3N0b3J5X2ZiaWQ9MjU4ODA2ODk5NzU0MDk5JmlkPTEwMDA2ODc0MzcyNDU5NyZmcz0wJmZvY3VzX2NvbXBvc2VyPTAmbV9lbnRzdHJlYW1fc291cmNlPXRpbWVsaW5lIiwicyI6Im0ifQ%3D%3D';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
echo $result;