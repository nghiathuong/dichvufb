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
            if(empty(check_string($_POST['site_nap'])) ||empty(check_string($_POST['keyAPI']))){
                echo requestJson(400, false, "Vui lòng nhập đầy đủ thông tin!");
            }else{
                $site_nap = check_string($_POST['site_nap']);
                $keyAPI = check_string($_POST['keyAPI']);
                $updaye = $DUONGSHADO->update('options', [
                    'name' => $site_nap,
                    'key' => 'USER_MXHO_BANKING',
                    'value' => $keyAPI,
                ], "type = 'mxho'");
                if($updaye){
                    echo requestJson(200, true, "Cập nhật thành công!");
                }else{
                    echo requestJson(400, false, "Cập nhật thất bại!");
                }
            }
        }else{
            echo requestJson(400, false, "Lỗi CSRF Token!");
        }

    }else{
        header("location: ????");
    }
?>