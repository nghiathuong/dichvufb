<?php 
function send_mess($text){
    $data = [
        'text' => $text,    
        'chat_id' => '1466950939'
    ];
    $token = "5035666676:AAEIZ4HIjP7XCOcx4SLRNbHx3MaO62JvebU";
    $get = file_get_contents("https://api.telegram.org/bot$token/sendmessage?".http_build_query($data));
    return $get;
}
?>