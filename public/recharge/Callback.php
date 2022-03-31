<?php
require_once '../../database/config.php';
require_once '../../database/function.php';
if(!$getUser){
    header("location: $welecome");
}
$get_key = $DUONGSHADO->get_row("SELECT * FROM options WHERE name = 'thesieure' ");
$partherID = $get_key['key'];
$partherKey = md5($get_key['value']);

check_ajax_request();


if(!isset($_POST['_token'])){
    echo JSON(400, "Có lỗi sảy ra");
}elseif($_POST['_token'] == $_SESSION['csrf_token']){
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(empty(check_string($_POST['loaithe'])) || empty(check_string($_POST['menhgia'])) || empty(check_string($_POST['seri'])) ||empty(check_string($_POST['pin']))){
            echo requestJson(400, false, "Điền đầy đủ thông tin");
        }else{
            $loaithe = check_string($_POST['loaithe']);
            $menhgia = check_string($_POST['menhgia']);
            $seri = check_string($_POST['seri']);
            $pin = check_string($_POST['pin']);
            $s_length = strlen($seri);
            $p_length = strlen($pin);
            
            if($loaithe == 'VIETTEL'){
                if ($s_length != 11 && $s_length != 14)
                  echo requestJson(400, false, "Số serial thẻ không đúng");
            
                if ($p_length != 13 && $p_length != 15)
                  echo requestJson(400, false, "Mã thẻ không đúng");
            }elseif($loaithe == 'VINAPHONE'){
                if ($s_length != 11 && $s_length != 14)
                  echo requestJson(400, false, "Số serial thẻ không đúng");
            
                if ($p_length != 13 && $p_length != 15)
                  echo requestJson(400, false, "Mã thẻ không đúng");
            }elseif($loaithe == 'MOBIFONE'){
                if ($s_length != 11 && $s_length != 14)
                  echo requestJson(400, false, "Số serial thẻ không đúng");
            
                if ($p_length != 13 && $p_length != 15)
                  echo requestJson(400, false, "Mã thẻ không đúng");
            }elseif($loaithe == 'ZING'){
                if ($s_length != 11 && $s_length != 14)
                  echo requestJson(400, false, "Số serial thẻ không đúng");
            
                if ($p_length != 13 && $p_length != 15)
                  echo requestJson(400, false, "Mã thẻ không đúng");
            }elseif($loaithe == 'VNMOBI'){
                if ($s_length != 11 && $s_length != 14)
                  echo requestJson(400, false, "Số serial thẻ không đúng");
            
                if ($p_length != 13 && $p_length != 15)
                  echo requestJson(400, false, "Mã thẻ không đúng");
            }
            $random = rand(100000, 999999);
            $curl = curl_init();
            curl_setopt_array($curl, array(
              CURLOPT_URL => "http://thesieure.com/chargingws/v2",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'POST',
              CURLOPT_POSTFIELDS => array('telco' => '$loaithe','code' => '$pin','serial' => '$seri','amount' => '$menhgia','request_id' => '$random','partner_id' => '$partherID','sign' => '$partherKey','command' => 'charging'),
              CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
              ),
            ));
            
            $response = curl_exec($curl);
            echo $response;

        }
    }
}else{
    echo JSON(400, "Có lỗi sảy ra");
}

