<?php 
require_once '../../../database/config.php';
require_once '../../../database/function.php';
if(!$getUser){
    session_destroy();
    //unset cookie
    setcookie('mxho.net', '', time() - 3600);
    header("location: $welecome");
}
if($getUser['level'] == 4){
    if(!isset($_POST['_token'])){
        echo requestJson(400, false, "Lỗi không xác định!");
    }elseif(isset($_POST['_token']) == $_SESSION['csrf_token']){
        if(empty(check_string($_POST['name_stk'])) || empty(check_string($_POST['number_stk'])) || empty(check_string($_POST['min_bank']))|| empty(check_string($_POST['name_bank']))){
            echo requestJson(400, false, "Vui lòng nhập đầy đủ thông tin!");
        }else{
            $name_stk = check_string($_POST['name_stk']);
            $number_stk = check_string($_POST['number_stk']);
            $min_bank = check_string($_POST['min_bank']);
            $name_bank = check_string($_POST['name_bank']);

            $insert = $DUONGSHADO->insert('stk_bank',[
                'type'=> $name_bank,
                'stk'=> $number_stk,
                'name' => $name_stk,
                'min' => $min_bank,
            ]);
            if($insert){
                echo requestJson(200, true, "Thêm thành công!");
            }else{
                echo requestJson(400, false, "Thêm thất bại!");
            }
        }
    }else{
        echo requestJson(400, false, "Lỗi CSRF Token!");
    }
}else{
    header("location: ????");
}
?>