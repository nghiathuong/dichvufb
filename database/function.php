<?php 
require_once ('config.php');

session_regenerate_id();

$DUONGSHADO = new LBD;
$base_url = 'http://'.$_SERVER['SERVER_NAME'].'/';

function format_money($money){
    $format_money = str_replace(',', ".", number_format($money));
    echo $format_money;
}

function random($string, $int)
{
    $chars = $string;  
    $data = substr(str_shuffle($chars), 0, $int);
    return $data;
}  

function get_ip(){
    $url = 'https://ip.seeip.org/jsonip';
	$ip = json_decode(file_get_contents($url),true);
    return $ip['ip'];
}

function BASE_URL($url){
    global $base_url;
    return $base_url.$url;
}

function check_string($data)
{
    return (trim(htmlspecialchars(addslashes($data))));
}
function check_number($data)
{
    return is_numeric($data);
}
function gettime()
{
    return date('d-m-Y H:i:s', time());
}

function JSON($status, $title){
    $re = array(
        'status' => $status,
        'message' => $title
    );
    return json_encode($re);
}
function requestJson($code, $status, $message){
	$res = array(
		'code' => $code,
		'status' => $status,
		'message' => $message
	);
	return json_encode($res);
}

function csrf_token(){
	$token = bin2hex(random_bytes(32));
	$_SESSION['csrf_token'] = $token;
	return $token;
}
// encode email to md5 with crypt
function encode_email($email){
	$en = md5(crypt($email, '$6$rounds=5000$'.$email.'$'));
	return password_hash($en, PASSWORD_DEFAULT);
}

//code check csrf token
function check_csrf_token(){
	if(isset($_SESSION['csrf_token']) && isset($_POST['_token'])){
		if($_SESSION['csrf_token'] == $_POST['_token']){
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
}

//check xss


function check_ajax_request(){
	if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
		return true;
	}else{
		return false;
	}
}

function xoa_dau($str=null)
{
	$str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
	$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
	$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
	$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
	$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
	$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
	$str = preg_replace("/(đ)/", 'd', $str);
	$str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'a', $str);
	$str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ|E)/", 'e', $str);
	$str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'i', $str);
	$str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'o', $str);
	$str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ|U)/", 'u', $str);
	$str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ|Y)/", 'y', $str);
	$str = preg_replace("/(Đ)/", 'd', $str);
	$str = preg_replace("/(Q)/", 'q', $str);
	$str = preg_replace("/(R)/", 'r', $str);
	$str = preg_replace("/(T)/", 't', $str);
	$str = preg_replace("/(Y)/", 'y', $str);
	$str = preg_replace("/(I)/", 'i', $str);
	$str = preg_replace("/(O)/", 'o', $str);
	$str = preg_replace("/(P)/", 'p', $str);
	$str = preg_replace("/(A)/", 'a', $str);
	$str = preg_replace("/(S)/", 's', $str);
	$str = preg_replace("/(D)/", 'd', $str);
	$str = preg_replace("/(F)/", 'f', $str);
	$str = preg_replace("/(G)/", 'g', $str);
	$str = preg_replace("/(H)/", 'h', $str);
	$str = preg_replace("/(J)/", 'j', $str);
	$str = preg_replace("/(K)/", 'k', $str);
	$str = preg_replace("/(L)/", 'l', $str);
	$str = preg_replace("/(Z)/", 'z', $str);
	$str = preg_replace("/(X)/", 'x', $str);
	$str = preg_replace("/(C)/", 'c', $str);
	$str = preg_replace("/(V)/", 'v', $str);
	$str = preg_replace("/(B)/", 'b', $str);
	$str = preg_replace("/(N)/", 'n', $str);
	$str = preg_replace("/(M)/", 'm', $str);
	$str = preg_replace("/(W)/", 'w', $str);
	$str = preg_replace("/( )/", '', $str);
	return $str;
}
$welecome = BASE_URL('/');